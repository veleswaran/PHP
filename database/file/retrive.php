<?php
// retrieve.php
// $pdo = new PDO('mysql:host=localhost;dbname=file', 'root', 'admin123');
// $stmt = $pdo->prepare('SELECT * FROM images');
// $stmt->execute();
// while($image = $stmt->fetch()){
   
//     if ($image) {
//         header("Content-Type: {$image['content_type']}");
//         echo $image['data'];
//       } else {
//         echo "Image not found.";
//       }
// }


?>
<?php
// retrieve.php
$pdo = new PDO('mysql:host=localhost;dbname=file', 'root', 'admin123');
$stmt = $pdo->prepare('SELECT * FROM images');
$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <h1>Image Gallery</h1>
    
    <?php while ($image = $stmt->fetch()): ?>
        <?php if ($image): ?>
            <div class="image">
                <img src="data:<?php echo $image['content_type']; ?>;base64,<?php echo base64_encode($image['data']); ?>" alt="Image" width="200px" height="200px">
            </div>
        <?php else: ?>
            <p>Image not found.</p>
        <?php endif; ?>
    <?php endwhile; ?>

</body>
</html>
