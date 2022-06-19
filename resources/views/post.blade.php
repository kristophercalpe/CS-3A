<?php
    session_start();
    ?>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=Merienda+One&family=Rubik&family=Teko:wght@500&display=swap" rel="stylesheet">


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!-- Styles -->
            <style>
            body {margin:0; background-color: #292929;}

.icon-bar {
width: 100%;
background-color: #2B1F27;
overflow: auto;
}

.icon-bar a {
float: left;
width: 18%;
text-align: center;
padding: 12px 0;
transition: all 0.3s ease;
color: white;
font-size: 38px;
color: black;
}

.icon-bar a:hover {
background-color: hotpink;
}

.active {
background-color: #FF99CC ;
}

.icon-bar-2 {
background-color: #171717;
overflow: auto;
height: 75px;
}

.icon-bar-2 a {
float: right;
width: 12%;
text-align: center;
padding: 12px 0;
transition: all 0.3s ease;
color: white;
font-size: 38px;


}

@media screen and (max-width: 600px) {
.topnav a, .topnav input[type=text] {
float: right;
display: block;
text-align: left;
width: 60%;
margin-top: 16px;
margin-right: 16px;
padding: 8px;
}
.topnav input[type=text] {
border: 1px solid #ccc;
}
}

.formDesign{
position: relative;
margin-left:10%;
width: 80%;
height:250px;
font-size: 35px;


}
.formDesign2{
position: relative;
margin-left:10%;
width: 80%;
height:250px;
font-size: 35px;
}

.first-box{
margin-bottom: 25px;
position:relative;
background-color: #FF99CC ;
margin-right: 30%;
margin-left: 30%;
bottom:0;
width: 550px;
border: 6px solid #000000;
border-radius: 25px;
padding: 5px;

}

.icon-bar-fb{
width: 100%;
background-color: #FF99CC ;
overflow: auto;
border-radius: 25px;
}
.icon-bar-fb a {
float: left;
text-align: left;
padding: 12px 0;
transition: all 0.3s ease;
color: white;
font-size: 30px;
margin-left: 5%;
color: #000000;
font-family: 'Poppins', sans-serif;
}

.icon-bar-fb1{
background-color: #FF99CC ;
overflow: auto;
}
.icon-bar-fb1 a {
float: left;
text-align: left;
padding: 22px 0;
transition: all 0.3s ease;
font-size: 20px;
color: #000000;
}
.icon-bar-fb2{
background-color: #FF99CC ;
overflow: auto;
}
.icon-bar-fb2 a {
float: right;
text-align: left;
padding: 12px 0;
transition: all 0.3s ease;
color: white;
font-size: 30px;
margin-right: 5%;
color: #000000;
}

@media screen and (max-width: 1000px) {
.first-box {
float: center;
display: block;
text-align: left;
width: 76%;
padding: 8px;
margin-left: 10%;
margin-bottom: 25px;
}
}

.second-box{
margin-bottom: 25px;
position: relative;
background-color: #FF99CC;
margin-right: 30%;
margin-left: 30%;
width: 550px;
border: 6px solid #000000;
border-radius: 25px;
padding: 5px;
}

.icon-bar-sb {
position:relative;
width: 100%;
background-color: #FF99CC;
overflow: auto;
border-radius: 25px;
}
.icon-bar-sb button{
float: right;
text-align: right;
padding: 12px 0;
transition: all 0.3s ease;
color: white;
font-size: 30px;
margin-right: 5%;
border: none;
}

@media screen and (max-width: 1000px) {
.second-box {
float: center;
display: block;
text-align: left;
width: 76%;
padding: 8px;
margin-left: 10%;
}
}

@media screen and (max-width: 1000px) {
.formDesign {
float: center;
display: block;
text-align: left;
width: 76%;
padding: 8px;
margin-top: 13%;
}
}

.react{
position:relative;
width: 100%;
background-color: #FF99CC;
overflow: auto;
}

.imageIcon{
position: relative;
left:5%;
top:86%;
text-align: center;


}
.imageIcon i{
font-size: 25px;
}

.imageIcon i:hover{
padding:3px;
font-size: 25px;
font-weight: bold;
opacity: 1;
background-color: hotpink;
}


.react button:hover{
font-size: 20px;
font-weight: bold;
opacity: 1;
background-color: hotpink;
}

.react button {
float: left;
width: 23%;
text-align: center;
padding: 12px 0;
transition: all 0.3s ease;
font-size: 20px;
color: black;
margin-left: 20%;
font-size:20px;

}

.imgC{
position: relative;
top:15%;
display:grid;
grid-template-columns: 1fr 1fr;
width: 500px;

}
.imgC img{
width: 250px;
height: 200px;
margin-left: 15px;
margin-bottom: 25px;
border-radius: 20px;
box-shadow: 2px 5px 3px 4px rgba(0,0,0,0.5) ;
}

.logoutbtn{
  padding-top: 25px !important;
  font-size: 25px !important;
  font-family: 'Merienda One', sans-serif;

}
            </style>

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
            </style>
        </head>

      <a class="active" href="#"></a>
    <div class="icon-bar-2">

      <div class= "dropdown">

        <div class ="contents">
            <a href="login" class="logoutbtn">logout</a>
        </div>
      </div>

    </div>
    </div></div>
    <br>

    <div class="second-box">
        <form action="" method ="POST" id="myform" name="myform" enctype = "multipart/form-data">
            @csrf
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
    </div>
    <?php
    $count = 0;
      foreach($data as $x){
      ?>
      <div class="first-box" id='hidden'>
      <div class="icon-bar-fb">
          <a class="active" href="#"><i class="fa fa-fw fa-user-circle-o"></i></a>
      <div class="icon-bar-fb1">
      <a href="#"><i class="fa fa-users"></i></a>
      <div class="icon-bar-fb2">
       <a href="#"><i class="fa fa-ellipsis-h"></i></a>


      </div>
      </div>
      </div>

      <?php
      $path = '/storage/TmporaryImage/';
      $stringarr = explode (",", $x['Image']);
      $countarray = count($stringarr);
  
    
  
          echo "<div class ='imgC'>";
          foreach($stringarr as $data){ 
              if(!empty($data)){
                  echo "<img src='".$path.$data."' alt='img'>";
              }
              
          }
  
       echo"</div>";

          echo "<textarea disabled class = 'formDesign2'name='texts'  cols='30' rows='10'>".$x['Texts']."</textarea>";
          echo "<div class='react'>
              <button class='active'onclick='heart(".$count.")' id ='btn".$count."'><i id='heart".$count."' class='fa fa-heart-o' ></i> Like</button>
              <button class='active'><i class='fa fa-share-square-o'></i> Share</button></div></div>";
              $count++;
      }
      unset($count);
      ?>


    <br>
        </body>
    </html>
    <script>
        let counter = 0;

        function heart(y){

            var button =document.getElementById("btn" + y);
            var color2 = document.getElementById("heart"+y);
            document.getElementById("heart"+y).className = "fa fa-heart";
            console.log(y);

           if(counter % 2 == 0){
            color2.style.color = "red";
           }else{
            document.getElementById("heart"+y).className = "fa fa-heart-o";
            color2.style.color = "black";

           }


           counter++;

        }
        function preview(){

            var totalFiles = $('#files').get(0).files.length;

            for(var i = 0; i < totalFiles; i++){
                if(i >= 4 ){
                   alert("ONLY 4 PICTURES ARE ALLOWED!!!!");

                 }else{
                    $('#imageC').append("<img src = '"+URL.createObjectURL(event.target.files[i])+"'>");
                }
            }
          }
        </script>
