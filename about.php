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
        <div class = "generic-header">What We Offer</div>
        <?php 
            include 'connection.php';
            if ($result = $mysqli -> query("SELECT description FROM description WHERE id = 1")){
                while($row = $result->fetch_row()){
                    printf($row[0]);
                }
                //mysqli_free_result($result);
            }
            //$mysqli -> close();
            
        ?>
    </div>

    <div class = "generic-content" style = "background-color: #252525; color: white; margin-bottom: 2em;">
        <div class = "generic-header">Our History</div>
        <?php 
            include 'connection.php';
            if ($result = $mysqli -> query("SELECT history FROM history WHERE id = 1")){
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
