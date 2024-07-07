@extends('adminlte::page')

@section('title', 'Manager Dashboard')

@section('content_header')
    <h1>Manager Dashboard</h1>
@endsection

@section('content')
    <p>Welcome to the Manager Dashboard.</p>
    <a href="{{ route('manager.approvals') }}">View Approvals</a>
@endsection
