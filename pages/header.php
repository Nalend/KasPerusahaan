<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pemrograman Internet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="4/cerulean/bootstrap.css" media="screen">
    <link rel="stylesheet" href="_assets/css/custom.min.css">
    <link rel="stylesheet" href="_assets/DataTables/dataTables.bootstrap4.min.css">
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="" class="navbar-brand">Bootswatch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
          
		  <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php
          if (isset($_SESSION['Login']))
          {
          ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="user">User<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=user_tambah">Tambah User</a>
				<a class="dropdown-item" href="index.php?page=daftar_user">Daftar User</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="dosen">Dosen<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=dosen_tambah">Tambah Dosen</a>
				<a class="dropdown-item" href="index.php?page=daftar_dosen">Daftar Dosen</a>
              </div>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="program_studi">Program Studi<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=program_studi">Tambah Program Studi</a>
				<a class="dropdown-item" href="index.php?page=daftar_program_studi">Daftar Program Studi</a>
              </div>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="mahasiswa">Mahasiswa<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=mahasiswa_tambah">Tambah Mahasiswa</a>
				<a class="dropdown-item" href="index.php?page=daftar_mahasiswa">Daftar Mahasiswa</a>
              </div>        
            </li>
            <?php
          }
          ?>
          </ul>
          <ul class="nav navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['Login'])){
          ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=logout">Logout</a>
            </li>
            <?php
          }else{
          ?>
          <li class="nav-item">
              <a class="nav-link" href="index.php?page=login">Login</a>
          </li>
          <?php } ?>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="container">