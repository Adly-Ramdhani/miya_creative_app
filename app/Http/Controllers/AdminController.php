<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();

        return view('Admin.index', compact('admins'));
    }

    public function create()
    {
        return view('Admin.create');
    }

    public function store(Request $request)
    {
        $photoName = null;

        if ($request->hasFile('photo')) {
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $photoName);
        }

        Admin::create([
            'photo' => $photoName,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'menu' => $request->menu,
        ]);

        return redirect('/admin')->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('Admin.edite', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'menu' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image'
        ]);

        // upload foto baru
        if ($request->hasFile('photo')) {

            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(
                public_path('uploads'),
                $photoName
            );

            $data['photo'] = $photoName;
        }

        // update data
        $admin->update($data);

        return redirect('/admin')
            ->with('success', 'Product berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return redirect('/admin')->with('success', 'Admin deleted successfully.');
    }
}
