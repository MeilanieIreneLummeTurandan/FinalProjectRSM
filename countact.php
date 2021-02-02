<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Link Mei Shop-->
	<title> Meilanie Shop </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
	
  </head>
  <body>
	<!-- Navigation (Sits on top) -->
	<div class="w3-top w3-bar bg-secondary  text-light w3-padding w3-card w3-wide">
	<a href="Landingpage.html" class="w3-bar-item w3-button"> <img src="img/logo.jpeg"  class="rounded-circle iconlogo "></a>

	<!-- Right-sided navbar links. Hide them on small screens -->
  <div class="w3-right w3-hide-small">
	<a href="Beranda.html" class="w3-bar-item w3-button"> Beranda </a>
	<a href="about.html" class="w3-bar-item w3-button"> About </a>
	<a href="Artikel.html" class="w3-bar-item w3-button"> Artikel </a>
	<a href="Keranjang.html" class="w3-bar-item w3-button"> Keranjang </a>
	<a href="Wishlist.html" class="w3-bar-item w3-button"> Wishlist </a>
    <a href="Notifikasi.html" class="w3-bar-item w3-button"> Notifikasi  </a>
    <form class="form-inline ml-auto">
    <a href="https://www.google.com/" button class="btn btn-success my-2 my-sm-0" type="submit">Search</a>
 </form>
	<a href="contact.php" class="w3-bar-item w3-button"> Contact Us  </a>
  </div>
</div>
    
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h4 class="display-4" align="center">Kontak toko mei mei shop</h4>
            </div>    
    </div>
    <!-- Akhir Jumbotron -->

  <div class="container">
    <h2>   Contact Us</h2>
        <form class="formhorizontal" method="post" action="Contacthasil.php">
            <div class="formgroup">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
                <label class="control-label col-sm-2" for="kota">Kota:</label> 
            <div class="col-sm-4">
                <input type="text" class="form-control" id="kota" placeholder="Masukkan Kota" name="kota">
            </div>
            </div>
            <div class="formgroup">
                <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="date">
            </div>
            </div>
            <div class="formgroup">
                <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
            </div>
            </div>
			<br>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
            </div>
            </div>
        </form>
    </div>
   
<!--Footer-->
    <footer class="bg-secondary text-light text-left text-lg-start">
        <div class="container-fluid p-4">
            <div class="row">
                <!--Footer Website e-Commerce-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5> Meilanie Shop </h5>
                    <p>
                        Meilanie Shop resmi menjalankan usaha e-commerce sebagai penjualan online alat Make Up 
                        pada tanggal 20 Desember 2020. Meilanie Shop akan terus mengestock kan barang make up yang terbaru, 
                        baik dari sisi gambar make up, sisi interaksi user, dan sisi penjualan. 
                        Hal ini dilakukan agar Meilanie Shop dapat semakin baik dan dicintai oleh pengguna website kami.
                    </p>
                </div>
 
                <!--Footer Menus-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Menus</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="text-light">Home</a>
                        </li>
                        <li>
                            <a href="" class="text-light">Product</a>
                        </li>
                        <li>
                            <a href="" class="text-light">Promo</a>
                        </li>
                        <li>
                            <a href="" class="text-light">About Us</a>
                        </li>
                    </ul>
                </div>
 
                <!--Footer Contact Us-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Contact Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img src="img/facebook.png" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/instagram.png" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/twitter.png" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/whatshapp.png" href="#" class="rounded-circle iconlogo">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
 
        <div class="bg-dark text-light text-center p-3" >
            &copy; 2021 Copyright :
            <a class="text-light" href="#"> Meilanie Shop </a>
        </div>
    </footer>
</body>
</html>