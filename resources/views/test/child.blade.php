<!-- Stored in resources/views/test/child.blade.php -->

@extends('test.master')

@section('title', 'Page Title')

@section('sidebar')

    <p>This is appended to the master sidebar.</p>
    @parent
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection