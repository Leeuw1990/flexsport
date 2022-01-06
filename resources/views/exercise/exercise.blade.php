<h1>Exercise</h1>

<form method="POST" name="schema_workouts" action="/exercise">
    @csrf
@foreach($exercises as $exercise)
    <p>{{ $exercise->name }}</p>
    <input name="workout_id" value="{{ $exercise->id }}">
@endforeach

    <label for="repetition">
        Herhalingen
    </label>
    <input
        type="text"
        name="repetition"
        id="repetition"
        required
    >
    <label for="weight">
        Gewicht
    </label>
    <input
        type="text"
        name="weight"
        id="weight"
        required
    >

    <button
        type="submit"

    >
        Create
    </button>

</form>
