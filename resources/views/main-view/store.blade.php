@extends('template/layout')

@section('layout')
    @livewire('store', ['id' => $id])
@endsection