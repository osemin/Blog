 <script src="ckeditor/ckeditor.js"></script>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Makale  İşlemleri</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Makale ekle</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="System/post.php" enctype="multipart/formdata" id="MakaleEkle">
							<input type="hidden" name="makaleekle" value="true">
							<div class="form-group">
									<label>Makale Kategori Seçimi</label>
									<select class="form-control" name="kat_id" id="kat_id">
									<?php 
										$makale=mysql_query("select * from kategoriler where durum=1 and ust_id!=0");
										while ($sor=mysql_fetch_array($makale)) {?>
										
									
										<option value="<?php echo $sor['kategori_id'];?>"<?php
										 if($listele['ust_id']==$sor['kategori_id']){?>select="selected"<?}?>><?php echo $sor['kategori_adi'];?></option>


										 	<?}?>

									
										 
									</select>
										
									<div class="form-group">
									<label>Makale Yazar Seçimi</label>
									<select class="form-control" name="yazar" id="yazar">
									
											<?php 
										$yazar=mysql_query("select * from yoneticiler");
										while ($veri=mysql_fetch_array($yazar)) {?>
														

						<option value="<?php echo $veri['yonetici_adi']; ?>"><?php echo $veri['yonetici_adi'];?>
										</option>
										 
									

										 <?}?>
									</select>

								</div>

								<div class="form-group">
									<label>Makale Başlık</label>
									<input class="form-control" placeholder="Makale Başlık" name="baslik" id="baslik">
								</div>
															
								<div class="form-group">		
								 <label>Makale Metni</label></br>
								 <textarea class="ckeditor" name="icerik" id="icerik"> </textarea>
								 </div>
								 <div class="form-group">
								<label>Makale Tarih</label></br>
								 <input class="form-control" type="date" name="tarih" id="tarih" />
								</div>
							  
																
							 
						 <button type="submit" class="btn btn-primary">Makale Ekle</button>

								 
								
							 
								
						</form>
							</div>
					 	
 								

			</div>
				</div>

		</div><!--/.row-->	
			</div><!-- /.col-->






		</div><!-- /.row -->
		
	</div><!--/.main-->
 