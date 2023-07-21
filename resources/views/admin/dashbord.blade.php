@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')


<div class="nav-scroller py-1 mb-3 border-bottom" style="margin-top:30px">
    <nav class="nav nav-underline justify-content-between">
      @foreach($categories as $categorie)
      <a class="nav-item nav-link link-body-emphasis " style="font-size:medium;" href="{{ route('showCategorie',['id'=>$categorie->id ]) }}"> {{ $categorie->Libelle }} </a>
      @endforeach
    </nav>
  </div>

<section class="products">

   <h1 class="title">Dashbord</h1>

   <div class="box-container">

    
   @forelse($books as $book)
     <form action="{{ route('updateBook',['id'=>$book->id ]) }}" method="get" class="box" >
      <img class="image" src="{{ Storage::url($book->Image)  }}" alt="">
      <div class="name">{{ $book->Title }}</div>
    
      <input type="submit" value="UPDATE" class="btn"  >
     </form>

      @empty
        <p class="empty">no book added yet!</p>
      

      @endforelse
   </div>

  



@endsection
