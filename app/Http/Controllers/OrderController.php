<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = 'order1';
        $data2 = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quod ratione atque molestiae quam! Laudantium reiciendis enim ea nesciunt blanditiis dignissimos obcaecati repellat. Debitis voluptates ab illum neque. Maiores, tempora?';
        $data3 = '1234567890';
        return view('order', compact('data', 'data2', 'data3'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
