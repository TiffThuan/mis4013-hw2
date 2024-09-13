
<?php
$pageTitle = "Welcome to Our King Coffee Shop";

include "view-header.php";
?>
    <h1>Welcome to Our King Coffee Shop!</h1>
    <p>One of the best Vietnamese coffee in Oklahoma </p>
    <p>Experience our signature coffee - Cafe Sua Da, coffee gourmet for everyone </p>
    <h2>Our Coffee Menu</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Coffee</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Espresso</td>
                <td>$3.00</td>
            </tr>
            <tr>
                <td>Americano</td>
                <td>$3.50</td>
            </tr>
            <tr>
                <td>Cappuccino</td>
                <td>$4.00</td>
            </tr>
            <tr>
                <td>Latte</td>
                <td>$4.50</td>
            </tr>
            <tr>
                <td>Cafe Sua Da</td>
                <td>$5.00</td>
            </tr>
        </tbody>
    </table>

<?php
include "view-footer.php";
?>
