@extends('admin.layout.template')

@section('title')

YourBook

@endsection

@section('content')

<section class="add-products">

   <h1 class="title">Update Book</h1>
    
   <form action="{{ route('updatedBook',['id'=>$book->id ])  }}" method="post" enctype="multipart/form-data">
      <h3>Update Book</h3>
     
      @csrf
      <input type="text" name="Title" value="{{$book->Title}}" class="box" placeholder="enter book title" required>
      <input type="text" min="0" name="Author" value="{{$book->Author}}" class="box" placeholder="enter book author" required>
      <textarea name="Description" id="" cols="30"  rows="10"  placeholder="Description" class="box" required>{{$book->Description}}</textarea>
      <select name="Categorie" id="" style="font-size:large">
         <option value="Fantasy">Fantasy</option>
      </select><br>
      <span style="font-size:large">Image: <a href="{{ route('updatedImage',['id'=>$book->id ])  }}">update</a></span>   <br>
      
      <span style="font-size:large">Content:  <a href="{{ route('updatedContent',['id'=>$book->id ])  }}">update</a></span>   <br>
    
      <input type="submit" value="update book" name="add_book" class="btn" >
      <a  href="{{ route('destroyBook',['id'=>$book->id ])  }}" class="btn" style="background-color:red">Delete</a>
   </form>

</section>  



@endsection
