<div>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Location</h4>
                <p>Jl. Belimbing Sari, Banjar Tambiyak, Pecatu, Uluwatu, Kabupaten Badung, Bali 80361</p>
                <p>Admin 1: +852 2178 2288</p>
                <p>Admin 2: +852 2178 2282</p>
                <p>Email: <a href="mailto:emeraldpalace@gmail.com">emeraldpalace@gmail.com</a></p>
            </div>
            <div class="footer-section">
                <h4>For Our Guests</h4>
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/room-suites') }}" class="{{ Request::is('room-suites') ? 'active' : '' }}">Room & Suites</a></li>
                    <li><a href="{{ url('/facility') }}" class="{{ Request::is('facility') ? 'active' : '' }}">Facilities</a></li>
                    <li><a href="{{ url('/offers') }}" class="{{ Request::is('offers') ? 'active' : '' }}">Offers</a></li>
                    <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>About Us</h4>
                <ul>
                    <li><a href="{{ url('/') }}#location">Location</a></li>
                    <li><a href="{{ url('/') }}#reviews">What people say</a></li>
                    <li><a href="{{ url('/') }}#give-review">Give us a Review</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-social">
            <a href="#"><img src="https://logodownload.org/wp-content/uploads/2017/04/instagram-logo.png" alt="Instagram"></a>
            <a href="#"><img src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-1.png" alt="Twitter"></a>
            <a href="#"><img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-1-2-2048x2048.png" alt="Facebook"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/128/5941/5941217.png" alt="Email"></a>
        </div>
    </footer>
</div>

<style>
    footer {
        background-color: #286550;
        color: white;
        padding: 2rem 0;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1140px;
        margin: 0 auto;
        gap: 1.5rem;
    }

    .footer-section {
        flex: 1 1 calc(33.33% - 1rem); /* Membagi 3 kolom secara merata */
        min-width: 200px; /* Lebar minimal agar elemen tidak terlalu kecil */
    }

    .footer-section h4 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: bold;
    }

    .footer-section p,
    .footer-section ul {
        margin: 0;
        margin-bottom: 0.5rem;
        padding: 0;
        list-style: none;
    }

    .footer-section ul li {
        margin: 0.5rem 0;
    }

    .footer-section ul li a {
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    .footer-section ul li a:hover {
        color: #c0e1d0;
    }

    .footer-social {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 1.5rem;
        gap: 1rem;
    }

    .footer-social a img {
        width: 24px;
        height: 24px;
        transition: transform 0.3s;
    }

    .footer-social a:hover img {
        transform: scale(1.2);
    }

    @media (max-width: 900px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }

        .footer-section {
            flex: 1 1 100%; /* Setiap elemen akan menggunakan seluruh lebar layar */
            text-align: center;
        }

        .footer-section ul li {
            margin: 0.25rem 0;
        }

        .footer-social {
            gap: 0.75rem;
        }

        .footer-social a img {
            width: 20px;
            height: 20px;
        }
    }

    @media (max-width: 480px) {
        footer {
            padding: 1rem;
        }

        .footer-section h4 {
            font-size: 1.25rem;
        }

        .footer-social a img {
            width: 18px;
            height: 18px;
        }
    }
</style>
