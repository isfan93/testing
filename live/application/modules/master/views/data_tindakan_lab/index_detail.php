<script type="text/javascript" src='<?=base_url()?>assets/js/modul/informasi/dokter.js'></script> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/informasi/style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.gritter.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/css/select2.css" />
<script src="<?= base_url() ?>assets/js/select2.js"></script>
<script type="text/javascript">
  function reloadTable(){
      var url_hasil="<?php echo base_url()?>master/data_tindakan_lab/loaddata_detail/"+$('#ds_id').val();
      $(".list_treat_pack").load(url_hasil);
  }

  function resetInput(){
      $('#lab_treat_name').val('');
      //$("select[name='ds[im_unit]']").val('');
      $('#treat_lab_id').val('');
      $('#treat_gol').val('');
  }
  $(function(){
		$("#dsd_name").select2({
            minimumInputLength: 2,
            width:'30%',
            placeholder : 'Tindakan Lab',
            ajax: {
                url: BASE+"master/data_tindakan_lab/get_tindakan_lab",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id,
                                gol: item.gol
                            }
              //
                        })
                    };
          //$('#dr_id').val(data.id)
                }
            }
        });
    $('#dsd_name').change(function(){
      var thisID=$('#dsd_name').select2('data').id;
      var gol=$('#dsd_name').select2('data').gol;
      $('#dsd_id').val(thisID);
      $('#treat_gol').val(gol);
    })
	
      jQuery('.tgl_frm').val(getDateRaw(0)); 
      datas = getDateRaw(0);
      crsf = $('.crsf').val();
		  //=========== del button
  		$(".delete_data").on("click",function(e){
  			//alert("debug");
  			id_array= new Array();
  			i=0;
  			$("input.chk:checked").each(function(){
  				id_array[i] = $(this).val();
  				i++;

  			})
   
  			if(id_array!=0){
         var r = confirm("Anda yakin akan menghapus data ini ?");
            if (r == true) {
          
                  $(".black_loader").fadeIn(300).fadeOut(function(){
                    // console.log($(t).attr('href'));
                     $.ajax({
                        url: "<?php echo base_url()?>master/data_tindakan_lab/delete_list",
                        data: "kode="+id_array+"&csrf_jike_2012="+crsf,
                        type: "POST",
                        success: function(){
                          reloadTable();
                        }
                      })
                  });
                
         };
  			}else {alert("Silahkan memilih data yang akan dihapus.")}
        return false;
  		})
		  //=========== end del
	
      $('.tutup').click(function(){
        event.preventDefault();
        $('.tambahData').slideUp();
        $('.btn_utility').show();
      })
       
      $('.modals').click(function(){
        $('.tambahData').slideDown();
        $('.btn_utility').hide();
      })

      $('#gap').val('0');

      $('.searchname').keyup(function(){
        var search = $('.searchname').val();
         $('.dataTables_filter input').val(search).trigger('keyup');
      })

      jQuery('.tgl_frm').val(getDateRaw(0)); 
      datas = getDateRaw(0);
      crsf = $('.crsf').val();
         
      $('.list_treat_pack').children().remove();
      $.ajax({
        url: '<?php echo base_url()?>master/data_tindakan_lab/loaddata_detail/'+$('#ds_id').val(),
        type: "POST",
        crossDomain: true,
        data: "csrf_jike_2012="+crsf+"&tgl="+datas,
        dataType: "html",
        success: function( data ) {
           
          $('.list_treat_pack').append(data);
        }
      });

         
      $('.submit').click(function(){
          isvalid = $("form.tambahData").validate({
            rules: {
                'ds[dsd_id]': "required",              
            },
            submitHandler: function(form) {                
                formdata = $('form.tambahData').serialize();

                $(".black_loader").fadeIn(300).fadeOut(function(){
                  $.post( "<?=base_url()?>master/data_tindakan_lab/create_detail",formdata).done(function(){
                     
                      reloadTable();
                      resetInput();
                  });
                });
                return false;
            }
          });
      })

      $('.reset').click(function(){
        resetInput();
      })
        

      $('.add_schdl').click(function(){
        return false;
      });

      $('.btn_trash').live("click",function(){
        t = this;
        var r = confirm("Anda yakin akan menghapus data ini ?");
        if (r == true) {
          $(".black_loader").fadeIn(300).fadeOut(function(){
            // console.log($(t).attr('href'));
            $.get($(t).attr('href')).done(function(){
              reloadTable();
            });
          });
        } 
        return false;
      })

      $('.btn_pencil').live("click",function(){
          // reloadTable();
          $(this).parent().parent().parent().find('.shows').hide();
          $(this).parent().parent().parent().find('.hiddens').show();
        return false;

      })

      $('.submitEdit').live("click",function(){
          t = this;
          ins_id =  $(this).parent().parent().parent().find('.ins_id').val();
          ins_name =  $(this).parent().parent().parent().find('.dsim_name').val();
          
          crsf = $('.crsf').val();
          url = "<?=base_url()?>master/data_tindakan_lab/update";
          datapost = "csrf_jike_2012="+crsf+"&ds[ins_name]="+ins_name+"&ds[ins_id]="+ins_id;
          
          $(".black_loader").fadeIn(300).fadeOut(function(){
              $.post(url,datapost).done(function(){
                reloadTable();
                $(t).parent().parent().parent().find('.shows').show();
                $(t).parent().parent().parent().find('.hiddens').hide();

              })
          })

          $(this).parent().parent().parent().find('.shows').show();
          $(this).parent().parent().parent().find('.hiddens').hide();
      })
});
</script>
<style>
    .dataTables_scrollHead{
        margin-bottom: -22px;
    }
    .dataTables_info{
        margin-top: 20px;
    }

