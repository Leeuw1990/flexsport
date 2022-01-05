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

{{--    @foreach($users as $user)--}}
{{--        <p>{{ $user->name }}</p>--}}
{{--        <p>{{ $user->id }}</p>--}}
{{--        <p>{{ $user->username }}</p>--}}
{{--        <p>{{ $user->email }}</p>--}}
{{--    @endforeach--}}

    </body>
</html>
