@extends('frontend.layouts.master')

@section('main-content')
    <div class="rooms-div">
        <h1 class="heading-h1">Choose Your Environment </h1>
        <div class="divider" style="border-bottom: 1px solid rgb(128, 128, 128);" bis_skin_checked="1"></div>
       
        <div class="room-list">
            @foreach ($rooms as $room)
                <div class="room-item">
                    <div class="shadow"></div>
                    <a class="nav-link" href="{{ route('editor', ['id' => $room->id]) }}">
                        <img class="room-item_img" src="{{ asset("$room->imageURL")}}" alt="{{ $room->name }}"></img>
                        <h2>{{ $room->name }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .room-list {
            grid-gap: 24px;
            align-items: flex-start;
            display: flex;
            display: grid;
            flex-direction: row;
            gap: 24px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            justify-content: center;
            padding: 15px 0;
            width: 100%;
        }

        .room-item {
            border-radius: 8px;
            position: relative;
            text-align: center;
        }

        .room-item .shadow {
            border-radius: 8px;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .room-item .room-item_img {
            border-radius: 8px;
            max-width: 95%;
            -webkit-transform: scale(1);
            transform: scale(1);
            transition: -webkit-transform .3s ease-in-out;
            transition: transform .3s ease-in-out;
            transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;

        }

        .room-item .room-item__txt {
            bottom: 16px;
            color: #fff;
            font-family: Helvetica-Light, sans-serif !important;
            font-family: var(--ff-hevetica) !important;
            font-size: 1.4rem;
            left: 0;
            margin: 0;
            padding: 0 10px;
            position: absolute;
            right: 0;
            transition: bottom .3s ease-in-out;
        }

        .rooms-div {
            height: calc(100vh - 50px);
            margin: 0 auto;
            max-width: 1400px;
            padding: 100px;
            width: 100%;
        }

        .heading-h1 {
            color: grey;
            color: var(--c-text-primary);
            font-family: Helvetica-Light, sans-serif;
            font-family: var(--ff-hevetica);
            font-weight: 500;
            margin: 0 0 10px;
        }
    </style>
@endpush
@push('scripts')
    <script></script>
@endpush
