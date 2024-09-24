@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">

     <!-- Main heading for the About Us page -->
        <h1 class="text-4xl font-bold mb-6 text-center">About Us</h1>
        
        <!-- Section for the company's mission statement -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
            <p class="text-gray-700 mb-4">At Cool Tech, our mission is to innovate and inspire. We are dedicated to providing cutting-edge technology solutions that empower businesses and enhance everyday life.</p>
        </div>

        <!-- Section describing the company -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Who We Are</h2>
            <p class="text-gray-700 mb-4">We are a passionate team of tech enthusiasts and industry experts. With years of experience in software development and hardware innovations, we strive to push the boundaries of technology.</p>
        </div>

         <!-- Section outlining what the company does -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">What We Do</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Software Development: Custom applications tailored to your needs.</li>
                <li>Hardware Solutions: Innovative products that redefine technology.</li>
                <li>Consulting Services: Expert guidance to help you navigate the tech landscape.</li>
            </ul>
        </div>

          <!-- Section encouraging people to join the company -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Join Us</h2>
            <p class="text-gray-700 mb-4">We are always looking for talented individuals to join our team. If you are passionate about technology and want to make a difference, get in touch!</p>
        </div>
    </div>
@endsection
