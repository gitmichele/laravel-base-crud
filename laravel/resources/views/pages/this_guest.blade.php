@extends('layouts.main_layout')
@section('page_title')
    <h1>
        {{ $guest -> name }} {{ $guest -> lastname }}
    </h1>
@endsection

@section('content')
    <section id="guest_details">
        <div class="container">
            <div class="col-left">
                <ul>
                    <li>Guest ID:</li>
                    <li>Date of Birth:</li>
                    <li>Document Type:</li>
                    <li>Document Number:</li>
                </ul>
            </div>

            <div class="col-right">
                <ul>
                    <li>
                        {{ $guest -> id }}
                    </li>
                    <li>
                        {{ $guest -> date_of_birth }}
                    </li>
                    <li>
                        {{ $guest -> document_type }}
                    </li>
                    <li>
                        {{ $guest -> document_number }}
                    </li>
                </ul>
            </div>
        </div>
    </section>    
@endsection