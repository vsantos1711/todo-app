@extends('layout')

@section('user-login')
<form action="{{ route('task.store')}}" method="POST">
    <div class="container flex flex-col justify-center min-h-screen ">

        <h3 class="mb-4 text-5xl font-bold shadow-sm">Welcome to your
            <span class="text-red-600">TO-DO</span> APP
        </h3>

        <div class="flex flex-col rounded p-4 max-w-[70%] bg-slate-800 gap-2 ">
            <form action="">
                <label for="username" class="text-base font-semibold">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username..."
                    class="p-2 rounded bg-slate-600  max-w-[60%]">

                @error('username')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror

                <label for="password" class="text-base font-semibold">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password"
                    class="p-2 rounded bg-slate-600 max-w-[60%]">

                @error('password')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror

                <div class="flex justify-between mt-2">
                    <button type="submit"
                        class="px-4 py-2 font-bold transition rounded bg-emerald-700 hover:bg-emerald-600">
                        Create
                    </button>

                    <a href="{{route('user.create')}}"
                        class="px-4 py-2 font-bold transition bg-blue-700 rounded hover:bg-blue-600">
                        Create your account
                    </a>
                </div>
            </form>
        </div>
    </div>
</form>
@endsection