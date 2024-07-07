@extends('adminlte::page')


@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle')
        | @yield('subtitle')
    @endif
@stop


@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop


@section('content')
    @yield('content_body')
@stop


@section('footer')
    <div class="float-right">
        Version: 1.0.0
    </div>

    <strong>
        <a href="">
            Appartment Management System
        </a>
    </strong>
@stop


@push('js')
    <script>
        $(document).ready(function() {});
    </script>
@endpush


@push('css')
    <style type="text/css">

    </style>
@endpush
