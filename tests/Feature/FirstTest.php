<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // Obtenir ma route
    public function test_IfReturnStatus201()
    {
        $response = $this->get('/homeTest');
        $response->assertStatus(201);
    }
    // Envoyer du contenu 
    public function test_sendContentText()
    {
        $response = $this->get('/homeTest');
        $response->assertSeeText("test");
    }
    // Recuperation donné formulaire
    public function test_retriveForm()
    {
        $response = $this->get('/homeTest');
        
    }
}
