<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "index";
        // /photo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create"; 
        // photo/create
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
        echo "$id";

        // photo/id  (you can set id you want , and only that will be shown)  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "EDIT";  
        // photo/id/edit 
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
