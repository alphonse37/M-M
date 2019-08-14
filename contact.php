<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image" href="./images/LOGODESIGN6-01-2.png">
    <title>M&M Painting LLC</title>

    <!-- BULMA CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"> -->
    <!-- <link rel="stylesheet" href="css/navbar-footer.css"> -->
    <link rel="stylesheet" href="css/contact.css">
    

    <!-- font awesome -->
    <!-- <script src="https://kit.fontawesome.com/7eaf41582e.js"></script> -->
   

    <!-- JQUERY -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
   
    <!-- <script src="js/script.js"></script> -->
</head>
<body>
    <!-- <header>
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a href="index.php">
                <img src="images/LOGODESIGN6-01-2.png">
              </a>
          
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true" class="has-text-white"></span>
                <span aria-hidden="true" class="has-text-white"></span>
                <span aria-hidden="true" class="has-text-white"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item has-text-white" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                <a class="navbar-item has-text-white" href="services.php"><i class="fas fa-brush"></i>&nbsp;&nbsp;Our Services</a>
                <a class="navbar-item has-text-white" href="contact.php"><i class="fas fa-mail-bulk"></i>&nbsp;&nbsp;Contact</a>
              </div>
            </div>
          </nav>
    </header> -->

    <main>
      <div class="hero">
        <div class="hero-body">
          <br>
          <div class="title-1 has-text-centered">
            Contact Us
          </div>
          <br><br>
          <div class="fondo">
              <div class="columns is-multiline">
                <div class="column image-contact is-full-mobile is-half-desktop is-centered">
                  <h2 class="subtitle has-text-centered has-text-white">
                    ¡Contact us!
                  </h2>
                  <p class="has-text-centered has-text-white">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 443-6926
                  </p>
                  <p class="has-text-centered has-text-white">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 417-5008
                  </p>
                  <p class="has-text-centered has-text-white">
                    <i class="far fa-envelope"></i>&nbsp;&nbsp;contact@mmpaintingmn.com 
                  </p>
                 <img src="images/roller paint.png" alt="" width="85%">
                </div>

                <div class="column is-full-mobile is-half-desktop">
                  <h2 class="subtitle has-text-centered has-text-white">¡Get a free estimate!</h2>
                  <form action="enviar.php" method="POST">
                      <div class="field">
                        <div class="columns is-multiline">
                          <div class="column is-half">
                              <label class="label has-text-white">First Name</label>
                              <p class="control">
                                <input class="input" type="text" pattern="[a-z A-z]+" title="Please, write only text" placeholder="First Name" name="name" id="name" required>
                              </p>
                          </div>
                          <div class="column is-half">
                              <label class="label has-text-white has-text-white">Last Name</label>
                              <p class="control">
                                <input class="input" pattern="[a-z A-z]+" title="Please, write only text" type="text" placeholder="Last Name" name="lastname" id="lastname" required>
                              </p>
                          </div>
                        </div>
                      </div>

                      <div class="field">
                        <div class="columns is-multiline">
                          <div class="column is-half">
                              <label class="label has-text-white">Email Address</label>
                              <p class="control">
                                <input class="input" pattern="[a-zA-z0-9._-]{1,100}[@][a-zA-z0-9]{1,50}[.][a-z]{1,3}" title="e.g. example@example.com" type="email" placeholder="Email Address" name="email" id="email" required>
                              </p>
                          </div>
                          <div class="column is-half">
                              <label class="label has-text-white">Telephone Number</label>
                              <p class="control">
                                <input class="input" pattern="[0-9]{3}[ ][0-9]{3}[-][0-9]{4}" title="e.g. 212 324-4152" type="text" name="telephone" id="telephone" placeholder="Telephone Number" required>
                              </p>
                          </div>
                        </div>
                      </div>

                      <div class="field">
                        <div class="columns is-multiline">
                          <div class="column is-full">
                              <label class="label has-text-white">Area approx ft square</label>
                              <p class="control">
                                <input class="input" pattern="[0-9]+" type="text" name="area" id="area" placeholder="Area approx ft square" required>
                              </p>
                          </div>
                          <div class="column is-full">
                            <label class="label has-text-white">Tell us about your project </label>
                            <div class="control">
                              <textarea class="textarea" name="comments" id="comments" placeholder="Tell us about your project" required></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="field is-grouped is-grouped-centered">
                       
                          <div class="control">
                            <button name="send" type="submit" class="button is-link is-centered">Submit</button>
                          </div>
                        
                      </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </main>
    
    <!-- <footer class="footer has-text-white">
        <div class=" has-text-centered">
            <p class="subtitle has-text-white">
                Contact Us
            </p>
            <div class="columns is-multiline">
                <div class="column is-one-third">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 443-6926
                </div>

                <div class="column is-one-third">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 417-5008
                </div>

                <div class="column is-one-third">
                    <i class="far fa-envelope"></i>&nbsp;&nbsp;contact@mmpaintingmn.com 
                </div>
            </div>

            <div class="is-half is-centered">
                Copyright 2019 M&M Painting LLC
            </div>
        </div>
    </footer> -->
</body>
</html>