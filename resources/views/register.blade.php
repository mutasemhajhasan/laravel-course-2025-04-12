@extends('admin')
@section('content')
    <main class="form-signin">
        <form method="POST" action="{{route('do-register')}}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please register</h1>
            <div class="form-floating">
                <input name="name" type="text" class="form-control" id="name" placeholder="name@example.com">
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            @if (isset($login_error))
                <h3>
                    <span style="color: red">

                        {{ $login_error }}
                    </span>
                </h3>
            @endif

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">

            </p>
        </form>
    </main>
@endsection
