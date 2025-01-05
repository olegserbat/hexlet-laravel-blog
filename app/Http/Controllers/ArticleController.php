<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {

        $articles = Article::paginate();
        return view('articles', ['articles'=>$articles]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('show', ['article'=>$article]);
    }

    public function create ()
    {
        $article = new Article();
        return view('create', ['article' => $article]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:10',
        ]);
        $article = new Article();
        $article->fill($data);
        $article->save();
        $request->session()->flash('status', 'Добавлено Успешно!');
        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validate([
            'name' => "required|unique:articles,name,{$article->id}",
            'body' => 'required|min:10',
        ]);
        $article->fill($data);
        $article->save();
        $request->session()->flash('status', 'Обновленно Успешно!');
        return redirect()
            ->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id); var_dump($article); die;
        if($article) {
            $article->delete();
        }
        return redirect()
            ->route('articles.index');
    }
}
