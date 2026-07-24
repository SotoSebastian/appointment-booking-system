<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicioRequest;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return Servicio::all();
    }

    public function store(StoreServicioRequest $request)
    {
        return Servicio::create($request->validated());
    }

    public function show(Servicio $servicio)
    {
        return $servicio;
    }

    public function update(StoreServicioRequest $request, Servicio $servicio)
    {
        $servicio->update($request->validated());
        return $servicio;
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return response()->noContent();
    }
}
