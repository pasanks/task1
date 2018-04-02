@extends('layouts.app')





@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>


                </tr>
                @foreach($data as $value)

                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>


                    </tr>
            @endforeach
        </div>

    </div>
@endsection
