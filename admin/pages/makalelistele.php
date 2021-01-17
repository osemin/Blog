
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
				 				
<div id="veri" style="margin-top: 25px;">
</div>
					<div class="panel-heading">Makale Tablosu</div>

					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        
						     
						        <th data-field="baslik"  data-sortable="true">Makale Başlık</th>
						        <th data-field="yazar"  data-sortable="true">Yazar</th>
						        <th data-field="icerik" data-sortable="true">Tarih</th>				
						        <th data-field="price"  data-sortable="true">İşlemler</th>
						    </tr>
						    </thead>
						    <?php 
						    	$mak=mysql_query("select * from makale");
						    	while ($veri=mysql_fetch_array($mak)) {?>
						    	
						    <tr>
						    	
						    	<td><?php echo $veri['baslik'];?></td>
						    	<td><?php echo $veri['yazar'];?></td>
						    	<td><?php echo $veri['tarih'];?></td>
						    	
						    
						    	<td>
			 


			<select class="form-control" name="durum" id="durum" style="width: 40%; float: left;" onchange="YetkiDegisim(<?=$veri['makale_id'];?>,'MakaleDurum',this.value);">
					<option value="1"<?php if($veri['durum']==1) { ?> selected="selected" <?php } ?>>Aktif
					</option>
					<option value="0"<?php if($veri['durum']==0) { ?> selected="selected" <?php } ?>>Pasif
					</option>

			</select>
			<a href="?page=makaleguncelle&makale_id=<?=$veri['makale_id'];?>"><i class="fa fa-pencil" style="width: 10%; float: right; font-size: 24px; margin-left: 5%;" ></i></a>
			<a href="System/post.php?islem=makalesil&makale_id=<?=$veri['makale_id'];?>"><i class="fa fa-trash" style="width: 10%; float: right; font-size: 24px; margin-left: 5%;"></i></a>	    

			
									    	</td>
							    </tr>

									<?}?>		    
						</table>
						
					</div>
				</div>
			</div>

		</div><!--/.row-->	
		</div><!--/.row-->	
			</div><!-- /.col-->






		</div><!-- /.row -->
		
	</div><!--/.main-->
