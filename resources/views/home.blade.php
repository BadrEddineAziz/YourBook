@extends('layouts.app')

@section('title')

YourBook

@endsection

@section('content')

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
      <a href="{{ route('about') }}" class="white-btn" >discover more</a>
   </div>

</section>
<div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      @foreach($categories as $categorie)
      <a class="nav-item nav-link link-body-emphasis " style="font-size:medium;" href="{{ route('showCategorie',['id'=>$categorie->id ]) }}"> {{ $categorie->Libelle }} </a>
      @endforeach
    </nav>
  </div>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

    
   @forelse($books as $book)
     <form action="{{ route('showBook',['id'=>$book->id ]) }}" method="get" class="box">
      <img class="image" src="{{ Storage::url($book->Image)  }}" alt="">
      <div class="name">{{ $book->Title }}</div>
    
      <input type="submit" value="READ" name="READ" class="btn"  >
     </form>

      @empty
        <p class="empty">no book added yet!</p>
      

      @endforelse
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="{{ route('allBooks') }}" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="{{ route('about') }}" class="btn" >read more</a>
      </div>

   </div>

</section>




@endsection
