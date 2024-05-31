<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet" href="FormData.css"
    />
    <title>Reservasi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<header style="font-family: 'Poppins', sans-serif;">
    <nav>
        <div class="menu-block">
            <h3 id="text-head">Wisata Sendang Growong</h3>
        <ul class="menu">
            <li><a href="page2.html">Wisata</a></li>
            <li><a href="#">Produk Unggulan</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="profil.html">Profil</a></li>
        </ul>
        </div>
    </nav>
</header>
<body  style="font-family: 'Poppins', sans-serif;">
<div class="Backround-form"></div>
    <h3 id="isi-data">Isi data anda</h3>
        <p>Ayo, lengkapi datamu dan berwisata di sendang growong</p>
        <form action="ProsesFormData.php" class="Form-data" id="form-pengunjung" method="POST" onsubmit="return validateForm()" >
            <label id="label-jumlah">Jumlah</label><br>
            <input id="form-jumlah" type="number" name="form-jumlah" ><br>
            <div class="submit-data">
            <input id="submit-input" type="submit" value="Submit">
            </div>
        </form>

    <div class="syarat">
        <p id="syarat1">
            *Syarat dan ketentuan berkunjung :<br>
            1. Menjaga kebersihan tempat wisata <br>
            2. Mengikuti himbauan dan petunjuk petugas wisata <br>
            3. Tiket yang sudah dibayar tidak dapat dikembalikan (non-refundable)
        </p>
        <p id="syarat2">
            *Saya telah membaca, memahami, setuju, dan bertanggung jawab dengan segala resiko 
            <br>berdasarkan syarat dan ketentuan yang telah ditetapkan di atas
        </p>
    </div>

    <script>
        // Ambil elemen input
        var inputText = document.getElementById('form-nama');
    
        // Tambahkan event listener untuk memantau perubahan pada input
        inputText.addEventListener('input', function() {
            // Set font menjadi Poppins
            this.style.fontFamily = 'Poppins, sans-serif';
        });
    </script>
    
</body>

</html>