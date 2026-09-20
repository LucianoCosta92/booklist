<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $books = Book::select([
            'id', 'title', 'author', 'published_year', 'created_at'
        ])->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('books'));
    }
}
