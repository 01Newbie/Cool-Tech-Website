@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Legal Information</h1>
        
         <!-- Section for Terms of Use -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Terms of Use</h2>
            <p class="text-gray-700 mb-4">Welcome to our website. By accessing this site, you agree to abide by the following terms of use:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>Usage of this site is at your own risk.</li>
                <li>Content is for informational purposes only.</li>
                <li>We reserve the right to modify these terms at any time.</li>
            </ul>
        </div>

         <!-- Section for Privacy Policy -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Privacy Policy</h2>
            <p class="text-gray-700 mb-4">Your privacy is important to us. We are committed to protecting your personal information. Our privacy policy includes:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>What information we collect from you.</li>
                <li>How we use your information.</li>
                <li>How we protect your information.</li>
                <li>Your rights regarding your information.</li>
            </ul>
        </div>

        <!-- Section for GDPR Compliance -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">GDPR Compliance</h2>
            <p class="text-gray-700 mb-4">We comply with the General Data Protection Regulation (GDPR) by:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>Obtaining your explicit consent to process your personal data.</li>
                <li>Providing you with access to your personal data upon request.</li>
                <li>Allowing you to request corrections to your personal data.</li>
                <li>Ensuring the secure handling of your data.</li>
            </ul>
        </div>
    </div>
@endsection
