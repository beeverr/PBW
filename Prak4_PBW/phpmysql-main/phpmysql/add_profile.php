<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['username'] != 'admin') {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $tahun_masuk = $_POST['tahun_masuk'];

    $stmt = $pdo->prepare("INSERT INTO mahasiswa (id_user, nama, alamat, fakultas, tahun_masuk) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$id_user, $nama, $alamat, $fakultas, $tahun_masuk]);
}

// Fetch all users
$stmt = $pdo->prepare("SELECT * FROM user");
$stmt->execute();
$users = $stmt->fetchAll();
?>

<h1>Add User Profile</h1>
<form method="post">
    User:
    <select name="id_user">
        <?php foreach ($users as $user): ?>
        <option value="<?php echo $user['id']; ?>"><?php echo $user['username']; ?></option>
        <?php endforeach; ?>
    </select><br>
    Nama: <input type="text" name="nama"><br>
    Alamat: <input type="text" name="alamat"><br>
    Fakultas: <input type="text" name="fakultas"><br>
    Tahun Masuk: <input type="number" name="tahun_masuk"><br>
    <input type="submit" value="Add Profile">
</form>
