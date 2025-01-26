<nav class="navbar">
    <div class="navbar-logo">
        <img src="{{ asset('images/EmeraldPalacePng.png') }}" alt="Logo" />
    </div>
    <div class="navbar-burger" onclick="toggleMenu()">
        ☰
    </div>
    <div class="navbar-links">
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/room-suites') }}" class="{{ Request::is('room-suites') ? 'active' : '' }}">Room & Suites</a>
        <a href="{{ url('/facility') }}" class="{{ Request::is('facility') ? 'active' : '' }}">Facilities</a>
        <a href="{{ url('/offers') }}" class="{{ Request::is('offers') ? 'active' : '' }}">Offers</a>
        <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a>
    </div>
    
    <x-bookbutton></x-bookbutton>
</nav>
{{-- <script>src=" {{ asset('js/home.js') }}"></script> --}}

<script>
    const navbar = document.querySelector('.navbar');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        if (window.scrollY > lastScrollY) {
            // Scroll down - hide navbar
            navbar.classList.add('hidden');
        } else {
            // Scroll up - show navbar
            navbar.classList.remove('hidden');
        }
        lastScrollY = window.scrollY;
        }
    );
    
    function toggleMenu() {
        const navbarLinks = document.querySelector('.navbar-links');
        navbarLinks.classList.toggle('active');
    }
</script>

<style>
    /* Base styles */
    .navbar {
        background-color: aliceblue;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
        height: 4rem;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transform: translateY(0); /* Default posisi */
        transition: transform 0.3s ease-in-out; /* Tambahkan transisi */
    }

    .navbar-logo img {
        height: 2.5rem;
    }

    .navbar-links {
        display: flex;
        gap: 2rem;
        margin-right: 2rem;
    }

    .navbar-links a {
        color: #286550;
        text-decoration: none;
        padding: 0.5rem;
        position: relative;
        transition: background-color 0.3s, color 0.3s;
    }

    .navbar-links a::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #286550;
        transition: width 0.3s ease, left 0.3s ease;
        transform: translateX(-50%);
    }

    .navbar-links a:hover::after,
    .navbar-links a.active::after {
        width: 100%;
    }

    .navbar-burger {
        display: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: #286550;
    }

    .hidden {
        transform: translateY(-100%);
        transition: transform 0.5s ease-in-out;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .navbar-links {
            display: none;
            flex-direction: column;
            justify-content: center;
            gap: 1rem;
            position: absolute;
            top: 4rem;
            background-color: aliceblue;
            padding: 1rem 1rem;
            box-shadow: 0 2px 5px rgba(30, 241, 125, 0.1);
        }

        .navbar-links.active {
            display: flex;
            justify-content: center;
            left: 0px;
            right: -35px;
        }

        .navbar-burger {
            display: block;
        }
    }
</style>
