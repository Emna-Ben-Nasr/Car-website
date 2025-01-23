{{-- @extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.header')
    @php
        $color="green";
        $bgColor="red"
    @endphp
    <x-inline-component calss="yes" color="red">
        test test
    </x-inline-component>
    <x-card :color="$color" :bgColor="$bgColor">
        {{-- if the attribute and the variable names are the same <x-card :$color :$bgColor> --}}

        {{-- <x-slot:title1>tit1</x-slot:title1>
        <x-slot:title2>tit2</x-slot:title2>
        emna bns
     </x-card>

    @yield('content')
    <footer>
        @section('footerlinks')
            <a href="#">link 1</a>
            <a href="#">link 2</a>
        @show
    </footer>
@endsection --}}
  @props(['title'=>""])
<x-base-layout :$title>
    {{-- @include('layouts.partials.header') --}}
    <x-layouts.header/>
    {{$slot}}
    {{-- <footer>
        <a href="#">link 1</a>
        <a href="#">link 2</a>
        {{$footerlinks}}
    </footer> --}}
</x-base-layout>





