


<?php
$pageTitle= "Order Result";

include "view-header.php";
?>
    <h1>Your Coffee Order</h1>
<?php
if (isset($_GET['coffee-type'])) {
?>
  <p>Thank you for ordering:</p>
<?php
  echo "<strong>" . htmlspecialchars($_GET['coffee-type']) . "</strong>";
} else {
  ?>
  <p>No order was placed.</p>
  <?php
}
include "view-footer.php";
?>
