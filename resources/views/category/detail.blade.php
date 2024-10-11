@extends("layout.master")
@section("title")
Detail Category
@endsection
@section("content")
<table class="table table-bordered">

    <thead>                  
        <tr>
        <th>Category Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $category->name }}</td>

    </tbody>

</table>
<a href="/category" class="btn btn-danger mt-2"><i class="fas fa-arrow-left"></i> Back</a>




@endsection