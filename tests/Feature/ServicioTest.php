<?php

use App\Models\Negocio;
use App\Models\Servicio;
use App\Models\User;

it('permite crear un servicio autenticado', function () {
    $user = User::factory()->create();
    $negocio = Negocio::create(['nombre' => 'Negocio de prueba']);

    $response = $this->actingAs($user)->postJson('/servicios', [
        'negocio_id' => $negocio->id,
        'nombre' => 'Manicure',
        'duracion_minutos' => 45,
        'precio' => 12000,
    ]);

    $response->assertCreated();
    expect(Servicio::where('nombre', 'Manicure')->exists())->toBeTrue();
});