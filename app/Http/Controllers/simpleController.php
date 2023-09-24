<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simpleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakeData = [
            "id"=>1,
            "name"=>"mateus",
            "email"=>"teste@teste.com",
            "password"=>"1234567"
        ];
        return response()->json($fakeData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
