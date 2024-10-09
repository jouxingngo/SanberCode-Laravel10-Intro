@extends("layout.master")
@section("title")
Selamat Datang
@endsection
@section("content")
    <h1>SELAMAT DATANG! {{ $fullName ?? "?" }}</h1>
    <h3>Ini adalah isi Biodata Kamu</h3>
    <ul>
        <li>Gender :  {{ $gender ?? "?" }}</li>    
        <li>Nationality :{{$nationality ?? "?"}}</li>    
        <li>Language Spoken : <br>
            @foreach ($l_spokens as $l_spoken)
            -{{ $l_spoken }}<br>
            @endforeach
    </li>    
        <li>Bio : {{ $bio ?? "-" }}</li>    
    </ul>    
@endsection