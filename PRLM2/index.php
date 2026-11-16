
<?php

require 'data.php';

require 'header.php';

?>

<main>

    <h2>Welcome, <?php echo $customer_name; ?>!</h2>

    <p>
        Welcome to our candy shop located in
        <?php echo $store_location; ?>.
        We have a lot of delicious candies waiting for you!
    </p>

    <hr>


    <h2>Our Best Sellers</h2>

    <ol>
        <?php

        for ($i = 0; $i < count($best_sellers); $i++) {

            echo "<li>" . $best_sellers[$i] . "</li>";

        }

        ?>
    </ol>

    <hr>


    <h2>Our Candy Collection</h2>

    <?php

    foreach ($candies as $candy) {

        echo "<h3>" . $candy['name'] . "</h3>";

        echo "<p>Price: ₱" . $candy['price'] . "</p>";

        echo "<p>Category: " . $candy['category'] . "</p>";

        echo "<p>Available Stock: " . $candy['stock'] . "</p>";


        if ($candy['stock'] == 0) {

            echo "<p>Currently Out of Stock!</p>";

        } elseif ($candy['stock'] <= 5) {

            echo "<p>Limited Stock! Order Soon!</p>";

        } else {

            echo "<p>Available for Purchase!</p>";

        }


        if ($candy['price'] >= 45) {

            echo "<p>Premium Candy</p>";

        } elseif ($candy['price'] >= 30) {

            echo "<p>Regular Candy</p>";

        } else {

            echo "<p>Affordable Candy</p>";

        }

        echo "<hr>";

    }

    ?>


    <h2>Nutrition Information (per 100g)</h2>

    <?php

    foreach ($nutrition as $nutrient => $amount) {

        echo "<p>" . $nutrient . ": " . $amount . "%</p>";

    }

    ?>

    <hr>


    <h2>Customer Discount</h2>

    <?php

    $total_purchase = 550;

    echo "<p>Total Purchase: ₱" . $total_purchase . "</p>";

    if ($total_purchase >= 500) {

        $discount = 50;

        echo "<p>Congratulations! You received a ₱50 discount!</p>";

    } elseif ($total_purchase >= 300) {

        $discount = 25;

        echo "<p>You received a ₱25 discount!</p>";

    } else {

        $discount = 0;

        echo "<p>No discount available.</p>";

    }

    $final_price = $total_purchase - $discount;

    echo "<p>Discount: ₱" . $discount . "</p>";

    echo "<h3>Final Price: ₱" . $final_price . "</h3>";

    ?>

    <hr>


    <h2>Our Special Promotions</h2>

    <?php

    $promotion_number = 1;

    while ($promotion_number <= 5) {

        echo "<p>Promotion #" . $promotion_number .
             ": Enjoy shopping at The Candy Store!</p>";

        $promotion_number++;

    }

    ?>

    <hr>


    <h2>Inventory Summary</h2>

    <?php

    $available = 0;
    $out_of_stock = 0;
    $low_stock = 0;

    foreach ($candies as $candy) {

        if ($candy['stock'] == 0) {

            $out_of_stock++;

        } elseif ($candy['stock'] <= 5) {

            $low_stock++;

        } else {

            $available++;

        }

    }

    echo "<p>Available Products: " . $available . "</p>";

    echo "<p>Low Stock Products: " . $low_stock . "</p>";

    echo "<p>Out of Stock Products: " . $out_of_stock . "</p>";

    ?>

</main>

<?php

// Include the footer
require 'footer.php';

?>
