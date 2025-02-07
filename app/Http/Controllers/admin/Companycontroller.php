<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // go to index view
        return view("admin.company.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // go to create view
        return view("admin.company.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data save garne kam
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
        // to go in the edit page
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // to update
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // to delete
    }
}
