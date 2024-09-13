

<?php
$pageTitle= "Order Coffee";

include "view-header.php";
?>
    <h1>Order Your Coffee</h1>
<form method ="get" action="get-result.php">
  <label for="coffee-type">Enter your favorite coffee:</label>
  <input type="text" name="coffee-type" id="coffee-type">
  <input type="submit" value="Order">
</form> 
<?php
include "view-footer.php";
?>
