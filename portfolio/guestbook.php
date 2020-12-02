<?php

include('includes/head.html');
?>

<body>
<div class="jumbotron text-center bg-success" style="margin-bottom:0">
    <h6><a href="orders.php" class="admin text-light"> <span class="admin"></span> Return </a></h6>
    <!--h6><a href="index.html" class="admin text-light"> <span class="admin"></span> Goto Portfolio </a></h6-->

  <h1>Welcome to My Guestbook</h1>
</div>
    <form id="validationform" class = "validationform" method="post" action="confirmation.php">
<div class="container "  ><br>
  <h3> Contact Form </h3><br>
        <fieldset class="form-group border p-3">

            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="fname">First Name:</label>
                    <input class="form-control" type="text" id="fname" name="fname" >
                    <span class="err" id="errfname"></span>

                </div>
               
                <div class="form-group col-md-6">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" type="text" id="lname" name="lname" >
                    <span class="err" id="errlname"></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Job Title:</label>
                    <input class="form-control" type="text" id="title" name="title" >
                    <span class="err" id="errtitle"></span>
                </div>
              
                <div class="form-group col-md-6">
                    <label for="cname">Company Name:</label>
                    <input class="form-control" type="text" id="cname" name="company">
                    <span class="err" id="errcname"></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email </label>
                    <input class="form-control" type="text" id="email" name="email" >
                    <span class="err" id="erremail"></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="linked">Linkedin:</label>
                    <input class="form-control" type="text" id="linked" name="link">
                    <span class="err" id="err-linked"></span>
                </div>
            </div>


        <div class="jumbotron " style="margin-bottom:0">
            <H3 class="text-center">How We Met</H3>
            <div class="form-group">
                <label for="how">How did we meet?</label>
                <select class="custom-select" id="how" name="howWeMet">
                    <option value = 'none'>Select an Option</option>
                    <option value="Meetup">Meetup</option>
                    <option value="Job Fair">Job Fair</option>
                    <option value="We">We haven't met yet</option>
                    <option value="Other">Other</option>
                </select>
                <span class="err" id="errhow"></span><br>

                <label for="other-text" id = "other">Other:</label>
                <textarea class="form-control" rows="2" placeholder="Please specity" id="other-text" name="other-text"></textarea>

                <label for="message-text">Comment</label>
                <textarea class="form-control" rows="4" placeholder="text" id="message-text" name="message-text"></textarea>

            </div>
        </div>

        <div class="container">
            <div><br>
            <h5>Mailing List</h5>
                <input type="checkbox" id = "mail" name = "mail" >
                <label > PLease add me to your mailing list</label>
            </div>
            <div>
              
              <label class="radio-inline">
                <input type="radio" name="radio" > HTML
              </label>
              <label class="radio-inline">
                <input type="radio" name="radio"> Text
              </label>
            </div>
          </div>
          <div>
              <!--button type="button" class="btn btn-light border" onclick="validate()">SUBMIT</button-->

              <input type="submit" value="Submit " >

          </div>         
        </fieldset>
      </div>
</form>


<!-- Footer -->
<footer class="container-fluid bg-success text-center "><br>
    <h3> </h3><br>
      <div class="item active"><br>
      </div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--script src="scripts/guest.js"></script-->
</body>
</html>
