@extends('layouts.app')





@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <tr>
                    <td><b>Book Title</b></td>
                    <td><b>Author</b></td>


                </tr>
                @foreach($data as $value)

                    <tr>
                        <td>{{$value->book_title}}</td>
                        <td>{{$value->author}}</td>


                    </tr>
            @endforeach
        </div>

    </div>
@endsection
