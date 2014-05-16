@extends('layout.default')

@section('header')
<title>Lastgooddomain</title>
@stop

@section('content')
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">section1</a>
            <a class="navbar-brand" href="#">section2</a>
        </div>
        <div class="navbar-collapse collapse">
            {{ Form::open(['url' => 'search', 'class' => 'navbar-form navbar-right' , 'method' => 'post']) }}
            <div class="form-group">
                {{ Form::label('email', 'Username / Email: ', ['name' => 'email', 'class' => '', 'placeholder' => 'Email']) }}
                {{ Form::email('email', 'Email', ['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) }}


                {{ Form::submit('Login',['class' => 'btn btn-success']) }}
                {{ Form::close() }}
        </div>
    </div>


    <div id="center-search">
        <div class="container">
            {{ Form::open(['url' => 'search', 'class' => 'navbar-form navbar-right' , 'method' => 'post']) }}
            <div class="form-group">
                {{ Form::label('search-term', '', ['name' => 'email', 'class' => '', 'placeholder' => 'Email']) }}
                {{ Form::text('email', 'Email', ['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Go',['class' => 'btn btn-success']) }}
                {{ Form::close() }}
            </div>
            <!-- <p>Simple straight forward price alerts on all your equities.</p> -->

            <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> -->
        </div>
    </div>
@stop