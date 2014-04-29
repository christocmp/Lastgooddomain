@extends('layout.default')

@section('header')
<title>Welcome to Stopwatch</title>
@stop

@section('content')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
            {{ Form::open(['route' => 'sessions.store', 'class' => 'navbar-form navbar-right']) }}
            <div class="form-group">
                {{ Form::label('email', 'Username / Email: ', ['name' => 'email', 'class' => '', 'placeholder' => 'Email']) }}
                {{ Form::email('email', 'Email', ['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) }}


                {{ Form::submit('Login',['class' => 'btn btn-success']) }}
                {{ Form::close() }}
            </div><!--/.navbar-collapse -->
        </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Test Analytics</h1>
            <!-- <p>Simple straight forward price alerts on all your equities.</p> -->
            <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> -->
        </div>
    </div>

    <footer>
        <p>&copy; StockWatch {{ date('Y') }}</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    @stop