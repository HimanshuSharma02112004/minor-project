<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categary Page</title>
    
</head>

<style>
    * {
    margin: 0;
    padding: 0;
}

.container{
    height:600px;
    width: 100%;
}
 
.container .search{
 margin: 54px 0px 0px 220px;
}

.container .search a h1{
    font-size:35px;
    font-weight:bold;
    color:black;
}

.container .search p{
    font-size:25px;
}




</style>

<body>
    <?php include 'doucment/connect.php'; ?>
 <?php include 'doucment/header.php'; ?>
      
  <div class="container">
    <?php
    $query = $_GET['seacrh'];
    $sql = "SELECT * FROM `thread` WHERE MATCH (thread_tittle , thread_description) AGAINST ('$query')";
    $result = mysqli_query($conn , $sql);
    while($row = mysqli_fetch_assoc($result)){
        $thtittle = $row['thread_tittle'];
        $thdesc = $row['thread_description'];
        $threadid = $row['thread_id'];
        echo '<div class="search">
        <a href="thread.php?threadid=' . $threadid . '"><h1>' . $thtittle . '</h1></a>
        <p>' . $thdesc . '</p>
    </div>';
    }
    ?>
  </div>
      
     <?php include 'doucment/footer.php'; ?>
</body>

</html>