@php
    DB::listen(function ($query) {
    logger($query->sql);
    logger($query->bindings);
    logger($query->time);
});

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <title>Emerald Palace</title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="slides-container">
        <x-popup></x-popup>

        <!-- Slide 1 -->
        <div class="slide slide-1">
            <header>
                <div class="logo">
                    <img src="{{ asset('images/EmeraldPalacePng.png') }}" alt="Logo" />
                </div>
                <h1>EMERALD PALACE</h1>
                <h3>PEACEFUL ESCAPE<br>BALI ISLAND</h3>
            </header>
            
            <nav class="nav-2">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/room-suites') }}">Room & Suites</a>
                <a href="{{ url('/facility') }}">Facilities</a>
                <a href="{{ url('/offers') }}">Offers</a>
                <a href="{{ url('/contact') }}">Contact Us</a>
            </nav>
        
            <div class="content">
                <h3>Book your extended stay at Emerald Palace!</h3>
                <p>Tucked in the vibrant eastern corner of Bali Island, Emerald Palace extends a warm welcome for those searching for a new home.</p>
                <div class="buttons">
                    <a onclick="openIframe()" id="homeBookNow" class="book-now">Book Now</a>
                    <a href="{{ url('/contact') }}" class="send-enquiry">Send Enquiry</a>
                </div>
                <p>Or Simply Call Us At +6815293124812</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide slide-2">
            <h1>Life's a Breeze</h1>
            <p>Each of our apartments features a beautiful sea view and a balcony linking the outdoors seamlessly to the indoors. Our high ceilings (at 2.9 metres) and bespoke wood-rich fittings create a basic tonal palette and an original yet lofty look and feel. Enjoy elevated home-comforts in your new home-away-from-home on Bali Island at Emerald Palace Waterfront Suites.</p>
            <div class="card-container">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/eb/af/f0/ebaff0da02ddb72a949a3f41fa120120.jpg" alt="Your Personal Residence">
                    <h3>Your Luxurious Escape</h3>
                    <p>
                        Experience modern living with premium facilities and breathtaking ocean views at Bali Island's Emerald Waterfront Suites.
                    </p>
                </div>
                <div class="card">
                    <img src="https://i.pinimg.com/236x/fd/d2/fb/fdd2fbc952e048e21ea372375a46f9b8.jpg" alt="Hidden Foodie Haven">
                    <h3>Elegant Dining Experience</h3>
                    <p>
                        Start your day with a delightful breakfast featuring fresh fruits, waffles, and refreshing juices, all served with a touch of elegance.
                    </p>
                </div>
                <div class="card">
                    <img src="https://i.pinimg.com/474x/0a/12/19/0a1219682d4adf8daaa99492e2a4cddd.jpg" alt="Comfort of Home">
                    <h3>Serenity in Comfort</h3>
                    <p>
                        Enjoy ultimate comfort in a stylish hotel room with warm lighting, modern design, and a calming ambiance.
                    </p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide slide-3" id="location">
            <h1>Located in Bali</h1>
            <p>Emerald Palace Waterfront Suites is conveniently located in the Bali neighbourhood. Traverse the typhoon shelters, shopping mecca, heritage sites, and peaceful havens that make up the unique Bali  Island East.</p>
            <!-- Map Section -->
            <div class="Map-Section">
                <div class="address">
                    <h2>Getting To Emerald Palace</h2>
                    <p>Jl. Belimbing Sari, Banjar Tambiyak, Pecatu, Uluwatu, Kabupaten Badung, Bali 80361</p>
                </div>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11150.811829755601!2d115.12796011757555!3d-8.841622249365473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25add7437e1c1%3A0xb608f145222330a6!2sAlila%20Villas%20Uluwatu!5e0!3m2!1sid!2sid!4v1737172717065!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        {{-- Slide 4 --}}
        <div class="slide slide-4" id="reviews">
            <h1>Hear from Our Guest</h1>
            <h2>Explore what keeps our guests coming back to our hotels and serviced apartments over the years.</h2>
            <@foreach ($reviews as $review)
                <div class="review-card">
                    <div class="Rating">
                        <h2>{{ $review->rating }}/10</h2>
                    </div>
                    <div class="review-text">
                        <p>"{{ $review->review }}"</p>
                    </div>
                    <div class="reviewer">
                        <p><b>{{ $review->nama }}</b>, {{ \Carbon\Carbon::parse($review->created_at)->format('d F Y') }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Garis indikator -->
            <div class="slider-indicators">
                @foreach ($reviews as $key => $review)
                    <div class="indicator" data-index="{{ $key }}" style="{{ $key === 0 ? 'background-color: #007bff;' : '' }}"></div>
                @endforeach
            </div>
        </div>

        {{-- Slide 5 --}}
        <div class="slide slide-5" id="give-review">
            <h1>How was your experience with us?</h1>
            <h1>We'd love to hear your feedback!</h1>
            <div class="contact-form">
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    <input id="name" type="text" name="nama" value="{{ old('nama') }}" placeholder="Your Name" required>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                    <textarea id="review" name="review" rows="5" value="{{ old('review') }}" placeholder="Your Review" required></textarea>
                    <label for="rating">Rating (1-10):</label>
                    <input id="rating" type="number" name="rating" min="1" max="10" value="{{ old('rating') }}" placeholder="Your Rating" required>
                    <button type="submit">Send</button>
                </form>                       
            </div>
        </div>
        
        <x-footer></x-footer>

    </div>

    
    <script src=" {{ asset('js/home.js') }}">
    </script>
</body>
</html>
