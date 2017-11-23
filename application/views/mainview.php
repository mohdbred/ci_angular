<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->config->item('title'); ?></title>
    <script>
        var BASE_URL = "<?php echo site_url(); ?>";
    </script>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="app/styles/libs/bootstrap.min.css" />
    <link rel="stylesheet" href="app/styles/main.css">
    <link rel="stylesheet" href="app/styles/sb-admin-2.css">
    <link rel="stylesheet" href="app/styles/timeline.css">
    <link rel="stylesheet" href="app/styles/libs/metisMenu.min.css">
    <link rel="stylesheet" href="app/styles/libs/loading-bar.min.css">
    <link rel="stylesheet" href="app/styles/libs/font-awesome.min.css" type="text/css">

    <script src="app/js/libs/jquery.min.js"></script>
    <script src="app/js/libs/angular.min.js"></script>

    <script src="app/js/libs/bootstrap.min.js"></script>
    <script src="app/js/libs/angular-ui-router.min.js"></script>
    <script src="app/js/libs/json3.min.js"></script>
    <script src="app/js/libs/ocLazyLoad.min.js"></script>
    <script src="app/js/libs/loading-bar.min.js"></script>
    <script src="app/js/libs/ui-bootstrap-tpls.min.js"></script>
    <script src="app/js/libs/metisMenu.min.js"></script>

    <script src="app/scripts/custom.js"></script>
<!--    <script src="app/scripts/controllers/MainViewCtrl.js"></script>-->
    <script src="app/js/sb-admin-2.js"></script>

    </head>

    <body>

    <div ng-app="OnePoint">

        <div ui-view></div>

    </div>

    </body>

</html>
