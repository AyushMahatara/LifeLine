<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use Illuminate\Http\Request;

class IllnessController extends Controller
{
    public function index()
    {
        $illness = Illness::all();
        return view('admin.illness.index', compact('illness'));
    }

    public function create()
    {
        return view('admin.illness.create');
    }

    public function store(Request $request)
    {
        $illness = new Illness();

        $illness->name = $request->name;
        $illness->description = $request->description;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('illness', $imagename);

        $illness->image = $imagename;

        $illness->save();
        return redirect()->back()->with('message', 'Illness added Successfully');
    }


    public function delete($id)
    {
        $illness = Illness::findOrFail($id);
        $illness->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $illness = Illness::find($id);

        return view('admin.illness.edit', compact('illness'));
    }

    public function update(Request $request, $id)
    {
        $illness = Illness::find($id);

        $illness->name = $request->name;
        $illness->description = $request->description;
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('illness', $imagename);

            $illness->image = $imagename;
        }

        $illness->save();

        return redirect()->back()->with('message', 'Illness Update Successfully');
    }
}
