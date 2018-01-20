<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ModuloUsuariosTest extends TestCase
{
    /** @test */

    function carga_lista_usuarios()
    {
        $this->get('/usuarios')
        	->assertStatus(200)
        	->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }

    /** @test */
	
	function carga_detalles_usuarios()
    {
        $this->get('/usuarios/5')
        	->assertStatus(200)
        	->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
	
	function carga_nuevo_usuarios()
    {
        $this->get('/usuarios/nuevo')
        	->assertStatus(200)
        	->assertSee('Crear nuevo usuario');
    }        
}
