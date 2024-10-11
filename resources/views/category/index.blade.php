@extends("layout.master")
@section("title")
Data Categories
@endsection
@section("content")
<table class="table table-bordered">
    <a href="/category/create" class="btn btn-primary mb-2">Add Category <i class="fas fa-plus"></i></a>
    <thead>                  
        <tr>
        <th style="width: 10px">No</th>
        <th>Category Name</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($categories as $category )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <form action="/category/{{ $category->id }}/delete" method="POST">
                    <a href="/category/detail/{{ $category->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/category/{{ $category->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method("DELETE")
                    <button onclick="return confirm('Delete Category {{ $category->name }}?');" type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
            </tr>


    @empty
        <p>Data Categories is Empty</p>
        
    @endforelse
    </tbody>
</table>
   


@endsection