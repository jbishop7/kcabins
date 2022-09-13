<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Kincardine Cabins</title>
    
</head>

<body id = "main" class = "fade" style = "background-color: black; color: white;">

    <?php include 'header.php'; ?>
    

    <div class = "generic-content" style = "background-color: #252525; color: white;">
        <div class = "generic-header">Amenities</div>
        <?php 
            include 'connection.php';
            if ($result = $mysqli -> query("SELECT amenities FROM amenities WHERE id = 1")){
                while($row = $result->fetch_row()){
                    printf($row[0]);
                }
                //mysqli_free_result($result);
            }
            //$mysqli -> close();
            
        ?>
    </div>


    <?php include 'footer.php'; ?>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>
