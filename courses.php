<?php 
include("./maininclude/header.php");
include ('./admin/admindbcon.php');
?>
 <!-- <div id="all-courses-container">
   <div id="all-courses-head">
    <h1>All Courses</h1>
   </div>
   <div id="all-courses">
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
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
            </div>
    </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
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
            </div>
    </div>
   </div>
</div>  -->

<div id="popular-courses" style="position:relative; top:0;">
        <div id="popular-courses-haed">
            <h1>All Courses</h1>
        </div>
        <div id="popular-courses-body">
            <?php
             $sql  = "SELECT * FROM course";
             $result = $conn->query($sql); 
             if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '
                    <a href="coursedetail.php?course_id='.$course_id.'" class="course-container-a">
                    <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                    <div class="course-img">
                         <img src="'.str_replace('..','.',$row['course_image']).'" alt="">
                         </div>
                            <div id="course-detail">
                            <h2>'.$row['course_name'].'</h2>
                            <p>'.$row['course_author'].'</p>
                            <p>FREE</p>
                            <a href="coursedetail.php?course_id='.$course_id.'" style="text-decoration:none; color:#4c31e6;" >View course</a>
                            </div>
                    </div>
                    </a>
                    ' ;
                }
             }           
            ?>
            
            <!-- <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blueprint-gfc000d49f_640.jpg" alt="">
                <div id="course-detail">
                <h2>Machine Learning</h2>
                <p>Mr. Sumit Verma</p>
                <p>FREE</p>
                <a href="#">Enroll Now</a>

                </div>
            </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blockchain-gbc6005092_640.jpg" alt="">
                <div id="course-detail">
                <h2>Web Development</h2>
                <p>Mr. Hitesh tripathi</p>
                <p>FREE</p>
                <a href="#">Enroll Now</a>

                </div>
            </div>

            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/monitor-g3b31a57ca_640.jpg" alt="">
                <div id="course-detail">
                <h2>Data Science</h2>
                <p>Mr. Avinash Singh</p>
                <p>FREE</p>
                <a href="#">Enroll Now</a>

                </div>
            </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blueprint-gfc000d49f_640.jpg" alt="">
                <div id="course-detail">
                <h2>Machine Learning</h2>
                <p>Mr. Sumit Verma</p>
                <p>FREE</p>
                <a href="#">Enroll Now</a>

                </div> -->
            <!-- </div>
            <div class="course" onclick="login()"  data-aos="flip-left" data-aos-duration="2000">
                <img src="./images/blockchain-gbc6005092_640.jpg" alt="">
                <div id="course-detail">
                <h2>Web Development</h2>
                <p>Mr. Hitesh tripathi</p>
                <p>FREE</p>
                <a href="#">Enroll Now</a>

                </div>
            </div> -->
        </div>
    </div>


<?php 
include("./maininclude/footer.php")
?>