 <style>    .file-tree-root{height: 274px;overflow:auto}</style>
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
  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>