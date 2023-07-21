@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Update Book</h1>
    
   <form action="{{ route('updateContent',['id'=>$book->id ])  }}" method="post" enctype="multipart/form-data">
      <h3>Update Book</h3>
     
      @csrf
      <span style="font-size:large">Content:</span>   <br>
      <input type="file" name="Content" accept=".pdf"  class="box" >
      <input type="submit" value="update book" name="add_book" class="btn" >
   </form>

</section>  



@endsection
