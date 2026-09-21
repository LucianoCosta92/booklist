<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::select([
            'id', 'title', 'author', 'genre', 'resume', 'published_year', 'created_at'
        ])->orderBy('created_at', 'desc')->get();

        return view('books.index', compact('books'));
    }

    public function show(Book $book){
        return view('books.show', compact('book'));
    }

    public function create(){
        return view('books.create');
    }

    public function store(){

    }

    public function edit(Book $book){
        return view('books.edit', compact('book'));
    }

    public function update(){

    }

    public function destroy(){
        
    }
}
