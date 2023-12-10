
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/editForm.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Conference') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('conferences.update', $conference->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('Conference Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $conference->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Conference Description') }}</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $conference->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">{{ __('Conference Date') }}</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $conference->date }}" required>
                            </div>


                            <button type="submit" class="btn btn-primary">{{ __('Update Conference') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
