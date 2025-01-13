<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f2b_ecom";

$whatsapp_number = "773855062";
$base_url = "r https://whatsapp.com/dl/ ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$REF_PRODUIT = intval($_POST['REF_PRODUIT']);
$quantity = intval($_POST['quantity']);
$customer_name = $conn->real_escape_string($_POST['customer_name']);
$customer_email = $conn->real_escape_string($_POST['customer_email']);
$order_date = date('Y-m-d H:i:s');

$sql = "INSERT INTO orders (product_id, quantity, customer_name, customer_email, order_date)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iisss", $product_id, $quantity, $customer_name, $customer_email, $order_date);

if ($stmt->execute()) {
    echo "Commande passée avec succès !";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>