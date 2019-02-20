<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/bulma.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/team.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div id="perspective" >
    <div id="container" class="p-container">
      <div class="header">
        <div class="content">
          <div class="container">
            <div class="hero">
              <div class="hero-body">
                <h1 class="title is-1 has-text-centered" style="font-family:Brush Script MT;color:#fff;">Register</h1>
              </div>
            </div>
            <div class="columns">
              <div class="column">

              </div>
              <div class="column is-narrow">
                <div class="hero is-light is-centered">
                  <div class="hero-body" style="max-width:400px;min-width:350px;">
	          <form method="POST" action="action.php" onsubmit="return validateForm()" autocomplete="off"  enctype="multipart/form-data">
                    <div class="field">
                      <label class="label">Name</label>
                      <div class="control">
                        <input class="input uppercase" style="text-transform:uppercase" type="text" id="name" name="name" required>
                      </div>
                      <p class="help" id="namehelp"></p>
                    </div>
                    <div class="field">
                      <label class="label">Email</label>
                      <div class="control has-icons-left has-icons-right">
                        <input class="input" type="email" id="Mail" name="email" required>
                      </div>
		      <p class="help" id="emailHelp"> </p>
                    </div>


                    <div class="field">
                      <label class="label">Phone Number</label>
                      <div class="control">
                        <input class="input" type="text" id="mob" name="phone" required>
                      </div>
                      <p class="help" id="mobhelp"></p>
                    </div>
					<div class="field">
                      <label class="label">Course</label>
                      <div class="control">
                        <div class="select">
                          <select name="class" id="course">
                            <option value="">--Select one--</option>
                            <option value="M.B.A">M.B.A</option>
                            <option value="B.C.A">B.C.A</option>
                            <option value="B-TECH">B-TECH</option>
                            <option value="M-TECH">M-TECH</option>
                            <option value="OTHER">OTHER</option>
                          </select>
                        </div>
                      </div>
                      <p class="help" id="coursehelp"> </p>
                    </div>
                    <div class="field">
                      <label class="label">Year</label>
                      <div class="control">
                        <div class="select">
                          <select name="year" id="year">
                            <option value="">--Select one--</option>
                            <option value="1st year">1st Year</option>
                            <option value="2nd year">2nd Year</option>
                            <option value="3rd year">3rd Year</option>
                            <option value="4th year">4th Year</option>
                          </select>
                        </div>
                      </div>
                      <p class="help" id="yearhelp"></p>
                    </div>

                    <div class="field">
                      <label class="label">College</label>
                      <div class="control">
                        <input class="input"  style="text-transform:uppercase" type="text" id="college" name="college" required>
                      </div>
                      <p class="help" id="collegehelp"></p>
                    </div>

					<div class="field">
                      <label class="label">Create Password</label>
                      <div class="control">
                        <input class="input" type="password" id="passwd" name="passwd" required>
                      </div>
                      <p class="help"></p>
                    </div>
                    <div class="field is-grouped">
                      <div class="control">
                        <input type="submit" class="button is-link" name="submit" value="submit">
                      </div>
                      <div class="control">
                        <button class="button is-text">Cancel</button>
                      </div>
                    </div>
				</form>
                  </div>
                </div>

              </div>
              <div class="column">

              </div>
            </div>

          </div>
        </div>
      </div><!-- header -->
    </div><!-- /container -->
    <nav id="outer-nav" class="outer-nav">
      <a href="index.html" class="icon-home">Home</a>
      <a href="events.html" class="icon-news">Events</a>
      <a href="gallery.html" class="icon-image">Gallery</a>
      <a href="team.html" class="icon-lock">Team</a>
      <a href="assets/event-schedule.pdf" class="icon-lock">Schedule</a>
      <a href="contactUs.html" class="icon-mail">Contact Us</a>
    </nav>
  </div>
  <button type="button" id="menu-toggle" class="button is-warning is-large" name="button">&#9776;</button>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/jquery.hover3d.js" ></script>
  <script src="js/JavaScript_Main.js" ></script>

  <script type="text/javascript">
  $(".scrolldown").click(function() {
    $('html,body').animate({
      scrollTop: $(".about").offset().top},
      'slow');
    });
    $("#menu-toggle").click(function() {
      $('#perspective').addClass("perspective");
      $('.p-container').addClass("moveleft");
      $('#menu-toggle').addClass("hidden");
      $('#outer-nav').addClass("animate");
    });
    $("#container").click(function() {
      $('#container').removeClass("moveleft");
      $('#menu-toggle').removeClass("hidden");
      $('#outer-nav').removeClass("animate");
      setTimeout(function() {
        $('#perspective').delay("slow").removeClass("perspective");
      }, 400);
    });
    </script>
    <?php
      $status = $_POST['stats'];
      if($status == 'success')
      {
        echo "<script type='text/javascript'>";
        echo "alert('successfull');";
        echo "</script>";

      }
     ?>
