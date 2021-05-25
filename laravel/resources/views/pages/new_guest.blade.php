@extends('layouts.form_layout')
@section('content')
<section id="guest-form">
    <h1>Add a New guest</h1>
    @include('components.form')
    <a href="{{ route('all_guests') }}">
        Home
    </a>
</section>
@endsection