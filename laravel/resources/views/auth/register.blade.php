@extends('layouts.app')

<!-- Content section -->
@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register') }}" method="post">
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}"
                />
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Your username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                    value="{{ old('username') }}"
                />
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Your email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}"
                />
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Your password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                    value="{{ old('password') }}"
                />
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only"
                    >Repeat password</label
                >
                <input
                    type="password_confirmation"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="Repeat password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                    value="{{ old('password_confirmation') }}"
                />
            </div>
            <div>
                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"
                >
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
