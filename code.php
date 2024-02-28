<!-- code.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $host = 'localhost';
    $dbname = 'portfolio';
    $user = 'root';
    $password = '';

    try {
        // Connect to the database using PDO
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the INSERT query
        $stmt = $db->prepare("INSERT INTO contacts (name, email, contact, subject, message) VALUES (:name, :email, :contact, :subject, :message)");

        // Bind parameters and execute the query
        $stmt->execute(array(
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':contact' => $_POST['contact'],
            ':subject' => $_POST['subject'],
            ':message' => $_POST['message']
        ));

        // Redirect to a thank-you page or display a success message
        header('Location: thank_you_page.php');
        exit();
    } catch (PDOException $e) {
        // Handle database connection or query errors
        echo "Error: " . $e->getMessage();
    }
}
?>