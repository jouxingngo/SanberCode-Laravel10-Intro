@extends("layout.master")
@section("title")
Detail Book
@endsection
@section("content")
<table class="table table-bordered">

    <thead>                  
        <tr>
            <th>Title</th>
            <th>Summary</th>
            <th>Image</th>
            <th>Varchar</th>
            <th>Category</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->summary }}</td>
            <td> <img src="{{ asset('images/'.$book->image) }}" width="100" alt=""></td>
            <td>{{ $book->varchar }}</td>
            <td>{{ $book->categories_id }}</td>
            <td>{{ $book->stock }}</td>
        </tr>

    </tbody>

</table>
<a href="/book" class="btn btn-danger mt-2"><i class="fas fa-arrow-left"></i> Back</a>




@endsection