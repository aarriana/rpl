<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Diskusi</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.jumbotron {
    position: relative;
    background: #000 url("img/bg1.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}
	</style>
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?php echo site_url('welcome/index') ?>">ForumDiskusi</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/awal') ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/about/')?>">About</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/kontak/')?>">Contact</a></li>
  </ol>
</nav>
<div id="container">
<div class="jumbotron">
  <h1 class="display-4">Hello, Discussant!</h1>
  <p class="lead">"Hiduplah pada sudut 45 derajat dalam gerak parabola"</p>
  <hr class="my-4">
  <p>Forum diskusi</p>
</div>
	<div id="body">
		<table class="table table-sm table-dark">
		<thead>
		<tr class="table-primary">
			<th scope="col">NIM</th>
			<th scope="col">Nama Lengkap</th>
			<th scope="col">Materi</th>
			<th scope="col">Kehadiran</th>
			<th scope="col">Opsi</th>
		</tr>
		</thead>
		
		<?php
		foreach($hasil as $r){ ?>
		<tbody>
    <tr>
		<td><?php echo $r['nim'] ?></td>
        <td><?php echo $r['nama_lengkap'] ?></td>
        <td><?php echo $r['materi'] ?></td>
		<td><?php echo $r['kehadiran'] ?></td>
		<td>
			<a type="button" class="btn btn-primary btn-sm" href="<?php echo site_url('welcome/form_edit/'.$r['nim'])?>">Edit</a>
			<a type="button" class="btn btn-primary btn-sm" href="<?php echo site_url('welcome/delete/'.$r['nim'])?>" onclick="return confirm('Apakah ingin menghapus absensi ini ?')">Hapus</a>
		</td>
    </tr>
  </tbody>
		<?php } ?>
		</table>
		<a type="button" class="btn btn-info" href="<?php echo site_url('welcome/form_input') ?>">Tambah Absensi</a>
	</div>

	 <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Aar Riana 2018</p>
      </div>
    </footer>
</div>

</body>
</html>