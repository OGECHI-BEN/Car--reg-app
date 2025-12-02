@extends('layout.main-layout')
@section('title') Sign Up @endsection

@section('content')
<h1 class="text-center  text-yellow-700  font-extrabold text-xl m-auto py-[20px] md:py-[50px]">Welcome back please sign Up</h1>
    <form action="{{route('register-user')}}" method="POST" class="max-w-sm mx-auto">
        @if(Session::has('success'))
        <div class="text-white bg-green-900" role="alert">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="bg-red-800 text-white" role="alert">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="mb-3">
            <label for="name" class=" block mb-2 text-sm text-gray-900 "> User Name:</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-800 block w-full p-3 ">
            <span class="text-red-500">@error('name'){{$message}} @enderror</span>
        </div> 
        <div class="mb-3">Email</label>
            <input type="email" id="email" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-800 block w-full p-3 " name="email" value="{{old('email')}}">
            <span class="text-red-500">@error('email'){{$message}} @enderror</span>
        </div> 
        <div class="mb-3">
            <label for="password" class=" block mb-2 text-sm text-gray-900 da"> Password:</label>
            <input type="password" id="password" {{old('password')}} required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-800 block w-full p-3 ">
            <span class="text-red-500"></span>
        </div> 
        {{-- <div class="mb-3">
            <label for="confirmPassword" class=" block mb-2 text-sm text-gray-900 "> Confirm password:</label>
            <input type="password" id="confirmPassword" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-800 block w-full p-3 ">
        </div>  --}}
        <div class="flex items-start mb-4">
            <div class="flex items-center justify-end h-5">
                <input type="checkbox" value id="rememberPassword" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-gray-700 focus:ring-3">
            </div>
            <label for="rememberPassword" class=" text-sm font-medium ms-2 text-yellow-700"> Remember Me</label>
        </div>
        <div>

            <button type="submit" class="text-white bg-green-900 hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-green-600 font-mediun rounded-lg text-center text-sm w-full sm:w-auto px-5 py-3 font-bold"> Sign Up</button>
        </div>
        <div>
            <a href="signin" class=" text-xl text-green-900">Already have an account!! <span class="text-xl font-bold text-yellow-700">  please Sign In</span></a>
            
        </div>
    
    </form>
@endsection