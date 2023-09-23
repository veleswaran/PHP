<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="">Id</label>
        <input type="number" name="id"> 
        <label for="">filename</label>
        <input type="text" name="filename"> 
        <label for="">Image</label>
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
   <a href="retrive.php"> <button>get data</button></a>
</body>
</html>

