<?php

namespace App\Http\Middleware;

use App\Models\Admin\RedirectsInfo;
use Closure;
use Illuminate\Http\Request;

class RedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 排除後台路由（假設後台路由 URL 都以 admin/ 開頭）
        if ($request->is('admin/*')) {
            return $next($request);
        }

        // 取得目前請求的路徑，例如 "/old-page"
        $currentPath = $request->getPathInfo();

        // 查詢是否有符合的轉址規則（注意：可以根據需求改成不區分大小寫或加入其他條件）
        $redirect = RedirectsInfo::where('old_url', $currentPath)->first();

        if ($redirect) {
            // 使用 301 狀態碼進行永久轉址
            return redirect($redirect->new_url, 301);
        }

        return $next($request);
        // return $next($request);
    }
}
