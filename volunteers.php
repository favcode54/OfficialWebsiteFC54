<!doctype html>
<html lang="en">
    
    <head>
        <?php
        require 'pages/head.php';
        ?>
        
    </head>
    <body class=" ">
        <?php
        require 'pages/nav2.php';
        ?>
        <div class="main-container">
             <section class="cover height-70 imagebg text-center" data-overlay="7">
                <div class="background-image-holder">
                    <img alt="background" src="https://images.unsplash.com/photo-1494059980473-813e73ee784b?ixlib=rb-0.3.5&s=0dd6887766e0fdb2b09d3e89886c0428&auto=format&fit=crop&w=749&q=80" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-10">
                            <h1>
                                Volunteers
                            </h1>
                            <p class="lead">
                                International companies are welcome to partner with us in either hiring our developers, or sending employees for training on our platform.
                            </p>
                           
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section id="about" class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10">
                            <h3 class="" style="font-weight: normal;">Volunteers</h3>
                            <span class="h3" style="font-size: 1.3em">
                                
                              One of our core values as a company is to ensure that developers on our platform are world class, which in real terms translates to a proactive ability to integrate into any software dev team in the world without hassles, and having the skillset to tackle any challenge thrown at them. <br><br>Hiring top tech talents from Africa would also promote cultural diversity in your company. International companies are welcome to partner with us in either hiring our developers, or sending employees for training on our platform.
                            </span><br>
                            <a class="btn btn--md btn--primary type--uppercase" href="http://volunteer.favcode54.org/" target="_blank">
                                    <span class="btn__text">
                                        Volunteer today
                                    </span>
                                </a>
                                 
                            <hr class="short">
                            
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php
                require 'pages/program_cards.php';
            ?>
                <section class="text-center bg--secondary">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                <h3>Collaborate | Code | Ship | Innovate</h3>
                                
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </section>
                
                
                <?php
                require 'pages/footer.php';
                ?>
            </div>
            
            <?php
            require 'pages/scripts.php';
            ?>
        </body>
        
    </html>