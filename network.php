<?php include 'header.php'; ?>
 <?php include 'admin/System/baglan.php'; ?>
<?php 
  session_start(); 
  $link = "hede.php?PHPSESSID=" . session_id(); 
 
?>


				<div class="row">

						
					<div class="col-md-12">
						
						<div class="section-title">
							<h2>Son Yazılar</h2>

						</div>
					</div>
					<!-- post -->
					<?php 
						$ver=mysql_query("SELECT makale.baslik,makale.tarih,makale.makale_id,kategoriler.kategori_adi FROM makale,kategoriler WHERE makale.alt_id=kategoriler.alt_id AND kategoriler.alt_id=1");
						while ($son=mysql_fetch_array($ver)) {?>
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
							<a class="post-category cat-1" href="category.html">
										 <?=$son['kategori_adi'];?></a>
							<span class="post-date"><?=$son['tarih'];?></span>
								</div>
								<h3 class="post-title">
								<a href="postblog.php?makale_id=<?=$son['makale_id'];?>">			 

								<?=$son['baslik'];?> </a>
									 
							</h3>
							</div>

						</div>

					 					
					</div>

<?}?>
</div>


	 	 	 
					 
 
<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

<?php include'footer.php'; ?>