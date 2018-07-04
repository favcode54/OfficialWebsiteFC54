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
             <section class="cover height-80 imagebg text-center" data-overlay="3">
                <div class="background-image-holder">
                    <img alt="background" src="https://images.unsplash.com/photo-1494883759339-0b042055a4ee?ixlib=rb-0.3.5&s=9849e1bc0d0959908dcceb255da77470&auto=format&fit=crop&w=667&q=80" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-10">
                            <h1>
                                Students
                            </h1>
                            <p class="lead">
                                Registration is open for FavCode54 2019 Edition
                            </p>
                            <div class="modal-instance block">
                                <div class="video-play-icon video-play-icon--sm modal-trigger"></div>
                                <span>
                                    <strong>Watch the overview</strong></span>
                                <div class="modal-container">
                                    <div class="modal-content bg-dark" data-width="60%" data-height="60%">
                                        <iframe data-src="https://www.youtube.com/embed/Nuv_ncYajWg" allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                    <!--end of modal-content-->
                                </div>
                                <!--end of modal-container-->
                            </div>
                            <!--end of modal instance-->
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
                            <h3 class="" style="font-weight: normal;">Students</h3>
                            <span class="h3" style="font-size: 1.3em">
                                
                               For all students and aspiring technologists, you’ll be equipped with the necessary skills that would make you stand out as a software developer or engineer in whatever circle you find yourself in.<br>All students would be well-drilled in the basics of programming and software development and then led by a team of mentors to achieve proficiency in whatever software stack they choose to specialize in.<br>Students would also learn to network with colleague and mentors and how to collaborate with teams on a project. basically, we’ll leave no stone unturned in ensuring that you become a dev expert.
                            </span><br>
                            <a class="btn btn--md btn--primary type--uppercase" href="https://apply.favcode54.org/" target="_blank">
                                    <span class="btn__text">
                                        Apply for FavCode 2019
                                    </span>
                                </a>
                                 <a class="btn btn--md btn--primary type--uppercase" href="#" target="_blank" style="background: #787279">
                                    <span class="btn__text">
                                        Hackathons
                                    </span>
                                </a>
                                <a class="btn btn--md btn--primary type--uppercase" href="#" target="_blank" style="background: #f1c432">
                                    <span class="btn__text">
                                        Internships
                                    </span>
                                </a>
                                <a class="btn btn--md btn--primary type--uppercase" href="#" target="_blank" style="background: #92bd3c">
                                    <span class="btn__text">
                                        FireBrain
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