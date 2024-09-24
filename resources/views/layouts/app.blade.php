<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .footer {
            margin-bottom: 1cm; /* Space above the cookie notice */
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        <nav class="bg-light p-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="navbar-collapse">
                    <ul class="flex space-x-4">
                        <li><a class="nav-link" href="/">Home</a></li>
                        <li><a class="nav-link" href="/about">About Us</a></li>
                        <li><a class="nav-link" href="/legal">Legal</a></li>
                        <li><a class="nav-link" href="/search">Search</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white text-center py-4 footer">
            <p>© 2024 Cool-Tech Co. All rights reserved.</p>
            <p><a href="/terms">Terms of Use</a> &bull; <a href="/privacy">Privacy Policy</a></p>
        </footer>

        <!-- Cookie Notice -->
        @if(!request()->hasCookie('cookiesAccepted'))
    <div class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white text-center p-3" id="cookie-notice">
        <p>This website uses cookies to ensure you get the best experience. 
           <a href="#" class="underline" id="accept-cookies">Accept</a>
        </p>
    </div>
@endif

    </div>

    <!-- JavaScript for Cookie Acceptance -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const acceptLink = document.querySelector('#accept-cookies');
    if (acceptLink) {
        acceptLink.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior
            console.log('Accept button clicked'); // Debugging line
            document.cookie = "cookiesAccepted=true; path=/; max-age=" + 60*60*24*30 + "; SameSite=None; Secure"; // Set cookie for 30 days
            console.log('Cookie set'); // Debugging line
            location.reload(); // Reload the page to hide cookie notice
        });
    } else {
        console.log('Accept link not found'); // Debugging line
    }
});

    </script>
</body>
</html>
