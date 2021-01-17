<?php
 
$kategori=mysql_query("select * from kategoriler where kategori_id='".$_GET['kategori_id']."' limit 1");
$kat=mysql_fetch_array($kategori);

?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kategori Güncelleme İşlemleri</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Kategori Güncelle</div>
					<div class="panel-body">
						<div class="col-md-6">
						<form role="form" method="post" action="System/post.php" enctype="multipart/formdata">
							<input type="hidden" name="kategoriguncelle" value="true">
							<input type="hidden" name="kategorisil" value="true">
        				    <input type="hidden" name="kategori_id" value="<?php echo $_GET['kategori_id']; ?>">
								<div class="form-group">
									<label>Kategori Adı</label>
									<input class="form-control"  name="kategori_adi" id="kategori_adi" value="<?php echo $kat['kategori_adi'];?>">
								</div>
							<div class="form-group">
									<label>Kategori Seçimi</label>
									<select class="form-control" name="ust_id" id="ust_id">
										<option value="0"> Üst Kategori</option>
										<?php
										$veri=mysql_query("select * from kategoriler where ust_id=0 and durum=1");
										while ($sonuc=mysql_fetch_array($veri)) {?>
																				
																			
								 <option value="<?php echo $sonuc['kategori_id'];?>" <? if($kat['ust_id']==   
								 	$sonuc['kategori_id'] ) { ?> selected="selected" <? } ?>  >
										<?php echo $sonuc['kategori_adi'];?></option>
										
										 <?}?>
										
										 
									</select>
										
									
  							</div>

								
							 
																
							 
						 <button type="submit" class="btn btn-primary">Güncelle</button>