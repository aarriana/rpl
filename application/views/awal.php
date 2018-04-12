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
		
		background-image: url(img/bg1.jpg);
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
	body{font-family:Lora;background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(/img/bg1.jpg);background-attachment:fixed;background-position:center;background-size:cover}h1,h2,h3,h4,h5,h6{font-family:Raleway}p{line-height:1.75}.text-faded{color:rgba(255,255,255,.3)}.site-heading{margin-top:5rem;margin-bottom:5rem;text-transform:uppercase;line-height:1;font-family:Raleway}.site-heading .site-heading-upper{display:block;font-size:2rem;font-weight:800}.site-heading .site-heading-lower{font-size:5rem;font-weight:100;line-height:4rem}.page-section{margin-top:5rem;margin-bottom:5rem}.section-heading{text-transform:uppercase}.section-heading .section-heading-upper{display:block;font-size:1rem;font-weight:800}.section-heading .section-heading-lower{display:block;font-size:3rem;font-weight:100}.bg-faded{background-color:rgba(255,255,255,.85)}#mainNav{background-color:rgba(47,23,15,.9);font-family:Raleway}#mainNav .navbar-brand{color:#e6a756}#mainNav .navbar-nav .nav-item .nav-link{color:rgba(255,255,255,.7);font-weight:800}#mainNav .navbar-nav .nav-item.active .nav-link{color:#e6a756}@media (min-width:992px){#mainNav .navbar-nav .nav-item .nav-link{font-size:.9rem}#mainNav .navbar-nav .nav-item .nav-link:hover{color:rgba(255,255,255,.4)}#mainNav .navbar-nav .nav-item.active .nav-link:hover{color:#e6a756}}.btn-xl{font-weight:700;font-size:.8rem;padding-top:1.5rem;padding-bottom:1.5rem;padding-left:2rem;padding-right:2rem}.intro{position:relative}@media (min-width:992px){.intro .intro-img{width:75%;float:right}.intro .intro-text{left:0;width:60%;margin-top:3rem;position:absolute}.intro .intro-text .intro-button{width:100%;left:0;position:absolute;bottom:-2rem}}@media (min-width:1200px){.intro .intro-text{width:45%}}.cta{padding-top:5rem;padding-bottom:5rem;background-color:rgba(230,167,86,.9)}.cta .cta-inner{position:relative;padding:3rem;margin:.5rem;background-color:rgba(255,255,255,.85)}.cta .cta-inner:before{border-radius:.5rem;content:'';position:absolute;top:-.5rem;bottom:-.5rem;left:-.5rem;right:-.5rem;border:.25rem solid rgba(255,255,255,.85)}@media (min-width:992px){.about-heading .about-heading-img{position:relative;z-index:0}.about-heading .about-heading-content{margin-top:-5rem;position:relative;z-index:1}}@media (min-width:992px){.product-item .product-item-title{position:relative;z-index:1;margin-bottom:-3rem}.product-item .product-item-img{position:relative;z-index:0;max-width:60vw}.product-item .product-item-description{position:relative;z-index:1;margin-top:-3rem;max-width:50vw}}.list-hours{font-size:.9rem}.list-hours .list-hours-item{border-bottom:1px solid rgba(230,167,86,.5);padding-bottom:.25rem;margin-bottom:1rem;font-style:italic}.list-hours .list-hours-item.today{font-weight:700;color:#e6a756}@media (min-width:992px){.list-hours{width:50%;font-size:1.1rem}}.address strong{font-size:1.2rem}.footer{background-color:rgba(47,23,15,.9)}.text-primary{color:#e6a756!important}.bg-primary{background-color:#e6a756!important}.btn{box-shadow:0 3px 3px 0 rgba(33,37,41,.1)}.btn-primary{background-color:#e6a756;border-color:#e6a756}.btn-primary:active,.btn-primary:focus,.btn-primary:hover{background-color:#df902a;border-color:#df902a}.font-weight-light{font-weight:100!important}
	</style>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?php echo site_url('welcome/awal') ?>">ForumDiskusi</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/index') ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/about/')?>">About</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/kontak/')?>">Contact</a></li>
  </ol>
</nav>
<div id="container">

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro"> 
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Forum Diskusi</span>
            </h2>
            <p class="mb-3">"Hiduplah pada sudut 45 derajat dalam gerak parabola".
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="<?php echo site_url('welcome/awal') ?>">Absen Kuy!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

</body>
</html>