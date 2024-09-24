@extends('layouts.app')
<footer class="bg-gray-800 text-white py-4">

<!-- Company Copyright -->
    <p class="text-center">
        &copy; {{ date('Y') }} Cool-Tech Co. All rights reserved.
    </p>

    <!-- Navigation Links -->
    <ul class="flex justify-center space-x-4 mt-2">
        <li>
            <a href="{{ route('search') }}" class="hover:underline">Search</a>
        </li>
        <li>
            <a href="{{ route('legal') }}" class="hover:underline">Terms of Use & Privacy Policy</a>
        </li>
    </ul>
</footer>
