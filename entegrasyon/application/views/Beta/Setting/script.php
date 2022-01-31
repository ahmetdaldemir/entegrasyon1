
<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assest/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assest/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assest/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assest/plugins/iCheck/icheck.min.js"></script>
<script src="<?=base_url()?>assest/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assest/dist/js/app.min.js"></script>
 <script src="<?=base_url()?>assest/category_modules.js"></script> 
  <script src="<?=base_url()?>assest/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <link href="<?=base_url()?>assest/plugins/datepicker/datepicker3.css" type="text/css" rel="stylesheet" media="screen">
  <script src="<?=base_url()?>assest/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assest/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assest/dist/js/demo.js"></script>
  <script src="<?=base_url()?>assest/entegrasyon.js"></script>
<script src="<?=base_url()?>assest/jquery-barcode.min.js"></script>

    <script src="<?=base_url()?>assest/view/db.js"></script>
<script src="<?=base_url()?>assest/jquery-barcode.js"></script>
      <script src="<?=base_url()?>assest/media/js/client.js"></script>
        <script src="<?=base_url()?>assest/input.js"></script>
          <script src="<?=base_url()?>assest/champingproducts.js"></script>
 <script src="<?=base_url()?>assest/Nestable/jquery.nestable.js"></script>
  <script src="<?=base_url()?>assest/coupon.js"></script>
    <script src="<?=base_url()?>assest/week_camping.js"></script>
  <script src="<?=base_url()?>assest/view/order_beta.js"></script>
    <script src="<?=base_url()?>assest/view/advantage.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assest/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 
 

  <script src="<?=base_url()?>assest/plugins/select2/select2.full.min.js"></script>
  
 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assest/editor/src/bootstrap-wysihtml5.css" />
<script src="<?=base_url()?>assest/editor/lib/js/wysihtml5-0.3.0.js"></script>
 
<script src="<?=base_url()?>assest/editor/src/bootstrap3-wysihtml5.js"></script>
  
  
    <script>
      $('.textarea').wysihtml5();
    
     $(".select2").select2();</script>
  
       <script> 
    
           $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
          
       </script>

    <!-- third party -->
    <script src="<?=base_url()?>angular/bower_components/angular/angular.min.js"></script>
    <script src="<?=base_url()?>angular/bower_components/angular-translate/angular-translate.min.js"></script>
    <script src="<?=base_url()?>angular/bower_components/ng-file-upload/ng-file-upload.min.js"></script>
   <!-- /third party -->

  <!-- Uncomment if you need to use raw source code
    <script src="src/js/app.js"></script>
    <script src="src/js/directives/directives.js"></script>
    <script src="src/js/filters/filters.js"></script>
    <script src="src/js/providers/config.js"></script>
    <script src="src/js/entities/chmod.js"></script>
    <script src="src/js/entities/item.js"></script>
    <script src="src/js/services/apihandler.js"></script>
    <script src="src/js/services/apimiddleware.js"></script>
    <script src="src/js/services/filenavigator.js"></script>
    <script src="src/js/providers/translations.js"></script>
    <script src="src/js/controllers/main.js"></script>
    <script src="src/js/controllers/selector-controller.js"></script>
    <link href="src/css/animations.css" rel="stylesheet">
    <link href="src/css/dialogs.css" rel="stylesheet">
    <link href="src/css/main.css" rel="stylesheet">
  -->

  <!-- Comment if you need to use raw source code -->
    <link href="<?=base_url()?>angular/dist/angular-filemanager.min.css" rel="stylesheet">
    <script src="<?=base_url()?>angular/dist/angular-filemanager.min.js"></script>
  <!-- /Comment if you need to use raw source code -->
  
  <script type="text/javascript">
    //example to override angular-filemanager default config
    angular.module('FileManagerApp').config(['fileManagerConfigProvider', function (config) {
      var defaults = config.$get();
      config.set({
        appName: 'angular-filemanager',
        pickCallback: function(item) {
          var msg = 'Picked %s "%s" for external use'
            .replace('%s', item.type)
            .replace('%s', item.fullPath());
          window.alert(msg);
        },

        listUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        uploadUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        renameUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        copyUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        moveUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        removeUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        editUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        getContentUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        createFolderUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        downloadFileUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        downloadMultipleUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        compressUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        extractUrl: '<?=base_url()?>angular/bridges/php-local/index.php',
        permissionsUrl: '<?=base_url()?>angular/bridges/php-local/index.php',

        allowedActions: angular.extend(defaults.allowedActions, {
          pickFiles: true,
          pickFolders: true,
        }),
      });
    }]);
  </script>
  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

 
  
  <script>
  $('#elfinder_button').on('click', function() {
  $('<div id="editor" />').dialogelfinder({
    url : '<?=base_url()?>manager/php/connector.php',
    width: '80%',
    height: '600px',
    getFileCallback: function(file) {
      var filePath = file; //file contains the relative url.
      var imgPath = "<img src = '"+filePath+"'/>";
      $('#selectedImages').append(imgPath); //add the image to a div so you can see the selected images
      $('#editor').remove(); //close the window after image is selected
    }
  });
});
  </script>
