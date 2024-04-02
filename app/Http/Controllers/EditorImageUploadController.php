<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class EditorImageUploadController extends Controller
{
    //
    public function upload(Request $request)
    {
        $image = $request->file('file');

        if ($image) {
            $path = public_path('uploads/editor/images/');
            $filename = time() . '_' . $image->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image->save($path.$filename);

            return response()->json(['location' => url('uploads/editor/images').'/'.$filename]);
        }

        // if ($request->hasFile('file')) {
        //     $path = $request->file('file')->save('public/images');
        //     $url = Storage::url($path);

        //     return response()->json(['location' => $url]);
        // }

        return response()->json(['error' => '上傳失敗'], 400);
    }

    public function deleteUpload(Request $request)
    {
        $fileName = $request->fileName;
        if (File::exists(public_path('uploads/' . $fileName))) {
            File::delete(public_path('uploads/' . $fileName));
        }
        return response()->json(['success' => '刪除成功']);
    }


    // public function destroy(Request $request, $id)
    // {
    //     $post = Post::findOrFail(id);
    //     preg_match_all('/<img [^>]*src="[^"]*"[^>]*>/', $post->content, $matches);
    //     foreach ($matches[0] as $match) {
    //         preg_match('/.*src="([^"]*)".*/', $match, $match);
    //         $url = explode("storage", $match[1]);
    //         if (count($url) > 1) {
    //             $this->delPic($url[1]);
    //         }
    //     }
    //     $post->delete();
    //     return response()->json(['success' => '文章刪除成功']);
    // }

    // public function delPic($fileName)
    // {
    //     if (Storage::disk('public')->exists($fileName)) {
    //         Storage::disk('public')->delete($fileName);
    //     }
    // }
}
