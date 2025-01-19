console.log("Script loaded");

let lastScrollY = window.scrollY;
const navbar = document.querySelector('.navbar');


window.addEventListener('scroll', () => {
    if (window.scrollY > lastScrollY) {
        // Scroll down - hide navbar
        navbar.classList.add('hidden');
    } else {
        // Scroll up - show navbar
        navbar.classList.remove('hidden');
    }
    lastScrollY = window.scrollY;
});

function toggleMenu() {
    const navbarLinks = document.querySelector('.navbar-links');
    navbarLinks.classList.toggle('active');
}

window.onload = function() {
    // Set check-in to today's date
    var today = new Date().toISOString().split('T')[0];
    document.getElementById("check_in").value = today;

    // Set check-out to tomorrow's date
    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    document.getElementById("check_out").value = tomorrow.toISOString().split('T')[0];
}

document.addEventListener('DOMContentLoaded', () => {
    // Check if there's a hash in the URL
    const hash = window.location.hash;
    if (hash) {
        const targetElement = document.querySelector(hash);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
            });
        }
    }
});


// Menampilkan popup dan overlay
function openIframe() {
    // Mencegah halaman mengalihkan ke URL
    event.preventDefault();
    document.getElementById('iframePopup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

// Menutup popup dan overlay
function closeIframe() {
    document.getElementById('iframePopup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

// Menambahkan event listener pada tombol "Book Now"
document.getElementById('homeBookNow').addEventListener('click', (e) => {
    e.preventDefault(); // Mencegah aksi default
    openIframe();
});

document.addEventListener("DOMContentLoaded", function () {
    const bookingForm = document.getElementById("bookingForm");
    const resultModal = document.getElementById("bookingResult");
    const resultTitle = document.getElementById("resultTitle");
    const resultMessage = document.getElementById("resultMessage");

    bookingForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        // Buat objek FormData dari form
        const formData = new FormData(bookingForm);

        // Ambil URL endpoint dari atribut 'action' form
        const url = bookingForm.getAttribute("action");

        // Kirim permintaan menggunakan fetch
        fetch(url, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
            },
        })
            .then(function (response) {
                // Periksa apakah respons berhasil
                if (!response.ok) {
                    throw new Error("Network response was not ok " + response.statusText);
                }
                return response.json();
            })
            .then(function (data) {
                if (data.success) {
                    // Tampilkan pesan sukses
                    resultTitle.textContent = "Booking Successful!";
                    resultMessage.textContent = data.message;

                    // Refresh halaman setelah pemesanan berhasil
                    setTimeout(function () {
                        location.reload();  // Refresh halaman
                    }, 3000); // Tunggu 2 detik sebelum me-refresh halaman
                } else {
                    // Tampilkan pesan gagal dari server
                    resultTitle.textContent = "Booking Failed!";
                    resultMessage.textContent = data.message;
                }

                // Sembunyikan form dan tampilkan modal hasil
                bookingForm.classList.add("hidden");
                resultModal.classList.remove("hidden");
            })
            .catch(function (error) {
                // Tangani kesalahan atau error jaringan
                console.error("Fetch error:", error);
                resultTitle.textContent = "Error";
                resultMessage.textContent = "Something went wrong. Please try again.";
                resultModal.classList.remove("hidden");
            });
    });
});



document.addEventListener('DOMContentLoaded', () => {
    const reviews = document.querySelectorAll('.review-card');
    const indicators = document.querySelectorAll('.indicator');
    let currentIndex = 0;

    const showReview = (index) => {
        reviews.forEach((review, i) => {
            review.style.display = i === index ? 'block' : 'none';
            indicators[i].style.backgroundColor = i === index ? '#007bff' : '#ccc';
        });
    };

    const autoSlide = () => {
        currentIndex = (currentIndex + 1) % reviews.length;
        showReview(currentIndex);
    };

    // Mulai auto-slide setiap 5 detik
    setInterval(autoSlide, 5000);

    showReview(currentIndex); // Initial display
});