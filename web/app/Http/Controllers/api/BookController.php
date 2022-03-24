<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function get_booking()
    {
        $bookings = [
            [
                'id' => 1,
                'name' => 'Booking 1',
                'description' => 'Description 1',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-01-01 00:00:00',
            ],
            [
                'id' => 2,
                'name' => 'Booking 2',
                'description' => 'Description 2',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-01-01 00:00:00',
            ],
        ];
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
