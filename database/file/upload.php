<?php
// $servername = "localhost";
// $username = "root";
// $password = "admin123";
// $dbname = "file";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $id = $_POST["id"];
//         $filename = $_POST["filename"];
//         $file_data = file_get_contents($_FILES["data"]["tmp_name"]);

//         $stmt = $conn->prepare("INSERT INTO images (id, filename, data,content_type) VALUES (?, ?, ?,?)");
//         $stmt->bindParam(1, $id);
//         $stmt->bindParam(2, $file_name);
//         $stmt->bindParam(3, $file_data);
//         $stmt->bindParam(4, $content_type);

//         $file_name = $filename;
//         $file_size = filesize($_FILES["data"]["tmp_name"]);
//         $content_type = $_FILES["data"]["type"];

//         if ($stmt->execute()) {
//             echo "File uploaded successfully.";
//         } else {
//             echo "Error: " . $stmt->errorInfo()[2];
//         }

//         $stmt = null;
//     }
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// $conn = null;
?>
<?php
// upload.php
if (isset($_FILES['image'])) {
  $filename = $_FILES['image']['name'];
  $data = file_get_contents($_FILES['image']['tmp_name']);
  $content_type = $_FILES['image']['type'];

  $pdo = new PDO('mysql:host=localhost;dbname=file', 'root', 'admin123');
  $stmt = $pdo->prepare('INSERT INTO images (filename, data, content_type) VALUES (?, ?, ?)');
  $stmt->execute([$filename, $data, $content_type]);
  echo "Image uploaded successfully.";
}
?>

