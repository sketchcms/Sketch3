<ol class="breadcrumb">
  <?php $paths = explode("/",$this->getMenuValues('path'));
  $back = '';
  foreach ($paths as $path) { ?>
    <li><a href="<?php echo $this->basePath($back.$path); ?>"><?php echo $path; ?></a></li>
  <?php
  $back .= "/".$path ."/";
  } ?>
</ol>
