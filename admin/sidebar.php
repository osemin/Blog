<?
include 'System/function.php'; 
//yetkiKontrol();//Çalışırsa yetki kontrol edecek
girisKontrol(); // Kullanıcı giriş yapmışmı kontrol ediyoruz. function.php den geliyor.
 

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Ekoa</span>Admin-Paneli</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $_SESSION['admin']; ?>  <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="cikis.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Çıkış Yap</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Arama">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial">
			<use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="?page=yonetici"><svg class="glyph stroked calendar">
			<use xlink:href="#stroked-calendar"></use></svg> Yönetici işlemleri</a></li>

			<li><a href="?page=uyeler"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
Üye İşlemler</a></li>
		 
			<li><a href="?page=kategori"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Kategori İşlemleri</a></li>
					
					 
					 
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Makale Menüsü 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="?page=makale">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Makale Ekle
						</a>
					</li>
					<li>
						<a class="" href="?page=makalelistele">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Makale listele
						</a>
					</li>
					</ul></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->