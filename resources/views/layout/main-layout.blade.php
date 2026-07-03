<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ app()->environment() === 'local' ? mix('css/app.css') : asset('css/app.css') }}">
    <link rel="icon" type="img/png" href="{{asset('img/white-logo-lone.png')}}">
    {{-- <link rel="icon" type="image/icon" href="./img/carservice.jpg"> --}}
    <title>Khala Project - @yield('title')</title>
    
</head>
<body>
    <nav class="border-white  text-white  bg-black">
        <div class="max-w-screen-xl flex flex-wrap  justify-between items-center p-4 mx-4">
            <a href="#" class="flex  items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                <img src="{{asset('img/white-logo-name.png')}}" alt="car icon" class="h-10 rounded-full">
                {{-- <span class="self-center text-yellow-700 text-xl font-semibold hover:text-white">VIO INSPECTION</span> --}}
            </a>
            <button data-collapse-toggle="vio-navbar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:text-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-700 dark:text-white dark:hover:bg-black dark:focus:ring-yellow-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div id="vio-navbar" class="hidden w-full md:block md:w-auto">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-yellow-600 rounded-lg bg-black md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
                    <li > 
                        <a href="{{url('/')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" aria-current="page">Home</a>
                    </li>
                    <li> 
                        <a href="{{url('/about')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" >About</a>
                    </li>
                    <li> 
                        <a href="{{url('/vehicleRegistration')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" > Vehicle Registration</a>
                    </li>
                    <li> 
                        <a href="{{url('/vehicleinspection')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" >Vehicle Inspection</a>
                    </li>
                        <li>
                         <a href="{{url('/renew')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" >Renew</a>
                    </li>
                   
                    <li>
                         <a href="{{url('/signin')}}" class="block py-2 px-3 text-white bg-black rounded md:p-0 dark:text-white hover:text-yellow-700" >Sign In</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
    <main class="min-h-screen">
        @yield('content')
    </main>
      
    <footer class="bg-black flex  rounded-sm shadow w-full p-8 px-10 md:px-12 lg:*:px-16">
        <div class="w-full mx-auto max-w-screen-xl p-4">
            <div class="grid grid-cols-1 md:grid-cols-3  sm:items-center sm:justify-evenly md:px-12 lg:*:px-16">
                <div class="flex flex-col items-center justify-center">
                    <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse mb-6 md:mb-10">
                        <img src="{{asset('img/white-logo-name.png')}}" alt="logo" class="h-20 rounded-full ">
                        {{-- <span class="self-center text-black text-xl font-semibold hover:text-white">VIO INSPECTION</span> --}}
                    </a>
                    <form action="" class="flex items-center mb-6 justify-between md:mb-10 ">
                        <input type="email" placeholder="Enter your email" class="focus:border-transparent px-4 py-2 rounded-md text-black gap-3">
                        <button type="submit" class="px-4 text-white py-2 bg-yellow-700">Subscribe</button>
                    </form>
                </div>
                <div  class="w-full md:block md:w-auto">
                    <ul class="font-medium flex flex-col justify-center items-center md:items-start p-4 md:p-0 mt-4   rtl:space-x-reverse md:mt-0 md:border-0 ">
                        <li class="mb-2"> 
                            <a href="{{url('/about')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-yellow-700" >About</a>
                        </li>
                        <li class="mb-2"> 
                            <a href="{{url('/vehicleRegistration')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-yellow-700" > Vehicle Registration</a>
                        </li>
                        <li class="mb-2"class="mb-2"> 
                            <a href="{{url('/vehicleinspection')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-yellow-700" >Vehicle Inspection</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{url('/signin')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-yellow-700" >Sign In</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{url('/renew')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-yellow-700" >Renew</a>
                        </li>
                    
                    </ul>
                </div>
                <div class="flex flex-row sm:flex-col items-center md:items-start space-x-3 justify-center md:space-x-0 md:space-y-3 md:rtl:space-x-reverse md:justify-start">
                    <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                        <img src="{{asset('img/facebook.png')}}" alt="facebook" width="30" class="rounded-[50%] ">
                    </a>
                    <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                        <img src="{{asset('img/instagram.png')}}" alt="instagram" width="30" class="rounded-[50%]  ">
                    </a>
                    <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                        <img src="{{asset('img/youtube.png')}}" alt="youtube" width="30" class="rounded-[50%] ">
                    </a>
                    <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                        <img src="{{asset('img/linkedin.png')}}" alt="linkedin" width="30" class="rounded-[50%]">
                    </a>
                </div>
            </div>
            <div class="mt-6 md:mt-12 flex justify-center items-center border-t border-white mx-16 pb-10">
               <span class="text-sm text-yellow-700 font-bold sm:text-center"> &copy;2024 &nbsp; 
                <span class="text-sm text-white sm:text-center">All Rights Reserved.</span>
                <a href="https://ogechiben.dokohotelsasaba.com/" target="_blank" class="text-yellow-700">Min3rva</a> &nbsp; </span> 
            </div> 
        </div>
    </footer>
</body>
</html>