<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $title = $request->input('title');

    $books = Book::when($title, function ($query, $title) {
        return $query->title($title);
    })
    ->withCount('reviews')
    ->withAvg('reviews', 'rating')
    ->paginate(10);

    return view('books.index', compact('books', 'title'));
}



  public function indexLatest()
{
    $books = Book::latestBooks()
        ->withCount('reviews')
        ->withAvg('reviews', 'rating')
        ->paginate(10);

    return view('books.latest', compact('books'));
}
    public function indexPopularLastMonth(){
        $books = Book::popularLastMonth()
                    ->withCount('reviews')
                    ->withAvg('reviews','rating')
                    ->paginate(10);
        return view('books.popular-last-month', compact('books'));
    }

    public function indexPopularLast6Month(){
        $books=Book::popularLast6Month()
            ->withCount('reviews')
            ->withAvg('reviews','rating')
            ->get();
        return view('books.popular-last-6month',compact('books'));
    }

    public function indexHighestRatedLastMonth(){
        $books = Book::highestRatedLastMonth()->get();
        return view('books.highest-rated-last-month',compact('books'));
    }
    public function indexHighestRated6LastMonth(){
        $books = Book::highestRatedLast6Month()->get();
        return view('books.highest-rated-last-6month',compact('books'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   public function show(Book $book)
{
    $book->loadCount('reviews')
         ->loadAvg('reviews', 'rating')
         ->load('reviews');

    return view('books.show', compact('book'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
