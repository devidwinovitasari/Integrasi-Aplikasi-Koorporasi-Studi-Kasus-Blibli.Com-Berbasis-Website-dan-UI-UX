<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Data Pembelian</title>
    <link rel="stylesheet" href="css/DG.css" />
  </head>
  <body>
    <section>
      <div class="form-box">
        <div class="form-value">
          <form action="">
            <h2>Form Data Pembelian</h2>
            <div class="inputbox">
              <input type="text" placeholder="No" required />
            </div>

            <div class="inputbox">
              <input type="text" placeholder="Nama Supplier" />
            </div>

            <div class="inputbox">
              <input type="text" placeholder="Nama Barang Yang Dibeli" />
            </div>

            <div class="inputbox">
              <input type="number" placeholder="Jumlah Barang Yang Dibeli" />
            </div>

            <div class="inputbox">
              <input type="text" placeholder="Total Harga" />
            </div>

            <button>Simpan</button>

            <button a href="halamanutama.php">Kembali</button>
          </form>
        </div>
      </div>
    </section>
  </body>
  <?php
	include "koneksi.php";
	if (isset($_POST['daftar'])) {
		$login = $_POST['user'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$ulangipassword = $_POST['ulangipassword'];
		$masuk = mysqli_query($conn, "INSERT INTO register (username, email, password, ulangi_password) VALUES ('$login','$email', '$password', '$ulangipassword')");
		if ($masuk) {
			header("location:validasi.php");
			exit;
		}
	}
?>
</html>
