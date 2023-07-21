@extends('layouts.app')

@section('title')

All Books
@endsection

@section('content')

<section class="products">

   <h1 class="title">all books</h1>

   <div class="box-container">

    
   @forelse($books as $book)
     <form action="{{ route('showBook',['id'=>$book->id ]) }}" method="get" class="box">
      <img class="image" src="{{ $book->Image }}" alt="">
      <div class="name">{{ $book->Title }}</div>
    
      <input type="submit" value="READ" name="READ" class="btn"  >
     </form>

      @empty
        <p class="empty">no Book added yet!</p>
      

      @endforelse
   </div>



</section>

@endsection
