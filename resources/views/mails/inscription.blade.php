@extends('layouts.app-email')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>{{ __('mails.laboratory') }}</h3>
                <p>{{ __('mails.laboratory-instruction') }}</p>
                <ul>
                    @foreach($laboratories as $laboratory)
                        <li><a href="{{ $laboratory->url }}">{{ $laboratory->name." - ".$laboratory->engine }}</a></li>
                    @endforeach
                </ul>
                <p>{{ __('mails.laboratory-deadline', ['deadline' => date("d-m-Y", strtotime("+3 weeks"))]) }}</p>
                <p>{{ __('mails.laboratory-return-instruction') }}</p>
            </div>
        </div>
    </div>
@endsection
