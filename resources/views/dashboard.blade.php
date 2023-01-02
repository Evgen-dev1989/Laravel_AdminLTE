
        @extends('adminlte::page')

        @section('title', 'Dashboard')

        @section('content_header')
            <h1> <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot></h1>
        @stop

        @section('content')
            <p>Welcome to this beautiful admin panel.</p>
        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
        @stop


