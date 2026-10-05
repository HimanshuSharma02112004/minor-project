<?php
session_start();
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="style.css">
</head>
<style> 
     header {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    color: white;
    width: 100vw;

}

header .con-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 500px;
}

header .con-nav .nav {
    display: flex;
    justify-content: center;
    align-items: center;
}

header .con-nav .nav ul {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;

}

header .con-nav .nav ul li {
    list-style: none;
    padding: 20px;
    font-size: 20px;
    cursor: pointer;
}

header .con-nav .nav ul li a{
    color:white;
     text-decoration: none;
}

header .con-in {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

header .con-in input {
    height: 50px;
    width: 300px;
    border-radius: 5px;
    font-size: 20px;
    padding: 0px 0px 0px 10px;

}

header .con-in input::placeholder {
    padding: 20px;
    font-size: 15px;
}

header .con-in input:hover {
    background-color: rgb(244, 238, 230);
}

header .con-in .btn {
    height: 45px;
    width: 70px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: bold;
    background-color: green;
    color: white;

}

header .con-in .btnn {
    background-color: white;
    color: black;
}


header .con-in .btnn:hover {
    background-color: green;
    color: white;
}
</style>
<body>';
  
 echo '<header>
        <div class="con-nav">
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="con-in">';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                 echo'<form action="/mirror project/seacrh.php" method="get" style="display:flex; gap:10px;">
                    <input type="text" name="seacrh" id="search" placeholder="Search a everthing">
                    <button class="btn btn1" type="submit" >search</button>
                   <p>welcome to <br> ' . $_SESSION['username'] . '</p>
                    <a href="logout.php" ><button class="btn btn btn4" type="button">logout</button></a>
          
            
                </form>';
            }else{
                    echo '<form action="/mirror project/seacrh.php" method="get">
                    <input type="text" name="seacrh" id="search" placeholder="Search a everthing">
                    <button class="btn btn1" type="submit">search</button>
                </form>
                <a href="login.php" ><button class="btn btnn btn2" type="button">Login</button><a>
                <a href="signup.php" ><button class="btn btnn btn3" type="button">Signup</button></a>
            </div>';
            }
        echo '</div>
    </header>

     

</body>
</html>';

?>