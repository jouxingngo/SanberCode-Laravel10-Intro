@extends("layout.master")
@section("title")
Edit Category
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
    <form action="/category/{{ $category->id }}/edit" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" >
        </div>
        <div class="d-flex justify-content-between">
            <a href="/category" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-primary">Update <i class="fas fa-save"></i></button>
        </div>
    </form>
@endsection
