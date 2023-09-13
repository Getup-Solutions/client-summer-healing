@extends('layouts.admin.adminLayout')

@section('title', 'Admin | Order Reports')

@section('content')


@php

$orders = Session::get('orders');

dd($orders);

@endphp

@endsection