<?php

require('components\head.inc.php');
include('components\navbar.inv.php');

?>

<div class="container">
  <?php
  include('components\carousel.inc.php');
  $break = '<br>';

  echo $break;

  include('components\latest_news.inc.php');

  echo $break;

  ?>

</div>





<?php require('components\footer.inc.php'); ?>