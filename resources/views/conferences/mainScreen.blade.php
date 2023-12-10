
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/mainScreen.css">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach ($conferences as $conference)
                            <div class="conference-item mb-3">
                                <h3>{{ $conference->title }}</h3>
                                <p>Aprašas: {{ $conference->description }}</p>
                                <p>Data: {{ $conference->date }}</p>
                                <p>Adresas: {{$conference->address}}</p>
                                <div class="btn-group">
                                    <form action="{{ route('conferences.edit', $conference->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                    <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
