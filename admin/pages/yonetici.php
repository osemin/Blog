

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Yönetici İşlemleri</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Yönetici ekle</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="System/post.php" enctype="multipart/formdata">
							<input type="hidden" name="yoneticiekle" value="true">
								<div class="form-group">
									<label>Yönetici Adı </label>
									<input class="form-control" placeholder="Yönetici Adı Girin" name="yonetici_adi" id="yonetici_adi">
								</div>
																
								<div class="form-group">
									<label>Şifre</label>
									<input type="password" class="form-control" name="password" id="password">
								
								
							 	<div class="form-group">
									<label>E-posta Adresi</label>
									<input type="text" class="form-control" name="mail" id="mail">
								</div>
								
								<div class="form-group">
									<label>Yönetici Yetki Seçimi</label>
									<select class="form-control" name="yetki" id="yetki">
										<option value="100">Full Yetkili Yönetici</option>
										<option value="50">Kategori Yöneticisi</option>
										<option value="25">Makale  Yöneticisi</option>
										 
									</select>
								</div>
							 
																
							 
						 <button type="submit" class="btn btn-primary">Yönetici Ekle</button>

								 
								
							 
								
						</form>
							</div>

 
			</div><!-- /.col-->
		</div><!-- /.row -->
		<div class="row">

 

 
			<div class="col-md-12">


			<div id="Sonuc" style="margin-top: 25px;">
				 
			</div>
				<div class="panel panel-default">
					<div class="panel-heading">Yönetici Tablosu</div>
					<div class="panel-body">
						<table data-toggle="table" >
						    <thead>
						    <tr>
						        
						        <th data-field="name">Yönetici Adı</th>
						        <th data-field="mail">Yönetici Mail</th>
						          <th data-field="price">Yönetici İşlemleri </th>
						    </tr>
						    </thead>

 
	
<?php
$sorgu=mysql_query("select * from yoneticiler");

while ($sonuc=mysql_fetch_array($sorgu)) {?>
 	 


    <tr>
     

   
    <td><?=$sonuc['yonetici_adi'];?>  </td>
    <td><?php echo $sonuc['mail'];?></td> 
    <td><a href="System/post.php?islem=yoneticisil&yonetici_id=<?=$sonuc['yonetici_id'];?>"><i class="fa fa-trash" style="width: 10%; float: right; font-size: 24px; margin-left: 5%;"></i></a>

    <a href="javascript:;" onclick="YetkiDegis(<?=$sonuc['yonetici_id'];?>,'ResetSifre','0');">
    <i class="fa fa-refresh" style="width: 10%; float: right; font-size: 24px; margin-left: 5%;" ></i></a>

	<select class="form-control" name="yetki" id="yetki" style="width: 30%; float: left;" onchange="YetkiDegis(<?=$sonuc['yonetici_id'];?>,'YetkiDegis',this.value);">
	
	<option value="100" <?php if($sonuc['yetki']==100) { ?> selected="selected" <?php } ?>>Full Yetkili Yönetici</option>
	<option value="50" <?php if($sonuc['yetki']==50) { ?> selected="selected" <?php } ?>>Kategori Yöneticisi</option>
	<option value="25" <?php if($sonuc['yetki']==25) { ?> selected="selected" <?php } ?>>Makale  Yöneticisi

	 </option>
    </select>	

<select class="form-control" name="durum" id="durum" style="width: 40%; float: left;" onchange="YetkiDegis(<?=$sonuc['yonetici_id'];?>,'DurumDegis',this.value);">
										<option value="1"<?php if($sonuc['durum']==1) { ?> selected="selected" <?php } ?>>Aktif</option>
										<option value="0"<?php if($sonuc['durum']==0) { ?> selected="selected" <?php } ?>>Pasif</option>
									 
										 
									</select>					    
				    



<?php }  ?>
									</td>
						    </tr>




 				</table>
					</div>
				</div>
			</div>
					 	
					</div>
				</div>
	</div><!--/.main-->