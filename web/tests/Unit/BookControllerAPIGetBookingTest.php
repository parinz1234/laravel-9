<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use DB;
use App\Http\Controllers\api\BookController;

class BookControllerAPIGetBookingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_booking_response_should_contains_bookings_call_get_method()
    {
        $books = [
            (object)[
                "id" => 1,
                "name" => "name",
                "image_path" => "image_path",
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        DB::shouldReceive('table->get')
            ->once()
            ->andReturn($books);

        $response = $this->get('/api/books');

        $response->assertStatus(200);
        $response->assertJson([
            'bookings' => json_encode($books),
        ]);
    }

    public function test_get_booking_response_should_contains_bookings_call_ctrl_func()
    {
        $books = [
            (object)[
                "id" => 1,
                "name" => "name",
                "image_path" => "image_path",
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        DB::shouldReceive('table->get')
            ->once()
            ->andReturn($books);

        $controller = new BookController();
        $response = $controller->get_booking();

        $this->assertEquals($response->status(), 200);
        $this->assertJson($response->content());
    }
}
