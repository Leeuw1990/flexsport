<h1>Jou schema</h1>
<a href="/">Ga terug</a>




@foreach($workouts as $workout)
    <form METHOD="POST" action="/your">
        @csrf



    </form>
{{--    <form>--}}
{{--        @csrf--}}
{{--        <label>Kies schema</label>--}}
{{--        <select>--}}
{{--            <option>{{ $workout->day }}</option>--}}
{{--        </select>--}}


{{--    </form>--}}

    <form method="POST" >
        @csrf
    <p>{{ $workout->name }}</p>
{{--        <input name="schema_id" value="{{ $workout->pivot->schema_id }}">--}}
{{--        <input name="workout_id" value="{{ $workout->pivot->workout_id }}">--}}
        <a href="/getworkout/{{ $workout->id }}">{{ $workout->day }}</a>
{{--    <button type="submit">Delete</button>--}}
</form>
@endforeach
