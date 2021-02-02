    <?php
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $date = $_POST['date'];
        $email = $_POST['email'];
    ?>
<!DOCTYPE html>
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
	body {
background-image:url('img/back.jpg');
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>

  </head>
  <body>
     <!-- Navigation (Sits on top) -->
	<div class="w3-top w3-bar bg-secondary  text-light w3-padding w3-card w3-wide">
	<a href="Landingpage.html" class="w3-bar-item w3-button"> <img src="img/t.jpeg"  class="rounded-circle iconlogo "></a>

	<!-- Right-sided navbar links. Hide them on small screens -->
  <div class="w3-right w3-hide-small">
	<a href="Home.html" class="w3-bar-item w3-button"> Home </a>
	<a href="tentang.html" class="w3-bar-item w3-button"> Tentang </a>
	<a href="PhotoTutorial.html" class="w3-bar-item w3-button"> Photo Tutorial </a>
	<a href="VideoTutorial.html" class="w3-bar-item w3-button"> Video Tutorial </a>
	<form class="form-inline ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button> 
  </form>
  </div>
</div>
    
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h4 class="display-4" align="center">Data Diri Pengguna</h4>
            </div>    
    </div>
    <!-- Akhir Jumbotron -->

    <div class="container">
        <div class="panel-group">
        <div class="panel panel-success">
        <div class="panel-heading">Hasil Penginputan Data</div>
        <br>
            <div class="panel-body">
        <div class="row">
                <label class="control-label col-sm2" for="nama">Nama:</label>
            <div class="col-sm-10">
                <?= $nama?>
            </div>
        </div>
        <div class="row">
                <label class="control-label col-sm2" for="nama">Kota:</label>
            <div class="col-sm-10">
                <?php echo $kota; ?>
            </div>
        </div>
        <div class="row">
                <label class="control-label col-sm2" for="date">Date:</label>
            <div class="col-sm-10">
                <?php echo $_POST['date']; ?>
            </div>
        </div>
        <div class="row">
                <label class="control-label col-sm2" for="nama">Email:</label>
            <div class="col-sm-10">
                <?php echo $email; ?>
            </div>
        </div>
    </div>
	<br></br>
	<hr>
	
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
                            <a href="" class="text-light">Tentang</a>
                        </li>
                        <li>
                            <a href="" class="text-light">Photo</a>
                        </li>
                        <li>
                            <a href="" class="text-light">video</a>
                        </li>
                    </ul>
                </div>
 
                <!--Footer Contact Us-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Contact Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img src="img/w.jpeg" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/i.jpeg" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/e.jpeg" href="#" class="rounded-circle iconlogo">
                        </li>
                        <li class="list-inline-item">
                            <img src="img/z.jpeg" href="#" class="rounded-circle iconlogo">
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
	