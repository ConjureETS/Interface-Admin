@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            </div>
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <p></p>
                    @foreach($laboratories as $laboratory)
                        <a href="{{ $laboratory->url }}">{{ $laboratory->name." - ".$laboratory->engine }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
