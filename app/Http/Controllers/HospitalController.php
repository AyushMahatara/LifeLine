<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospital = Hospital::all();
        return view('admin.hospital.index', compact('hospital'));
    }

    public function create()
    {
        return view('admin.hospital.create');
    }

    public function store(Request $request)
    {
        $hospital = new Hospital();

        $hospital->title = $request->title;
        $hospital->name = $request->name;
        $hospital->description = $request->description;
        // $hospital->title = $request->title;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('hospital', $imagename);

        $hospital->image = $imagename;

        $hospital->save();
        return redirect()->back()->with('message', 'Hospital added Successfully');
    }


    public function delete($id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $hospital = Hospital::find($id);

        return view('admin.hospital.edit', compact('hospital'));
    }

    public function update(Request $request, $id)
    {
        $hospital = Hospital::find($id);

        $hospital->title = $request->title;
        $hospital->name = $request->name;
        $hospital->description = $request->description;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('hospital', $imagename);

            $hospital->image = $imagename;
        }
        $hospital->save();

        return redirect()->back()->with('message', 'Hospital Update Successfully');
    }
}
