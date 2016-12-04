@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <div class="container ptb">
        <div class="row centered">
            <h2 class="mb">Automobilis<br/>{{ $auto->number }}</h2>
            {!! Form::model($auto) !!}

            {!! Form::text('number') !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
