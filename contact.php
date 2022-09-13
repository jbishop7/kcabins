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
    

    <div class = "contact-content" style = "background-color: #252525; color: white;">
        <div class = "contact-us-container">

            <div class = "vertical-divider"></div>

            <div class = "contact-us-area">
                <div class = "contact-header">Contact Us</div>
                <?php 
                    include 'connection.php';
                    if ($result = $mysqli -> query("SELECT contact FROM contact WHERE id = 1")){
                        while($row = $result->fetch_row()){
                            printf($row[0]);
                        }
                        //mysqli_free_result($result);
                    }
                    //$mysqli -> close();
                    echo "<br><br>";
                ?>
                <div class = "contact-header">Rental Contract</div>
                <?php 
                    include 'connection.php';
                    if ($result = $mysqli -> query("SELECT contract FROM contract WHERE id = 1")){
                        while($row = $result->fetch_row()){
                            printf($row[0]);
                        }
                        //mysqli_free_result($result);
                    }
                    //$mysqli -> close();
                    echo '<p><strong>Read the rules <a href = "rules.php">here.</a></strong></p>';
                    echo "<br><br>";
                ?>
                
                <div class = "contact-header">Payment Options</div>
                We accept certified cheque, money order or cash.<br>
                <strong>Please note:</strong> Reservation down payment & damage deposit-$500.
                <div class = "payment-forms" style = "font-size: 20px; margin-top: 1em;">
                    <form name = "form1" action = "paymentsubmit.php" method = "post" onsubmit = "return validate_form();">
                        <label for = "submit-name">Name: </label><br>
                        <input style = "width: 200px;"type = "text" id = "submit-name" value = ""><br>
                        <label for = "submit-email">Email: </label><br>
                        <input style = "width: 200px;" type = "text" id = "submit-email" value = ""><br>
                        <label for = "submit-phone">Phone: </label><br>
                        <input style = "width: 200px;" type = "text" id = "submit-phone" value = ""><br>
                        <label for = "submit-comments">Comments: </label><br>
                        <textarea style = "height: 120px; width:300px;" type = "text" id = "submit-comments" value = ""></textarea><br>
                        <label>Requested Dates: </label><br>
                        From <input type = "date" id = "from-date" min = "2022-01-01" value = > to <input type = "date">
                        <div class="g-recaptcha" data-sitekey="6LdMEOESAAAAAL0andHW3OfLddri8jk0beAO9jX5"></div>
                        <input style = "width: 100px; height: auto; font-size: 14px;"type="submit" name="submit" value="Submit">
                    </form><script src='https://www.google.com/recaptcha/api.js'></script>
                </div>
            </div>
        
            <div class = "calendar-area">
                <div class = "contact-header">Calendar</div>
                <iframe width = "700px" height = "900px" scrolling="no" frameborder="0" src="http://www.kincardinecabins.com/calendar/?id_item=2&lang=en"></iframe>
            </div>
                    
            
        </div>
    </div>

    


           
    <?php include 'footer.php'; ?>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    (function() {
        let today = new Date();
        //now I need to convert it to yyyy-mm-dd
        let formattedDate = today.toJSON().split('T')[0];
        document.getElementById("from-date").value = formattedDate;
        //document.getElementById("from-date").min = formattedDate;
    })();
</script>
</html>


<!--
        <div class = "third-panel">
        <h1 class = "header-label">Cabins</h1>
        In here i can make the grid, but I have the heading above the grid. That should make my life a lot easier
        <div class = "cabins-banner">
            <img src = "./pictures/today.jpg" class = "cabins-banner-photo"/>
        </div>

    </div>
-->
