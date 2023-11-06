<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>no</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Pepsodent", 20, 10000,200000),
    array(2, "Sunlight", 15, 11000,165000),
    array(3, "Baygon", 10, 16000,160000),
    array(4, "Dove", 18, 22000,396000),
    array(5, "Rinso", 15, 20000,300000),
    array(6, "Downy", 20, 11500,230000),
    array(7, "Le Mineral", 25, 5000,125000),
);

foreach($data as $row) {
    echo "<tr>";
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>