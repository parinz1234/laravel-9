<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RenderingController extends Controller
{
    public function get_html()
    {
        $html = '
        <!DOCTYPE html>
        <html>
            <head>
                <title>Page Title</title>
            </head>
            <body>

                <h1>This is a Heading</h1>
                <p>This is a paragraph.</p>

            </body>
        </html>
        ';

        return view('pure', compact('html'));
    }

    public function get_browsershot()
    {

    }
}