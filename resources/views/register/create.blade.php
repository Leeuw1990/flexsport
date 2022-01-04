<!DOCTYPE html>
<html>
<head>

</head>
<body class="antialiased">
<x-navbar/>
<h1>Register</h1>

<main>
    <form method="POST" action="/register">
        @csrf
{{--        Cross-site-request-forgery--}}

        <label for="name">
            Name
        </label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old("name") }}"
            required
        >
        @error("name")
        <p>{{ $message }}</p>
        @enderror

        <label for="username">
            Username
        </label>
        <input
        type="text"
        name="username"
        id="username"
        value="{{ old("username") }}"
        required
        >
        @error("username")
        <p>{{ $message }}</p>
        @enderror

        <label for="email">
            Email
        </label>
        <input
            type="email"
            name="email"
            id="email"
            value="{{ old("email") }}"
            required
        >

        @error("email")
        <p>{{ $message }}</p>
        @enderror

        <label for="password">
            password
        </label>
        <input
            type="password"
            name="password"
            id="password"
            required
        >

        @error("password")
        <p>{{ $message }}</p>
        @enderror

        <button
            type="submit"

        >
            Submit
        </button>

        @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
    </form>

</main>

</body>
</html>
