@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Add Book</h1>
    
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Add Book</h3>
      @csrf
      <input type="text" name="Title" class="box" placeholder="enter book title" required>
      <input type="text" min="0" name="Author" class="box" placeholder="enter book author" required>
      <textarea name="Description" id="" cols="30" rows="10"  placeholder="Description" class="box" required></textarea>
      @foreach($categories as $categorie)
      <select name="Categorie" id="" style="font-size:large">
         <option value="{{  $categorie->id  }}"> {{ $categorie->Libelle }} </option>
      </select>
      @endforeach<br>
      <span style="font-size:large">Image:</span>   <br>
      <input type="file" name="Image" accept="image/jpg, image/jpeg, image/png"  class="box" required>
      <span style="font-size:large">Content:</span>   <br>
      <input type="file" name="Content" accept=".pdf"  class="box" required>
      <input type="submit" value="add book" name="add_book" class="btn" style="background-color:#1B4571;">
   </form>

</section>  



@endsection
