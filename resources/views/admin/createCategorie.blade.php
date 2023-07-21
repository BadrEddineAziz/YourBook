@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Add Categorie</h1>
    
   <form action="{{  route('storeCategorie') }}" method="post" enctype="multipart/form-data">
      <h3>Add Categorie</h3>
      @csrf
      <input type="text" name="Libelle" class="box" placeholder="enter categorie title" required>

      <textarea name="Description" id="" cols="30" rows="10"  placeholder="Description" class="box" required></textarea>

      <input type="submit" value="add categorie" name="add_book" class="btn" style="background-color:#1B4571;">
   </form>

</section>  



@endsection
