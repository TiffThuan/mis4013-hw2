// <?php
// $pageTitle= " Get";

// include "view-header.php";
// ?>
//     <h1>Get</h1>
// <form method ="get" action="get-result.php">
//   <input type="text" name="my-name">
//   <input type="submit" value="Get data">
// </form> 
// <?php
// include"view-footer.php";
// ?>


<?php
$pageTitle = "Get";
include "view-header.php";
?>
<h1>GET Method Form</h1>
<p>Use the form below to send data using the GET method. The data will be displayed on the GET results page.</p>
<form method="get" action="get-result.php">
  <div class="mb-3">
    <label for="my-name" class="form-label">Enter your name:</label>
    <input type="text" id="my-name" name="my-name" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Get data</button>
</form>
<?php
include "view-footer.php";
?>
