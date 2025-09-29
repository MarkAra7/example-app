<?php
// submit.php

// Formas datu saņemšana POST metodē
$vards = $_POST['vards'] ?? 'Nav ievadīts vārds';

// Attēlo saņemto vērtību
echo "Saņemtais vārds ir: " . htmlspecialchars($vards);
