<div onclick="openIframe(event)" id="homeBookNow" class="book-button">
    <a href="{{ route('bookings') }}" onclick="event.preventDefault(); openIframe(event)">Book Now</a>
</div>

<style>
    .book-button a{
        text-decoration: none;
        background-color: #225543;
        padding: 10px 20px;
        color: white;
        border-radius: 5px;
    }
</style>