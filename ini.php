<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ram</title>
    <script src="https://kit.fontawesome.com/c729a4e4e4.js" crossorigin="anonymous"></script>  




    

 <style>
 *{
    box-sizing:border-box;

}

body{
    background-color: #fafafa;
    box-sizing:border-box;
}

nev{
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;
    height: 20vh;
    
   

}
#toogle{
    display:none;

}


center h2{

    font-size:5vh;
}

.menu-box{
display:block;
}

.menu-link{
    text-decoration: none;
    font-size: larger;
    margin: 2vw;
}
.cpyright{

}
@media (max-width:700px){
#toogle{
    display:block;

}
.menu-box{
    padding: 20px 0;
    position: absolute;
    top: 65px;
}
.menu-s{
    display:none;
   
}

nev{
    flex-direction:column;
}
.nev-s{
    display: flex;
    align-items: center;
    justify-content: space-around;
    width:95%;
    height:17vh;
}

}

</style>
</head>
<body>
   
<center>
    <nev>
<div class="nev-s" >
<h2 id="logo-text">ProjectX<h2>
<i class="fa-solid fa-bars" onclick="ham();" id="toogle"></i>
<!-- <i onclick="ham();" id="toogle">tg</i>  -->
</div>

<div class="menu-box menu-s" id="menu">
<button class="menu-link"  onclick="nevmenu(1);" >HOME</button>
<button class="menu-link" onclick="nevmenu(2);" >ABOUT</button>
<a class="menu-link" href="nev.php" target="_#cent" >WORKS</a>
<a class="menu-link" href="" >CONTACT</a>
</div>
</nev>


<center id="cent">
<?php
include "home.php";
?>
</center>

<center>
<br>
<br>
<h2>ProjectX</h2>
<br>

<div>

<a class="menu-link" href="" >HOME</a>
<a class="menu-link" href="" >ABOUT</a>
<a class="menu-link" href="" >WORKS</a>
<a class="menu-link" href="" >CONTACT</a>

</div>
<br>


<p class="cpyright">@All rights reserved by SARJEET</p>
<br>
</center>


<script>
    function ham(){
    x = document.getElementById("menu");
    if(x.style.display ==="block")
        x.classList.toggle("menu-s");
    else
    x.classList.toggle("menu-s");  
  }


//   function nevmenu(x){
//        if(x=1)
//             document.getElementById("cent").innerHTML= ?>";
//         else
        
//             document.getElementById("cent").innerHTML='>';
        
        
     
//     }
   

</script>

</body>
</html>