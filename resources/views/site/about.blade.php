@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection


@section('content')
    <div class="text-white flex flex-col items-center p-7">
        <h1 class="text-white font-bold text-3xl py-7">About</h1>
        <p>This project was made by <a class="text-slate-400 hover:underline font-semibold" target="_blank"
                href="https://github.com/NicoolasRuan">Nicolas</a> using Laravel 10 with Blade Template and Tailwind. 
        </p>
    </div>
@endsection


@section('footer')
    @include('site.partials.footer')
@endsection
