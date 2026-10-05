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


  
 



.heading {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
}

main {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    

}

main .con-card {
    height: 550px;
    width: 350px;
    border: 2px solid black;
    border-radius: 15px;
    margin: 39px 0px 0px 103px;
   
}

main .con-card .card-img img {
    height: 213px;
    width: 330px;
    object-fit: cover;
    margin: 9px 0px 0px 7px;
    border-radius: 10px;

}

main .con-card .card-content {
    margin: 20px 0px 0px 15px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    overflow-wrap: break-word;
}

main .con-card .card-content h1 {
    font-size: 40px;
}

main .con-card .card-content p {
    font-size: 22px;
    margin: 20px 0px 0px 0px;
}




main .con-card .card-button {
    border: 2px solid black;
    margin: 32px 0px 0px 12px;
    background-color: blue;
    height: 44px;
    width: 321px;
    border-radius: 20px;
    color: white;
    font-weight: 700;
    font-size: 20px;
    cursor: pointer;
}

main .con-card a .card-button {
  color:white;
   text-decoration: none;
}

main .con-card .card-button:hover {
    background-color: rgb(74, 0, 144);

}





</style>

<body>
    <?php include 'doucment/connect.php'; ?>
 <?php include 'doucment/header.php'; ?>
    <?php include 'doucment/slider.php'; ?>
   
  
    <div class="heading">
        <h1>Category</h1>
    </div>

       <main>
          <?php
      $sql = "SELECT * FROM `categary`";
    $result = mysqli_query($conn , $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catid = $row['cat_id'];
        $catittle = $row['cat_tittle'];
        $catdesc = $row['cat_description'];
              echo '<div class="con-card">
            <div class="card-img">
                <img src="image/image1.jpg" alt="">
            </div>
            <div class="card-content">
                <h2>' . $catittle . '</h2>
                <p>' .substr($catdesc , 0 , 150)  . '.......</p>
            </div>
            <a  href="thread.php?catid=' . $catid . '"><button class="card-button">  Veiw Threads</button></a>
        </div>';
    }
     ?>

    </main>
      
     <?php include 'doucment/footer.php'; ?>
</body>

</html>