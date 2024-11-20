@extends('layout.app')
@section('content')
    <div class="flex justify-center">
      <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('login')}}" method="post">
            @csrf
            @if(@session('status'))
                <div class="p-4 w-full rounded-lg text-white text-center bg-red-500 mb-4">
                    {{session('status')}}
                </div>
            @endif
            <div class="mb-4">
                <lable for="email" class="sr-only">Email</lable>
                <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">
                @error('email')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <lable for="password" class="sr-only">Password</lable>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                @error('password')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember Me</label>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-semibold w-full">
                    Login
                </button>
            </div>
        </form>
      </div>
    </div>
@endsection 