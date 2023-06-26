function addstu() {
  let stuname = $("#regname").val();
  let stuemail = $("#regmail").val();
  let stupass = $("#regpassword").val();
  // console.log(stuemail,stuname,stupass)
  if(stuname.trim == ""){
    $("#msg1").html('<small style="color:red;">Please enter name!</small>')
  }
  else if(stuemail.trim == ""){
    $("#msg2").html('<small style="color:red;">Please enter email!</small>')
  }
  else if(stupass.trim == ""){
    $("#msg3").html('<small style="color:red;">Please enter password!</small>')
  }
  else{
  $.ajax({
    url: "student/addstudent.php",
    method: "POST",
    dataType : "json",
    data: {
      stusignup: "stusignup",
      stuname: stuname,
      stuemail: stuemail,
      stupass: stupass,
    },
    success: function (data) {
      console.log("enter")
      // console.log(data);
      // if(data === "connected"){
        clearStuReg();
        // $("#successmsg").html("<span>Registration successfully!</span>");
      // }
      // else{
        // $("#successmsg").html("<span>Unable to register!</span>")
      // }
    },
  });
}
}

// ajax call for student login verification
function checkstulogin() {
  console.log("login clicked");
  let stulogemail = $("#loginmail").val();
  let stulogpass = $("#logpassword").val();

  $.ajax({
    url: "student/addstudent.php",
    method: "POST",
    data: {
      checklogemail: "checklogemail",
      stulogemail: stulogemail,
      stulogpass: stulogpass,
    },
    success: function (data) {
      console.log(data);
      if (data == "connected0") {
        console.log(data);
        $("#statuslogmsg").html(
          '<small class="alert alert-danger">Envalid Email ID or Password</small>'
        );
      } else if (data == "connected1") {
        console.log(data);
        $("#statuslogmsg").html(
          '<small class="spinner-border text-success" role="status"></small>'
        );
        setTimeout(() => {
          window.location.href = "index.php";
        }, 1000);
      }
    },
  });
}


function clearStuReg(){
  $("#sturegform").trigger("reset");
}

