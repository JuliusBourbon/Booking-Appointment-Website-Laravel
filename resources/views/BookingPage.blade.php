<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="stylesheet" href="{{ asset('css/BookingPage.css') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Booking Modal -->
    <a id="homeBookNow" style="font-size: 1px">Book Now</a>
    <div id="bookingModal" class="modal">
        <div id="step2" class="modal-content">
            <form id="bookingForm" action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <h2>Identity</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <small class="error">{{ $name }}</small>
                @enderror
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <small class="error">{{ $email }}</small>
                @enderror
            
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                    <small class="error">{{ $phone }}</small>
                @enderror
            
                <label for="address">Address:</label>
                <textarea id="address" name="address">{{ old('address') }}</textarea>
                @error('address')
                    <small class="error">{{ $message }}</small>
                @enderror
            
                <h2>Booking Details</h2>
            
                <label for="room_type">Room Type:</label>
                <select id="room_type" name="roomid" required>
                    @foreach ($rooms as $room)
                        @if ($room->status == 'available') 
                            <option value="{{ $room->roomid }}" {{ old('roomid') == $room->roomid ? 'selected' : '' }}>
                                {{ $room->roomnumber }} ({{ $room->roomType->typename }})
                            </option>
                        @endif
                    @endforeach
                </select>                         
            
                <label for="check_in">Check-in Date:</label>
                <input type="date" id="check_in" name="check_in" value="{{ old('check_in', date('Y-m-d')) }}" min="{{ date('Y-m-d') }}" required>
                
                <label for="check_out">Check-out Date:</label>
                <input type="date" id="check_out" name="check_out" value="{{ old('check_out', date('Y-m-d', strtotime('+1 day'))) }}" min="{{ date('Y-m-d') }}" required>
            
                <label for="payment_method">Payment Method:</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="creditCard" {{ old('payment_method') == 'creditCard' ? 'selected' : '' }}>Credit Card</option>
                    <option value="bankTransfer" {{ old('payment_method') == 'bankTransfer' ? 'selected' : '' }}>Bank Transfer</option>
                </select>
            
                <button type="submit" id="confirmBooking" class="next-btn">Confirm</button>
            </form>            
        </div>

        <!-- Success/Failure Message -->
        <div id="bookingResult" class="modal-content hidden">
            <h2 id="resultTitle">Booking Result</h2>
            <p id="resultMessage"></p>
        </div> 
    </div>

    {{-- <script src=" {{ asset('js/home.js') }}"></script> --}}
    <script>
        @if(session('success'))
            // Menampilkan modal dan mengisi pesan
            document.getElementById('step2').classList.add('hidden');
            document.getElementById('bookingResult').classList.remove('hidden');
            document.getElementById('resultTitle').textContent = 'Success';
            document.getElementById('resultMessage').textContent = '{{ session('success') }}';
    
            // Menyembunyikan modal setelah 5 detik (5000 ms)
            setTimeout(function() {
                document.getElementById('bookingResult').classList.add('hidden');
                document.getElementById('step2').classList.remove('hidden');
            }, 4000);
        @elseif(session('error'))
            // Menampilkan modal dan mengisi pesan error
            document.getElementById('step2').classList.add('hidden');
            document.getElementById('bookingResult').classList.remove('hidden');
            document.getElementById('resultTitle').textContent = 'Error';
            document.getElementById('resultMessage').textContent = '{{ session('error') }}';
    
            // Menyembunyikan modal setelah 5 detik (5000 ms)
            setTimeout(function() {
                document.getElementById('bookingResult').classList.add('hidden');
                document.getElementById('step2').classList.remove('hidden');
            }, 4000);
        @endif

        window.onload = function() {
            // Set check-in to today's date
            var today = new Date().toISOString().split('T')[0];
            document.getElementById("check_in").value = today;

            // Set check-out to tomorrow's date
            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            document.getElementById("check_out").value = tomorrow.toISOString().split('T')[0];
        }
    </script>
    
</body>
</html>
