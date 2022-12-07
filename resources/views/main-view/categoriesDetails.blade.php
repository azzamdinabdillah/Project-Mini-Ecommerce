@extends('template/layout')

@section('layout')
    @livewire('categories-details', ['judul' => $judul, 'idCategory' => $idCategory])

@endsection