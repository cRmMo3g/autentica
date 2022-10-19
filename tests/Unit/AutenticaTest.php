<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutenticaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sakumlapa()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_darbinieku()
    {
        $response = $this->get('/darbinieku');
        $response->assertOk();
    }
    public function test_darbinieku_delete()
    {
        $response = $this->get('/darbinieku/delete/');
        $response->assertSessionMissing('1');
    }
    public function test_darbinieku_create()
    {

        $response = $this->get('/darbinieku/create/');
        $response->assertSessionMissing('1');
    }
    public function test_velosipedi()
    {
        $response = $this->get('/velosipedi');
        $response->assertOk();
    }
    public function test_velosipedi_delete()
    {
        $response = $this->get('/velosipedi/delete/');
        $response->assertSessionMissing('1');
    }
    public function test_velosipedi_create()
    {

        $response = $this->get('/velosipedi/create/');
        $response->assertSessionMissing('1');
    }
    public function test_transports()
    {
        $response = $this->get('/transports');
        $response->assertOk();
    }
    public function test_transports_atlase()
    {
        $response = $this->get('/transports/atlase/');
        $response->assertSessionMissing('1');
    }
    public function test_transports_create()
    {

        $response = $this->get('/transports/create/');
        $response->assertSessionMissing('1');
    }

}
