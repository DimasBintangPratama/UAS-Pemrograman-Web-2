@extends('layout/aplikasi')
@section('konten')
    <title>Website Rekomendasi Industri Bidang IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <link href="css/Home.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="css/nicepage.css" media="screen">

  </head>

  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Rekomendasi Industri Bidang IT</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li ><a href="index">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="requirement">Requirement</a></li>
            <li class="active"><a href="/admin/kriteria">Kriteria</a></li>
            <li><a href="/admin/produk">Alternatif</a></li>
            <li><a href="/admin/hitung">SPK</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- End Navigation bar -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
                <a href="{{route('kriteria.create')}}" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
            <h5 class="m-0 font-weight-bold text-primary">Kriteria</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
    <th>Jenis</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
     {{--                   @php  --}}
                        $no=1;
    {{--                   @endphp   --}}
                        @foreach ($kriteria as $key=>$item)
    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->bobot}}</td>
    <td>{{$item->type}}</td>
                            <td>
                                <div class="container">
    {{--                                 <a href=" route('kriteria.edit', $item->id )" class="btn btn danger"><i class="fas fa-fw fa-edit"></i></a> --}}
                                    <a href="{{ route('kriteria.edit', $item->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

