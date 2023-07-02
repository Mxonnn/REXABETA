
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Mutasi/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Mutasi<small>Daftar Semua</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Mutasi</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-body ">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php is_allowed('mutasi_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Tambah mutasi baru (Ctrl+A)" href="<?=  site_url('administrator/mutasi/add'); ?>"><i class="fa fa-plus-square-o" ></i> Tambah Mutasi Baru</a>
                        <?php }) ?>
                        <?php is_allowed('mutasi_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export mutasi dalam format XLS" href="<?= site_url('administrator/mutasi/export'); ?>"><i class="fa fa-file-excel-o" ></i> Export XLS</a>
                        <?php }) ?>
                        <?php is_allowed('mutasi_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export mutasi dalam format PDF" href="<?= site_url('administrator/mutasi/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> Export PDF</a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Mutasi</h3>
                     <h5 class="widget-user-desc">Daftar Semua Mutasi</h5>
                     <h5 class="widget-user-desc">Total : <i class="label bg-blue"><?= $mutasi_counts; ?>  Barang</i></h5>
                  </div>

                  <form name="form_mutasi" id="form_mutasi" action="<?= base_url('administrator/mutasi/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th>Nama Barang</th>
                           <th>Penempatan Awal</th>
                           <th>Departemen Terkini</th>
                           <th>Lokasi Terkini</th>
                           <th>Tanggal Mutasi</th>
                           <th>Keterangan</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_mutasi">
                     <?php foreach($mutasis as $mutasi): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $mutasi->id_mutasi; ?>">
                           </td>
                           
                           <td><?= _ent($mutasi->nama_barang); ?></td>
                           <td><?= _ent($mutasi->id_penempatan); ?></td> 
                           <td><?= _ent($mutasi->departemen); ?></td> 
                           <td><?= _ent($mutasi->lokasi); ?></td> 
                           <td><?= _ent($mutasi->tanggal_mutasi); ?></td>
                           <td><?= _ent($mutasi->keterangan); ?></td> 
                           <td width="200">
                              <?php is_allowed('mutasi_view', function($option_mutasi) use ($mutasi){?>
                              <a href="<?= site_url('administrator/mutasi/view/' . $mutasi->id_mutasi); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> Lihat
                              <?php }) ?>
                              <?php is_allowed('mutasi_update', function($option_mutasi) use ($mutasi){?>
                              <a href="<?= site_url('administrator/mutasi/edit/' . $mutasi->id_mutasi); ?>" class="label-default"><i class="fa fa-edit "></i> Edit</a>
                              <?php }) ?>
                              <?php is_allowed('mutasi_delete', function($option_mutasi) use ($mutasi){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/mutasi/delete/' . $mutasi->id_mutasi); ?>" class="label-default remove-data"><i class="fa fa-close"></i> Hapus</a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($mutasi_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Data mutasi tidak tersedia :( 
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <option value="">Bulk</option>
                           <option value="delete">Hapus</option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="Terapkan aksi bulk">Terapkan</button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="Filter" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value="">Semua</option>
                           <option <?= $this->input->get('f') == 'nama_barang' ? 'selected' :''; ?> value="nama_barang">Nama Barang</option>
                           <option <?= $this->input->get('f') == 'id_penempatan' ? 'selected' :''; ?> value="id_penempatan">Id Penempatan</option>
                           <option <?= $this->input->get('f') == 'departemen' ? 'selected' :''; ?> value="departemen">Departemen</option>
                           <option <?= $this->input->get('f') == 'lokasi' ? 'selected' :''; ?> value="lokasi">Lokasi</option>
                           <option <?= $this->input->get('f') == 'tanggal_mutasi' ? 'selected' :''; ?> value="tanggal_mutasi">Tanggal Mutasi</option>
                           <option <?= $this->input->get('f') == 'keterangan' ? 'selected' :''; ?> value="keterangan">Keterangan</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="filter pencarian">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/mutasi');?>" title="reset filter">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
                     </div>
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->
      </div>
   </div>
</section>
<!-- /.content -->

<!-- Page script -->
<script>
  $(document).ready(function(){
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "Hapus mutasi ini?",
          text: "Mutasi yang sudah dihapus, tidak dapat dikembalikan lagi!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ya, Hapus saja!",
          cancelButtonText: "Gak jadi deh",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_mutasi').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "Hapus mutasi yang dipilih?",
            text: "Mutasi yang sudah dihapus, tidak dapat dikembalikan lagi!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tunggu, Gak jadi deh",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/mutasi/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "Tolong pilih aksi yang diinginkan dulu!",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oke!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

  }); /*end doc ready*/
</script>