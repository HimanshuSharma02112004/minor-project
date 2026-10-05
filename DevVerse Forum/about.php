<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <style>
        


/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* BODY */
body {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: white;
}

/* HEADER */
header {
    text-align: center;
    padding: 50px 20px;
    animation: fadeDown 1.5s ease;

}

header h1 {
    font-size: 40px;
    margin-bottom: 10px;
    color: white;
}

header p {
    font-size: 18px;
    color: #ddd;
}

/* SECTION */
.about {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 40px;
}

/* CARD */
.card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    margin: 20px;
    padding: 30px;
    border-radius: 15px;
    width: 300px;
    text-align: center;
    transition: 0.4s;
    animation: fadeUp 1.5s ease;
}

.card:hover {
    transform: translateY(-10px) scale(1.05);
    background: rgba(255, 255, 255, 0.2);
}

/* ICON */
.card i {
    font-size: 40px;
    margin-bottom: 15px;
    color: #00d4ff;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 20px;
    background: #111;
}

/* ANIMATIONS */
@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-50px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
}

 


     </style>
    <title>About page</title>
  </head>
  <body>

     
     <div class="container">
        <header>
    <h1>About Our Programming Website</h1>
    <p>Learn, Build and Grow with Code</p>
</header>

<section class="about">

    <div class="card">
        <i class="fas fa-code"></i>
        <h2>Who We Are</h2>
        <p>We are a platform dedicated to teaching programming languages like HTML, CSS, JavaScript, and PHP.</p>
    </div>

    <div class="card">
        <i class="fas fa-laptop-code"></i>
        <h2>Our Mission</h2>
        <p>Our mission is to make coding easy and accessible for everyone with practical examples and projects.</p>
    </div>

    <div class="card">
        <i class="fas fa-rocket"></i>
        <h2>What We Offer</h2>
        <p>We provide tutorials, projects, and real-world coding practices to help you become a developer.</p>
    </div>

</section>


     </div>

     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>