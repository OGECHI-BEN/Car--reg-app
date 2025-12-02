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
      
    <footer class="bg-yellow-700 rounded-sm shadow w-full">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <div>
                <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                    <img src="{{asset('img/white-logo-name.png')}}" alt="car icon" class="h-20 rounded-full ">
                    {{-- <span class="self-center text-black text-xl font-semibold hover:text-white">VIO INSPECTION</span> --}}
                </a>
            </div>
            <div class="flex items-center space-x-3 justify-center">
                <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                    <img src="{{asset('img/facebook.png')}}" alt="car icon" class="h-10 rounded-full ">
                </a>
                <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                    <img src="{{asset('img/instagram.png')}}" alt="car icon" class="h-10 rounded-full ">
                </a>
                <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                    <img src="{{asset('img/youtube.png')}}" alt="car icon" class="h-10 rounded-full ">
                </a>
                <a href="#" class="flex items-center flex-col md:flex-row md:space-x-3 md:rtl:space-x-reverse">
                    <img src="{{asset('img/linkedin.png')}}" alt="car icon" class="h-10 rounded-full ">
                </a>
            </div>
        </div>
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center justify-center">
          
            <div  class=" w-full md:block md:w-auto">
                <ul class="font-medium flex flex-col justify-center items-center p-4 md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
                
                    <li> 
                        <a href="{{url('/about')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-black" >About</a>
                    </li>
                    <li> 
                        <a href="{{url('/vehicleRegistration')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-black" > Vehicle Registration</a>
                    </li>
                    <li> 
                        <a href="{{url('/vehicleinspection')}}" class="block py-2 px-3 text-whiterounded md:p-0 dark:text-white hover:text-black" >Vehicle Inspection</a>
                    </li>
                    <li>
                         <a href="{{url('/signin')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-black" >Sign In</a>
                    </li>
                    <li>
                         <a href="{{url('/renew')}}" class="block py-2 px-3 text-white rounded md:p-0 dark:text-white hover:text-black" >Renew</a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="flex justify-center items-center border-t border-white mx-16">
            <span class="text-sm text-black font-bold sm:text-center"> &copy;2024 &nbsp; <a href="https://sundimension.com.ng/" target="_blank">Sundimension</a> &nbsp; </span> <span class="text-sm text-white sm:text-center">All Rights Reserved.</span>
        </div> 
    </footer>
    
</body>
</html>