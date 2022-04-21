<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="antialiased">

        <div id="app">
            {{-- <example-component></example-component> --}}
            <router-link to="/"> Welcome </router-link>
            <router-link to="/todo"> ToDo </router-link>
            <br>
            <to-do></to-do>
        </div>
        <router-view />
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    </body>
</html>
