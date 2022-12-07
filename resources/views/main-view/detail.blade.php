@extends('template/layout');

@section('layout')


    @livewire('detail-product', ['detailProduct' => $detail])


@endsection