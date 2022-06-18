<?php
    session_start();
    ?>

<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css?d=<?php echo time(); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i></a>
<div class="icon-bar-2">
  <a href="#"><i class="fa fa-user-circle-o"></i></a> 
  <a href="#"><i class="fa fa-navicon"></i></a>
</div>
</div></div>
<br>

<div class="second-box">
    <form action="" method ="POST" id="myform" name="myform" enctype = "multipart/form-data">
    <div class="icon-bar-sb">
                <button class="active" name='SUBMIT' id ="SUBMIT" on><i class="fa fa-fw fa-upload"></i>POST</button>
            </div>
        <div class="imgC" id="imageC">
            
        </div>
            <textarea class = "formDesign"name="texts" id="texts" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
            <div class="imageIcon">
                <label for="files">
                    <i class="fa fa-file-image-o">IMAGE</i>
                    <input type="file" name="files[]" id="files" multiple onchange="preview()" style="display:none">
                </label>
                
            </div>
            
    </form>

    
    <?php

    ?>

</div>
<br>

