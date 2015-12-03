<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
    <title><?=$title?></title>
    <?=Site::favicon('assets/images/favicon.ico')?>
    <?php foreach($styles as $file) {echo HTML::style($file), "\n";}?>
    <?php foreach($scripts as $file) {echo HTML::script($file), "\n";}?>
  </head>
  <body>
    <?=$header?>
    <?=$content?>
  </body>
</html>

