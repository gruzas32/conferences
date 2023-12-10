<!-- create.blade.php -->

@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/createConf.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}" class="btn btn-back">
                            <span>&lt;</span> {{ __('Back') }}
                        </a>
                        {{ __('Create Conference') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('conferences.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">{{ __('Date') }}</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('Address') }}</label>
                                <input type="text" name="address" id="address" class="form-control" required>

                            <button type="submit" class="btn btn-primary">{{ __('Create Conference') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
