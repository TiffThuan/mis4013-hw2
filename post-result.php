// <?php
// $pageTitle= " Post-result";

// include "view-header.php";
// ?>
//     <h1>Post Result</h1>
// <?php
// echo getDisplay;
// include"view-footer.php";

// function getDisplay() {
//     if (isset($_POST['my-name'])) {
//         return " <p> The value sent is: </p>". $_POST['my-name'];
// } else {
//   return "<p> Nothing posted to the page </p>";
// }
// }
// ?>

<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
<h1>POST Result</h1>
<?php
function getDisplay() {
  if (isset($_POST['my-name'])) {
    return "<p class='alert alert-success'>The value sent is: " . htmlspecialchars($_POST['my-name']) . "</p>";
  } else {
    return "<p class='alert alert-warning'>Nothing posted to the page</p>";
  }
}
echo getDisplay();
?>
<?php
include "view-footer.php";
?>
