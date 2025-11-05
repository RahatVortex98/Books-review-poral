@extends('layouts.app')


@section('content')

@include('partials.container')
{{-- <div class="filter-container mb-4 flex">
    @php
       $filters=[
         'latest'=>'latest',
        'popular_last_month'=>'Popular Last Month',
        'popular_last_6month'=>'Popular Last 6 Months',
        'highest_rated_last_month'=>'Highest Rated Last Month',
        'highest_rated_last_6month'=>'Highest Rated Last 6 Months',
];
    @endphp

    @foreach ($filters as $key=> $filter )
    <a href="{{ route('books.index',['filter'=>$key]) }}" class="{{ request('filter')===$key ?'filter-item-active':'filter-item' }}">
        {{ $filter }}
    </a>
        
    @endforeach --}}



@if ($books->count() > 0)
    @foreach ($books as $book)
        <ul>
            <li class="mb-4">
                <div class="book-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('books.show', $book->id) }}" class="book-title">
                                {{ $book->title }}
                            </a>
                            <span class="book-author">{{ $book->author }}</span>
                        </div>
                        <div>
                            <div class="book-rating">
                                ⭐ {{ number_format($book->reviews_avg_rating, 1) ?? 'N/A' }}
                            </div>
                            <div class="book-review-count">
                                {{ $book->reviews_count ?? 0 }} Reviews
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    @endforeach
@else
    <li class="mb-4">
        <div class="empty-book-item">
            <p class="empty-text">No books found</p>
            <a href="{{ route('books.index') }}" class="reset-link">Reset criteria</a>
        </div>
    </li>
@endif


@endsection