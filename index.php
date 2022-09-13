<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Kincardine Cabins</title>
    
</head>

<body id = "main" class = "fade">

    <?php include 'header.php'; ?>
    
    <div class = "first-panel">
        <div class = "overview">
            <h1 style = "margin-bottom:0.5em">Your Retreat Awaits</h1>
            <?php
                include 'connection.php';
                if ($result = $mysqli -> query("SELECT mainpage FROM mainpage WHERE id = 1")){
                    while($row = $result->fetch_row()){
                        printf($row[0]);
                    }
                    //mysqli_free_result($result);
                }
                //$mysqli -> close();
                
            ?>
        </div>
    
        <div class = "slideshow">
            
            <div class = "mySlides fade">
                <img src = "pictures/1793Kincardine.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/8130IMG_1628.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/view.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/party.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/9209garden2.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/6242cabin.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/7715deck2.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/4424image2.JPG" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/9928deck.jpg" style = "max-width:100%;">
            </div>

            <div class = "mySlides fade">
                <img src = "pictures/1608garden.jpg" style = "max-width:100%;">
            </div>
        
        </div>

    </div>

    <div class = "second-panel">
        <div class = "offer" style = "border: black 2px solid">
            <div class = "flex-table-container">
                <table class= "flex-table">
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/1.png"/></th>
                        <th class = "offer-desc">Pets Welcome</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/2.png"/></th>
                        <th class = "offer-desc">Non-Smoking</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/3.png"/></th>
                        <th class = "offer-desc">Sleeps 12</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/4.png"/></th>
                        <th class = "offer-desc">Sunsets</th>
                    </tr>
                </table>
                
                
                
                <table class= "flex-table">
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/5.png"/></th>
                        <th class = "offer-desc">Sat to Sat</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/6.png"/></th>
                        <th class = "offer-desc">Wifi Internet</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/7.png"/></th>
                        <th class = "offer-desc">Cable TV</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/8.png"/></th>
                        <th class = "offer-desc">Swimming</th>
                    </tr>
                </table>
                
                <table class= "flex-table">
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/9.png"/></th>
                        <th class = "offer-desc">Picnic Tables</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/10.png"/></th>
                        <th class = "offer-desc">Fishing</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/11.png"/></th>
                        <th class = "offer-desc">Boating</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/12.png"/></th>
                        <th class = "offer-desc">Beaches</th>
                    </tr>
                </table>
                
                <table class= "flex-table">
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/13.png"/></th>
                        <th class = "offer-desc">Lighthouse</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/14.png"/></th>
                        <th class = "offer-desc">Pier</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/15.png"/></th>
                        <th class = "offer-desc">Tennis</th>
                    </tr>
                    <tr>
                        <th class = "offer-icon"><img src = "./icons/16.png"/></th>
                        <th class = "offer-desc">Heritage Site</th>
                    </tr>
                </table>
            </div>    
        </div>

        <div class = "amenities-blurb" style = "border: black 2px solid; border-left:none; font-size: 16pt;">
            Cook house, bath house, outdoor hot water shower, fire pits, running water, ample parking and beach access included.<br>
            <strong>For more information on amenities, click <a href = "amenities.php">here</a>.</strong> 
        </div>
    </div>


    <div style = "height: 5em; border-bottom: 2px #F6AA1C solid; width: 90%; margin-right: auto; margin-left: auto; margin-bottom: 5em;"></div>

    <span style = "margin-left: 5%; font-size: 30pt; font-weight: bold;">Rental Options</span>
    <div class = "third-panel" style = "border: black 2px solid">
    
        <h1 id = "header-label">Cabins</h1><h1 id = "header-coachhouse-label" style = "border-left:2px solid black;">Coach House</h1>
        <div class = "cabins-info-container">
                <?php 
                    include 'connection.php';
                    if ($result = $mysqli -> query("SELECT cabins FROM cabins WHERE id = 1")){
                        while($row = $result->fetch_row()){
                            printf($row[0]);
                        }
                        //mysqli_free_result($result);
                    }
                ?>
        </div>
        <div class = "coach-info-container">
        <?php 
                    include 'connection.php';
                    if ($result = $mysqli -> query("SELECT coach_house FROM coach_house WHERE id = 1")){
                        while($row = $result->fetch_row()){
                            printf($row[0]);
                        }
                        //mysqli_free_result($result);
                    }
                ?>
        </div>

    </div>




    <?php include 'footer.php'; ?>
    


</body>
<script src = "slideshow.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>