<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="schema.css">
</head>
<body class="antialiased">
<h1>Schema</h1>
<x-navbar/>

<form method="POST" action="#">
    <ul>
        @foreach($exercises as $exercise)
            <li>{{ $exercise->name }}</li>
            <li><a href="/exercise/{id}{{ $exercise->id }}">Voeg toe</a></li>
        @endforeach
    </ul>
</form>




</body>
</html>

{{--1: Kan hier schemaś toevoegen.--}}
{{--2: Kan kiezen uit de workouts.--}}
{{--3: De schema genarator, voor het geval je niet naar de sportschool kan.--}}

{{--Create schema--}}
{{--Update schema--}}
{{--Delete schema--}}
{{--genarate alternative schema--}}
