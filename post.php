
<?php
$pageTitle = "Post";
include "view-header.php";
?>
<h1>POST Method Form</h1>
<p>Use the form below to send data using the POST method. The data will be displayed on the results page.</p>
<form method="post" action="post-result.php">
  <div class="mb-3">
    <label for="my-name" class="form-label">Enter your name:</label>
    <input type="text" id="my-name" name="my-name" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Post data</button>
</form>
<?php
include "view-footer.php";
?>