<div id="elfinder"></div>
  
  <script>
$(document).ready(function(){
    $('input[type="checkbox"]').tooltip();
});
</script>

 
  
  
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
$(document).ready(function()
{
    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };
    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);
    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });
});
</script>

<script>
  $(document).ready(function(){
    $("#load").hide();
    $("#submit").click(function(){
       $("#load").show();
       var dataString = { 
              name : $("#name").val(),
               id : $("#id").val()
            };
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Beta/Category/Category/save",
            data: dataString,
            dataType: "json",
            cache : false,
            success: function(data){
              if(data.type == 'add'){
                 $("#menu-id").append(data.menu);
              } else if(data.type == 'edit'){
                 $('#name_show'+data.id).html(data.name);
               }
              $('#name').val('');
               $('#id').val('');
              $("#load").hide();
            } ,error: function(xhr, status, error) {
              alert(error);
            },
        });
    });
    $('.dd').on('change', function() {
        $("#load").show();
           var dataString = { 
              data : $("#nestable-output").val(),
            };
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Beta/Category/Category/update",
            data: dataString,
            cache : false,
            success: function(data){
              $("#load").hide();
            } ,error: function(xhr, status, error) {
              alert(error);
            },
        });
    });
    $("#save").click(function(){
         $("#load").show();
     
          var dataString = { 
              data : $("#nestable-output").val(),
            };
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Beta/Category/Category/update",
            data: dataString,
            cache : false,
            success: function(data){
              $("#load").hide();
              alert('Data has been saved');
          
            } ,error: function(xhr, status, error) {
              alert(error);
            },
        });
    });
 
    $(document).on("click",".del-button",function() {
        var x = confirm('Delete this menu?');
        var id = $(this).attr('id');
        if(x){
             $("#load").show();
             $.ajax({
                type: "POST",
                url: "<?=base_url()?>Beta/Category/Category/delete",
                data: { id : id },
                cache : false,
                success: function(data){
                  $("#load").hide();
                  $("li[data-id='" + id +"']").remove();
                } ,error: function(xhr, status, error) {
                  alert(error);
                },
            });
        }
    });
    $(document).on("click",".edit-button",function() {
        var id = $(this).attr('id');
        var label = $(this).attr('name');
         $("#id").val(id);
        $("#name").val(label);
     });
    $(document).on("click","#reset",function() {
        $('#name').val('');
         $('#id').val('');
    });
  });
</script>
  <script>
      //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  </script>

</body>
</html>


<div id="mymodal" class="modal fade xlarge" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="width:60%;">
    <div class="modal-content">
 
      <div class="modal-body" style="    height: 400px;">
         <angular-filemanager></angular-filemanager>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="button" id="image-manager-insert" class="btn btn-primary">Ekle</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 
<style>
  .ui-autocomplete{background:#fff;width:500px;border:1px solid #ccc;}
  .ui-autocomplete li{cursor:pointer;width:500px;}
  .ui-autocomplete li:hover{background:#ddd;curson:pointer;}
</style>

