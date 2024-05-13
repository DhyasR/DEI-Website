@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')
    <header class="header">

        <img src="../../resources/images/logo.png" alt="logo" id="logo">

        <input type="checkbox" id="check">
        <label for="check" class="icons">

            <i class='bx bx-menu' id="open-menu"></i>
            <i class='bx bx-x' id="close-menu"></i>

        </label>

        <nav class="navbar">

            <a href="" style="--i:0">Home</a>
            <a href="" style="--i:1">About</a>
            <a href="" style="--i:2">Services</a>
            <a href="" style="--i:3">Contact</a>

        </nav>

    </header>
@endsection
