@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-4 offset-4" >
            @include('partials._messages')
            <h1>Book Details</h1>
            {!! Form::open(['url' => '/insert']) !!}

            {{Form::label('title','Book Title:')}}
            {{Form::text('title', null, array('class'=>'form-control'))}}

            {{Form::label('author','Author:')}}
            {{Form::text('author', null, array('class'=>'form-control'))}}


            <br>
            {{Form::submit('SAVE', array('class'=>'btn btn-success btn-lg btn-block'))}}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection


