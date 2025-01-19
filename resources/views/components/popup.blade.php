<div>
    <div id="overlay"></div>
    <!-- Iframe yang disembunyikan -->
    <div id="iframePopup">
        <iframe src="{{ route('bookings') }}" width="100%" height="100%"></iframe>
        <button style="border-radius: 10%" onclick="closeIframe()">Close</button>
    </div>
</div>

<style>
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
        width: 50vw;  /* 80% dari lebar viewport */
        height: 95vh; /* 60% dari tinggi viewport */
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