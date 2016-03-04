<?php
$title = 'Space Dark';
$type = 'page';
$theme = 'space';
$id = 'space-dark';
$description = 'Base2Tone colorscheme';
$bg = 'dark';
$swaptext1 = 'Coming Soon';
$swaptext2 = 'Base2Tone';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
?>
<div class="container-flex" id="main">
<?php
  include '../inc/nav-themes.inc';
  include '../inc/demo-tiles-header_index.inc';
  include '../inc/demo-tiles.inc';
  include '../inc/code-samples.inc';
  include '../../output/svg/circles-base2tone-space-svg.inc';
  include '../../output/html/table/table-base2tone-space.inc';
?>
  </div> <!-- /.content #content -->
</div><!-- /.container-flex #main -->
<?php include '../inc/footer.inc'; ?>