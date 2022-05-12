<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Arr;

class CookieController extends Controller
{

    public function get_cookie()
    {

        $cookie_key = 'cookie-key';
        $cookie_value = '1234';

        $cookie = Arr::get($_COOKIE, $cookie_key, null);
        // Cannot use $request->cookie($cookie_key) if the cookie was not set by Laravel framework

        if (empty($cookie)) {
            $time = time() + ((3600 * 24) * 30);
            setcookie($cookie_key, $cookie_value, $time, '/');
        }

        return view('cookie', [
            'cookie_key' => $cookie_key,
            'cookie_value' => $cookie_value
        ]);
    }

    public function get_laravel_cookie(Request $request)
    {
        $cookie_key = 'laravel-cookie-key';
        $cookie_value = '1234';

        $cookie = $request->cookie($cookie_key);

        if (empty($cookie)) {
            $time = time() + ((3600 * 24) * 30);
            Cookie::queue($cookie_key, $cookie_value, $time, '/');
        }

        return view('laravel-cookie', [
            'cookie_key' => $cookie_key,
            'cookie_value' => $cookie_value
        ]);
    }
}
