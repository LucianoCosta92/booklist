<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::select([
            'id', 'title', 'author', 'genre', 'resume', 'published_year'
        ])->get();

        return view('books.index', compact('books'));
    }

    public function show(Book $book){
        return view('books.show', compact('book'));
    }
}
