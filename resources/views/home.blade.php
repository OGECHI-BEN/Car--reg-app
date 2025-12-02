@extends('layout.main-layout')
@section('title') Home @endsection
@section('content')


    <header class="py-20  text-center h-[60vh] flex flex-col items-center justify-center bg-blend-overlay bg-[#000000aa]" id="home-background" style="background-image:url('img/inspector.jpg');background-repeat:no-repeat; background-size:cover;background-position:center;">
        <div class="container mx-auto">
            <h2 class="text-4xl text-white font-bold">Ensure Your Vehicle's Safety</h2>
            <p class="text-lg text-white mt-4">Comprehensive vehicle inspection services to keep you safe on the road.</p>
            <a href="#" class="mt-8 inline-block bg-yellow-700 text-white px-6 py-3 rounded-lg shadow-lg font-semibold">Get Started</a>
        </div>
    </header>

    <section class="container mx-auto py-12 ">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-yellow-700">Expert Inspections</h3>
                <p>Our certified technicians conduct thorough inspections using advanced diagnostic tools.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-yellow-700">Detailed Reports</h3>
                <p>Receive detailed reports outlining any issues found during the inspection.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-yellow-700">Peace of Mind</h3>
                <p>Drive with confidence knowing your vehicle has been thoroughly inspected for safety.</p>
            </div>
        </div>
        {{-- bg-gradient-to-b from-blue-400 to-blue-500 --}}
    </section>
@endsection