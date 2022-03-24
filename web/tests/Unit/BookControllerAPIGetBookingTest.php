<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class BookControllerAPIGetBookingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_booking_response_should_contains_bookings()
    {
        $response = $this->get('/api/books');
        dd($response->json());
        $response->assertStatus(200);
    }
}
