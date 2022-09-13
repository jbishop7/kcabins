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
        <div class = "generic-header">Rates</div>
        <?php 
            include 'connection.php';
            if ($result = $mysqli -> query("SELECT rates FROM rates WHERE id = 1")){
                while($row = $result->fetch_row()){
                    printf($row[0]);
                }
            }
        ?>
    </div>

    

    <?php include 'footer.php'; ?>
           
    


</body>
</html>
