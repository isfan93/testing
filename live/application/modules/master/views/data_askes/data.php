  <script>
    $(function(){
    	 $('.tabel-master').dataTable( {
                "sPaginationType": "bootstrap",
                // "sScrollY": "400px",
                "bPaginate": true,
                "bFilter": true,
                "bRetrieve": true,
                 "bDestroy": true,
                "bSort": true,
                "aoColumnDefs": [
				      { "bSortable": false, "aTargets": [ 0 ],"sWidth":"3%"},
              { "bSortable": true, "aTargets": [ 1 ],"sWidth":"7%" },
				      { "bSortable": false, "aTargets": [ 2 ],"sWidth":"40%" },
					  { "bSortable": false, "aTargets": [ 3 ],"sWidth":"7%" },
				   ],
                "oLanguage": {
                  "sEmptyTable": "Obat tidak tersedia"
                }
      });
    	$(".dataTables_filter").hide();
		  $('.dataTables_length').hide();
    })
 </script>
 <table cellpadding="0" cellspacing="0" border="0" class="tabel-master table table-bordered def_table_y dataTable tb_scrol">
    <thead>
      <tr  role="row">
		<th class="head0" width="20px;"><i class="icon-trash"></i></th>
        <th class="head0" width="40px;">No.</th>
        <th class="head1">Nama Asuransi Kesehatan</th>
        <th class="head1">Action</th> 
      </tr>
    </thead>
    <tbody id="list-data">
    <?php $i=1; foreach ($datas->result() as $list):?>
      <tr>
        <td class="center"><input type="checkbox" name="chk[]" id="cek_del_detail_faktur" value="<?=$list->ins_id?>" class="chk"></td> 
        <td class="center"><?=$i++?><input type="hidden" class='ins_id' value="<?=$list->ins_id?>" id="seq_<?=$i?>"></td> 
        <td><div class='shows'><?=$list->ins_name?></div><input class="hiddens dsim_name" name='' type="text" value="<?=$list->ins_name?>" ></td>
        
        <td class="center"> 
          <div class='shows'>
            <a class="buttons btn_pencil" style="" href="<?=base_url()?>master/data_askes/edit_list/<?=$list->ins_id?>"></a>
            <a class="buttons btn_trash" style="margin-left:10px;" href="<?=base_url()?>master/data_askes/delete_list/<?=$list->ins_id?>"></a>
          </div>
          <div class="hiddens">
            <input type="submit" value="Simpan" class="submitEdit radius2 btn btn-primary"> 
            </div>
          </td> 
      </tr>
    <?php endforeach?>               
    </tbody>
    <tfoot>
    </tfoot>
  </table>

<style type="text/css">
    .tabel-master #list-data td{
    	line-height: 10px;
      padding: 6px;
    }

    #list-data .hiddens{
      display: none;
    }
</style>