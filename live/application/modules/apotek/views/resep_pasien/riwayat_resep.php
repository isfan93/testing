<style type="text/css" media="screen">
	.frm_search input{margin-top:-1px;float:right;margin-left:2px}
	.frm_search .btn{float:right;margin-left:5px}
	.frm_search .btn span{padding:2px 10px;}
	.search_choice a{font-weight:bold}
	.search_choice a.active{color:#fb9338}
	.search_choice {float:right;margin-right:95px}
	#advance{display:none}
	#filter{border-bottom: 1px dashed #DDD;}
	#body_search{margin-top:10px}
	.tname{font-size:110%}
	#dyntable tbody tr td{border-right:none}
	#dyntable tbody tr td + td + td{border-right:1px solid #DDD}
	#dyntable tr:nth-child(even){
		background:#F7F7F7;
	}
	.dataTables_scrollHead{
		margin-bottom: -22px;
	}
	.dataTables_info{
		margin-top: 20px;
	}
</style>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('.def_table_y').dataTable( {
			"sPaginationType": "full_numbers",
			"bLengthChange": false,
			// "sScrollY": "350px",
			"bPaginate": true,
            "aoColumnDefs": [
			      { "bSortable": true, "aTargets": [ 0 ],"sWidth":"7%"  },
			      { "bSortable": true, "aTargets": [ 1 ],"sWidth":"12%" },
			      { "bSortable": true, "aTargets": [ 2 ],"sWidth":"15%" },
			      { "bSortable": true, "aTargets": [ 3 ],"sWidth":"30%" },
			      { "bSortable": true, "aTargets": [ 4 ],"sWidth":"15%" },
			      { "bSortable": true, "aTargets": [ 5 ],"sWidth":"15%" }
			],
	    });

	    $(".chatsearch input").keyup(function(e){
			$(".dataTables_filter input").val($(".chatsearch input").val()).trigger('keyup');
		})
	})
</script>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="pageheader notab">
		    <h1 class="pagetitle"><?=$title?></h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span5" style="float:right;">
			<div class="widgetbox" style="margin-top:20px;">
				<?=form_open('',array('class'=>'frm_search'));?>
					<div id="basic">
						<div class="chatsearch" >
                        	<input type="text" name="" placeholder="Search" style="margin:auto;">
                    	</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br clear="all">
	<div class="row-fluid">
		<div class="widgetbox">
			<div class="span12">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered def_table_y tb_scrol" id="dyntable">
					    <thead>
					        <tr>
					        	<th>No</th>
					        	<th>No Rekmed</th>
					        	<th>Tanggal Pemeriksaan</th>
					            <th>Nama, alamat</th>
					            <th>Unit, Kamar, Pemeriksaan</th>
					            <th style="width:70px"class="head0">Aksi</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php
					    		$no = 0;
					    		foreach ($resep_pasien->result() as $key => $value) {
					    			$no++;
					    			?>
					    				<tr>
					    					<td style="text-align:center;"><?php echo $no;?></td>
					    					<td><?=$value->sd_rekmed?></td>
					    					<td><?=pretty_date($value->visit_in,false)?></td>
					    					<td>
					    						<b><?=$value->sd_name?></b><br>
					    						<?=$value->sd_address?>
					    					</td>
					    					<td style="text-align:center;">
					    						<?php
					    							$service_type = substr($value->service_id, 0,2);
					    							$service_name = '';
					    							if($service_type == 'RJ')
					    								$service_name = 'Rawat Jalan (Poli)';
					    							if($service_type == 'RN')
					    								$service_name = 'Rawat Jalan (Poli)';
					    							if($service_type == 'IG')
					    								$service_name = 'Rawat Jalan (Poli)';
					    							echo strtoupper($service_name);
					    						?>
					    					</td>
					    					<td style="text-align:center;">
								            	<a href="<?=base_url('apotek/resep_pasien/cetak_resep')?>/<?=$value->recipe_id?>" target="_blank" class="btn btn-small btn-info">Cetak</a>
								            </td>
					    				</tr>
					    			<?php
					    		}
					    	?>
					    </tbody>
					</table>
			</div>
		</div>
	</div>
</div>