.dataTables_filters  input {
    /*position: absolute;*/
    display: block;
    /*top: -20px;*/
}
</style>

<div id="gritter-notice-wrapper" class="alert hide" style="width:750px;position:fixed">
  <div id="gritter-item-1" class="gritter-item-wrapper" style="margin:0 -17px 5px 0">
    <div class="gritter-top"></div>
    <div class="gritter-item">
      <div class="gritter-close" style="display: none; width:50px "></div>
      <img src="<?=base_url()?>assets/img/demo/envelope.png" class="gritter-image">
      <div class="gritter-with-image" style="width:448px">
        <span class="gritter-title" style="margin-left:36px">Message</span>
        <p>Data Berhasil Disimpan   </p>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="gritter-bottom"></div>
  </div>
</div>

<div class="container-fluid" style="padding:0px;">
  <div class="row-fluid">
      <div class="pageheader notab">
          <h1 class="pagetitle"><?=$konten['ds_name']?><br><small><?=$konten['ds_type']?></small></h1>
          
      </div>
  </div>
  <br clear="all">
  <!--a class="btn btn-primary" style="float:right;" href="<?=base_url()?>master/data_tindakan_lab">back</a-->
  <div class="page-content row-fluid">
    <form class="stdform form-horizontal tambahData" style="display:none" method="post" >
      <input type="hidden" class='crsf' name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>" >
	  <input type="hidden" name="ds[ds_id]" id="ds_id" value="<?= $konten['ds_id']?>">
      <div class="span11">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon">
                <i class="icon-th-list"></i>
            </span>
            <h5>Tambah Data</h5>
          </div>
          
          <label class="control-label">Nama Tindakan Lab</label>
          <div class="controls">
            <input type="hidden" name="" id="dsd_name" class="" value="">
            <input type="hidden" name="ds[dsd_id]" id="dsd_id" class="" value="">
            <!--input type="text" autofocus="" name="" id="lab_treat_name" placeholder="Nama Tindakan Lab">
			<input type="hidden" name="ds[dsd_id]" id="treat_lab_id"-->
          </div>
		  <label class="control-label">Golongan</label>
          <div class="controls">
            <input type="text" name="" id="treat_gol" placeholder="Jenis Kelompok" readonly>
			<!--label id="treat_gol"></label-->
          </div>
		  <!--label class="control-label">Harga</label>
          <div class="controls">
            <input type="text" name="" id="treat_price" placeholder="Harga" readonly>
			<!--label id="treat_price"></label-->
          <!--/div-->
          <div class="clearfix"></div>
          <div class="controls">
              <p class="stdformbutton">
                  <input type="submit" value="Simpan" class="submit radius2 btn btn-primary"> 
                  <input type="reset" value="Reset" class="reset radius2 btn btn-warning ">
                  <input type="submit" value="Tutup" class="tutup radius2 btn btn-danger ">
              </p>
          </div>
        </div>
      </div>
    </form>        
   </div>
  <div class="row-fluid btn_utility">
    <div class="span7">
        <div class="widgetbox" style="float:left;padding-top:20px;padding-left:10px;">
  	<a href="" data-toggle="modal" class="modals btn btn-success">
  			<i class="icon-plus-sign icon-white"></i>Tambah</a>
  	<!--a href="" class="btn btn-danger delete_data">
  			<i class="icon-trash icon-white"></i> Hapus</a-->
        </div>
    </div>

  </div>
  <div class="row-fluid">
    <div class="span12">
      <div style="margin:10px;">
      <div class="black_loader">
          <img src="<?=get_loader(9)?>">
        </div>
        <div class="row-fluid list_treat_pack">
           
        </div>
      </div>
    </div>
  </div>
</div>