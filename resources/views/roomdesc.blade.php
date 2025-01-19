<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Description</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <style>
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
            text-align: center; 
        }

        .content h3{
            font-size: 40px;
        }

        .content .desc {
            text-align: center; /* Deskripsi rata kiri */
            margin: 0 auto;
            max-width: 50%; /* Agar tetap sejajar di tengah */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            background-color: #f9f9f9;
            height: calc(100vh - 150px);
        }

        .room-card {
            display: flex;
            background-color: white;
            width: 100%;
            height: 80%;
        }

        .room-image {
            background-color: #d3d3d3;
            width: 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .room-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .room-details {
            padding: 35px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dua kolom */
            gap: 10px; /* Jarak antar elemen */
        }

        .features p {
            margin: 0; /* Hilangkan margin default */
            padding: 5px; /* Tambahkan padding jika diperlukan */
            background-color: #f9f9f9; /* Warna latar untuk visualisasi */
            border: 1px solid #ddd; /* Tambahkan border untuk tampilan */
            border-radius: 4px; /* Membuat sudut lebih halus */
        }


        .room-details h2 {
            color: #004d33;
        }

        /* Overlay (background hitam transparan) */
        #overlay {
            display: none; /* Default disembunyikan */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Hitam transparan */
            z-index: 9998; /* Di bawah popup */
        }

        /* Atur background overlay agar berada di atas konten */
        #iframePopup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20vw;  /* 80% dari lebar viewport */
            height: 46vh; /* 60% dari tinggi viewport */
            z-index: 9999;
        }

        iframe{
            border-radius: 10px;
        }

        /* Styling tombol close */
        #iframePopup button {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }

        #iframePopup button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <x-navbar></x-navbar>
    <x-popup></x-popup>
    <x-layout><x-slot:title>{{ $title }}</x-slot:title></x-layout>

    <div class="content">
        <div class="room-card">
            <div class="room-image">
                <img src="{{ $roomType->img  }}" alt="Room Image">
            </div>
            <div class="room-details">
                <h1>{{ $roomType->typename }} Room</h1>
                <p class="size">{{ $roomType->size }}m<sup>2</sup></p>
                <h4>{{ $roomType->desc }}</h4>
                <h2>Features</h2>
                <div class="features">
                    <p>{{$roomType->bed}}</p>
                    <p>{{$roomType->smoking}}</p>
                    <p>{{$roomType->person}}</p>
                    <p>{{$roomType->bathroom}}</p>
                </div>
                <h2>Price Rp.{{ number_format($roomType->price, 0, ',', '.') }}/night</h2>
                <x-bookbutton></x-bookbutton>
            </div>
        </div>
    </div>
    

    <x-footer></x-footer>
</body>
<script src=" {{ asset('js/home.js') }}"></script>
</html>