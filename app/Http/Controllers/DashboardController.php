<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $books = Book::select([
            'id', 'title', 'author', 'cover', 'published_year'
        ])->latest()->take(3)->get();

        return view('welcome', compact('books'));
    }
}
