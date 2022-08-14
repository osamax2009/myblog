@extends('layout.default')
@section('content')
    <main class="px-3">
        <h1>Register</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group  mb-3 ">
                <input type="text" class="form-control" name='email' placeholder="Enter your email">
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group  mb-3 ">
                <input type="text" class="form-control" name='name' placeholder="Enter your full name">
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group  mb-3">
                <input type="password" class="form-control" name='password' placeholder="Enter your password">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>

    </main>
@endsection
