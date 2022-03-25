<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use DB;

class BookController extends Controller
{
    public function get_booking()
    {
        $bookings = DB::table('books')->get();
        return response()->json([
            'bookings' => json_encode($bookings),
        ], 200);
    }

    public function get_booking_by_id()
    {
    }

    public function post_booking()
    {
    }

    public function patch_booking()
    {
    }

    public function put_booking()
    {
    }

    public function delete_booking()
    {
    }
}
