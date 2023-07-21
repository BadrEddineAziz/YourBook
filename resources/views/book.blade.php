@extends('layouts.app')

@section('title')

{{ $book->Title }}

@endsection

@section('content')

<div class="container" style="margin-top:100px">

  <div class="row">
  <div class="col-md-3">
  <h3 style="font-size:xx-large;color:#1B4571">{{ $book->Title }}</h3>
    <img src="{{ Storage::url($book->Image)  }}" alt="Image" class="img-fluid">
    
  </div>
  <div class="col-md-6">
    <h1 style="font-size:xx-large;">Description</h1>
 

    <p style="font-size:medium;"> {{ $book->Description }} </p>

    @foreach($book->categories as $categorie)

    <p style="font-size:medium;">Categories:<a href="{{ route('showCategorie',['id'=>$categorie->id ]) }}" class="nav-item nav-link link-body-emphasis">{{ $categorie->Libelle }}</a>  </p>

    @endforeach
  </div>
</div><br>
<iframe src="{{ Storage::url($book->Content)  }}#toolbar=0 " height="500px" width="1100px" title="Iframe Example"></iframe>
</div>

@endsection