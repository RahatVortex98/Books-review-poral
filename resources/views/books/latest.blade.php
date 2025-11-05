@extends('layouts.app')

@section('content')
@include('partials.container')

  <h1 class="text-2xl font-bold mb-4">Latest Books</h1>

  @if ($books->count() > 0)
      <ul>
          @foreach ($books as $book)
              <li class="mb-4 p-4 border rounded shadow-sm">
                  <div class="flex justify-between items-center">
                      <div>
                          <h2 class="text-lg font-semibold">
                              <a href="{{ route('books.show', $book->id) }}">
                                  {{ $book->title }}
                              </a>
                          </h2>
                          <p class="text-gray-600">by {{ $book->author }}</p>
                      </div>

                      <div class="text-right">
                          <p class="text-yellow-600">⭐ {{ number_format($book->reviews_avg_rating, 1) ?? '0.0' }}</p>
                          <p class="text-gray-500">{{ $book->reviews_count }} Reviews</p>
                      </div>
                  </div>
              </li>
          @endforeach
      </ul>

      {{-- <div class="mt-4">
          {{ $books->links() }}
      </div> --}}

  @else
      <p>No books found.</p>
  @endif

</div>
@endsection
