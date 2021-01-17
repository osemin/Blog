 <?php 


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
				<h1 class="page-header">Kategori İşlemleri</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Kategori ekle</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="System/post.php" enctype="multipart/formdata">
							<input type="hidden" name="kategoriekle" value="true">
								<div class="form-group">
									<label>Kategori Adı</label>
									<input class="form-control" placeholder="Kategori Adı" name="kategori_adi" id="kategori_adi">
								</div>
							<div class="form-group">
									<label>Kategori Seçimi</label>
									<select class="form-control" name="ust_id" id="ust_id">
										<option value="0"> Üst Kategori</option>
										
										<?php 
										$veri=mysql_query("select * from kategoriler where ust_id=0 and durum=1");
										while ($son=mysql_fetch_array($veri)) {?>
																			
										 <option value="<?php echo $son['kategori_id'];?>">
										 <?php echo $son['kategori_adi'];?></option>
										
										 <?}?>
										
										 
									</select>
										
									
  							</div>

								
							 
																
							 
						 <button type="submit" class="btn btn-primary">Kategori Ekle</button>

								 
								
							 
								
						</form> 
	</div>
		 
			 <div class="row">
			<div id="KategoriGuncelle" style="margin-top:7%;"></div>
			<div class="col-lg-12">
			 <div id="uyari" style="margin-top: 25px;">
			 </div>
				<div class="panel panel-default">

					<div class="panel-heading">Kategori Tablosu</div>
					<div class="panel-body">
						<table data-toggle="table"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Kategori ID</th>
						        <th data-field="id" data-sortable="true">Kategori Adı</th>
						        <th data-field="name"  data-sortable="true">Ust Kategori</th>
						        <th data-field="price" data-sortable="true">İşlemler</th>
						    </tr>
						    </thead>
						    <?php 
						 $kategori=mysql_query("select * from kategoriler");
						    while ( $veri=mysql_fetch_array($kategori)) {
						    	$ust_id=$veri['ust_id']
						    	?>
						    

						    
								<tr>
									<td></td>
					<td><?php echo $veri['kategori_adi']; ?></td>
					<td><?php if($ust_id==0){echo "Ana Kategori";}else{kategoriAd($ust_id);} ?></td>
									<td>
					<select class="form-control" name="durum" id="durum" style="width: 40%; float: left;" onchange="YetkiDegisi(<?=$veri['kategori_id'];?>,'KategoriDurum',this.value);">
										<option value="1"<?php if($veri['durum']==1){ ?> selected="selected" <?php } ?>>Aktif
											
										</option>
										<option value="0"<?php if($veri['durum']==0){ ?> selected="selected" <?php } ?>>Pasif
											
										</option>
										</select>
			<a href="?page=kat&kategori_id=<?=$veri['kategori_id'];?>"  <i class="fa fa-pencil-square"style="font-size:24px; margin:4px;"></i>  </a>
			<a href="System/post.php?islem=kategorisil&kategori_id=<?=$veri['kategori_id'];?>"><i class="fa fa-trash" style="width: 10%; float: left; font-size: 24px; margin-left: 5%;"></i></a>
					<a href="System/excel.php/kategori.xls" download title="Excel"> <i  class="fa fa-table" style="font-size:24px; margin:4px" ></i></a>


										 
					 
									</td>
								</tr>

							<? }?>

						</table>
					</div>
				
				</div>
			</div>
		</div><!--/.row-->	
						

  
					 	
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
 