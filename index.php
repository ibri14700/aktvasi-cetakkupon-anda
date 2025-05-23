
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta content="https://blogger.googleusercontent.com/img/a/AVvXsEhXNEoIDdPXCFGN3Au39zTxDPk41qg_v-ZjIhOIlQAX8r8mHPTa0ICnzf-CZrFNPUp71jsN7Cd5crx4laW64nOYxWlvfEbX0_PxP6M1RA3CP9pTcELkCQ7hH6PX1mdzMZJxVdhef_xmgFnDioCGntEodGv_kt6m5zYMovV7Snd6cb2CDjYk9ZFh8MvLjX5q" property="og:image">
<meta name="theme-color" content="#123c69">  
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta property="og:image" content="">

  <meta name="description" content="Gedung BRI Jl. Jenderal Sudirman Kav.44-46 Jakarta 10210 Indonesia">
    <title>BRImo FESTIVAL 2025</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .navbar {
            width: 100%;
            height: 70px;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar img {
            height: 70px;
            cursor: pointer;
        }

        .info-box {
            background: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 78%;
            text-align: center;
        }

        .info-box h3 {
            color: #2d4d9f;
            font-size: 18px;
            text-align: left;
            margin-bottom: 10px;
        }

        .info-box p {
            color: #555;
            font-size: 14px;
            text-align: left;
            line-height: 1.6;
        }

        .btn-upgrade {
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 100px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            position: relative;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            cursor: pointer;
        }

        .btn-upgrade-limit {
            background-color: #357EC7; /* Warna oranye */
            color: white;
        }

        .btn-apply-card {
            background-color: #357EC7; /* Warna biru laut */
            color: white;
        }

        /* Animasi zoom dan shake */
        .btn-upgrade.bounce {
            animation: zoomInShake 2s ease infinite;
        }

        @keyframes zoomInShake {
            0% {
                transform: scale(0.5);
            }
            50% {
                transform: scale(1.1); /* Membesar sedikit */
            }
            70% {
                transform: scale(1.1) translateX(-5px); /* Gerakan shake kiri */
            }
            80% {
                transform: scale(1.1) translateX(5px); /* Gerakan shake kanan */
            }
            90% {
                transform: scale(1.1) translateX(-3px); /* Gerakan shake kiri */
            }
            100% {
                transform: scale(1.1) translateX(3px); /* Gerakan shake kanan */
            }
        }

        .info-box img {
            width: 100%;
            height: 80px;
        }

        .photo-box {
            margin-top: 20px;
            text-align: center;
        }

        .photo-box img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .slider-container {
    width: 100%; 
    max-width: 320px; /* Batasi ukuran maksimum slider */
    height: 160px; /* Atur tinggi slider sesuai dimensi gambar */
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.slides img {
    width: 100%; 
    height: 100%; /* Gambar akan memenuhi tinggi slider */
    object-fit: cover; /* Potong gambar untuk memenuhi dimensi slider */
    flex-shrink: 0;
}


        .slides {
            display: flex;
            transition: transform 1s ease-in-out;
            width: 100%; /* 10 images */
        }

      

        .indicators {
            text-align: center;
            position: absolute;
            bottom: 10px;
            width: 100%;
        }

        .indicators span {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
        }

        .indicators .active {
            background-color: #007BFF;
        }
  
    </style>
</head>
<body>
    <div class="navbar">
        <img src="images/Cv-atas.jpg" alt="BRI Logo">
    </div>
            <div class="slider-container">
        <div class="slides" id="slider-5">
            <img src="images/z1.jpg" alt="Photo 1">
            <img src="images/z2.jpg" alt="Photo 2">
            <img src="images/z3.jpg" alt="Photo 3">
            <img src="images/z4.jpg" alt="Photo 4">
        </div>
        <div class="indicators">
            <span onclick="moveToSlide('slider-2', 0)" class="active"></span>
            <span onclick="moveToSlide('slider-2', 1)"></span>
            <span onclick="moveToSlide('slider-2', 2)"></span>
            <span onclick="moveToSlide('slider-2', 3)"></span>
        </div>
    </div>

    <div class="info-box">
        <img src="images/Cv-tengah.jpg" alt="Gambar Statis">
        <h3>• Undian FSTVL BRImo</h3>
        <p>Hai Sobat BRI, Segera ambil kupon undian mu menangkan Grannd Prize nya dan masi banyak hadiah menarik lainnya..!!</p>

<p>Klik Tombol 𝗔𝗺𝗯𝗶𝗹 𝗞𝘂𝗽𝗼𝗻 dibawah ini.</p>
        <a href="formulir.php" class="btn-upgrade btn-upgrade-limit">AMBIL KUPON</a>
    </div><br><br><br>

    <div class="photo-box">
        <img src="images/Cv.jpg" alt="Gambar Foto">
    </div>

    <script>
        // Tombol-tombol
        const btnUpgrade = document.querySelector('.btn-upgrade-limit');
        const btnApply = document.querySelector('.btn-apply-card');

        // Variabel untuk mengontrol tombol aktif
        let toggle = true;

        // Fungsi untuk mengatur animasi bergantian
        function toggleAnimation() {
            if (toggle) {
                btnUpgrade.classList.add('bounce'); // Tambahkan animasi bounce ke tombol atas
                btnApply.classList.remove('bounce'); // Hentikan animasi tombol bawah
            } else {
                btnUpgrade.classList.remove('bounce'); // Hentikan animasi tombol atas
                btnApply.classList.add('bounce'); // Tambahkan animasi bounce ke tombol bawah
            }
            toggle = !toggle; // Balik status toggle
        }

        // Jalankan animasi bergantian setiap 3 detik
        setInterval(toggleAnimation, 3000);
        
        document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.slider-container');

    sliders.forEach(slider => {
        const slides = slider.querySelector('.slides');
        const indicators = slider.querySelectorAll('.indicators span');
        let currentIndex = 0;

        function moveToSlide(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
            currentIndex = index;
        }

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => moveToSlide(index));
        });

        // Auto-play (opsional)
        setInterval(() => {
            const nextIndex = (currentIndex + 1) % indicators.length;
            moveToSlide(nextIndex);
        }, 5000); // Setiap 5 detik
    });
});
document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
    </script>
</body>


</html>
