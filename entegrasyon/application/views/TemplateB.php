 <!DOCTYPE html>
<html data-ng-app="FileManagerApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Derm Ela | Yönetim Paneli</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assest/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>assest/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?=base_url()?>assest/plugins/select2/select2.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assest/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assest/dist/css/AdminLTE.min.css">
  
    <link rel="stylesheet" href="<?=base_url()?>assest/media/css/media.css">
   <link rel="stylesheet" href="<?=base_url()?>assest/Nestable/style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assest/dist/css/skins/_all-skins.min.css">
 <link rel="stylesheet" href="<?=base_url()?>assest/chart.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
</head>
<body class="skin-blue sidebar-mini sidebar-collapse  "  >
<!-- Site wrapper -->
<div class="wrapper">

 <?php $this->load->view("Beta/Setting/header.php"); ?>

  <!-- =============================================== -->

<?php $this->load->view("Beta/Setting/Sidebar.php"); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?=$Page?>
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
         <li class="active"><?=$Page?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?=$contents?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://ahmetdaldemir.com.tr">Ahmet DALDEMİR</a>.</strong> Kopyalanamaz.
  </footer>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
  <script src="<?=base_url()?>assest/plugins/datatables/jquery.dataTables.js"></script>
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
    <script src="<?=base_url()?>assest/product.js"></script>
    <script src="<?=base_url()?>assest/week_camping.js"></script>
  <script src="<?=base_url()?>assest/view/order_beta.js"></script>
    <script src="<?=base_url()?>assest/view/advantage.js"></script>
   
<link href="<?=base_url()?>assest/tree/sitemapstyler/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?=base_url()?>assest/tree/sitemapstyler/sitemapstyler.js"></script>
<?php
if(isset($angular))
{
    
    $this->load->view("Beta/Setting/angular");
}
 ?>   

  <script src="<?=base_url()?>assest/plugins/select2/select2.full.min.js"></script>
  
    <link rel="stylesheet" href="<?=base_url()?>assest/tag/css/inputTags.css">
  <script type="text/javascript" src="<?=base_url()?>assest/tag/js/inputTags.jquery.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assest/tag/js/app.js"></script>
 
   <script src="<?=base_url()?>assest/plugins/ckeditor/ckeditor.js"></script>
  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
             
                CKEDITOR.replace('editor1', {
  "filebrowserImageUploadUrl": "<?=base_url()?>assest/plugins/ckeditor/plugins/imgupload.php",

});
            </script>
    <script>
    
    
     $(".select2").select2();</script>
  
       <script> 
    
           $(function () {
    $("#example1").DataTable( );
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




 

  
  <script>
$(document).ready(function(){
    $('input[type="checkbox"]').tooltip();
});
</script>

 <script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
 
$('#table').dataTable({
                    "infoEmpty": "Veri Bulunamadt",
                    "sProcessing": "Tablo Şuanda Meşgul",
                    "processing": true,
                    "bSort": false,
                    "bFilter": true,
                    "bAutoWidth": true,
                    "bLengthChange": true,
                    "serverSide": true,
                    "sAjaxSource": "<?=base_url()?>Beta/Product/Product/ajax_list",
                    "aLengthMenu": [[10, 25, 50,100,200], [10, 25, 50,100,200]],
                    "sSortDesc": ["ID", 'desc'],
                    "iDisplayLength": 10,   
                    "dom": 'Zlfrtip',
                    "bDeferRender": true
            }); });
</script>
  
  
  <script>
  $(function () {
    $("#example1").DataTable({"aLengthMenu": [[10, 25, 50,100,200], [10, 25, 50,100,200]],});
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "aLengthMenu": [[10, 25, 50,100,200], [10, 25, 50,100,200]],
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


 
<style>
  .ui-autocomplete{background:#fff;width:500px;border:1px solid #ccc;}
  .ui-autocomplete li{cursor:pointer;width:500px;}
  .ui-autocomplete li:hover{background:#ddd;curson:pointer;}
</style>


