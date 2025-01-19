<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facilities Page</title>
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

      .content p {
          color: #666;
          max-width: 600px;
          margin: 0 auto 20px auto;
          line-height: 1.6;
      }

      .facility {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
      }

      .facility-item {
          display: flex;
          align-items: center;
          gap: 20px;
          flex-wrap: nowrap;
      }

      .image-container img {
          display: block;
          width: 300px;
          height: 300px;
          border-radius: 10px;
          object-fit: cover;
      }

      .facility-item h3 {
          margin-top: 0;
      }

    </style>
  </head>
  <body>
    <x-navbar></x-navbar>
    <x-popup></x-popup>
    <x-layout><x-slot:title>{{ $title }}</x-slot:title></x-layout>

    <section class="content">
      <h3>Facilities & Services</h3>
      <p>
        We offer a range of facilities and services designed to meet your needs
        and ensure your comfort. With a modern design and exceptional service,
        we are dedicated to providing you with the best experience.
      </p>
      <br />
      <br />
      <br />

      <div class="facility">
        <div class="facility-item">
          <div>
            <h3>Facility 1: Swimming Pool</h3>
            <p>
              Dive into relaxation with our beautifully designed swimming pool.
              Surrounded by a serene ambiance, it’s the perfect spot to unwind,
              exercise, or simply enjoy the water. Whether you're looking for a
              refreshing dip or a tranquil escape, our pool is open to all
              guests, offering a blend of comfort and luxury. Equipped with
              loungers and shaded seating, it’s an ideal place to spend your
              day.
            </p>
          </div>
          <div class="image-container">
            <img src="https://i.pinimg.com/736x/90/f3/93/90f39314070fad4678d115886a56ee51.jpg" alt="Facility Image" />
          </div>
        </div>
      </div><br>

        <div class="facility">
          <div class="facility-item">
            <div>
              <h3>Facility 2: Rooftop</h3>
              <p>
                Experience breathtaking views from our rooftop, the perfect spot to relax and unwind. 
                With a modern and stylish design, this space is ideal for enjoying sunsets, starry nights, or hosting private gatherings. 
                Whether you’re savoring a quiet moment or celebrating with friends, the rooftop offers an unforgettable atmosphere.
              </p>
            </div>
            <div class="image-container">
              <img src="https://i.pinimg.com/736x/45/ed/2e/45ed2ea424cf546536d9f918505b77a0.jpg" alt="Facility Image" />
            </div>
          </div>
        </div><br>

          <div class="facility">
            <div class="facility-item">
              <div>
                <h3>Facility 3: Ballroom</h3>
                <p>
                  Our elegant ballroom is the ideal venue for your special events. 
                  With its spacious layout, luxurious decor, and state-of-the-art facilities, it can accommodate weddings, conferences, and celebrations of all sizes. 
                  Let us help you create unforgettable memories in this sophisticated setting designed to impress.
                </p>
              </div>
              <div class="image-container">
                <img src="https://i.pinimg.com/736x/04/a0/86/04a0861a2933ae70cd0737e07d09063b.jpg" alt="Facility Image" />
              </div>
            </div>
          </div><br>

          <div class="facility">
            <div class="facility-item">
              <div>
                <h3>Facility 4: Bar</h3>
                <p>
                  Unwind at our bar, where expertly crafted cocktails and a curated selection of drinks await. 
                  With its cozy ambiance and attentive service, it’s the perfect place to relax after a long day or enjoy an evening with friends. 
                  From signature drinks to classic favorites, the bar offers something for everyone.
                </p>
              </div>
              <div class="image-container">
                <img src="https://i.pinimg.com/736x/8b/18/de/8b18dee1d175cc74eae8b0bc106b54a7.jpg" alt="Facility Image" />
              </div>
            </div>
          </div>
    </section>

    <x-footer></x-footer>
  </body>

<script src=" {{ asset('js/home.js') }}"></script>
</html>
