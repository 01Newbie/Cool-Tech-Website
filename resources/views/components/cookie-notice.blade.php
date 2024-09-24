<div id="cookie-notice" class="fixed-bottom bg-light text-dark p-3 d-flex justify-content-between align-items-center" style="display: none;">
    <span>This website uses cookies to ensure you get the best experience on our website.</span>
    <button id="accept-cookies" class="btn btn-primary btn-sm">Accept</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cookieNotice = document.getElementById('cookie-notice');
        const acceptButton = document.getElementById('accept-cookies');

        console.log('Checking cookie acceptance status...');

        // Check if the user has already accepted cookies
        if (!localStorage.getItem('cookiesAccepted')) {
            console.log('Cookies not accepted. Displaying notice...');
            
            // Show the cookie notice if not accepted
            cookieNotice.style.display = 'flex';
        } else {
            console.log('Cookies already accepted. No notice displayed.');
        }

        // Accept cookies
        acceptButton.addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieNotice.style.display = 'none'; 
        });
    });
</script>
