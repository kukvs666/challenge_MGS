@extends('layout')

@section('title')
    Villa Belle
@endsection

@section('carousel')
    @include('components/carousel')
@endsection

@section('sideMenu')
    @include('components/sideMenu')
@endsection

<div id="app">
   <calendar-tool-component></calendar-tool-component>
</div>
