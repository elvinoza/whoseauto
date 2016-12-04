
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <div id="h">
        <div class="logo"></div>
        <div class="social hidden-xs">
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-social-instagram"></i></a>
            <a href="#"><i class="ion-social-facebook"></i></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 centered">
                    <h1><br/>.</h1>
                    <div class="mtb">
                        {!! Form::open(['route' => ['get_auto', $number], 'method' => 'POST']) !!}
                        {!! Form::text('number',null, ['class' => 'subscribe-input', 'placeholder' => 'Įrašyk numerį...', 'style' => 'color: black;']) !!}

                        {!! Form::submit('Ieškoti', ['class' => 'btn btn-conf btn-green']) !!}
                        </form>
                    </div>
                    <h6>Pvz: - NO CREDIT CARD NEEDED.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container ptb">
        <div class="row centered">
            <h2 class="mb">Last Searches<br/>Coming Soon</h2>
        </div>
    </div>

@endsection
