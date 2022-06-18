<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="imgstyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <form action="" method ="POST">
        <textarea class = "formDesign"name="texts" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
        <div class="icon-bar-sb">
            <button class="active" name='SUBMIT' onclick="myFunction()"><i class="fa fa-fw fa-upload"></i>POST</button>
        </div>
    </form>
</div>
<br>

<?php
    // Details about Uploading Text
if(isset($_POST['SUBMIT'])){
    $text=$_POST['texts'];
    ?>
    <div class="first-box" id='hidden'>
  <div class="icon-bar-fb"> 
    <a class="active" href="#"><i class="fa fa-fw fa-user-circle-o"></i> Tricia Reynoso</a>
  <div class="icon-bar-fb1">
    <a href="#"><i class="fa fa-users"></i></a> 
  <div class="icon-bar-fb2">
    <a href="#"><i class="fa fa-ellipsis-h"></i></a> 

    </div>
    </div>
    </div>

<?php

    echo "<textarea class = 'formDesign2'name='texts'  cols='30' rows='10'>$text</textarea>";
    echo "<div class='react'>
    <a class='active' href='#'><i class='fa fa-heart-o'></i> Like</a>
    <?php
$con = mysqli_connect('localhost','root',"");
$db = mysqli_select_db($con,'userinfo');
$sql = mysqli_query($con,"Select * from users Where Name ='".$_SESSION['user']."'");




    // Details about Uploading Text
if(isset($_POST['SUBMIT'])){
    $Image = $_FILES['files'];
    $text=$_POST['texts'];
    $user =$_SESSION['user'];

   
    $num = count((array)$Image['name']);
    $strings = implode(",", $Image['name']);
    $strings2 = explode(',', $strings);

      
       for ($i = 0; $i < $num; $i++){
           
            $file_name = $Image['name'][$i];
            $file_size = $Image['size'][$i];
            $file_tmp = $Image['tmp_name'][$i];
            $file_type = $Image['type'][$i];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $extensions = array("jpeg","jpg","png");
           

            if(in_array($file_extension,$extensions) === false){
                $error[] ="Extension is not included, please choose JPEG, JPG, or PNG";

            }
            if($file_size > 2097152){
            $error[] = "File size must be exactly or under 2 MB";
            }
        
            if(empty($error)== true){
                move_uploaded_file($file_tmp,"TmporaryImage/".$file_name);
         
                

            }else{
            }
            
        }

        if(!empty($strings)){
            $sql = mysqli_query($con,"Insert into users(Name,Texts,Image) 
            Values ('$user','$text','$strings')");

        }else{
            $sql = mysqli_query($con,"Insert into users(Name,Texts) 
            Values ('$user','$text')");
        }

    
}

?>
    <a class='active' href='#'><i class='fa fa-commenting-o'></i> Comment</a>
    <a class='active' href='#'><i class='fa fa-share-square-o'></i> Share</a></div></div>";
}

?>

<br><br><br><br><br><br><br><br><br><br><br><br>



<br><br>

</body>

</html>
