<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BliBli.Com</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .home{
        background-image: url(blibli.jpg);
        background-size: cover;
      }

      .box {
          position: relative;
          overflow: hidden;
          border: 1px solid #ddd;
          padding: 16px;
          transition: all 0.3s ease;
      }

      .image {
          position: relative;
      }

      .cart-btn {
          background-color: maroon;
          color: white;
          border: none;
          padding: 10px;
          width: 100%;
          cursor: pointer;
          font-size: 16px;
          transition: background-color 0.3s ease;
      }

      .cart-btn:hover {
          background-color: #800000; /* Darker shade of maroon */
      }

      .box:hover .icons {
          bottom: 0; /* Move up to be visible */
      }

            .popup-ad {
          display: none;
          position: fixed;
          top: 20px;
          left: 50%;
          transform: translateX(-50%);
          z-index: 1000;
          background-color: #ffcc00;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

          .popup-content {
        text-align: center;
        color: #333;
        font-size: 18px; /* Menambah properti font-size */
        line-height: 1.6; /* Menambah line-height untuk memperjelas kejelasan teks */
    }


      .popup-ad a {
          display: inline-block;
          background-color: #333;
          color: #fff;
          text-decoration: none;
          padding: 10px 20px;
          margin-top: 10px;
          border-radius: 5px;
          transition: background-color 0.3s ease;
      }

      .popup-ad a:hover {
          background-color: #555;
      }

  header .search-container {
    display: flex;
    align-items: center;
    margin-left: auto; /* Tetap di sebelah kanan */
    gap: 0.5rem; /* Spasi antara input dan tombol */
  }
  
  header .search-input {
    padding: 10px 15px;
    border: 1px solid #000000;
    border-radius: 20px;
    outline: none;
    font-size: 15px;
    width: 220px;
    height: 30px;
    background: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }
  
  header .search-input:focus {
    border-color: #3498db; /* Warna biru mencolok */
    width: 260px;
    background: #fff;
    box-shadow: 0 6px 12px rgba(52, 152, 219, 0.3);
  }
  
  header .search-btn {
    background: #ffffff;
    border: none;
    color: #fff;
    font-size: 18px;
    padding: 0px 0px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }
  
  header .search-btn:hover {
    background: #2980b9;
    box-shadow: 0 6px 12px rgba(41, 128, 185, 0.4);
    transform: scale(1.1);
  }
  
  header .search-btn:active {
    transform: scale(0.95);
    box-shadow: 0 3px 8px rgba(41, 128, 185, 0.3);
  }

    </style>
  </head>
  <body>
    <header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>

      <a href="#" class="logo">BliBli.Com<span>.</span></a>

      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <!-- <button class="search-btn">
          <span>🔍</span>
        </button> -->
      </div>


      <div class="icons">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <a href="keranjang.php" class="fas fa-shopping-cart"></a>
        <a href="login.php">Logout</a>
    </div>
    </header>

    <div id="popup-ad" class="popup-ad">
    <div class="popup-content">
        <h2>Super Promo!</h2>
        <p>Dapatkan diskon hingga 50% untuk setiap pembelian di atas Rp 1.000.000,-</p>
        <a href="#product" id="belanja-sekarang-btn">Belanja Sekarang!</a>
    </div>
    </div>

    <section class="home" id="home">
      <!-- <div class="content">
        <h3>AeroStreet</h3>
        <span> Now Everyone Can Buy Good Shoes</span>
        <p>
          Sekarang Semua Orang Bisa Beli Sepatu Bagus, yang terselip harapan
          agar semua orang dari kalangan mana pun dapat membeli sepatu
          berkualitas dengan harga terjangkau.
        </p>
        <a href="#product" class="btn">shop now</a>
      </div> -->
    </section>
    <section class="about" id="about">
      <div class="row">
        <img src="gambar/logoblibli.png" alt="" />

        <div class="content">
          <h3>Why Shop at BliBli ? </h3>
          <p>
          Blibli.com is one of the major e-commerce platforms in Indonesia that offers various benefits 
          for consumers. Blibli provides a wide range of product categories, from electronics, fashion,
          household needs, health, beauty, to daily necessities. This allows consumers to find almost all
          the products they need in one place.
          </p>
          <a href="#" class="btn">learn more </a>
        </div>
      </div>
    </section>

    <section class="icons-container">
      <div class="icons">
        <img src="gambar/a-removebg-preview.png" alt="" />
        <div class="info">
          <h3>free ongkir</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="gambar/c-removebg-preview.png" alt="" />
        <div class="info">
          <h3>Return</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="gambar/d-removebg-preview.png" alt="" />
        <div class="info">
          <h3>free some gifts</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="gambar/e-removebg-preview.png" alt="" />
        <div class="info">
          <h3>safety payment</h3>
          <span>on all orders</span>
        </div>
      </div>
    </section>

    <section class="products" id="product">
      <h1 class="heading">produk <span>terbaru</span></h1>
      <div class="box-container">
      <div class="box" data-keywords="facial wash">
            <span class="discount">-26%</span>
            <div class="image">
                <img src="gambar/produk1.jpg" alt="" />
                <div class="icons">
                    <form method="post" action="keranjang.php">
                        <input type="hidden" name="id_produk" value="0">
                        <button type="submit" class="cart-btn">add to cart</button>
                    </form>
                </div>
            </div>
            <div class="content">
                <h1>Mens Biore Acne Bacterior Facial Foam Scrub</h1>
                <div class="price">Rp. 48.800 <span>Rp. 69.800</span></div>
            </div>
        </div>


        <div class="box" data-keywords="kotak makan">
          <span class="discount">-50%</span>
          <div class="image">
            <img src="gambar/produk2.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="1">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>HELIDFANDA Lunch Box Kotak Makan Anak Bear Termos Sup dengan Pegangan</h1>
            <div class="price">Rp. 55.000<span>Rp. 110.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="blender">
          <span class="discount">-24%</span>
          <div class="image">
            <img src="gambar/produk3.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="2">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Advance BL2 Tabung Kaca Blender</h1>
            <div class="price">Rp. 150.480<span>Rp. 197.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="kamera">
          <span class="discount">-15%</span>
          <div class="image">
            <img src="gambar/produk4.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="3">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>GoPro HERO10 Black</h1>
            <div class="price">Rp. 4.749.000<span>Rp. 5.600.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="tas">
            <span class="discount">-49%</span>
            <div class="image">
                <img src="gambar/produk5.jpg" alt="" />
                <div class="icons">
                    <form method="post" action="keranjang.php">
                        <input type="hidden" name="id_produk" value="4">
                        <button type="submit" class="cart-btn">add to cart</button>
                    </form>
                </div>
            </div>
            <div class="content">
                <h1>Shoulder bag Tas Selempang Wanita Import Model Terbaru</h1>
                <div class="price">Rp. 50.000<span>Rp. 99.000</span></div>
            </div>
        </div>


        <div class="box" data-keywords="serum">
          <span class="discount">-46%</span>
          <div class="image">
            <img src="gambar/produk6.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="5">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Ponds Age Miracle Serum Wajah Anti Aging Glowing  Serum With Retinol & Niacinamide</h1>
            <div class="price">Rp. 135.000<span>Rp. 250.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="eye shadow">
          <span class="discount">-64%</span>
          <div class="image">
            <img src="gambar/produk7.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="6">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Marshwillow Sugar Dust Eye Shadow By Natasha Wilona</h1>
            <div class="price">Rp. 27.000<span>Rp. 75.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="laptop">
            <span class="discount">-8%</span>
            <div class="image">
                <img src="gambar/produk8.jpg" alt="" />
                <div class="icons">
                <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="7">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
                </div>
            </div>
            <div class="content">
                <h1>Lenovo LOQ 15IAX9 1JID Intel Core i5 1245OHX 12GB 512GB Windows11</h1>
                <div class="price">Rp. 12.021.000<span>Rp. 13.050.000</span></div>
            </div>
        </div>

        <div class="box" data-keywords="hair dryer">
          <span class="discount">-50%</span>
          <div class="image">
            <img src="gambar/produk9.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="8">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Ona High Speed Hairdryer Coral Pink</h1>
            <div class="price">Rp. 749.000<span>Rp. 1.500.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="kancing">
          <span class="discount">-10%</span>
          <div class="image">
            <img src="gambar/produk10.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="9">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Velvet Junior Setelan Kancing Pundak Celana Panjang</h1>
            <div class="price">Rp. 143.500<span>Rp. 160.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="sepatu">
          <span class="discount">-40%</span>
          <div class="image">
            <img src="gambar/produk11.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="10">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>Melissa Jackie Ad Sepatu Wanita Burgundy/Red</h1>
            <div class="price">Rp. 960.000<span>Rp. 1.600.000</span></div>
          </div>
        </div>

        <div class="box" data-keywords="laptop">
          <span class="discount">-18%</span>
          <div class="image">
            <img src="gambar/produk12.jpg" alt="" />
            <div class="icons">
            <form method="post" action="keranjang.php">
                <input type="hidden" name="id_produk" value="11">
                <button type="submit" class="cart-btn">add to cart</button>
            </form>
            </div>
          </div>
          <div class="content">
            <h1>MSi Modern 14 C12MO 1058ID Laptop Black</h1>
            <div class="price">Rp. 5.317.440<span>Rp. 6.499.000</span></div>
          </div>
        </div>

    </section>

    <section class="contact" id="contact">
      <h1 class="heading"><span>contact</span> us</h1>
      <div class="row">
        <form action="">
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="number" placeholder="number" class="box" />
          <textarea
            name=""
            class="box"
            placeholder="message"
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>
        <div class="image">
          <img src="gambar/photo.jpg" alt="" />
        </div>
      </div>
    </section>
    
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#product">Product</a>
          <a href="#review">Review</a>
          <a href="#contact">Contact</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#">my account</a>
          <a href="keranjang.html">my order</a>
          <a href="#">my favorite</a>
        </div>

        <div class="box">
          <h3>Lokasi</h3>
          <a href="#">Surabaya</a>
          <a href="#">Malang</a>
          <a href="#">Solo</a>
          <a href="#">Jakarta</a>
          <a href="#">Manado</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#">+62-890-0879-456</a>
          <a href="#">aerostreetshoes@gmail.com</a>
          <a href="#">Indonesia,Jawa Tengah</a>
        </div>
      </div>
    </section>


    <script>
      function toggleSidebar() {
          var sidebar = document.querySelector('.profile-sidebar');
          sidebar.classList.toggle('active');
      }

      document.addEventListener('DOMContentLoaded', function() {
    var popupAd = document.getElementById('popup-ad');

    // Tampilkan iklan
    popupAd.style.display = 'block';

    // Hilangkan iklan setelah 5 detik
    setTimeout(function() {
        popupAd.style.display = 'none';
    }, 5000); // 5000 milidetik = 5 detik

    // Tambahkan event listener pada tombol "Belanja Sekarang!"
    var belanjaSekarangBtn = document.getElementById('belanja-sekarang-btn');
    belanjaSekarangBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan aksi default dari link

        // Sembunyikan iklan
        popupAd.style.display = 'none';

        // Gulir ke bagian produk (#product)
        var productSection = document.getElementById('product');
        productSection.scrollIntoView({
            behavior: 'smooth' // Efek gulir halus
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('.search-input');
    const productBoxes = document.querySelectorAll('.box');

    // Fungsi untuk melakukan pencarian
    function filterProducts(query) {
        productBoxes.forEach(box => {
            const keywords = box.getAttribute('data-keywords') ? box.getAttribute('data-keywords').toLowerCase() : '';
            if (keywords.includes(query)) {
                box.style.display = 'block'; // Tampilkan produk
            } else {
                box.style.display = 'none'; // Sembunyikan produk
            }
        });
    }

    // Event listener untuk input
    searchInput.addEventListener('input', function () {
        const query = searchInput.value.toLowerCase();
        filterProducts(query);
    });

    // Event listener untuk tombol Enter
    searchInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Mencegah submit form default
            const query = searchInput.value.toLowerCase();
            filterProducts(query); // Panggil fungsi pencarian
        }
    });
});


  </script>

  </body>
</html>
