<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">

<link href="/css/admin.css" rel="stylesheet">
<style>
    .color
    {
        color:#F7F0D5;
    }

</style>

</head>
    <body>
    <div class="container">
    <h1 class="liwanag">liwanag</h1>
    <div class="container mt-5 p-0">
         @if($errors->any())
             <ul class="alert alert-warning">
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul>
        @endif

        @if(session('message1'))
            <h3 class="color">{{session('message1')}}</h3>
       @endif
     </div>

    <form method="POST" action="{{url('adminposts')}}">
        @csrf

    <label for="AdminUsername"><b></b></label>
    <input type="text" placeholder="Admin Username" name="AdminUsername" id="AdminUsername" required><br>
    
    <label for="AdminPassword"><b></b></label>
    <input type="password" placeholder="Password" name="AdminPassword" id="AdminPassword" required><br>
  
    <button type="submit" name="Signin" class="signinbtn">Sign in</button>
    </form>
</div>


</body>
</html>
