
<script src="{php_open_tag_echo} BASE_ASSET; {php_close_tag}/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/<?= ucwords($table_name); ?>/add';
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
      <?= ucwords($subject); ?><small>List All</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= ucwords($subject); ?></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php if ($this->input->post('create')) { ?>{php_open_tag} is_allowed('<?= $table_name; ?>_add', function(){{php_close_tag}
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="add new <?= ucwords(clean_snake_case($table_name)); ?> (Ctrl+a)" href="{php_open_tag_echo}  site_url('administrator/<?= $table_name; ?>/add'); {php_close_tag}"><i class="fa fa-plus-square-o" ></i> Add New <?= ucwords($subject); ?></a>
                        {php_open_tag} }) {php_close_tag}
                        <?php } ?>{php_open_tag} is_allowed('<?= $table_name; ?>_export', function(){{php_close_tag}
                        <a class="btn btn-flat btn-success" title="export <?= ucwords(clean_snake_case($table_name)); ?>" href="{php_open_tag_echo} site_url('administrator/<?= $table_name; ?>/export'); {php_close_tag}"><i class="fa fa-file-excel-o" ></i> Export</a>
                        {php_open_tag} }) {php_close_tag}
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="{php_open_tag_echo} BASE_ASSET; {php_close_tag}/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><?= ucwords($subject); ?></h3>
                     <h5 class="widget-user-desc">List All <?= ucwords($subject); ?> <i class="label bg-yellow">{php_open_tag_echo} $<?= $table_name; ?>_counts; {php_close_tag}  items</i></h5>
                  </div>

                  <form name="form_<?= $table_name; ?>" id="form_<?= $table_name; ?>" action="{php_open_tag_echo} base_url('administrator/<?= $table_name; ?>/index'); {php_close_tag}">
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <?php foreach ($field_all as $field => $option): ?><th><?= ucwords(clean_snake_case($option['input_name'])); ?></th>
                           <?php endforeach; ?><th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_<?= $table_name; ?>">
                     {php_open_tag} foreach($<?= $table_name; ?>s as $<?= $table_name; ?>): {php_close_tag}
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="{php_open_tag_echo} $<?= $table_name; ?>->{primary_key}; ?>">
                           </td>
                           <?php foreach ($field_all as $field => $option): ?><?php 
                           if (!$this->crud_builder->getFieldFile($field)){ 
                            ?><td>{php_open_tag_echo} _ent($<?= $table_name; ?>-><?= strtolower($option['input_name']); ?>); {php_close_tag}</td><?php } else { 
                            ?><td>
                              {php_open_tag} if (!empty($<?= $table_name; ?>-><?= strtolower($option['input_name']); ?>)): {php_close_tag}
                                {php_open_tag} if (is_image($<?= $table_name; ?>-><?= strtolower($option['input_name']); ?>)): {php_close_tag}
                                <a class="fancybox" rel="group" href="{php_open_tag_echo} BASE_URL . 'uploads/<?= $table_name; ?>/' . $<?= $table_name; ?>-><?= strtolower($option['input_name']);?>; {php_close_tag}">
                                  <img src="{php_open_tag_echo} BASE_URL . 'uploads/<?= $table_name; ?>/' . $<?= $table_name; ?>-><?= strtolower($option['input_name']);?>; {php_close_tag}" class="image-responsive" alt="image <?= $table_name; ?>" title="<?= $option['input_name']; ?> <?= $table_name; ?>" width="40px">
                                </a>
                                {php_open_tag} else: {php_close_tag}
                                  <a href="{php_open_tag_echo} BASE_URL . 'administrator/file/download/<?= $table_name; ?>/' . $<?= $table_name; ?>-><?= strtolower($option['input_name']);?>; {php_close_tag}">
                                   <img src="{php_open_tag_echo} get_icon_file($<?= $table_name; ?>-><?= strtolower($option['input_name']); ?>); {php_close_tag}" class="image-responsive image-icon" alt="image <?= $table_name; ?>" title="<?= strtolower($option['input_name']); ?> {php_open_tag_echo} $<?= $table_name; ?>-><?= strtolower($option['input_name']); ?>; {php_close_tag}" width="40px"> 
                                 </a>
                                {php_open_tag} endif; {php_close_tag}
                              {php_open_tag} endif; {php_close_tag}
                           </td>
                           <?php }; ?> 
                           <?php endforeach; 
                           ?><td width="200">
                              {php_open_tag} is_allowed('<?= $table_name; ?>_view', function($<?= $table_name; ?>) use ($<?= $table_name; ?>){{php_close_tag}
                              <a href="{php_open_tag_echo} site_url('administrator/<?= $table_name; ?>/view/' . ${table_name}->{primary_key}); {php_close_tag}" class="label-default"><i class="fa fa-newspaper-o"></i> View
                              {php_open_tag} }) {php_close_tag}
                              {php_open_tag} is_allowed('<?= $table_name; ?>_update', function($<?= $table_name; ?>) use ($<?= $table_name; ?>){{php_close_tag}
                              <a href="{php_open_tag_echo} site_url('administrator/<?= $table_name; ?>/edit/' . ${table_name}->{primary_key}); {php_close_tag}" class="label-default"><i class="fa fa-edit "></i> Update</a>
                              {php_open_tag} }) {php_close_tag}
                              {php_open_tag} is_allowed('<?= $table_name; ?>_delete', function($<?= $table_name; ?>) use ($<?= $table_name; ?>){{php_close_tag}
                              <a href="javascript:void(0);" data-href="{php_open_tag_echo} site_url('administrator/<?= $table_name; ?>/delete/' . ${table_name}->{primary_key}); {php_close_tag}" class="label-default remove-data"><i class="fa fa-close"></i> Remove</a>
                               {php_open_tag} }) {php_close_tag}
                           </td>
                        </tr>
                      {php_open_tag} endforeach; {php_close_tag}
                      {php_open_tag} if ($<?= $table_name; ?>_counts == 0) :{php_close_tag}
                         <tr>
                           <td colspan="100">
                           Form <?= ucwords($subject); ?> data is not available
                           </td>
                         </tr>
                      {php_open_tag} endif; {php_close_tag}
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
                           <option value="delete">Delete</option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="apply bulk actions">Apply</button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="Filter" value="{php_open_tag_echo} $this->input->get('q'); {php_close_tag}">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value="">All</option>
                           <?php foreach ($this->crud_builder->getFieldAll(true) as $field => $option): 
                          ?> <option {php_open_tag_echo} $this->input->get('f') == '<?= $option['input_name']; ?>' ? 'selected' :''; {php_close_tag} value="<?= $option['input_name']; ?>"><?= ucwords(clean_snake_case($option['input_name'])); ?></option>
                          <?php endforeach;
                        ?></select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="filter search">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="{php_open_tag_echo} base_url('administrator/<?= $table_name; ?>');{php_close_tag}" title="reset filters">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  <?= form_close(); ?>
                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        {php_open_tag_echo} $pagination; {php_close_tag}
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
          title: "Are you sure?",
          text: "data to be deleted can not be restored!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
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
      var serialize_bulk = $('#form_<?= $table_name; ?>').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "Are you sure?",
            text: "data to be deleted can not be restored!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/<?= $table_name; ?>/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "Please choose bulk action first!",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
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