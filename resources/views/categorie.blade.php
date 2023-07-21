@extends('layouts.app')

@section('title')

{{ $categorie->Libelle }}

@endsection

@section('content')
<section class="products" style="margin-top:50px;">

<h1 class="title">{{ $categorie->Libelle }}</h1>



<div class="box-container">
     @forelse($categorie->books as $book)

     <form action="{{ route('showBook',['id'=>$book->id ]) }}" method="get" class="box">
      <img class="image" src="{{ $book->Image }}" alt="">
      <div class="name">{{ $book->Title }}</div>
    
      <input type="submit" value="READ" name="READ" class="btn"  >
     </form>

      @empty
        <p class="empty">no books added yet!</p>
      

    
    @endforelse 
</div>
 
</section>


@endsection