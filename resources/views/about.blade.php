<!DOCTYPE html>

<html>
  <head>
    <title>Website Rekomendasi Industri Bidang IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rekomendasi Industri Bidang IT</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="{{url('index')}}">Home</a></li>
            <li class="active"><a href="#">About</a></li>
            <li><a href="{{url('requirement')}}">Requirement</a></li>
            <li><a href="{{url('/admin/kriteria')}}">Kriteria</a></li>
            <li><a href="{{url('/admin/produk')}}">Alternatif</a></li>
            <li><a href="{{url('/admin/hitung')}}">SPK</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- End Navigation bar -->

    <!-- Content -->
    <div class="about-section">
      <h1>Tentang Kami</h1>
      <p>Website ini dibuat untuk memudahkan mahasiswa mencari industri tempat kerja di bidang IT sesuai bekal ilmu yang dia miliki selama menjadi mahasiswa Teknik Informatika. Yang mana website menampilkan rekomendasi beberapa industri tempat kerja di bidang IT dengan informasi terkait masing-masing profil industri itu sendiri.</p>
    </div><br>
    <h4 style="text-align:left">&nbsp &nbsp Pembuat Website :</h4>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Dimas Bintang Pratama</h2>
            <p class="title">Mahasiswa Teknik Informatika</p>
            <p>dimasbintang0712@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <div class="footer text-center">
      <p>&copy; 2023 Dimas Bintang Pratama (21090129) 4C</p>
    </div>
    <!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>
