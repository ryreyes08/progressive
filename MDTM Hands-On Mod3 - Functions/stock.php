<?php
declare(strict_types=1);

require 'data.php';

$candy_products = [
    'Toffee'     => ['price' => 30, 'stock' => 12],
    'Mints'      => ['price' => 25, 'stock' => 26],
    'Fudge'      => ['price' => 40, 'stock' => 8],
    'Chocolate'  => ['price' => 45, 'stock' => 15],
    'Licorice'   => ['price' => 35, 'stock' => 3],
    'Bubble Gum' => ['price' => 15, 'stock' => 20],
];

$tax_rate = 20;

function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float
{
    $total = $price * $quantity;
    return $total * ($tax_rate / 100);
}

require 'header.php';
?>

<main>

    <h2>Stocks</h2>

    <div class="table-wrap">
    <table class="stock">
        <thead>
            <tr>
                <th>Product</th>
                <th class="num">Stock</th>
                <th>Re-order</th>
                <th class="num">Total Value</th>
                <th class="num">Tax Due</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candy_products as $product_name => $data) { ?>
                <tr>
                    <td class="name"><?= $product_name ?></td>
                    <td class="num"><?= $data['stock'] ?></td>
                    <?php $reorder = get_reorder_message($data['stock']); ?>
                    <td><span class="badge <?= strtolower($reorder) ?>"><?= $reorder ?></span></td>
                    <td class="num">₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                    <td class="num">₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

</main>

<?php require 'footer.php'; ?>