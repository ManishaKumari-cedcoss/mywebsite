<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback-Post-Type</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
  <h2>Feedback Form</h2>
    <p>Please fill your valuable Feedback:</p>
  </div>
  <!-- <div class="row"> -->
    
    <!-- <div class="column"> -->
       <form id="frmpost" method="post" action="#"> 
        <label for="fname"> Name: </label>
        <input type="text" id="name" name="name" required placeholder="Your name.."><br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email" required placeholder="Your email.."><br>
        <label for="subject">Feedback : </label>
        <textarea id="feedback" name="feedback" required  placeholder="Write feedback..." style="height:100px"></textarea>
        <button type="button">Submit</button>
      </form>
    <!-- </div> -->
  <!-- </div> -->
</div>
</html>  

