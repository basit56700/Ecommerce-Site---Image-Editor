@extends('frontend.layouts.master')
@section('title', 'Best Board || HOME PAGE')

@section('main-content')
    <main>
        <div id="main">
            <div class="indicator"></div>

            <div id="demo"></div>

            @php
                $banners = DB::table('banners')->where("status",'active')->get();
            @endphp
            <div id="banner-data" data-banner="{{ json_encode($banners) }}"></div>

            <div class="details" id="details-even">
                <div class="category-box">
                    <div class="text">{{ $banners[0]->series }}</div>
                </div>
                <div class="title-box-1">
                    <div class="title-1">{{ $banners[0]->sub_category }}</div>
                </div>
                <div class="title-box-2">
                    <div class="title-2">{{ $banners[0]->category }}</div>
                </div>
                <div class="desc">
                    {{ $banners[0]->description }}
                </div>
                <div class="cta">
                    <button class="bookmark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="discover">Discover Location</button>
                </div>
            </div>

            <div class="details" id="details-odd">
                <div class="category-box">
                    <div class="text">{{ $banners[0]->series }}</div>
                </div>
                <div class="title-box-1">
                    <div class="title-1">{{ $banners[0]->sub_category }}</div>
                </div>
                <div class="title-box-2">
                    <div class="title-2">{{ $banners[0]->category }}</div>
                </div>
                <div class="desc">
                    {{ $banners[0]->description }}
                </div>
                <div class="cta">
                    <button class="bookmark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="discover">Discover Location</button>
                </div>
            </div>

            <div class="pagination" id="pagination">
                <div class="arrow arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </div>
                <div class="arrow arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
                <div class="progress-sub-container">
                    <div class="progress-sub-background">
                        <div class="progress-sub-foreground"></div>
                    </div>
                </div>
                <div class="slide-numbers" id="slide-numbers"></div>
            </div>

            <div class="cover"></div>
        </div>
    </main>

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
