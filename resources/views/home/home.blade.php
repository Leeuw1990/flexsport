<!DOCTYPE html>
<html>
    <head>

    </head>
    <body class="antialiased">
    <x-navbar/>



    @auth
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Log out</button>
    </form>
    @endauth

    <h1>Home</h1>

    @if(session()->has("success"))
        <div>
            <p>{{ session("success") }}</p>
        </div>
    @endif

    </body>
</html>
