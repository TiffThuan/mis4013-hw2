<?php
$pageTitle = "Welcome to Our King Coffee Shop";

include "view-header.php";
?>
    <h1>Welcome to Our King Coffee Shop!</h1>
    
    <!-- Italic greeting message -->
    <p><em>One of the best Vietnamese coffee in Oklahoma</em></p>
    <p><em>Experience our signature coffee - Cafe Sua Da, coffee gourmet for everyone</em></p>

    <!-- Coffee Menu with blue color -->
    <h2>Our Coffee Menu</h2>
    <table class="table table-bordered" style="color: blue;">
        <thead>
            <tr>
                <th>Coffee</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cafe Sua Da (Iced Coffee with Condensed Milk)</td>
                <td>$4.00</td>
            </tr>
            <tr>
                <td>Cafe Den Da (Iced Black Coffee)</td>
                <td>$3.50</td>
            </tr>
            <tr>
                <td>Hot Coffee</td>
                <td>$3.00</td>
            </tr>
            <tr>
                <td>Espresso</td>
                <td>$2.50</td>
            </tr>
            <tr>
                <td>Cappuccino</td>
                <td>$4.50</td>
            </tr>
        </tbody>
    </table>

<?php
include "view-footer.php";
?>
