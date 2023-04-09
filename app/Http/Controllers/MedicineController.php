<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicine = Medicine::all();
        return view('admin.medicine.index', compact('medicine'));
    }

    public function create()
    {
        return view('admin.medicine.create');
    }

    public function store(Request $request)
    {
        $medicine = new Medicine();

        $medicine->name = $request->name;
        $medicine->description = $request->description;
        // $medicine->title = $request->title;

        // $image = $request->image;
        // $imagename = time() . '.' . $image->getClientOriginalExtension();
        // $request->image->move('Medicine', $imagename);

        // $medicine->image = $imagename;

        $medicine->save();
        return redirect()->back()->with('message', 'Medicine added Successfully');
    }


    public function delete($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $medicine = Medicine::find($id);

        return view('admin.medicine.edit', compact('medicine'));
    }

    public function update(Request $request, $id)
    {
        $medicine = Medicine::find($id);

        $medicine->name = $request->name;
        $medicine->description = $request->description;


        $medicine->save();

        return redirect()->back()->with('message', 'Medicine Update Successfully');
    }
}
