<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('admin.article.index', compact('article'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $article = new Article();

        $article->name = $request->name;
        $article->description = $request->description;
        // $article->title = $request->title;

        // $image = $request->image;
        // $imagename = time() . '.' . $image->getClientOriginalExtension();
        // $request->image->move('article', $imagename);

        // $article->image = $imagename;

        $article->save();
        return redirect()->back()->with('message', 'Article added Successfully');
    }


    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('admin.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->name = $request->name;
        $article->description = $request->description;


        $article->save();

        return redirect()->back()->with('message', 'Article Update Successfully');
    }
}
