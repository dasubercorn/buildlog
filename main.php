<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUILD LOG | HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favico.ico" type="image/x-icon"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="homebody">
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
 
        <div class="welcome col-sm-6">
          <h1>Welcome to BuildLog!</h1>
          <h2>BuildLog is a service that allows you to keep track of computer components online! Here, you can log all the components you already own, or even add components you want to a wishlist!</h2>
        

          <div class="accordion" id="accordionExample">
            
            <div class="card">
              <div class="card-header col-md-12" id="headingTwo">
                <h5 class="mb-0">
                
                  <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do I use the service?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse col-md-12" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  The service can be separated into a few parts. First are the component categories, where you can either add recommended components to your wishlist, or add your own chosen components to your inventory or wishlist. Second is the Inventory category where you can view all the components you already own. Last is the Wishlist category where you can keep track of the components you have wishlisted.
                </div>
              </div>
            </div>

            

            

            

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