<h1>Select a day</h1>

<form method="POST" name="schema" action="/schema">
    @csrf
    <label for="day">Maak schema</label>
        <select name="day">
            <option value="maandag">Maandag</option>
        </select>

    <button
        type="submit"
    >
        Create
    </button>
</form>

<ul>
@foreach($schemas as $schema)
        <li><a href="/select/{id} {{ $schema->day }}">{{ $schema->day }}</a></li>
@endforeach
</ul>
