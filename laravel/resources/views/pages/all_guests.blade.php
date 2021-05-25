@extends('layouts.main_layout')
@section('page_title')
    <h1>
        Guest list
    </h1>
@endsection

@section('content')
<main>
    <section id="guests_list">
        <div class="container">
            <div class="name col">
                <div class="col-title">
                    Guest Name
                </div>
                <ul>
                    @foreach ($guests as $guest)
                        <li>
                            {{ $guest -> name }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="last-name col">
                <div class="col-title">
                    Guest Lastname
                </div>
                <ul>
                    @foreach ($guests as $guest)
                        <li>
                            {{ $guest -> lastname }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="details-btn col">
                <ul>
                    @foreach ($guests as $guest)
                        <li>
                            <a href="{{ route('this_guest', $guest -> id) }}">
                                See guest details
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection