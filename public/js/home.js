console.log("Script loaded");
console.log("HAI");

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