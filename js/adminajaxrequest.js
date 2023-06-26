
// ajax call for student login verification
function checkadminlogin() {
    console.log("admin login clicked");
    let adminlogemail = $("#Adminloginmail").val();
    let adminlogpass = $("#Adminlogpassword").val();
  
    $.ajax({
      url: "admin/admin.php",
      method: "POST",
      data: {
        checklogemail: "checklogemail",
        adminlogemail: adminlogemail,
        adminlogpass: adminlogpass,
      },
      success: function (data) {
        if (data == "connected0") {
          console.log(data);
          $("#statusadminlogmsg").html(
            `<small class="alert alert-danger">Envalid Email ID or Password</small>`
          );
        } else if (data == "connected1") {
          console.log(data);
            window.location.href = "admin/admindashboard.php";
        }
      },
    });
  }
  