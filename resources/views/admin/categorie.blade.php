@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Update Categorie</h1>
    
   <form action="{{ route('updatedBook',['id'=>$categorie->id ])  }}" method="post" enctype="multipart/form-data">
      <h3>Update Categorie</h3>
     
      @csrf
      
      <input type="text" name="Title" value="{{$categorie->Libelle}}" class="box" placeholder="enter book title" required>
      <textarea name="Description" id="" cols="30"  rows="10"  placeholder="Description" class="box" required>{{$categorie->Description}}</textarea>

    
      <input type="submit" value="update categorie" name="add_book" class="btn" >
      <a  href="{{ route('destroyCategorie',['id'=>$categorie->id ])  }}" class="btn" style="background-color:red">Delete</a>
   </form>

</section>  



@endsection
