@extends('layouts.dfm')

@section('title', 'Agregar actividad')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('components/datetimepicker/build/jquery.datetimepicker.min.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/activity.js') }}"></script>
@endsection

@section('content')
    <a href="{{ url('activities') }}">Regresar</a>

    <form action="{{ url('activities/create') }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        @include('activity.form')

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <p>
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </p>
@endsection
