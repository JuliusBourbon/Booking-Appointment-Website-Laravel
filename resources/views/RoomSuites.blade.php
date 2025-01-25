<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerald Place - Room & Suites</title>
    <link rel="stylesheet" href="{{ asset('css/RoomSuites.css') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<body>
    <x-navbar></x-navbar>
    <x-layout><x-slot:title>{{ $title }}</x-slot:title></x-layout>
    
    <div class="content">
        <h3>Make Yourself At Home</h3>
        <div class="desc">
            <p>Welcome to a place where comfort and convenience meet. Whether you're here for business or leisure, we aim to make every moment of your stay special. Our rooms are designed with you in mind, offering a perfect blend of relaxation and luxury. From the moment you walk through our doors, we want you to feel like you're at home, with all the amenities and services you need to make your stay unforgettable. Let us take care of the details, so you can focus on enjoying your time with us.</p>
        </div>
        
        <x-popup></x-popup>
        <div class="rooms">
            @forelse($roomTypes as $roomType)
            <div class="room">
                <img src="{{ $roomType->img }}" class="img" alt="{{ $roomType->typename }}">
                <p class="size">{{ $roomType->size }}m<sup>2</sup></p>
                <div class="title">
                    <a href="{{ route('roomdesc', ['id' => $roomType->roomtypeid]) }}" class="{{ Request::is('/') ? 'active' : '' }}">{{ $roomType->typename }} Room Details</a>
                </div>
                <p style="text-align: center">{{ Str::limit($roomType->desc, 70) }}</p><br>
                <x-bookbutton></x-bookbutton>
            </div>
        @empty
            <p>No rooms available.</p>
            @endforelse
        </div>
    </div>

    <x-footer></x-footer>

</body>
<script src=" {{ asset('js/home.js') }}"></script>
</html>
