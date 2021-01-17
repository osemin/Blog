<?php
$makale=mysql_query("select * from makale where makale_id='".$_GET['makale_id']."'  limit 1 ");
$sonuc=mysql_fetch_array($makale);

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
				<h1 class="page-header">Makaleyi  Güncelleme İşlemleri</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Makale Güncelle</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="System/post.php" enctype="multipart/formdata">
							<input type="hidden" name="makaleguncelle" 	value="true">
							<input type="hidden" name="makale_id" value="<?php echo $_GET['makale_id'];?>">
							
								<div class="form-group">
									<label>Makale Başlık</label>
									<input style=" height:100px; width:500px; " class="form-control" name="baslik" id="baslik" 
									value="<?php echo $sonuc['baslik'];?>">
								</div>
															
								<div class="form-group">		
								 <label>Makale Metni</label></br>

								 <input style=" height:100px; width:500px; " class="form-control" rows="3" cols="40" name="icerik" id="icerik" value="<?php echo $sonuc['icerik'];?>">

								 </div>
								 <div class="panel-heading">Makale  Resimleri</div>
             <!-- Resim Alanı -->
            <div class="panel-body">
	            <div class="col-md-12">
              <div class="row">
                <?php 


			
				$sorgu=mysql_query("select * from resimler where makale_id='".$_GET['makale_id']."'");
				
				while($resim=mysql_fetch_array($sorgu)) {?>
				
<div class="col-md-3 col-lg-4 col-xs-2" id="RSM_<?=$resim['yol'];?>">
<img src="../img/makale/<?=$resim['yol'];?>" class="img-thumbnail img-responsive" />
<div><i class="fa fa-trash btn" onclick="resimSil(<?=$resim['rid'];?>,'<?=$resim['yol'];?>')"></i></div>
</div>
                                
                <? } ?>
                </div>
                </div>  
            </div>
								
							  <button type="submit" class="btn btn-primary">Güncelle</button>
								
						</form></br>
						<td><form role="form" method="post" action="resimupload.php" enctype="multipart/form-data" >
	 					<input type="hidden" name="resimyukle" value="true">
	 					<input type="hidden" name="makale_id" value="<?=$sonuc['makale_id'];?>">
						<input type="file" name="resim[]" id="resim" lang="tr"></br>
						<button type="submit" class="btn btn-primary" style="margin:0 auto;">Resmi yükle
						</button></br>
						
                </form></td></br>
                
							</div>
					 	
					</div>
								 </div>
								 </div>
								 </div>