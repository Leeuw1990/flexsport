<h1>Single workout</h1>
<a href="/">Ga terug</a>
@foreach($workouts as $workout)

<form method="POST" action="/your/{{ $workout->id }}" >
    @csrf
    <p>{{ $workout->name }}</p>
            <input type="hidden" name="schema_id" value="{{ $workout->pivot->schema_id }}">
            <input type="hidden" name="workout_id" value="{{ $workout->pivot->workout_id }}">
        <button type="submit">Delete</button>
</form>

@endforeach
