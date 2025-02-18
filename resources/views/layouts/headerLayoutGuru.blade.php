<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTable/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTable/dataTables.bootstrap5.min.css') }}">
    <link href="{{ asset('css/tom-select/tom-select.bootstrap5.css') }}" rel="stylesheet">
</head>

<body>

    <div class="page">
        <!-- Sidebar -->
        @include('components.sidebarGuru')

        <div class="page-wrapper">
