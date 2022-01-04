<!DOCTYPE html>
<html>
<head>

</head>
<body class="antialiased">
<x-navbar/>
<h1>workout</h1>

@foreach($workouts as $workout)
    <div>{{ $workout->name }}</div>


@endforeach

</body>
</html>
