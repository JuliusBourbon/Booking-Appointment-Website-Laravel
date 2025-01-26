<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
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

        .content {
            width: 90%; /* Lebar konten */
            max-width: 1200px; /* Batas maksimal lebar */
            background-color: #ffffff;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 3rem auto; /* Posisikan di tengah */
        }
        .content h3{
            font-size: 40px;
            text-align: center
        }

        .content .desc {
            text-align: center; /* Deskripsi rata kiri */
            margin: 0 auto;
            max-width: 50%; /* Agar tetap sejajar di tengah */
        }

        .title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 30px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .tab {
            margin: 0 10px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .tab.active {
            background-color: #004d40;
            color: #fff;
            border-color: #004d40;
        }

        .offers {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .offer {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .offer:hover {
            transform: scale(1.05);
        }

        .offer img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .offer-title {
            font-size: 1.1em;
            font-weight: bold;
            margin: 15px 0;
        }

        .offer-content {
            padding: 15px;
            text-align: left;
        }

        @media (max-width: 768px) {
            .content {
                padding: 1rem;
            }

            .content h3 {
                font-size: 30px;
            }

            .content .desc {
                max-width: 100%;
            }

            .offers {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body>
    <x-navbar></x-navbar>
    <x-popup></x-popup>
    <x-layout><x-slot:title>{{ $title }}</x-slot:title></x-layout>

    <div class="content">
        <h3 class="title">Offers</h3>
        <p class="desc">Enjoy special discounts and dining offers when you book directly with us. Check back often for the latest promotions and packages!</p>
<br>
        <div class="offers" id="offers">
            <div class="offer" data-category="all">
                <img src="https://i.pinimg.com/736x/2f/77/e5/2f77e5332584a8b14f80d42149b53025.jpg" alt="Opening Offer">
                <div class="offer-content">
                    <h4 class="offer-title">Weekend Discount</h4>
                    <p>Offer special discounts for stays over the weekend (Friday to Sunday). This can attract guests looking for a short getaway or staycation.</p>
                </div>
            </div>

            <div class="offer" data-category="all">
                <img src="https://i.pinimg.com/236x/63/4b/78/634b787e8035b423bb9869bad061f00c.jpg" alt="A Journey to Experience">
                <div class="offer-content">
                    <h4 class="offer-title">Family Package</h4>
                    <p>Offer family-friendly stay packages that include large rooms with kid-friendly amenities, breakfast for the family, and tickets to local attractions.</p>
                </div>
            </div>

            <div class="offer" data-category="extended">
                <img src="https://i.pinimg.com/736x/52/eb/1e/52eb1ed9108bb92f130e327dab121a5a.jpg" alt="Extended Stay">
                <div class="offer-content">
                    <h4 class="offer-title">Honeymoon Package</h4>
                    <p>Create a romantic package for newlyweds or couples celebrating special moments, with features like a decorated room, champagne, and a candlelit dinner.</p>
                </div>
            </div>

            <div class="offer" data-category="short">
                <img src="https://i.pinimg.com/236x/07/9a/47/079a47da7cb81d5ec6653b6574b810ba.jpg" alt="Advance Purchase">
                <div class="offer-content">
                    <h4 class="offer-title">Long Stay Package</h4>
                    <p>Offer discounts or bonuses for guests who book longer stays (more than 7 nights), perfect for business trips or extended vacations.</p>
                </div>
            </div>

            <div class="offer" data-category="short">
                <img src="https://i.pinimg.com/736x/2f/6c/34/2f6c3474c287ad4d1af21285f9d068cc.jpg" alt="Advance Purchase">
                <div class="offer-content">
                    <h4 class="offer-title">Seasonal Offers</h4>
                    <p>Tailor offers to specific seasons or holidays, such as Christmas, New Year, or summer, with unique experiences tied to the theme.</p>
                </div>
            </div>

            <div class="offer" data-category="short">
                <img src="https://i.pinimg.com/736x/07/9a/47/079a47da7cb81d5ec6653b6574b810ba.jpg" alt="Advance Purchase">
                <div class="offer-content">
                    <h4 class="offer-title">Exclusive Member Offers</h4>
                    <p>Provide discounts or special deals for guests who join the hotel's loyalty program or newsletter. These offers could include exclusive promotions for direct bookings or additional free services.</p>
                </div>
            </div>

        </div>
    </div>
    
    <x-footer></x-footer>

<script src=" {{ asset('js/home.js') }}"></script>
</body>
</html>
