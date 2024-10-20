@extends("layout.master")
@section("title")
Add Book
@endsection
@section("content")

    <form action="/book" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            @error('title')
            <div class="alert-danger alert">{{ $message }}</div>
        @enderror
        <label>Book Title</label>
        <input type="text" name="title" class="form-control" >
        </div>
        <div class="form-group">
        <label>Summary</label>
        <textarea class="form-control" name="summary" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            @error('image')
            <div class="alert-danger alert">{{ $message }}</div>
        @enderror
        <label class="">Image</label>
        <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
            @error('varchar')
            <div class="alert-danger alert">{{ $message }}</div>
        @enderror
        <label class="">Varchar</label>
        <input type="text" name="varchar" class="form-control" >
        </div>
        <div class="form-group">
            @error('category_id')
            <div class="alert-danger alert">{{ $message }}</div>
        @enderror
        <label class="">Category</label>
        <select name="category_id" class="form-control" id="">
            <option value="" disabled selected>--Choose Category--</option>
            @forelse ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @empty
                <option disabled>Category is empty</option>
            @endforelse
        </select>
        </div>
        <div class="form-group">
            @error('stock')
            <div class="alert-danger alert">{{ $message }}</div>
        @enderror
        <label class="">Stock</label>
        <input type="number" name="stock" class="form-control" >
        </div>
        <div class="d-flex justify-content-between">
            <a href="/book" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
        </div>
    </form>
@endsection