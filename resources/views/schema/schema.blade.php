<h1>Maak schema</h1>

<a href="/">Ga terug</a>

<form method="POST" action="/schema">
    @csrf
    <label for="username">
        Schema naam
    </label>
    <input
        type="text"
        name="day"
        id="day"
        required
    >
{{--    <label for="day">Dag</label>--}}
{{--    <select name="day">--}}
{{--        <option value="Maandag">Maandag</option>--}}
{{--        <option value="Dinsdag">Dinsdag</option>--}}
{{--        <option value="Woensdag">Woensdag</option>--}}
{{--        <option value="Donderdag">Donderdag</option>--}}
{{--        <option value="Vrijdag">Vrijdag</option>--}}
{{--        <option value="Zaterdag">Zaterdag</option>--}}
{{--        <option value="Zondag">Zondag</option>--}}
{{--    </select>--}}
            <ul>
        @foreach($exercises as $key => $exercise)
                    <li>{{ $exercise->name }}</li>
                    <input type="checkbox"  name="workout_id[{{$key}}]" value="{{ $exercise->id }}">
        @endforeach
            </ul>

    <button type="submit">Maak</button>

</form>
