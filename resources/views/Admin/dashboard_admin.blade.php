@extends('layouts.master')

@section('nama')
    <h4>hi, {{ Auth::user()->name }}</h4>
@endsection

@section('nama1')
Gunakan link di bawah ini untuk promosi lebih banyak
@endsection

@section('konten1')
<h4> Link           = https://penerimaan.uai.ac.id/{{ Auth::user()->name }}{{ Auth::user()->id }} </h4> </br>
<h4> Kode Referral  = {{ Auth::user()->name }}{{ Auth::user()->id }} </h4>
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@endsection
