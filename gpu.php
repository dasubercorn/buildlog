<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUILD LOG | GPU</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favico.ico" type="image/x-icon"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
  
  
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

        <h1 style = "color: white">Our Recommendations:</h1>

        <!-- nvidia -->

        <div class="compwindow container col-md-12 row">
            <div class="col-md-1 sep"></div>

            <div class="compbord row container col-md-2">
                <img src="1050ti.jpg" class="col-md-12"alt="" height="250">
                <h3 class="itemdesc" name = "gpu">GTX 1050Ti</h3>

                <div class="accordion" id="accordionExample">
            
                    <div class="card">
                      <div class="card-header col-md-12" id="headingTwo">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            specifications
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse col-md-12" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body itemdesc">
                          <dl>
                              <dt>
                                  CUDA Cores: 768
                              </dt>
                              <dt>
                                Graphics Clock (MHz): 1290
                              </dt>
                              <dt>
                                Processor Clock (MHz): 1392
                              </dt>
                              <dt>
                                Memory Clock: 7 Gbps
                              </dt>
                              <dt>
                                Standard Memory Config: 4GB
                              </dt>
                              <dt>
                                memory Interface: GDDR5
                              </dt>
                          </dl>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header col-md-12" id="headingThree">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Wishlist Now
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse col-md-12" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-center">
                        <?php

                                if(isset($_POST['submit1']))
                                {
                                    $Subject = stripslashes("GTX 1050Ti");
                                    $Name = stripslashes("GPU");
                                    $Message = stripslashes("INNO3D");

                                    $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                                    $MessageFile = fopen("MessageBoard/messages.txt","ab");

                                    if($MessageFile === FALSE)
                                    {
                                    }
                                    else
                                    {
                                        fwrite($MessageFile, $MessageRecord);
                                        fclose($MessageFile);
                                        echo '<script>alert("Added to Wishlist Successfully")</script>';
                                    }
                                }
                        ?>
                        <form action="gpu.php" method = "POST">
                        <input class="buybtn btn btn-success" type="submit" name = "submit1" value = "Add to Wishlist">
                        </form>
                            
                        </div>
                      </div>
                    </div>

                    
        
                
        
                    
        
                  </div>
            </div>

            <div class="col-md-1 sep"></div>

            <div class="compbord row container col-md-2">
                <img src="1660super.jpg" class="col-md-12"alt="" height="250">
                <h3 class="itemdesc">GTX 1660 Super</h3>

                <div class="accordion" id="accordionExample">
            
                    <div class="card">
                      <div class="card-header col-md-12" id="headingFour">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            specifications
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse col-md-12" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body itemdesc">
                          <dl>
                              <dt>
                                  CUDA Cores: 1408
                              </dt>
                              <dt>
                                Graphics Clock (MHz): 1530
                              </dt>
                              <dt>
                                Processor Clock (MHz): 1785
                              </dt>
                              <dt>
                                Memory Clock: 14 Gbps
                              </dt>
                              <dt>
                                Standard Memory Config: 6GB
                              </dt>
                              <dt>
                                memory Interface: GDDR6
                              </dt>
                          </dl>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header col-md-12" id="headingFive">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Wishlist Now
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse col-md-12" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body text-center">
                        <?php

                            if(isset($_POST['submit2']))
                            {
                                $Subject = stripslashes("GTX 1660 Super");
                                $Name = stripslashes("GPU");
                                $Message = stripslashes("ASUS");

                                $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                                $MessageFile = fopen("MessageBoard/messages.txt","ab");

                                if($MessageFile === FALSE)
                                {
                                }
                                else
                                {
                                    fwrite($MessageFile, $MessageRecord);
                                    fclose($MessageFile);
                                    echo '<script>alert("Added to Wishlist Successfully")</script>';
                                }
                            }
                            ?>
                            <form action="gpu.php" method = "POST">
                            <input class="buybtn btn btn-success" type="submit" name = "submit2" value = "Add to Wishlist">
                            </form>
                        </div>
                      </div>
                    </div>
        
                
        
                    
        
                  </div>
            </div>

            <div class="col-md-1 sep"></div>

            <div class="compbord row container col-md-2">
                <img src="rtx3050.jpg" class="col-md-12"alt="" height="250">
                <h3 class="itemdesc">RTX 3050</h3>

                <div class="accordion" id="accordionExample">
            
                    <div class="card">
                      <div class="card-header col-md-12" id="headingSix">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            specifications
                          </button>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse col-md-12" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body itemdesc">
                          <dl>
                              <dt>
                                  CUDA Cores: 2560
                              </dt>
                              <dt>
                                Graphics Clock (MHz): 1552
                              </dt>
                              <dt>
                                Processor Clock (MHz): 1750
                              </dt>
                              <dt>
                                Memory Clock: 14 Gbps
                              </dt>
                              <dt>
                                Standard Memory Config: 8GB
                              </dt>
                              <dt>
                                memory Interface: GDDR6
                              </dt>
                          </dl>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header col-md-12" id="headingSeven">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Wishlist Now
                          </button>
                        </h5>
                      </div>
                      <div id="collapseSeven" class="collapse col-md-12" aria-labelledby="headingSeven" data-parent="#accordionSeven">
                        <div class="card-body text-center">
                        <?php

                        if(isset($_POST['submit3']))
                        {
                            $Subject = stripslashes("RTX 3050");
                            $Name = stripslashes("GPU");
                            $Message = stripslashes("EVGA");

                            $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                            $MessageFile = fopen("MessageBoard/messages.txt","ab");

                            if($MessageFile === FALSE)
                            {
                            }
                            else
                            {
                                fwrite($MessageFile, $MessageRecord);
                                fclose($MessageFile);
                                echo '<script>alert("Added to Wishlist Successfully")</script>';
                            }
                        }
                        ?>
                        <form action="gpu.php" method = "POST">
                        <input class="buybtn btn btn-success" type="submit" name = "submit3" value = "Add to Wishlist">
                        </form>
                        </div>
                      </div>
                    </div>
        
                
        
                    
        
                  </div>
            </div>

            <div class="col-md-1 sep"></div>

            <div class="compbord row container col-md-2">
                <img src="rtx3060ti.jpg" class="col-md-12"alt="" height="250">
                <h3 class="itemdesc">RTX 3060Ti</h3>

                <div class="accordion" id="accordionExample">
            
                    <div class="card">
                      <div class="card-header col-md-12" id="headingEight">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            specifications
                          </button>
                        </h5>
                      </div>
                      <div id="collapseEight" class="collapse col-md-12" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body itemdesc">
                          <dl>
                              <dt>
                                  CUDA Cores: 4864
                              </dt>
                              <dt>
                                Graphics Clock (MHz): 1410
                              </dt>
                              <dt>
                                Processor Clock (MHz): 1750
                              </dt>
                              <dt>
                                Memory Clock: 14 Gbps
                              </dt>
                              <dt>
                                Standard Memory Config: 8GB
                              </dt>
                              <dt>
                                memory Interface: GDDR6
                              </dt>
                          </dl>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header col-md-12" id="headingNine">
                        <h5 class="mb-0">
                        
                          <button id="btn" class="btn btn-link collapsed col-md-12" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Wishlist Now
                          </button>
                        </h5>
                      </div>
                      <div id="collapseNine" class="collapse col-md-12" aria-labelledby="headingNine" data-parent="#accordionnine">
                        <div class="card-body text-center">
                        <?php

                        if(isset($_POST['submit4']))
                        {
                            $Subject = stripslashes("RTX 3060Ti");
                            $Name = stripslashes("GPU");
                            $Message = stripslashes("NVIDIA");

                            $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                            $MessageFile = fopen("MessageBoard/messages.txt","ab");

                            if($MessageFile === FALSE)
                            {
                            }
                            else
                            {
                                fwrite($MessageFile, $MessageRecord);
                                fclose($MessageFile);
                                echo '<script>alert("Added to Wishlist Successfully")</script>';
                            }
                        }
                        ?>
                        <form action="gpu.php" method = "POST">
                        <input class="buybtn btn btn-success" type="submit" name = "submit4" value = "Add to Wishlist">
                        </form>
                        </div>
                      </div>
                    </div>
        
                
        
                    
        
                  </div>
            </div>

            

            
        </div>
        


        

        

        

    </header>

    <h1 style = "color: white">Add Your Own Parts:</h1>

          <div class="accordion" id="accordionExample">
            
            <div class="card">
              <div class="card-header col-md-12" id="headingTen">
                <h5 class="mb-0">
                
                  <button id="btn" class="btn btn-link collapsed col-md-6" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Custom Wishlist
                  </button>
                </h5>
              </div>
              <div id="collapseTen" class="collapse col-md-12" aria-labelledby="headingTen" data-parent="#accordionExample">
                <div class="card-body">
                <div class="compbord row container col-md-6" style="text-align:center;" >        
                      <hr>
                      <form action="gpu.php" method="POST">
                          <span style = "color: white; font-size: 20px"> Model: </span>
                              <input type="text" name = "Model" style = "width: 250px; font-size: 20px; background-color: green; color: white"> <br>
                              <p>  </p>
                          <span style = "color: white; font-size: 20px"> Brand: </span>
                              <input type="text" name = "Brand" style = "width: 250px; font-size: 20px; background-color: green; color: white"> <br>
                              <p>  </p>
                          <input type="submit" class="buybtn btn btn-success" style="width: 300px; font-size: 20px "name = "submit5" value = "Add to Wishlist"><br>
                          <p>  </p>
                          <input type="reset" class="buybtn btn btn-success" style="width: 300px; font-size: 20px "name = "reset" value= "Clear">
                          
                      </form>
                      <hr>

                      <?php

                        if(isset($_POST['submit5']))
                        {
                            $Subject = stripslashes($_POST['Model']);
                            $Name = stripslashes("GPU");
                            $Message = stripslashes($_POST['Brand']);

                            $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                            $MessageFile = fopen("MessageBoard/messages.txt","ab");

                            if($MessageFile === FALSE)
                            {
                              echo '<script>alert("An Error has Occured")</script>';
                            }
                            if(empty($Subject) && empty($Name)) {
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }
                            elseif(empty($Subject)) { 
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }
                            elseif(empty($Name)) { 
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }

                            else
                            {
                                fwrite($MessageFile, $MessageRecord);
                                fclose($MessageFile);
                                echo '<script>alert("Added to Wishlist Successfully")</script>';
                            }
                        }
                        ?>

                </div>
                </div>

                    
                  </div>
              </div>
              
              </div>

            </div>

            <div class="card">
              <div class="card-header col-md-12" id="headingElev">
                <h5 class="mb-0">
                
                  <button id="btn" class="btn btn-link collapsed col-md-6" type="button" data-toggle="collapse" data-target="#collapseElev" aria-expanded="false" aria-controls="collapseElev">
                    Custom Inventory
                  </button>
                </h5>
              </div>
              <div id="collapseElev" class="collapse col-md-12" aria-labelledby="headingElev" data-parent="#accordionExample">
                <div class="card-body">
                <div class="compbord row container col-md-6" style="text-align:center;" >        
                      <hr>
                      <form action="gpu.php" method="POST">
                          <span style = "color: white; font-size: 20px"> Model: </span>
                              <input type="text" name = "Model" style = "width: 250px; font-size: 20px; background-color: green; color: white"> <br>
                              <p>  </p>
                          <span style = "color: white; font-size: 20px"> Brand: </span>
                              <input type="text" name = "Brand" style = "width: 250px; font-size: 20px; background-color: green; color: white"> <br>
                              <p>  </p>
                          <input type="submit" class="buybtn btn btn-success" style="width: 300px; font-size: 20px "name = "submit6" value = "Add to Inventory"><br>
                          <p>  </p>
                          <input type="reset" class="buybtn btn btn-success" style="width: 300px; font-size: 20px "name = "reset" value= "Clear">
                      </form>
                      <hr>

                      <?php

                        if(isset($_POST['submit6']))
                        {
                            $Subject = stripslashes($_POST['Model']);
                            $Name = stripslashes("GPU");
                            $Message = stripslashes($_POST['Brand']);

                            $MessageRecord = "$Subject ~ $Name ~ $Message\n";
                            $MessageFile = fopen("MessageBoard/inv.txt","ab");

                            if($MessageFile === FALSE)
                            {
                              echo '<script>alert("An Error has Occured")</script>';
                            }
                            if(empty($Subject) && empty($Name)) {
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }
                            elseif(empty($Subject)) { 
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }
                            elseif(empty($Name)) { 
                              echo '<script>alert("Please Fill Up All Fields")</script>';
                            }

                            else
                            {
                                fwrite($MessageFile, $MessageRecord);
                                fclose($MessageFile);
                                echo '<script>alert("Added to Inventory Successfully")</script>';
                            }
                        }
                        ?>

                </div>
                </div>

                    
                  </div>
              </div>
              
              </div>

            </div>

           </div>

    <div class="footdiv"></div>

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