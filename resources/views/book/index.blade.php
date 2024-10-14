@extends("layout.master")
@section("title")
Data Books
@endsection
@section("content")
<table class="table table-bordered">
    <a href="/book/create" class="btn btn-primary mb-2">Add Book <i class="fas fa-plus"></i></a>
    <thead>                  
        <tr>
        <th style="width: 10px">No</th>
        <th>Title</th>
        <th>Summary</th>
        <th>Image</th>
        <th>Varchar</th>
        <th>Category</th>
        <th>Stock</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($books as $book )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->summary }}</td>
            <td> <img src="{{ asset('images/'.$book->image) }}" width="100" alt=""></td>
            <td>{{ $book->varchar }}</td>
            <td>{{ $book->categories_id }}</td>
            <td>{{ $book->stock }}</td>
            <td>
                <form action="/book/{{ $book->id }}" method="POST">
                    <a href="/book/{{ $book->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/book/{{ $book->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method("DELETE")
                    <button onclick="return confirm('Delete Category {{ $book->title }}?');" type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
            </tr>


    @empty
        <p>Data Categories is Empty</p>
        
    @endforelse
    </tbody>
</table>
   


@endsection