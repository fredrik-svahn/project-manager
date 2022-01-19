<?php

namespace Tests\Feature;

use App\Models\RequestLog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestLogTest extends TestCase
{

    use RefreshDatabase;

    public function test_creating_a_user_logs_the_request()
    {
        $this->post('/api/user', [
            'name' => 'A user',
            'email' => 'email@gmail.com',
            'password' => 'password'
        ]);

        $logs = RequestLog::all();
        self::assertNotEmpty($logs);
    }
}
