<?php
include "controller.php";
?>
<h1>HOME PAGE</h1>
<br />

<?php if($_GET["city"]=="") { ?>

<form action="" method="get">

<select name="city">
    <option value="Indore">
        Indore
    </option>
    <option value="Delhi">
        Delhi
    </option>
</select>
    <input type="submit" value="Visit">
</form>
    <?php } ?>