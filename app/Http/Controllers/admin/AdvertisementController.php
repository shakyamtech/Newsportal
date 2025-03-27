<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $advertisement = Advertisement::first();
        return view("admin.advertisement.index", compact('advertisement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.advertisement.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        Advertisement::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "address" => $request->address,
            "facebook" => $request->facebook,
            "youtube" => $request->youtube,
            "logo" => "images/" . $newName
        ]);
        return redirect()->route("admin.advertisement.index");
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
        $advertisement = Advertisement::find($id);
        return view("admin.advertisement.edit", compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
        ]);

        $advertisement = Advertisement::find($id);
        $file = $request->logo;
        if ($file) {
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            // unlink($company->logo);
        }
        if ($file) {
            $advertisement->Update([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "facebook" => $request->facebook,
                "youtube" => $request->youtube,
                "logo" => "images/" . $newName
            ]);
        } else {
            $advertisement->Update([
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
        //
        $advertisement = Advertisement::find($id);
        unlink($advertisement->logo);
        $advertisement->delete();
        return redirect()->back();
    }
}
