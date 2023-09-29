<!doctype html>
@extends('layouts.main')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        <style>
            header {
                padding-top: 50px;

            }
        </style>

        <title>Home</title>
    </head>

    <body>
        <header style="text-align: center;">
            <img src="{{ asset('img/mbkm.png') }}" width="200" height="200" />
            <h1>Muhamad Andre Hermawan</h1>
            <p>(Full Stack Web Developer)</p>
        </header>

        <hr />

        <article style="text-align: center;">
            <h2>Overview</h2>
            <p>
                Hi, saya adalah Mahasiswa yang berdomisisli di Bogor.
                Saat ini sedang mengikuti program Studi Independent di Gits.id
            </p>
        </article>

        <hr>
        <script src="js/profile.js"></script>
    </body>

    </html>
    <script src="js/home.js"></script>
@endsection
