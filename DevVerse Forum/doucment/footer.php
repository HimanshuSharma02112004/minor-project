<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

footer {
    background-color: #fffaf2;
    color: black;
    height: 500px;
    width: 100%;


}

footer .upper {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 74px 0px 0px 80px;
    margin: 200px 0px 0px 0px;
}

footer .upper .description {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

footer .upper .description .icon {
    display: flex;
    gap: 22px;

    padding: 20px 0px 0px 0px;
}

footer .upper .description .icon img {
    height: 35px;
    width: 35px;
    border: 2px solid black;
    border-radius: 50%;

}

footer .upper .link {
    padding: 0px 0px 0px 100px;
    display: flex;
    flex-direction: column;

}

footer .upper .link ul li {
    list-style: none;
    padding: 20px 0px 0px 0px;
    font-size: 18px;
}

footer .upper .link a {
    color: black;
    text-decoration: none;

}

footer .upper .serv {
    padding: 0px 0px 0px 85px;
}

footer .upper .serv a {
    color: black;
    text-decoration: none;
}

footer .upper .serv ul li {
    list-style: none;
    padding: 20px 0px 0px 0px;
    font-size: 18px;

}

footer .upper .contant ul li {
    list-style: none;
    padding: 20px 0px 0px 0px;
    font-size: 15px;
}


footer .foot2 {
    height: 106px;
    width: 100%;
    background-color: #f3e8d8;
    margin: 100px 0px 0px 0px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 100px;
}

footer .img img {
    height: 35px;
    border: 2px solid black;
    border-radius: 20px;
    margin: 10px 0px 0px 0px;
}

footer .img {
    display: flex;
    padding: 30px 0px 0px 200px;
}

footer .foot2 .img .conta {
    padding: 0px 0px 0px 30px;
}

footer .foot2 .input {
    margin: 30px 0px 0px 0px;

}

footer .foot2 .input input {
    height: 45px;
    width: 400px;
    font-size: 15px;
    padding: 0px 0px 0px 20px;
}

footer .foot2 .input input::placeholder {
    font-size: 15px;
    padding: 0px 0px 0px 20px;
}

footer .foot2 .input button {
    height: 45px;
    width: 150px;
    background-color: black;
    color: white;
    font-size: 20px;
    font-weight: 200;
}

footer .end {
    height: 72px;
    width: 100%;
    background-color: black;
    color: white;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 400px;
}

footer .end p {
    padding: 24px 0px 0px 194px;
}

footer .end a {
    color: white;
    text-decoration: none;
}

footer .end ul {
    display: flex;
    padding: 2px 0px 0px 75px;
}

footer .end ul li {
    list-style: none;
    padding: 20px;
}

</style>
<body>
        <footer>
        <div class="upper">
            <div class="description">
                <h1>All Cageiers</h1>
                <p>HTML and CSS are essential web technologies, but technically HTML is a markup language and CSS is a
                    stylesheet language, not programming languages.</p>
                <div class="icon">
                    <img src="image/facebook.png" alt="">
                    <img src="image/instagram.png" alt="">
                    <img src="image/github.png" alt="">
                    <img src="image/linkedin.png" alt="">
                </div>
            </div>
            <div class="link">
                <h1>Quick Links</h1>
                <ul>
                    <a href="/mirror project/index.php">
                        <li>Home</li>
                    </a>
                    <a href="about.php">
                        <li>About</li>
                    </a>
                    <a href="service.php">
                        <li>Service</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>

            <div class="serv">
                <h1>Our Services</h1>
                <?php
                $sql = "SELECT cat_id , cat_tittle FROM `categary` limit 5";
                $result = mysqli_query($conn , $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $cattittle = $row['cat_tittle'];
                    $catid = $row['cat_id'];
                    echo ' <ul>
                    <a href="thread.php?catid= ' .  $catid .' ">
                        <li>' . $cattittle . '</li>
                    </a>
                    
                </ul>';
                }
                ?>
            </div>
            <div class="contant">
                <h1>Contact Us</h1>
                <ul>
                    <li>Phone Number : 88888888888</li>
                    <li>Email : himanflkfn@gmail.com</li>
                </ul>

            </div>
        </div>
        <div class="foot2">
            <div class="img">
                <img src="image/email.png" alt="">
                <div class="conta">
                    <h1>Subscribe to Our Newsletter</h1>
                    <p>Stay updated with our latest language</p>
                </div>
            </div>
            <div class="input">
                <input type="text" name="search" id="search" placeholder="search Categaries">
                <button>search</button>
            </div>
        </div>
        <div class="end">
            <p>2026 Elegance. All Rights Reserved.</p>
            <ul>
               <a href=""><li>Privacy Policy</li></a>
               <a href=""><li>Terms & Conditions</li></a>
               <a href=""><li>Sitemap</li></a> 
            </ul>
        </div>
    </footer>
</body>
</html>