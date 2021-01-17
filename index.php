<?php include 'header.php'; ?>
 <?php include 'admin/System/baglan.php'; ?>
 <?php
 
ini_set('display_errors','on');
 
error_reporting(E_ALL);?>
 
<div class="row">	
	
					<!-- post -->
					<div class="col-md-6" >
						<div class="post post-thumb">
							<?php 
						$ver=mysql_query("SELECT makale.baslik,makale.tarih,makale.icerik,kategoriler.kategori_adi ,resimler.makale_id 
FROM makale,kategoriler,resimler  WHERE makale.makale_id=resimler.makale_id AND kategoriler.alt_id=1  ");
						while ($son=mysql_fetch_array($ver)) {
				$resimkontrol=mysql_fetch_array(mysql_query("select CONCAT('img/makale/',yol) from resimler 
							where makale_id='".$son['makale_id']."' "));
						if (!empty($resimkontrol))
						{
							$resim=$resimkontrol;
						}
						else
						{
							 $resim[0]="img/no-images.jpg";
						}								

						?> 
							<a class="post-img" href="blog-post.html">
								<img src="<?php echo $resim[0];?>"
								alt=""></a>
							<div class="post-body" >
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html"><?=$son['kategori_adi'];?></a>
									<span class="post-date"><?=$son['tarih'];?></span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">
									<?=$son['baslik'];?></a></h3>
							</div>
						</div>
					</div>
					
<?}?>






					<!-- post -->
					 
	
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Son Yazılar</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">Web Design</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>
					</div>
						<!--post---->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
						<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<div class="clearfix visible-md visible-lg"></div>
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

				 
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
						<!-- /post -->

				 
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
						<!-- /post -->

				 
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
						<!-- /post -->

				 
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
						<!-- /post -->

				 
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					
					</div>
					<!-- /post -->
 
<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

<?php include'footer.php'; ?>