<script type="text/javascript">
$("#mob").on("blur", function(){
      var mobNum = $("#mob").val();
      var filter = /^\d*(?:\.\d{1,2})?$/;
        if (filter.test(mobNum)) {
          if(mobNum.length==10){
                message = "Valid Mobile No.";
                $("#mob").removeClass("is-danger");
                $("#mob").addClass("is-success");
                $("#mobhelp").text("");
         } else {
             $("#mob").removeClass("is-danger");
             $("#mob").addClass("is-danger");
             $("#mobhelp").text("Please put 10  digit mobile number");
             return false;
            }
          }
          else {
            $("#mob").removeClass("is-success");
            $("#mob").addClass("is-danger");
            $("#mobhelp").text("Please Enter Valid Number");
            return false;
         }
});
$("#name").on("blur", function(){
      var re = /^[a-zA-Z ]+$/;
      if ( $("#name").val().match(re) ) {

        $("#name").removeClass("is-danger");
        $("#name").addClass("is-success");
        $("#namehelp").text("");
        return true;
      } else {
        $("#name").removeClass("is-danger");
        $("#name").addClass("is-danger");
        $("#namehelp").text("That's not a name");
        return false;
      }
});

$("#college").on("blur", function(){
var re = /^[a-zA-Z ]+$/;
      if ( $("#college").val().match(re) ) {
  
        $("#college").removeClass("is-danger");
        $("#college").addClass("is-success");
        $("#collegehelp").text("");
        return true;
      } else {
        $("#college").removeClass("is-danger");
        $("#college").addClass("is-danger");
        $("#collegehelp").text("Please enter a valid college Name");
        return false;
      }
});
function validateForm(){
  if($("#course").val() == "")
  {
    $("#coursehelp").addClass("is-danger");
    $("#coursehelp").text("please select an option");
    return false;
  }
  else {
    {
      if($("#year").val() == "")
      {
        $("#yearhelp").addClass("is-danger");
        $("#yearhelp").text("please select an option");
        return false;
      }
    }
  }
var re = /^[a-zA-Z ]+$/;
      if ( $("#college").val().match(re) ) {
        message = "Valid Mobile No.";
        $("#college").removeClass("is-danger");
        $("#college").addClass("is-success");
        $("#collegehelp").text("");
       } else {
        $("#college").removeClass("is-danger");
        $("#college").addClass("is-danger");
        $("#collegehelp").text("Please enter a valid college Name");
        return false;
      }
      if ( $("#name").val().match(re) ) {
        message = "Valid Mobile No.";
        $("#name").removeClass("is-danger");
        $("#name").addClass("is-success");
        $("#namehelp").text("");
       
      } else {
        $("#name").removeClass("is-danger");
        $("#name").addClass("is-danger");
        $("#namehelp").text("That's not a name");
        return false;
      }

var mobNum = $("#mob").val();
      var filter = /^\d*(?:\.\d{1,2})?$/;
        if (filter.test(mobNum)) {
          if(mobNum.length==10){
                message = "Valid Mobile No.";
                $("#mob").removeClass("is-danger");
                $("#mob").addClass("is-success");
                $("#mobhelp").text("");
           } else {
             $("#mob").removeClass("is-danger");
             $("#mob").addClass("is-danger");
             $("#mobhelp").text("Please put 10  digit mobile number");
             return false;
            }
          }
          else {
            $("#mob").removeClass("is-success");
            $("#mob").addClass("is-danger");
            $("#mobhelp").text("Please Enter Valid Number");
            return false;
         }
}
</script>
<script type="text/javascript">

$("#Mail").on("blur", function(){
var email = $("#Mail").val();
  $.post("check_email.php",
  {
    email: $("#Mail").val()
  },
  function(data,status){
    $("#emailHelp").html("" + data);
  });

});
</script>
</body>
</html>

