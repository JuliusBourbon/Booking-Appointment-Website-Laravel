<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Thank You for Your Booking!</h1>

    <p>Dear {{ $booking->name }},</p>
    <p>Your booking has been confirmed with the following details:</p>

    <ul>
        <li><strong>Room Number:</strong> {{ $booking->room->roomnumber }}</li>
        <li><strong>Room Type:</strong> {{ $booking->room->roomType->typename }}</li>
        <li><strong>Check-in Date:</strong> {{ $booking->check_in }}</li>
        <li><strong>Check-out Date:</strong> {{ $booking->check_out }}</li>
        <li><strong>Payment Method:</strong> {{ ucfirst($booking->payment_method) }}</li>
    </ul>

    <p>We look forward to hosting you. If you have any questions, please contact us at support@yourhotel.com.</p>

    <p>Thank you,<br>Your Hotel Team</p>
</body>
</html>
