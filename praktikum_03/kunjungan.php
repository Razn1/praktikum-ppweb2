<?php 
require_once('BukuTamu.php');
session_start();

if(!isset($_SESSION['buku_tamu'])) {
    $_SESSION['buku_tamu'] = [];
}

if(isset($_POST['submit'])) {
    // Buat objek BukuTamu
    $buku_tamu = new BukuTamu();
    // Set nilai atribut objek BukuTamu
    $buku_tamu->timestamp = date('Y-m-d H:i:s');
    // Set nilai objek BukuTamu 
    $buku_tamu->full_name = $_POST['full_name'];
    $buku_tamu->email = $_POST['email'];
    $buku_tamu->message = $_POST['message'];

    array_push($_SESSION['buku_tamu'], $buku_tamu);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Buku Tamu</title>
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table class="table table-bordered dark">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>    
            </thead>
            <tbody> 
                <?php foreach($_SESSION['buku_tamu'] as $entry) : ?>
                    <tr>
                        <td>
                            <?= htmlspecialchars($entry->timestamp); ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($entry->full_name); ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($entry->email); ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($entry->message); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </div>
</body>
</html>