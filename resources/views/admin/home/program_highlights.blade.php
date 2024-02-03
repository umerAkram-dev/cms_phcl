@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                @include('admin.home.parts.highlights.header')
                @include('admin.home.parts.highlights.program_highlight')
                @include('admin.home.parts.highlights.advantages')

            </div>
        </section>
    </main>
@endsection
