<?php
$pageTitle = "Get Result";

include "view-header.php";
?>
    <h1>Get Result</h1>
<?php
if (isset($_GET['my-name'])) {
?>
    <p class='alert alert-success'>The value sent is: <?= htmlspecialchars($_GET['my-name']); ?></p>
<?php
} else {
?>
    <p class='alert alert-warning'>Nothing sent to the page</p>
<?php
}
?>
<?php
include "view-footer.php";
?>
