@extends("layout.master")
@section("title")
Add Category
@endsection
@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/category/create" method="POST">
        @csrf
        <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="name" class="form-control" >
        </div>
        <div class="d-flex justify-content-between">
            <a href="/category" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
        </div>
    </form>
@endsection