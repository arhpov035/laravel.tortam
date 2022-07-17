<!doctype html>
<html lang="ru">
<head>
    <link rel="icon" href="favicon.ico">
    <title>Главная - MODX Revolution</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>

    <title>Hello, world!</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap_card_tovarov.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fancybox/css/fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fancybox/css/panzoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/adaptive.css') }}">

    @livewireStyles
</head>
<body>
<h1>Hello, {{ $name }}.</h1>
@php
    $isActive = false;
    $hasError = true;
@endphp

<span @class([
    'p-4',
    'font-bold' => $isActive,
    'text-gray-500' => ! $isActive,
    'bg-red' => $hasError,
])></span>

<span class="p-4 text-gray-500 bg-red"></span>

@livewireScripts
</body>
</html>
