<html>
  <head>
    <title>Review Form Submission</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- navbar start -->
    <div class="header">
      <a href="" class="title" >Review Form Submission</a>
      <div class="header-right">
        <a href="index.html">Home</a>
        <a href="index.html#assignments">Assignments</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
      </div>
    </div>
    <!-- navbar stop -->

    <div class="assignmentbox" style="">
      <h1 style="text-align:center;">Review Form Submission:</h1><br>

      <p style=" text-align: left; margin-left: 15%; font-size:15px;">
         Hello <b> <?php echo $_POST["user"] ?> </b> ! <br> <br>
         Thank you for completing this form, please review your submission: <br> <br>
         You said your favorite instructor is  <b> Dr. <?php echo $_POST["favProf"] ?> </b>? That's nice, I'll let them know! <br>
         <b> <?php echo $_POST["subject"] ?> </b> is your favorite CS subject? How interesting... <br>
         You will probably learn more about <b> <?php echo $_POST["subject"] ?> </b> in the <u> <?php echo $_POST["semester"] ?></u>. <br>
         I hope you enjoyed the video / audio, your comments were: <b> <?php echo $_POST["comments"] ?></b><br>
         Don't forget your password! <b> <?php echo $_POST["pass"] ?></b>
      </p>

      <br><br>
      <h3 style="text-align:center;">Thank you for your time!</h3>
      <a href="index.html" style="text-align:center; text-decoration: none; font-size:15px; font-weight:bold; padding:5px; background-color:lightblue; color:darkblue">HOME</a>
      <br><br>
    </div>
  </body>
</html>
