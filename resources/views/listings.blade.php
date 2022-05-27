
@extends('layout')

@include('partials._header')

@section('content')

    <x-wrapper class="p-10">
        @foreach ($Listings as $listing)



            <h2>{{$listing['JobTitle']}}</h2>

            <x-search :listing='$listing'/>

            <h3>{{$listing['location']}}</h3>

            <h4>{{$listing['email']}}</h4>

            <p>{{$listing['desc']}}</p>


        @endforeach
    </x-wrapper>


@endsection
