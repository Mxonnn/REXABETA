
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Disposal      <small>Detail Disposal</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/disposal'); ?>">Disposal</a></li>
      <li class="active">Detail</li>
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
                    
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Disposal</h3>
                     <h5 class="widget-user-desc">Detail Disposal</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_disposal" id="form_disposal" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id Disposal </label>

                        <div class="col-sm-8">
                           <?= _ent($disposal->id_disposal); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nomor Surat </label>

                        <div class="col-sm-8">
                           <?= _ent($disposal->nomor_surat); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama Barang </label>

                        <div class="col-sm-8">
                           <?= _ent($disposal->nama_barang); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Jumlah </label>

                        <div class="col-sm-8">
                           <?= _ent($disposal->jumlah); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label"> Berkas </label>
                        <div class="col-sm-8">
                             <?php if (is_image($disposal->berkas)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/disposal/' . $disposal->berkas; ?>">
                                <img src="<?= BASE_URL . 'uploads/disposal/' . $disposal->berkas; ?>" class="image-responsive" alt="image disposal" title="berkas disposal" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/disposal/' . $disposal->berkas; ?>">
                                 <img src="<?= get_icon_file($disposal->berkas); ?>" class="image-responsive" alt="image disposal" title="berkas <?= $disposal->berkas; ?>" width="40px"> 
                               <?= $disposal->berkas ?>
                               </a>
                               </label>
                              <?php endif; ?>
                        </div>
                    </div>
                                       
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Deskripsi </label>

                        <div class="col-sm-8">
                           <?= _ent($disposal->deskripsi); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('disposal_update', function($option_disposal) use ($disposal){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="Edit Disposal (Ctrl+E)" href="<?= site_url('administrator/disposal/edit/'.$disposal->id_disposal); ?>"><i class="fa fa-edit" ></i> Edit Disposal</a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="Kembali (Ctrl+X)" href="<?= site_url('administrator/disposal/'); ?>"><i class="fa fa-undo" ></i> Kembali</a>
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
