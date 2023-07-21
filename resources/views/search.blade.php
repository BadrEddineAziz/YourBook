@extends('layouts.app')

@section('title')

Search

@endsection

@section('content')

<div class="heading">
   <h3>search page</h3>
   <p> <a href="{{ route('home') }}" style="color:#1B4571;">home</a> / search </p>
</div>

<section class="search-form">
   <form action="" method="post">

      <input type="text" id="searchInput" placeholder="Search by title or author..." style="font-size:large;" class="box">
      <input type="submit" name="submit" value="search" class="btn" ><br>
   
    
      
    
   </form>
   <ul id="results" style="font-size:large;margin-left:150px " class="list-group list-group-flush" ></ul>
</section>
  

    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var searchTerm = $(this).val();

                $.ajax({
                    url: "{{ route('searchBook') }}",
                    type: 'GET',
                    data: { term: searchTerm },
                    success: function(response) {
                        var resultsList = $('#results');
                        resultsList.empty();

                        if (response.length > 0) {
                            $.each(response, function(index, book) {
                                resultsList.append('<a href="/book/' + book.id + '" class="list-group-item"><li> ' + book.Title + ', by: ' + book.Author + '</li></a>');
                            });
                        } else {
                            resultsList.append('<li>No results found.</li>');
                        }
                    }
                });
            });
        });
    </script>

@endsection