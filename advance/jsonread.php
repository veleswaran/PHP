<?php 
$json = file_get_contents("movie.json");
$jsondata = json_decode($json,true);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th> 
        </tr> 
        <tr>
            <td><?php echo $jsondata[0]['id']?></td>
            <td><?php echo $jsondata[0]['title']?></td>
        </tr>
    </table>
    
</body>
</html>