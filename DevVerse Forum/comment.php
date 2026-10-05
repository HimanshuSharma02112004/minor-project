<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thread page</title>
    <link rel="stylesheet" href="jj.css">
</head>
<style>

*{
    margin: 0;
    padding: 0;
}

main{
   
    height: 700px;
     width: 100%;
    
   
}

main .cat-desc{
   height: 600px;
    width: 1269px;
    background-color: beige;
    margin: 40px 0px 0px 126px;
    border-radius: 10px;
}

main .cat-desc .contnt{
    height: 450px;
}

main .cat-desc .contnt h1{
    padding: 20px 0px 0px 60px;
    font-size: 50px;
}

main .cat-desc .contnt p{
    overflow-wrap: break-word;
    font-size: 18px;
    padding: 20px 25px 0px 60px;
}

  main .cat-desc .info p{
        padding: 20px 0px 0px 60px;
  }

   main .cat-desc .info h3{
        padding: 20px 0px 0px 60px;
  }

  .main2 {
    border:2px solid black;
    width: 85%;
        height: 420px;
     background-color:#f5f5dc;
     margin: 0px 0px 0px 109px;
    display:flex;
     flex-direction: column;
     gap:40px;
     text-align: center;
    padding:20px;
  }

  .main2 h1{
    font-size:60px;
  }
  .main2 .form {
    display:flex;
     flex-direction: column;
      justify-content: center;
    align-items: center;
    gap:40px;
  }

  .main2 .form input{
    height:70px;
    width: 70%;
    border-radius:40px;
    font-size:20px;
    padding:0px 0px 0px 20px ;
  }

  .main2 .form input::placeholder{
    font-size:20px; 
    text-align:center;
  }

  .main2 .form textarea{
     height:70px;
    width: 70%;
    padding:10px 0px 0px 20px ;
     font-size:20px;
  }

  .main2 .form .btnn{
    height:50px;
    width: 70%;
    border-radius:40px;
    font-weight:bold;
    font-size:20px;
    background-color:green;
    color:white;
  }

  .main2 .alert-main{
     height: 200px;
    width: 108%;
  }

  .main2 .alert-main .alert{
     align-items: center;
    margin: 58px 0px 0px 0px;
    font-size: 20px;
  }


 .main3{
    display: flex;
    flex-direction: column;
    height:auto;
    width: 80%;
    margin: 150px 0px 0px 126px;
    overflow-wrap: break-word;

}

.main3 .hh{
  padding: 40px 0px 0px 0px ;
}

  .main3 .img img{
    height:50px;
    margin: 5px 0px 0px 0px;
  }

  .main3 .ques{
    margin:0px 0px 0px 10px ;
  }

  .main3 .ques h3{
      margin:6px 0px 0px 0px;
      cursor: pointer;
      
  }

  .main3 .ques h3 a{
   
    text-decoration: none;
  }


  .main3 .ques p{
    margin:6px 0px 0px 0px ;
  }

   .main3 .alert-main{
   height: 200px;
    width: 108%;
    background-color: #f5f5dc;
  }
  .main3 .alert-main .alert{
  align-items: center;
  margin: 58px 0px 0px 372px;
   

</style>
<body>
  <?php include 'doucment/connect.php'; ?>
     <?php include 'doucment/header.php'; ?>
    
     
   <main>
      <div class="cat-desc">
        <?php
        $threadid = $_GET['threadid'];
         $sql = "SELECT * FROM `thread` WHERE thread_id='$threadid'";
         $result = mysqli_query($conn , $sql);
         while($row = mysqli_fetch_assoc($result)){
            $thtittle = $row['thread_tittle'];
            $thdesc = $row['thread_description'];
         }
        ?>
        <div class="contnt">
          <h1><?php echo $thtittle; ?></h1>
          <p><?php echo $thdesc; ?></p>
          </div>
          <hr>
          <div class="info">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo impedit voluptatem fugit ipsa rem alias voluptatibus hic! Odio numquam molestias eius fugiat consequuntur, quo quasi iste alias iure, eveniet dolore?</p>
           <h3>Posted By : Himanshu Sharma</h3>
          </div>
      </div>
</main>

<?php
 $showalert = false;
 $method = $_SERVER['REQUEST_METHOD'];
 if($method == "POST"){
$desc = $_POST['desc'];
             $thname = str_replace("<", "&lt;", $desc);
            $thname = str_replace(">", "&gt;", $desc);
            $thname = str_replace(",", "&gt;", $desc);
$userid = $_POST['user_id'];
$sql = "INSERT INTO `comment` ( commment_description , thread_id , comment_by) VALUES ( '$desc' , '$threadid' , '$userid')";
$result = mysqli_query($conn , $sql);
if($result){
  $showalert = true;
 
}
 }
?>

<main class="main2">
  <h1>Question</h1>
  <?php
  if(isset($_SESSION['loggedin']) && $_SESSION == true){
    echo ' <form action="' .  $_SERVER['REQUEST_URI'] . '" method="post" class="form">
    <textarea class="textarea" name="desc" id=""></textarea>\
  <input type="hidden" name="user_id" value="' . $_SESSION["user_id"] . '" >
    <button  class="btn btnn "type="submit"> Post Problem</button>
  </form>';
    }
    else{
       echo '<div class="alert-main">
          <div class="alert">
          <h1>YOUR ARE NOT LOGIN </h1>
          <P>PLEASE LOGIN YOUR ACCOUNT AND POST YOUR COMMENT. </P>
        </div>
      </div>';
    }
  ?>
</main>
   
   <main class="main3">
    <?php
    $threadid = $_GET['threadid'];
    $sql = "SELECT * FROM `comment` WHERE thread_id='$threadid'";
     $result = mysqli_query($conn , $sql);
     $noresult = true;
         while($row = mysqli_fetch_assoc($result)){
          $noresult = false;
          $comdesc = $row['commment_description'];
           $commentby = $row['comment_by'];
           $commentdt = $row['comment_dt'];
        $sql2 = "SELECT * FROM `users` WHERE user_id=$commentby";
        $result2 = mysqli_query($conn , $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $user = $row2['username'];
      echo '<div class="hh">
      <div class="img">
           <img src="image/user.png" alt="">
       </div>
       <div class="ques">
         <h2> ' . $user  . ' at ' . $commentdt . '  </h2>
        <p>' .  $comdesc . ' </p>
       </div>
       </div>';
         }

          if($noresult){
       echo '<div class="alert-main">
          <div class="alert">
          <h1>NO COMMENT FOUND </h1>
          <P>YOU ARE FIRST PERSON PLEASE ASK THE QUESTION</P>
        </div>
      </div>';
     }
    ?>
</main>
  

<?php include 'doucment/footer.php'; ?>

</body>
</html>