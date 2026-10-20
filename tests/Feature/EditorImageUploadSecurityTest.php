<?php

namespace Tests\Feature;

use App\Http\Middleware\RedirectMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

/**
 * editor-image-upload / delete-editor-image 兩支端點的安全性保護。
 *
 * 這些測試編碼「為什麼」：刪檔/上傳端點若對外公開，外部爬蟲或惡意者
 * 即可在無人登入操作的情況下刪除 public/uploads 內的圖檔（正式環境實際災情）。
 * 因此端點「必須」要求登入，且刪檔不得透過 ../ 路徑跳脫到 uploads 之外。
 */
class EditorImageUploadSecurityTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // RedirectMiddleware 會查 redirects_infos 資料表；測試環境無 DB，
        // 且它與本測試要驗證的 auth 行為無關，故單獨停用以隔離。
        $this->withoutMiddleware(RedirectMiddleware::class);
    }

    /** 未登入呼叫刪圖端點：必須被導向登入頁，不得執行刪除。 */
    public function test_guest_cannot_call_delete_editor_image(): void
    {
        $this->post('/delete-editor-image', ['fileName' => 'editor/images/whatever.jpg'])
            ->assertRedirect(route('login'));
    }

    /** 未登入呼叫上傳端點：必須被導向登入頁。 */
    public function test_guest_cannot_call_editor_image_upload(): void
    {
        $this->post('/editor-image-upload')
            ->assertRedirect(route('login'));
    }

    /** 已登入也不得用 ../ 路徑跳脫刪到 uploads 目錄以外的檔。 */
    public function test_authenticated_user_cannot_delete_file_outside_uploads(): void
    {
        // 在 uploads 之外（public/ 根層）放一個哨兵檔
        $sentinel = public_path('sentinel_outside_uploads_test.txt');
        File::put($sentinel, 'must-not-be-deleted');

        $this->actingAs(new User())
            ->post('/delete-editor-image', ['fileName' => '../sentinel_outside_uploads_test.txt'])
            ->assertStatus(422);

        $this->assertTrue(
            File::exists($sentinel),
            'path traversal 不應刪到 uploads 目錄以外的檔'
        );

        File::delete($sentinel);
    }
}
