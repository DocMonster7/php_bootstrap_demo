<?php
session_start();

require('components\head.inc.php');
include('components\navbar_logged.inv.php');

?>

<div class="container">
<br><br>
<?php
include('components\edit.inc.php')
?>


</div>





<?php require('components\footer.inc.php'); ?>