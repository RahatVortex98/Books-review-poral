
<form action="{{ route('books.index') }}" method="GET" class="mb-4 flex items-center space-x-2">
    @csrf
    <input type="text" class="input" name="title" placeholder="Search by title" value="{{ request('title') }}">
    <button class="btn" type="submit">Search</button>
    <a href="{{ route('books.index') }}" class="btn">Clear</a>
</form>



<div class="filter-container mb-4 flex">

   <div class="bg-blue-50 rounded-lg p-2 flex justify-between items-center w-full max-w-4xl">
    <!-- Option 1 (active) -->
    <a href="{{ route('books.latest') }}">
      <button class="bg-white text-gray-800 font-medium px-4 py-2 rounded-md shadow-sm">
      latest
    </button>
    </a>

    <!-- Option 2 -->
    <a href="{{ route('books.popular') }}">
      <button class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 rounded-md">
      Popular Last<br>Month
    </button>
    </a>

    <!-- Option 3 -->
    <a href="{{ route('books.6popular') }}">
      <button class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 rounded-md">
      Popular Last<br>6 Months  
    </button>
    </a>

    <!-- Option 4 -->
    <a href="{{ route('books.higestRated') }}">
      <button class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 rounded-md">
      Highest Rated<br>Last Month
    </button>
    </a>

    <!-- Option 5 -->
    <a href="{{ route('books.higest6Rated') }}">
      <button class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 rounded-md">
      Highest Rated<br>Last 6 Months
    </button>
    </a>
  </div>
 </div>