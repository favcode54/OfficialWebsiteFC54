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
            <section class="imagebg image--dark cover cover-blocks bg--secondary" data-overlay="6">
                <div class="background-image-holder">
                    <img alt="background" src="https://images.pexels.com/photos/630839/pexels-photo-630839.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 ">
                            <div>
                                <h2>2018 Programs</h2>
                                <p class="lead">
                                    Check out our training programs
                                </p>
                                <hr class="short">
                                
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section id="about" class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10">
                            <h3 class="" style="font-weight: normal;">Overview</h3>
                            <span class="h3" style="font-size: 1.3em">
                                
                                Favcode54 aims to create and sustain talent across the 54 countries in Africa, in the area of technology. We aim to reach out to anyone who is passionate and has a good learning culture. <br><br>Favcode54 also links our students to tech companies for internships and industrial experience. <br>This program is exciting as our mentors are world class developers who have worked with tech companies.<br> Internet access is also provided to students who are not able to afford it.
                            </span>
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