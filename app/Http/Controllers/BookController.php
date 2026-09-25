<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(){

        $books = Book::with('genre')->select([
            'id', 'title', 'author', 'genre_id', 'resume', 'published_year', 'created_at'
        ])->orderBy('created_at', 'desc')->paginate(5);

        return view('books.index', compact('books'));
    }

    public function show(Book $book){
        $book->load('genre');
        return view('books.show', compact('book'));
    }

    public function create(){
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'cover' => 'nullable|image|mimes:png,jpg,jpeg',
            'published_year' => 'required|integer',
            'resume' => 'nullable|string',
        ]);

        if($request->hasFile('cover') && $request->file('cover')->isValid()){
            $validated['cover'] = $request->file('cover')->store();
        }

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Livro adicionado com sucesso!');
    }

    public function edit(Book $book){
        $genres = Genre::all();

        return view('books.edit', compact('book', 'genres'));
    }

    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'cover' => 'nullable|image|mimes:png,jpg,jpeg',
            'published_year' => 'required|integer',
            'resume' => 'nullable|string',
        ]);

        if($request->hasFile('cover') && $request->file('cover')->isValid()){
            if($book->cover && Storage::disk('public')->exists($book->cover)){
                Storage::disk('public')->delete($book->cover);
            }
            $validated['cover'] = $request->file('cover')->store();
        }

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy(Book $book){
        if($book->cover && Storage::disk('public')->exists($book->cover)){
            Storage::disk('public')->delete($book->cover);
        }
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso!');;
    }
}
