

<?php
$pageTitle = "Post Result";
include "view-header.php";
?>

<h1>POST Result</h1>

<?php
echo getDisplay();
?>
<?php
include "view-footer.php";

function getDisplay() {
  if (isset($_POST['my-name'])) {
    return "<p class='alert alert-success'>The value sent is: " . htmlspecialchars($_POST['my-name']) . "</p>";
  } else {
    return "<p class='alert alert-warning'>Nothing posted to the page</p>";
  }
}
?>
