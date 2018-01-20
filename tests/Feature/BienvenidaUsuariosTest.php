<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BienvenidaUsuariosTest extends TestCase
{
    /** @test */

    function bienvenida_usuarios_con_apodo()
    {
        $this->get('saludo/Juan/Fuerte')
        	->assertStatus(200)
        	->assertSee('Bienvenido Juan, tu apodo es Fuerte');
    }

    /** @test */

    function bienvenida_usuarios_sin_apodo()
    {
     	$this->get('saludo/Juan')
        	->assertStatus(200)
        	->assertSee('Bienvenido Juan');   
    }
}
