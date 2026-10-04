@extends('layouts.app')

@section('content')
    @include('sections.hero')

    {{-- Target anchor navigasi untuk pengembangan seksi berikutnya --}}
    <div id="fitur" class="sr-only" tabindex="-1"></div>
    <div id="showcase" class="sr-only" tabindex="-1"></div>
    <div id="faq" class="sr-only" tabindex="-1"></div>
    <div id="masuk" class="sr-only" tabindex="-1"></div>
    <div id="mulai" class="sr-only" tabindex="-1"></div>
@endsection
