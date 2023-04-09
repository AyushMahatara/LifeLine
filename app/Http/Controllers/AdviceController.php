<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;

class AdviceController extends Controller
{

    public function index()
    {
        $advice = Advice::all();
        return view('admin.advice.index', compact('advice'));
    }

    public function create()
    {
        return view('admin.advice.create');
    }

    public function store(Request $request)
    {
        $advice = new Advice();

        $advice->name = $request->name;
        $advice->description = $request->description;
        // $advice->title = $request->title;

        // $image = $request->image;
        // $imagename = time() . '.' . $image->getClientOriginalExtension();
        // $request->image->move('advice', $imagename);

        // $advice->image = $imagename;

        $advice->save();
        return redirect()->back()->with('message', 'Advice added Successfully');
    }


    public function delete($id)
    {
        $advice = Advice::findOrFail($id);
        $advice->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $advice = Advice::find($id);

        return view('admin.advice.edit', compact('advice'));
    }

    public function update(Request $request, $id)
    {
        $advice = Advice::find($id);

        $advice->name = $request->name;
        $advice->description = $request->description;


        $advice->save();

        return redirect()->back()->with('message', 'Advice Update Successfully');
    }
}
