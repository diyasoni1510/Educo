<?php include('./config.php'); ?>
<!-- footer starts here -->
<footer>
    <h4>Educo. &copy; 2023, All right reserved</h4>
    <a href="#" data-bs-toggle="modal" data-bs-target="#AdminloginModal">Admin login</a>
</footer>
<!-- footer ends here -->


<!-- sign up modal starts here  -->
<!-- Modal -->
<div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="RegistrationModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="RegistrationModalLabel">Student Registration</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <!-- registration form starts here  -->
      <form id="sturegform">
        <div class="mb-3">
            <i class="fas fa-user"></i> <label for="regname" class="form-label">Name</label>
            <small id="msg1"></small>
            <input type="email" class="form-control" id="regname" aria-describedby="emailHelp" name="regname">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
        <div class="mb-3">
          <i class="fas fa-envelope"></i> <label for="regmail" class="form-label">Email address</label>
          <small id="msg2"></small>
          <input type="email" class="form-control" id="regmail" aria-describedby="emailHelp" name="regemail">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <i class="fas fa-key"></i> <label for="regpassword" class="form-label">New Password</label>
          <small id="msg3"></small>
          <input type="password" class="form-control" id="regpassword" name="regpassword">
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </form>
      <!-- regitration form ends here  -->
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      <span id="successmsg"></span>
      <button type="button" class="btn btn-primary" onclick="addstu()">Sign Up</button>
    </div>
  </div>
</div>
</div>
<!-- sign up modal ends here  -->



<!-- log in modal starts here  -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="loginModalLabel">Student Login</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <!-- login for starts here  -->
      <form>
        <!-- <div class="mb-3">
            <i class="fas fa-user"></i> <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="email" class="form-control" id="regname" aria-describedby="emailHelp">
          </div> -->
        <div class="mb-3">
          <i class="fas fa-envelope"></i> <label for="loginmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="loginmail" aria-describedby="emailHelp">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <i class="fas fa-key"></i> <label for="logpassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="logpassword">
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </form>
      <!-- login form ends here  -->
    </div>
    <div class="modal-footer">
      <small id="statuslogmsg"></small>
      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      <button type="button" class="btn btn-primary" onclick="checkstulogin()">Log in</button>
      <!-- <button type="button" class="btn btn-primary" onclick="check()">Log in</button> -->

    </div>
  </div>
</div>
</div>
<!-- log in modal ends here  -->

<!-- Admin log in modal starts here  -->
<!-- Modal -->
<div class="modal fade" id="AdminloginModal" tabindex="-1" aria-labelledby="AdminloginModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="AdminloginModalLabel">Admin Login</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <!-- login for starts here  -->
      <form>
        <!-- <div class="mb-3">
            <i class="fas fa-user"></i> <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="email" class="form-control" id="regname" aria-describedby="emailHelp">
          </div> -->
        <div class="mb-3">
          <i class="fas fa-envelope"></i> <label for="Adminloginmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="Adminloginmail" aria-describedby="emailHelp">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <i class="fas fa-key"></i> <label for="Adminlogpassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="Adminlogpassword">
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </form>
      <!-- login form ends here  -->
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      <button type="button" class="btn btn-primary" onclick="checkadminlogin()">Log in</button>
    </div>
  </div>
</div>
</div>
<!-- Admin log in modal ends here  -->



<script src="js/bootstrap.min.js"></script>
<script src="js/Proper.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js?=<?=$version?>"></script>
<script src="js/ajaxrequest.js"></script>
<script src="js/adminajaxrequest.js"></script>

<!-- aos js file  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>