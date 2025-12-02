@extends('layout.main-layout')
@section('title') About @endsection
@section('content')
    <header class="py-10 bg-gradient-to-b from-blue-400 to-blue-500 text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl text-white font-bold">About Us</h2>
            <p class="text-lg text-white mt-4">Learn more about our mission and values.</p>
        </div>
    </header>

    <section class="container mx-auto py-12">
        <div class="max-w-2xl mx-auto grid grid-cols-1">
            <div>
                <h3 class="text-2xl font-bold mb-4  text-yellow-700">Our Mission</h3>
                <p class="mb-6">At Vehicle Inspection, our mission is to ensure the safety and reliability of every vehicle on the road. We believe that by providing comprehensive inspection services, we can help drivers feel confident in the condition of their vehicles and ultimately contribute to safer roads for everyone.</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold mb-4 text-yellow-700">Our Values</h3>
                <ul class="list-disc ml-8">
                    <li class="mb-2">Safety First: We prioritize the safety of our customers and their vehicles above all else.</li>
                    <li class="mb-2">
                        Quality Service: We are committed to providing thorough and accurate inspection services with the highest level of professionalism.
                    </li>
                    <li class="mb-2">
                        Integrity: We conduct our business with honesty and transparency, earning the trust of our customers and partners.
                    </li>
                    <li class="mb-2">
                        Continuous Improvement: We are dedicated to staying up-to-date with industry best practices and continually improving our services.
                    </li>
                </ul>
            </div>

        </div>
</section>
@endsection