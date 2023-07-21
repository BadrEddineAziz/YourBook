@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Update Book</h1>
    
   <form action="{{ route('updatedImage',['id'=>$book->id ])  }}" method="post" enctype="multipart/form-data">
      <h3>Update Image</h3>
     
      @csrf
 
      <span style="font-size:large">Image:</span>   <br>
      <input type="file" name="Image" accept="image/jpg, image/jpeg, image/png"  class="box" >
 
      <input type="submit" value="update book" name="add_book" class="btn" >
   </form>

</section>  



@endsection
