@extends('adminlte::page')

@section('title', 'Sales Dashboard')

@section('content_header')
    <h1>Sales Dashboard</h1>
@endsection

@section('content')
    <p>Welcome to the Sales Dashboard.</p>
    <a href="{{ route('sales.apartments') }}">View Apartments</a>
@endsection
