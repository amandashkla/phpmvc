<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
	      </li>
	     </ul>
  	  </div>
  	</div>
</nav>