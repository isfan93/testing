<style type="text/css">
	.table tr th{
		line-height: 35px;
		font-size: 13px;
	}
</style>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" style="text-align:center;">
			<div class="title">
				<h3>
					<?=$title?>
				</h3>
				<h5>
					<?=pretty_date($dateStart,false)?> - <?=pretty_date($dateEnd,false)?>
				</h5>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Pasien / Alamat</th>
						<th>Layanan / Service</th>
						<th>Pemasukan</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($kunjungan) && ($kunjungan->num_rows() >= 1) ) : ?>
						<?php $total = 0; foreach ($kunjungan->result() as $key => $value) : ?>
							<tr>
								<td style="text-align:center;"><?=($key + 1)?></td>
								<td style="text-align:left;"><?=pretty_date($value->visit_in,false)?></td>
								<td>
									<a href="<?=base_url()?>pelaporan/kunjungan/struk/<?=$value->visit_id?>" target="_blank" >
										<b><?=$value->sd_rekmed?></b><br>
										<?=$value->sd_name?><br>
										<i><?=$value->sd_address?></i>
									</a>
								</td>
								<td style="text-align:center;font-weight:bold;">
									<?php if((isset($layanan[$value->visit_id])) && ($layanan[$value->visit_id]->num_rows() >= 1) ) :?>
										<?php foreach ($layanan[$value->visit_id]->result() as $k => $v) : ?>
											<?php $service_type = substr($v->service_id,0,2);?>
											<?php
											switch ($service_type) {
												case 'RJ':
													echo 'Rawat Jalan';
													break;
												case 'RN':
													echo 'Rawat Inap';
													break;
												case 'IG':
													echo 'IGD';
													break;
												case 'LB':
													echo 'Laboratorium';
													break;
												case 'RD':
													echo 'Radiologi';
													break;
												default:
													echo "-";
													break;
											}
											?>
											<br>
										<?php endforeach;?>
									<?php endif;?>
								</td>
								<td style="text-align:right;font-weight:bold;">
									<?=isset($bill[$value->visit_id]) ? number_format($bill[$value->visit_id]->total_price,0,',','.') : '0'?>
									<?php $total += isset($bill[$value->visit_id]) ? $bill[$value->visit_id]->total_price : 0;?>
								</td>
							</tr>
						<?php endforeach;?>
						<tr>
							<td colspan="4" style="text-align:right;font-weight:bold;">
								Total Pemasukan
							</td>
							<td style="text-align:right;font-weight:bold;">
								<?=number_format($total,0,',','.')?>
							</td>
						</tr>
					<?php elseif($kunjungan->num_rows() <= 0) :?>
						<tr>
							<td colspan="5" style="text-align:center;">
								Maaf, Tidak Ada data kunjungan asien
							</td>
						</tr>
					<?php endif;?>
				</tbody>
			</table>
		</div>
	</div>
</div>