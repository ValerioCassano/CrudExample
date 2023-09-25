<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('node_modules/mdbootstrap/css/mdb.min.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <title>Document</title>
        </div>
    </div>
</div>
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header titolo={{$titolo}}></x-header>

    {{$slot}}
    <script src="{{ asset('node_modules/mdbootstrap/js/mdb.min.js') }}"></script>
</body>
</html>