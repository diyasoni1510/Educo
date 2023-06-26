<?php 
include("./maininclude/header.php");
include("./admin/admindbcon.php");
?>
<div id="video">
            <!-- <video src="videos/ipad_-_2988 (720p).mp4"></video> -->
            <video playsinline autoplay loop muted>
                <source src="videos/ipad_-_2988 (720p).mp4">
            </video>
            <div id="video-overlay"></div>
            <div id="video-text">
                <h1>The industry requires advance skills, get it into the smart way by <span>Educo.</span></h1>
                <p>From learning to earning we will find you the beast way Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo sunt placeat sed nesciunt autem delectus magnam, aliquid reiciendis consequuntur necessitatibus molestias <span class="cut-later"> , amet impedit ipsam distinctio in, sint ipsum quam cum magni? Fugit velit accusantium inventore delectus! Aut, quod optio labore neque consequatur possimus quam officia voluptas quae soluta ad incidunt!</span></p>
            </div>
        </div>
    <!-- </header> -->
    <!-- header ends here  -->



    <!-- popular courses starts here  -->


    <div id="popular-courses">
        <div id="popular-courses-haed">
            <h1>Our Popular Programs</h1>
        </div>
        <div id="popular-courses-body">
        <?php
             $sql  = "SELECT * FROM course LIMIT 3";
             $result = $conn->query($sql); 
             if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '
                    <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                    <div class="course-img">
                         <img src="'.str_replace('..','.',$row['course_image']).'" alt="">
                         </div>
                            <div id="course-detail">
                            <h2>'.$row['course_name'].'</h2>
                            <p>'.$row['course_author'].'</p>
                            <p>FREE</p>
                            <a href="coursedetail.php?course_id='.$course_id.'">View course</a>
                            </div>
                    </div>
                    ' ;
                }
             }           
            ?>
            
            <!-- <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/monitor-g3b31a57ca_640.jpg" alt="">
                <div id="course-detail">
                <h2>Data Science</h2>
                <p>Mr. Avinash Singh</p>
                <p>FREE</p>
                </div>
            </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blueprint-gfc000d49f_640.jpg" alt="">
                <div id="course-detail">
                <h2>Machine Learning</h2>
                <p>Mr. Sumit Verma</p>
                <p>FREE</p>
                </div>
            </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blockchain-gbc6005092_640.jpg" alt="">
                <div id="course-detail">
                <h2>Web Development</h2>
                <p>Mr. Hitesh tripathi</p>
                <p>FREE</p>
                </div>
            </div>-->
    </div>
    </div>

    <!-- popular courses ends here  -->



    <!-- advantages starts here  -->

    <div id="advantage">
        <div id="advantage-head">
            <h1>What will you get</h1>
        </div>
        <div id="advantage-body" data-aos="fade-up" data-aos-duration="2000">
            <div class="advantages">
                <img src="./images/neurolab-icon.svg.png" alt="">
                <h2>Resources</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, itaque!</p>
            </div>
            <div class="advantages">
                <img src="./images/jobPortal-icon.svg.png" alt="">
                <h2>Jobs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, itaque!</p>
            </div>
            <div class="advantages">
                <img src="./images/Internship-icon.svg.png" alt="">
                <h2>Experience</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, itaque!</p>
            </div>
            <div class="advantages">
                <img src="./images/affilitatePortal-icon.svg.png" alt="">
                <h2>Affiliating</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, itaque!</p>
            </div>
            <div class="advantages">
                <img src="./images/halloffame-icon.svg.png" alt="">
                <h2>Hall of Fame</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, itaque!</p>
            </div>
        </div>
    </div>

    <!-- advantages ends here  -->

   <?php 
   include("./maininclude/footer.php")
   ?>