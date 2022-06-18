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
<br><br><br><br><br><br><br><br><br><br><br><br>

<script>
    let counter = 0;
    
    function heart(x){
        
        var button =document.getElementById("btn" + x);
        var color2 = document.getElementById("heart"+x);
       document.getElementById("heart" +x).className = "fa fa-heart";
       console.log(x);
      
       if(counter % 2 == 0){
        color2.style.color = "red";
       }else{
        color2.style.color = "black";
       
       }
      
       
       counter++;
        
    }  

</body>

</html>
