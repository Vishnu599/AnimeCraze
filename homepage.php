<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>anime craze</title>
<meta charset="utf-8"/>
<style type="text/css">
body
{
background-color:black;
}
nav
{
background-image: url(sideimage.jpg);
background-position:right bottom;
background-attachment:fixed;
background-repeat:no-repeat;
background-size:170px 500px;
}
.ad
{
background-image: url(sideimage.jpg);
background-position:left bottom;
background-attachment:fixed;
background-repeat:no-repeat;
background-size:170px 500px;
}
h1
{
font-size:36pt;
text-align:center;
color:orange;
text-shadow:20px -10px 1px red;
font-family:Forte;
}
.font{font-family:Elephant;color:orange;}
pre{font-size:12pt;color:orange;}
.taskbar
{
color:red;
font-size:15px;
font-family:Elephant;
background-color:orange;
padding:3px; 
border-color:Red;
border-width:2px;
border-style:solid;
border-radius:12px;
margin-left:540px;
margin-right:540px;
margin-top:15px;
margin-down:5px;
}
a{text-decoration:none;}
.taskbar:hover
{
color:red;
font-size:15px;
font-family:Elephant;
background-color:yellow;
padding:3px; 
border-color:green;
border-width:2px;
border-style:solid;
border-radius:12px;
margin-left:540px;
margin-right:540px;
margin-top:15px;
margin-down:5px;
}
.img:hover
{
font-family:Elephant;
background-color:blue;
padding:3px; 
border-color:green;
border-width:2px;
border-style:solid;
border-radius:12px;
}
</style>
<body>
<h1><img src="images.jfif" height="45" width="60"/>
Anime Craze</h1>
<hr color="orange">
<nav><nav class="ad">
<center><a href="homepage.php"><p class="taskbar">Home</p></a></center>
<?php 
if(isset($_SESSION['user']))
{
    echo '<center><a href="#"><p class="taskbar">Hi '.$_SESSION['user'].'</p></a></center>';
    echo '<center><a href="logout.php?logout"><p class="taskbar">Logout</p></a></center>';
}
else
{
    echo '<center><a href="register.html"><p class="taskbar">Sign in</p></a></center>';
    echo '<center><a href="getpremium.html"><p class="taskbar">Get Premium</p></a></center>';

}
?>
<center><a href="Aboutus.html"><p class="taskbar">About us</p></a></center>
<h2 align="center" class="font"><u>most viewed anime:<u></h2>
<p align="center">
<a href="onepiece.html"><img src="onepiece.jfif" width="180" height="200" alt="onepiece" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="naruto.html"><img src="naruto.jfif" width="180" height="200" alt="naruto" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="boruto.html"><img src="boruto.jfif" width="180" height="200" alt="boruto" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="deathnote"><img src="deathnote.jfif" width="180" height="200" alt="death note" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="dragonballz"><img src="dragonballz.jfif" width="180" height="200" alt="dragon ball z" class="img"></a>&nbsp;&nbsp;&nbsp;<br>
<pre align="center"><b>one piece               naruto                 boruto              deathnote            dragonballz </b></pre>
</p>
<p align="center">
<a href="91 days"><img src="91 days.jfif" width="180" height="200" alt="91 days" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="A.I.C.O"><img src="A.I.C.O.jfif" width="180" height="200" alt="A.I.C.O" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="code geass"><img src="code geass.jfif" width="180" height="200" alt="code geass" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="attack on titan"><img src="attack on titan.jfif" width="180" height="200" alt="attack on titan" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="bleach"><img src="bleach.jfif" width="180" height="200" alt="bleach" class="img"></a>&nbsp;&nbsp;&nbsp;<br>
<pre align="center"><b>91 days               A.I.C.O              Code geass          attack on titan           bleach  </b></pre>
</p>
<p align="center">
<a href="detective academy Q"><img src="detective academy Q.jfif" width="180" height="200" alt="detective academy Q" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="full metal alchemist"><img src="full metal alchemist.jfif" width="180" height="200" alt="full metal alchemist" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="fairy tail"><img src="fairy tail.jfif" width="180" height="200" alt="fairy tail" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="FLCL"><img src="FLCL.jfif" width="180" height="200" alt="FLCL" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="haruchika"><img src="haruchika.jfif" width="180" height="200" alt="haruchika" class="img"></a>&nbsp;&nbsp;&nbsp;<br>
<pre align="center"><b>detective academy Q   full metal alchemist       fairy tail                FLCL               haruchika       </b></pre>
</p>
<p align="center">
<a href="saint seiya"><img src="saint seiya.jfif" width="180" height="200" alt="saint seiya" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="steins gate"><img src="steins gate.jfif" width="180" height="200" alt="steins gate" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="sword art online"><img src="sword art online.jfif" width="180" height="200" alt="sword art online" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="tokyo ghoul"><img src="tokyo ghoul.jfif" width="180" height="200" alt="tokyo ghoul" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="world end"><img src="world end.jfif" width="180" height="200" alt="world end" class="img"></a>&nbsp;&nbsp;&nbsp;<br>
<pre align="center"><b>   saint seiya           steinsgate          sword art online         tokyo ghoul            world end     </b></pre>
</p>
<p align="center">
<a href="case closed"><img src="case closed.jfif" width="180" height="200" alt="case closed" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="detective conan"><img src="detective conan.jfif" width="180" height="200" alt="detective conan" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="food wars"><img src="food wars.jfif" width="180" height="200" alt="food wars" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="ga rei zero"><img src="ga rei zero.jfif" width="180" height="200" alt="ga rei zero" class="img"></a>&nbsp;&nbsp;&nbsp;
<a href="gurren lagann"><img src="gurren lagann.jfif" width="180" height="200" alt="gurren lagann" class="img"></a>&nbsp;&nbsp;&nbsp;<br>
<pre align="center"><b>   case closed         detective conan          food wars             ga rei zero         gurren lagann    </b></pre> 
</p>
</nav></nav><br><br>
<center><p class="font">
<a href="nextpage">1</a>
<a href="nextpage">2</a>
<a href="nextpage">3</a>
 ... 
<a href="nextpage">next page</a>
</p>
</center><br><br>
</body>
</html>