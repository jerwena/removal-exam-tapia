<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Book</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->


<style>
body {
    font-family: "Courier New", Courier, monospace;
    background-color: #83677b;
;
    color: #501B1D;
}
.container {
   background-repeat: no-repeat;
   background-position: center;
   padding: 150px 200px;
   background-color: #EDF5E1;
   border: 2px solid;
   text-align: center;
   font-weight: normal;
}
.container {
  position: relative;
  margin-top: 50px;
  margin-bottom:50px;
  max-width: 800px;
  border-color: #2E1114;
  border-radius: 50px 20px;
}
h1{
    font-size: 45px;
}
/* .... */
    </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<div class="container">
    <h1><strong>GUEST BOOK<br></strong></h1>
        <hr><br>

<!-- Form -->          
<div class="login">  
<h2>Log In Form</h2>     
    <br>
<form id="login" method="get" action="login.php">
    <form action="/guest-book-form" method="POST" class="form-login">
        @csrf
    <input type="hidden" value="{{ $guestbook->id }}" name="id" >
        <label for="full_name" class="typefield-label" style="text-align: left;">Fullname Name</label><br>
    <input type="text" value="{{ $guestbook->full_name }}"  name="full_name" class="formtext" placeholder="&nbsp;&nbsp;Fullname Name"><br>
        <br>
        <label for="email_address" class="typefield-label" style="text-align: left;">Email Address</label><br>
    <input type="email" value="{{ $guestbook->email_address }}"  name="email_address" class="formtext" placeholder="&nbsp;&nbsp;Email Address"><br>
        <br>
        <label for="age" class="typefield-label" style="text-align: left;">Age</label><br>
    <input type="age" value="{{ $guestbook->age}}"  name="age" class="formtext" placeholder="&nbsp;&nbsp;Age"><br>
        <br>
    <label for="message" class="typefield-label" style="text-align: left;">Message</label>  <br>
<form action="/html/tags/html_form_tag_action.cfm" method="post">
    <div>
        <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
        saysomething.....
        </textarea>
    </div>
</form>
    <br>
<div class="form-group">
    <br>
        <a href="/thank-you">
        <button type="submit" class="sumbit1">Submit</button>
        </a>
</div> 
    <br>  
    <input type="checkbox" id="check">    
        <span>Remember me</span>    
    <br> 
<div class="form-group">
    <label>Click to Another Form :</label>
    <br>
        <a href="/guest-book-form">
            <button type="submit" class="sumbit1">Login</button>
        </a>
</div>
    <br><br>
<hr>
<!-- Form end -->
    <p class="copyright">&copy;<strong>2021 Copy Right:</strong> "This Form is Use For a Registration of GUEST BOOK ONLY"</p>
<div>
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>