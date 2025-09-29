<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vards = htmlspecialchars($_POST['vards'] ?? '');
    echo "Ievadītais vārds: " . $vards;
} else {
    echo "Nav nosūtīti dati.";
}
