<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #f0f0f0;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #4CAF50;
        }
        .content {
            margin-bottom: 20px;
        }
        .content h2 {
            color: #333;
        }
        .content p {
            margin: 10px 0;
        }
        .cta-button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #d9534f;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .cta-button:hover {
            background-color: #c9302c;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
            border-top: 1px solid #f0f0f0;
            padding-top: 10px;
        }

        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Thank You for Booking!</h1>
        </div>
        <div class="content">
            <h2>Booking Details</h2>
            <h3>Name : {{ $booking->name }}</h3>
            <h3>Email : {{ $booking->email }}</h3>
            <h3>Phone : {{ $booking->phone }}</h3>
            <h3>Address : {{ $booking->address }}</h3>
            <h3>Room Number : {{ $booking->room->roomnumber }}</h3>
            <h3>Roomtype : {{ $booking->room->roomtype->typename }}</h3>
            <h3>Date : {{ $booking->check_in }} - {{ $booking->check_out }}</h3>
            <h3>Price : Rp.{{ number_format($booking->Total_Price, 0, ',', '.') }}</h3>
            <p>We are pleased to confirm your booking. If you have any questions, feel free to contact us.</p>
            <a class="cta-button" href="{{ url('/contact') }}" style="color: #ffffff; text-decoration: none; background-color: #d9534f; padding: 10px 20px; border-radius: 5px; display: inline-block; font-weight: bold;">Contact Us</a>
            <p>If you wish to cancel this booking, please click the button below:</p>
            <a href="{{ route('CancelBooking', $booking->id) }}" class="cta-button" style="color: #ffffff; text-decoration: none; background-color: #d9534f; padding: 10px 20px; border-radius: 5px; display: inline-block; font-weight: bold;">Cancel Booking</a>
        </div>
        <div class="footer">
            <p>&copy; 2025 Booking System. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
