
<?php
$pageTitle = "Contact Us";

include "view-header.php";
?>
    <h1>Contact Us</h1>
    <form method="post" action="post-result.php" class="mb-3">
        <div class="mb-3">
            <label for="customer-name" class="form-label">Enter your name:</label>
            <input type="text" class="form-control" name="customer-name" id="customer-name" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Enter your message:</label>
            <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Send">
        </div>
    </form> 
<?php
include "view-footer.php";
?>

