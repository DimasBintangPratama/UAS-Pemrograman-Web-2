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
            <li><a href="{{url('about')}}">About</a></li>
            <li class="active"><a href="{{url('requirement')}}">Requirement</a></li>
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
      <h1>Persyaratan</h1>
      <p>Apa langkah awal untuk dapat bekerja di perusahaan impianmu?</p>
    </div><br>
    <p>Perusahaan-perusahaan yang disebutkan di atas memang sedang terus berkembang dan akan membutuhkan banyak lulusan IT atau Teknik Informatika. Namun seperti perusahaan besar pada umumnya, semakin baik reputasinya, semakin ketat pula persaingan para pelamarnya.</p>
    <p>Bagaimana sih Langkah awalmu untuk mempersiapkan diri agar bisa berkesempatan untuk bekerja di perusahaan idamanmu? Mulai dulu dari hal-hal terkecil, seperti:</p>
    <ul style="list-style-type: number">
        <li><b>Siapkan CV serta Cover Letter yang baik dan benar</b>. Dengan demikian, kesempatanmu untuk dipanggil interview pun semakin besar.</li><br>
        <li><b>Pilih bidang yang ingin kamu tekuni</b>. Seorang ahli di bidang teknologi yang terspesifikasi akan lebih banyak dicari oleh para rekruter. Temukan minat atau keahlianmu, lalu terus asah dan kembangkan hingga kamu menjadi seorang expert di bidang tersebut.</li><br>
        <li><b>Membangun portofolio</b>. Kumpulkan pengalamanmu, buat sebuah portofolio yang lengkap dan impresif serta dapat menunjukkan segala kemampuanmu.</li><br>
        <li><b>Ikut Magang</b> atau training untuk menambah experience di bidang yang kamu pilih.</li><br>
        <li><b>Perbanyak riset</b>, selain mengenai profesi pilihanmu, juga perusahaan yang kamu tuju. Seperti apakah profil karyawan yang mereka butuhkan? Apa yang membuatmu cocok untuk bekerja di sana? Hal ini bisa berguna jika suatu saat nanti kamu dipanggil untuk interview.</li><br>
    </ul>
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
