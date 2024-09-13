


<?php
$pageTitle= "Contact Us";

include "view-header.php";
?>
    <h1>Contact Us</h1>
<form method ="post" action="post-result.php">
  <label for="customer-name">Enter your name:</label>
  <input type="text" name="customer-name" id="customer-name">
  <label for="message">Enter your message:</label>
  <textarea name="message" id="message"></textarea>
  <input type="submit" value="Send">
</form> 
<?php
include "view-footer.php";
?>
