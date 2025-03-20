<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class Companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // go to index view
        $company = company::first();
        return view("admin.company.index", compact('company'));
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
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "logo" => "required|max:2048",
        ]);


        $file = $request->logo;
        if ($file) {
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
        }
        Company::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "address" => $request->address,
            "facebook" => $request->facebook,
            "youtube" => $request->youtube,
            "logo" => "images/" . $newName
        ]);
        return redirect()->route("admin.company.index");
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
        $company = Company::find($id);
        return view("admin.company.edit", compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // to update
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
        ]);

        $company = Company::find($id);
        $file = $request->logo;
        if ($file) {
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            // unlink($company->logo);
        }
        if ($file) {
            $company->Update([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "facebook" => $request->facebook,
                "youtube" => $request->youtube,
                "logo" => "images/" . $newName
            ]);
        } else {
            $company->Update([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "facebook" => $request->facebook,
                "youtube" => $request->youtube,
                "logo" => "images/" . $newName
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // to delete
        $company = Company::find($id);
        unlink($company->logo);
        $company->delete();
        return redirect()->back();
    }
}
