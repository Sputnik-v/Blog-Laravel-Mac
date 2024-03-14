@extends('layouts.layout')

@section('header')
    @include('components.header')
@endsection

@section('main')
    @include('components.post-list')
@endsection

@section('footer')
<x-footer class="footer">
    <div class="footer__text">
        @ {{date('Y')}} This is page for pegas
    </div>
</x-footer>
@endsection


