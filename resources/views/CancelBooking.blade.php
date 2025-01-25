<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CancelBooking.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <title>Cancel Booking</title>
</head>
<body>

    <div class="content">
        <h1 style="text-align: center">Cancel Booking</h1>

        @if (!$success)
            <p class="error">{{ $message }}</p>
        @else
            <h1 style="text-align: center">{{ $message }}</h1>
            <h3>Name : {{ $booking->name }}</h3>
            <h3>Email : {{ $booking->email }}</h3>
            <h3>Phone : {{ $booking->phone }}</h3>
            <h3>Address : {{ $booking->address }}</h3>
            <h3>Room Number : {{ $booking->room->roomnumber }}</h3>
            <h3>Roomtype : {{ $booking->room->roomtype->typename }}</h3>
            <h3>Date : {{ $booking->check_in }} - {{ $booking->check_out }}</h3>
            <!-- Form konfirmasi pembatalan -->
            <div class="buttons">
                <form action="{{ route('DeleteBooking', ['id' => $booking->id]) }}" method="POST">
                    @csrf
                    <button type="submit">Yes, Cancel Booking</button>
                </form>

                <!-- Tombol kembali -->
                <a href="{{ url('/') }}">No, Go Back</a>
            </div>
        @endif
    </div>
</body>
</html>
