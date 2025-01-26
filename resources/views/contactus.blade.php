<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 2rem;
            height: 4rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease-in-out;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            transform: translateY(-10px);
        }

        .navbar-links {
            display: flex;
            gap: 2rem;
        }

        .navbar-links a {
            color: #286550;
            text-decoration: none;
            padding: 0.5rem;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: #204d3a;
        }

        .navbar-links a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #286550;
            transition: width 0.3s;
        }

        .navbar-links a:hover::after {
            width: 100%;
        }

        .navbar-links a.active {
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            margin-top: 5rem;
            text-align: center;
            background-image: linear-gradient(to bottom, rgba(53, 94, 75, 0.8), rgba(53, 94, 75, 0.9)), url('https://source.unsplash.com/1920x1080/?office,contact');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Contact Section */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 3rem auto;
            gap: 2rem;
            padding: 0 1rem;
        }

        .contact-info {
            flex: 1 1 45%;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(50px);
            animation: slideUp 0.8s forwards;
        }

        .contact-info h2 {
            color: #355e4b;
            margin-bottom: 1rem;
            text-align: center
        }

        .contact-tabs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .contact-tab {
            background-color: #f7f9fc;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .contact-tab:hover {
            background-color: #eef5f2;
            transform: scale(1.05);
        }

        .contact-tab i {
            font-size: 1.5rem;
            color: #286550;
            margin-right: 1rem;
        }

        .contact-tab p {
            margin: 0;
            font-size: 1rem;
        }

        .contact-form {
            flex: 1 1 45%;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(50px);
            animation: slideUp 0.8s forwards;
            animation-delay: 0.4s;
        }

        .contact-form h2 {
            color: #355e4b;
            margin-bottom: 1rem;
            text-align: center
        }

        .contact-form p {
            margin: 3rem;
            text-align: center
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            width: 100%;
            padding: 1rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: transform 0.2s, box-shadow 0.3s ease-in-out;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #286550;
            outline: none;
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form button {
            background-color: #286550;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #204d3a;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Map Section */
        .map {
            width: 100%;
            height: 300px;
            margin: 2rem auto;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                
            }

            .contact-info,
            .contact-form {
                flex: 1 1 100%;
                height: auto;
            }

            .contact-info {
                margin-bottom: 2rem;
            }

            .contact-tabs {
                grid-template-columns: repeat(1, 1fr);
            }

            .contact-form p {
                margin: 1rem;
            }

            form{
                margin: 0 1rem;
            }
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <x-popup></x-popup>

    <!-- Hero Section -->
    <x-layout><x-slot:title>{{ $title }}</x-slot:title></x-layout>

    <!-- Contact Section -->
    <div class="contact-section">
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <div class="contact-tabs">
                <div class="contact-tab">
                    <i class="fas fa-phone"></i>
                    <p>Phone: +1 (123) 456-7890</p>
                </div>
                <div class="contact-tab">
                    <i class="fas fa-envelope"></i>
                    <p>Email: Emeraldpalace@gmail.com</p>
                </div>
                <div class="contact-tab">
                    <i class="fab fa-instagram"></i>
                    <p>Instagram: @Emeraldpalace.official</p>
                </div>
                <div class="contact-tab">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Address: Jl. Belimbing Sari, Banjar Tambiyak, Pecatu, Uluwatu, Kabupaten Badung, Bali 80361</p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <p>
                Have questions or need assistance? We're here to help! Whether you're looking to book a stay, inquire about our services, or just want to reach out, feel free to contact us. Our team is ready to provide you with all the information you need and ensure your experience with us is exceptional. Get in touch today!
            </p>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input id="name" type="text" name="nama" value="{{ old('nama') }}" placeholder="Your Name" required>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                <textarea id="message" name="message" rows="5" value="{{ old('message') }}" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>                       
        </div>
    </div>

    <!-- Map Section -->
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11150.811829755601!2d115.12796011757555!3d-8.841622249365473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25add7437e1c1%3A0xb608f145222330a6!2sAlila%20Villas%20Uluwatu!5e0!3m2!1sid!2sid!4v1737172717065!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <x-footer></x-footer>

    <script src=" {{ asset('js/home.js') }}">
    </script>
</body>
</html>
