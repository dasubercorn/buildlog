<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUILD LOG | WISHLIST</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favico.ico" type="image/x-icon"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class>
    <header class="header">

        <nav class="navbar navbar-style">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="main.html"><img class="logo" src="buildlog.png"></a>
                </div>

            <div class="collapse navbar-collapse" id="micon">

                <ul class="nav navbar-nav navbar-right">
                    
                <li><a href="main.php">Home</a></li>
                        <li><a href="gpu.php">Graphics Cards</a></li>
                        <li><a href="mobo.php">Motherboards</a></li>
                        <li><a href="cpu.php">Processors</a></li>
                        <li><a href="ram.php">Memory</a></li>
                        <li><a href="hdd.php">Storage</a></li>
                        <li><a href="inv.php">Inventory</a></li>
                        <li><a href="wish.php">Wishlist</a></li>
                    
                </ul>

            </div>


            </div>

            
        </nav>
 
        <div class="welcome col-sm-11" style= "overflow-y: scroll; height: 500px">
         
        <?php

    if(isset($_GET['action'])){
        if((file_exists("MessageBoard/messages.txt")) &&
        (filesize("MessageBoard/messages.txt") != 0))
    {
        $MessageArray = file ("MessageBoard/messages.txt");

        switch($_GET['action'])
        {
            case 'Delete First' :
                array_shift($MessageArray);
            break;
            case 'Delete Last' :
                array_pop($MessageArray);
            break;
            case 'Delete Message' :
                if(isset($_GET['message']))
                {
                    $Index = $_GET['message'];
                    unset($MessageArray[$Index]);
                    $MessageArray = array_values($MessageArray);
                }
            break;
            case 'Remove Duplicates' :
                $MessageArray = array_unique($MessageArray);
                $MessageArray = array_values($MessageArray);
            break;
        }
        if(count($MessageArray) > 0)
            {
                $NewMessages = implode($MessageArray);
                $MessageStore = fopen("MessageBoard/messages.txt", "wb");
                if($MessageStore === false)
                {
                    echo "There was an error updating the message file \n";
                }
                else
                {
                    fwrite($MessageStore, $NewMessages);
                    fclose($MessageStore);   
                }

            }
        else
            {
                unlink("MessageBoard/messages.txt");
            }
    }
    }

    

    
   

    if((!file_exists("MessageBoard/messages.txt"))
    ||(filesize("MessageBoard/messages.txt") == 0))
    {
        echo "<p> No Items in Inventory.</p>";
    }
    else
    {
        $MessageArray = file("MessageBoard/messages.txt");
        echo "<table 
                style = \"background-color:green\" 
                border = \"5\" width = \"100%\"> \n";
        $count = count($MessageArray);
        for ($i = 0; $i < $count; ++$i)
        {
            $CurrMsg = explode("~", $MessageArray[$i]);
            echo "<tr>\n";
            echo "<td width = \"5%\" 
                    style = \"text-align:center;
                    font-weight:bold\">" . 
                    ($i + 1) . "</td>\n";
            echo "<td width = \"85%\"><span
                    style = \"font-weight:bold\">Model:
                    </span>" .
                    htmlentities($CurrMsg[0]).
                    "</br> \n";

            echo "<span
                    style = \"font-weight:bold\">Component Type:
                    </span>" .
                    htmlentities($CurrMsg[1]).
                    "</br> \n";
            
            echo "<span
                    style = \"
                    font-weight:bold;\">Manufacturer: 
                    </span>" .
                    htmlentities($CurrMsg[2]) .
                    "</br> \n";
            

            echo "<td width = \"10%\"
                    style = \"text-align:center;\">" . 
                    "<a style = \"color: white;\" href = 'wish.php?" . 
                    "action=Delete%20Message&" . 
                    "message=$i'>" .
                    "Remove From Wishlist </a></td> \n";

            echo "</tr>\n";

            
        }
        echo "</table>\n";
    }
    ?>
    <p>

        <form action="wish.php?action=Remove%20Duplicates" method = "POST">
           <input class="buybtn btn btn-success" type="submit" value = "Remove Duplicate Components">
        </form>
        <p> </p>

        <form action="wish.php?action=Delete%20First" method = "POST">
           <input class="buybtn btn btn-success" type="submit" value = "Delete First Entry">
        </form>

        <p> </p>

        <form action="wish.php?action=Delete%20Last" method = "POST">
           <input class="buybtn btn btn-success" type="submit" value = "Delete Last Entry">
        </form>



    </p>
            

          </div>

        </div>

        
    </header>
    
    <div class="footdiv">
      
    </div>
    <footer class="footertext w-100 py-4 flex-shrink-0">
      <div class="container py-4">
          <div class="row gy-4 gx-5">
              <div class="footertext col-lg-4 col-md-6">
                  
                  <img class="logo2" src="buildlog.png"></a>
                  <p class="small">Follow us on our Facebook Page <a href="https://www.facebook.com/">here</a> to get the latest updates on first!</p>
                  <p class="small mb-0">&copy; Copyrights. All rights reserved. FerryNopuentePatrico Limited</p>
              </div>
              <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="main.php">Home</a></li>
                        <li><a href="gpu.php">Graphics Cards</a></li>
                        <li><a href="mobo.php">Motherboards</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="cpu.php">Processors</a></li>
                        <li><a href="ram.php">Memory</a></li>
                        <li><a href="hdd.php">Storage</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="inv.php">Inventory</a></li>
                        <li><a href="wish.php">Wishlist</a></li>
                        
                    </ul>
                </div>
              <div class="col-lg-4 col-md-6">
                  
                  </form>
              </div>
          </div>
      </div>
  </footer>
</body>
</html>