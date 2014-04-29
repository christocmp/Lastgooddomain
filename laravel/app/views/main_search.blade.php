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
            {{ Form::open(['url' => '/', 'class' => 'navbar-form navbar-right']) }}
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
    <div id="center-search">
        <div class="container">
            {{ Form::open(['url' => '/', 'class' => 'navbar-form navbar-right']) }}
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

    <div id="footer-container">

&copy; LastGoodDomain {{ date('Y') }}
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    @stop