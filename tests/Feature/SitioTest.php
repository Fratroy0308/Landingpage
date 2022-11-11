<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sitio_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);

        $response->assertSeeText(['Nombre', 'Correo', 'Comentario']);

    }

    /** @test */
    public function test_validacion()
    {
        $response = $this->post('/guardar-contacto', [
            'nombre' => 'prueba', 
            'correo' => 'vytg@gmail.com', 
            'comentario' => 'asd', 
        ]);

        $response = $this->post('/guardar-contacto', [
            'nombre' => 'prueba', 
            'correo' => 'vytg@gmail.com', 
            'comentario' => 'asd', 
        ]);  
        
        $response->assertSessionHasErrors([
            'nombre', 
            'correo', 
            'comentario'
        ]);
    }

    public function test_prellenado()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Raul', $response['nombre']);
    }
    

}
