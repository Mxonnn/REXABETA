
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
      Izin
      <small>Detail Izin</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/permission'); ?>">Izin</a></li>
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
                     <h3 class="widget-user-username">Izin</h3>
                     <h5 class="widget-user-desc">Detail Izin</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_permission" id="form_permission" >
            
                    <div class="form-group ">
                        <label for="id" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                          <?= _ent($permission->id); ?>
                        </div>
                    </div>

                  <div class="form-horizontal" name="form_permission" id="form_permission" >
            
                    <div class="form-group ">
                        <label for="title" class="col-sm-2 control-label">Nama </label>

                        <div class="col-sm-8">
                          <?= _ent($permission->name); ?>
                        </div>
                    </div>
                  
                    <div class="form-group ">
                        <label for="definition" class="col-sm-2 control-label">Keterangan </label>

                        <div class="col-sm-8">
                           <?= _ent($permission->definition); ?>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('permission_update', function($option_permission) use($permission){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="Edit Izin (Ctrl+E)" href="<?= site_url('administrator/permission/edit/'.$permission->id); ?>"><i class="fa fa-edit" ></i> Edit Izin</a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="Kembali (Ctrl+X)" href="<?= site_url('administrator/permission/'); ?>"><i class="fa fa-undo" ></i> Kembali ke Daftar</a>
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
