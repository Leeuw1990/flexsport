<!DOCTYPE html>
<html>
<head>

</head>
<body class="antialiased">
<h1>Schema</h1>
<x-navbar/>

{{--@foreach($workouts as $workout)--}}
{{--    <div>{{$workout->name}}</div>--}}

{{--@endforeach--}}

<form method="POST" action="?">
    <label for="training">Training day</label>
    <select id="training">
        <option value="day 1">Day 1</option>
        <option value="day 2">Day 2</option>
        <option value="day 3">Day 3</option>
        <option value="day 4">Day 4</option>
        <option value="day 5">Day 5</option>
        <option value="day 6">Day 6</option>
        <option value="day 7">Day 7</option>
    </select>
    <button type="submit">Kies dag</button>
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


