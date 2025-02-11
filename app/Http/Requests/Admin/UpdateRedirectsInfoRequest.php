<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\RedirectsInfo;

class UpdateRedirectsInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $rules = RedirectsInfo::$rules;

        // 從路由中取得待更新的模型記錄
        // 注意：如果你的路由參數名稱不同，請自行調整
        $redirectsInfo = $this->route('redirects_info');
        $id = $redirectsInfo->id ?? null;

        // 取得模型中定義的更新規則
        $rules = RedirectsInfo::$updatesRules;
        // 替換 :id 為當前記錄的 id
        $rules['old_url'] = str_replace(':id', $id, $rules['old_url']);

        return $rules;
    }
}
