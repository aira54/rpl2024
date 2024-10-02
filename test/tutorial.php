<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan password jika diperlukan
$dbname = "siswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    // Persiapkan dan bind
    $stmt = $conn->prepare("INSERT INTO beban (name, age, grade) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $age, $grade);

    // Eksekusi statement
    if ($stmt->execute()) {
        $message = "Data berhasil dimasukkan.";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Ambil data murid dari database
$result = $conn->query("SELECT * FROM beban");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Murid</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            padding: 10px;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Input Data Murid</h1>
        <form action="tutorial.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="age">Umur:</label>
            <input type="number" id="age" name="age" required><br><br>
            <label for="grade">Kelas:</label>
            <input type="text" id="grade" name="grade" required><br><br>
            <input type="submit" value="Kirim">
        </form>
        <?php
        if (isset($message)) {
            echo "<p>$message</p>";
        }
        ?>
        <h2>Daftar Murid</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['grade']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data murid.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
