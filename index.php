<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    echo "<script> 
            alert ('Terima kasih $nama, telah menghubungi kami. Pesan anda sudah tersampaikan :)')
        </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Firniture.com</title>
</head>

<body>
    <section class="header">
        <nav>
            <div class="logo">
                <h4>Furniture.com</h4>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <div class=" menu-togle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </section>
    <section class="home">
        <div class="text">
            <h1>Hand made Hight quality Furniture</h1>
            <a href="">Shoping Now</a>
        </div>

    </section>
    <section id="product">
        <div class="judul-section">
            <h1>Product</h1>
        </div>
        <div class="product-container">
            <div class="product">
                <div>
                    <img src="img/mejaMakan1.jpg" alt="" width="100%">
                    <h1>Meja Makan Kayu Jati</h1>
                    <p>Bahan full Kayu Jati, Finishing Melamine semprot, Warna sesuai permintaan costumer, formasi 4 kursi dan 1 unit Meja, Design yang elegan dan mewah. </p>
                </div>
                <a href="">Pesan Sekarang &#8594;</a>
            </div>
            <div class="product">
                <div>
                    <img src="img/mejaTv.jpg" alt="" width="100%">
                    <h1>Meja Tv Minimalis</h1>
                    <p>Prodesign Bavarian, Model simpel minimalis dan menawan, design meja meliputi meja Tv dan Audio, panjang 210cm, Tinggi 46cm, bahan partikel Board kualitas terbaik dan kuat, warna sesuai permintaan costumer.</p>
                </div>
                <a href="">Pesan Sekarang &#8594;</a>
            </div>
            <div class="product">
                <div>
                    <img src="img/lemariPakaian.jpg" alt="" width="100%">
                    <h1>Lemari baju Premium</h1>
                    <p>Lemari pakaian dengan design elegan dan minimalis, tersedia warna cokelat dengan beberapa model cermin dan laci, warna produk tidak mudah pudar, menggunakan bahan particel Board ketebalan 18mm kombinasi 15mm, panjang 120cm, lebar 51 cm, dan tinggi 200cm.</p>

                </div>
                <a href="">Pesan Sekarang &#8594;</a>
            </div>
        </div>
    </section>


    <section id="gallery">
        <div class="judul-section">
            <h1>Gallery</h1>
        </div>
        <div class="gallery-container">
            <div class="jumbo">
                <img src="img/1.jpg" alt="" width="80%">

            </div>
            <div class="small">
                <div class="row">
                    <img src="img/1.jpg" alt="" width="25%">
                    <img src="img/2.jpg" alt="" width="25%">
                    <img src="img/3.jpg" alt="" width="25%">
                </div>
                <div class="row">
                    <img src="img/4.jpg" alt="" width="25%">
                    <img src="img/5.jpg" alt="" width="25%">
                    <img src="img/6.jpg" alt="" width="25%">
                </div>
                <div class="row">
                    <img src="img/7.jpg" alt="" width="25%">
                    <img src="img/8.jpg" alt="" width="25%">
                    <img src="img/9.jpg" alt="" width="25%">
                </div>

            </div>
        </div>

    </section>

    <section id="about">
        <div class="bg">

            <div class="judul-section">
                <h1>About</h1>
            </div>
            <div class="about-container">

                <div class="about">
                    <p>Furniture.com menyajikan berbagai gaya desain yang diinginkan, mulai dari Skandinavia, Modern Kontemporer, Minimalis, Transisional dan Industrial untuk Ruang Tamu, Ruang Makan, Kamar Tidur, dan Ruang Komersil.

                        . </p>
                </div>
                <div class="about">
                    <p>Sehingga Furniture.com dijadikan sebagai sarana dan prasarana mediator bagi para consumer dalam membeli peralatan rumah dan produk–produk yang ada di toko Furniture.com dengan adanya sistem ini.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="judul-section">
            <h1>Contact Us</h1>
        </div>

        <div class="contact-container">
            <form action="" method="POST">
                <label for="name">Nama</label>
                <input type="text" id="name" name="nama" placeholder="Nama anda..">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email anda..">

                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan"></textarea>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </section>
    <footer>
        Firniture.com by Kelompok 8
    </footer>


    <script>
        const menuTogle = document.querySelector('.menu-togle');
        const nav = document.querySelector('nav ul')

        menuTogle.addEventListener('click', function() {
            nav.classList.toggle('slide');
        });
    </script>
</body>

</html>