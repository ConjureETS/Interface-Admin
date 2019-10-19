@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('general.inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inscriptionSubmit') }}">
                        @csrf

                        <div class="form-group row">
                            <h4 class="col-md-12 card-subtitle">{{ __('general.general-info') }}</h4>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('general.first-name') }}</label>

                            <div class="col-md-8">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('general.last-name') }}</label>

                            <div class="col-md-8">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('general.email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="universal_code" class="col-md-4 col-form-label text-md-right">{{ __('general.universal-code') }}</label>

                            <div class="col-md-8">
                                <input id="universal_code" type="text" class="form-control @error('universal_code') is-invalid @enderror" name="universal_code" value="{{ old('universal_code') }}" required autocomplete="universal_code">

                                @error('universal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('general.phone') }}</label>

                            <div class="col-md-8">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('general.program') }}</label>

                            <div class="col-md-8">
                                <select id="program_id" class="form-control @error('program_id') is-invalid @enderror" name="program_id" required autocomplete="program_id">
                                    <option>{{ __('general.choose-option') }}</option>
                                    @foreach($programs as $program)
                                        <option value="{{ $program->id }}" {{ old('program_id') == $program->id ? "selected" : "" }}>{{ $program->name }}</option>
                                    @endforeach
                                </select>

                                @error('program_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="communication_method" class="col-md-4 col-form-label text-md-right">{{ __('general.communication-method') }}</label>

                            <div class="col-md-8">
                                <select id="communication_method_id" class="form-control @error('communication_method_id') is-invalid @enderror" name="communication_method_id" required autocomplete="communication_method_id">
                                    <option>{{ __('general.choose-option') }}</option>
                                    @foreach($communicationMethods as $communicationMethod)
                                        <option value="{{ $communicationMethod->id }}" {{ old('communication_method_id') == $communicationMethod->id ? "selected" : "" }}>{{ $communicationMethod->name }}</option>
                                    @endforeach
                                </select>

                                @error('communication_method_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <h3 class="col-md-12 card-subtitle">{{ __('general.others') }}</h3>
                        </div>

                        @if(!$interests->isEmpty())
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('general.interests') }}</label>

                                <div class="col-md-8">
                                    @foreach($interests as $interest)
                                        <label for="interest-{{ $interest->id }}" class="col-form-label text-md-right">{{ $interest->name }}</label>
                                        <input type="checkbox" class="form-control" name="interest" id="interest-{{ $interest->id }}" value="{{ $interest->id }}" autocomplete="interest">
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="expectation" class="col-md-4 col-form-label text-md-right">{{ __('general.expectations') }}</label>

                            <div class="col-md-8">
                                <textarea id="expectation" class="form-control @error('expectation') is-invalid @enderror" name="expectation" value="{{ old('expectation') }}" autocomplete="expectation"></textarea>

                                @error('expectation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('button.submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
