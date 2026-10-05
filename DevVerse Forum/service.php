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
    font-family: 'Segoe UI', sans-serif;
}

/* BODY */
body {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: white;
}

/* HEADER */
header {
    text-align: center;
    padding: 60px 20px;
    animation: fadeDown 1.5s ease;
}

header h1 {
    font-size: 40px;
    margin-bottom: 10px;
}

header p {
    color: #ccc;
}

/* SERVICES GRID */
.services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    padding: 40px 10%;
}

/* CARD */
.service-card {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    transition: 0.4s;
    animation: fadeUp 1.5s ease;
    position: relative;
    overflow: hidden;
}

/* GLOW EFFECT */
.service-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent, rgba(0,247,255,0.4), transparent);
    opacity: 0;
    transition: 0.5s;
}

.service-card:hover::before {
    opacity: 1;
}

/* HOVER */
.service-card:hover {
    transform: translateY(-12px) scale(1.05);
}

/* ICON */
.service-card i {
    font-size: 40px;
    margin-bottom: 15px;
    color: #00f7ff;
}

/* TEXT */
.service-card h2 {
    margin-bottom: 10px;
}

.service-card p {
    color: #ccc;
    font-size: 14px;
}

/* BUTTON */
.service-card button {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background: #00f7ff;
    color: black;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.service-card button:hover {
    background: white;
}

/* ANIMATIONS */
@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    header h1 {
        font-size: 28px;
    }
}
    </style>
    <title>Hello, world!</title>
  </head>
  <body>

 
     <header>
    <h1>Our Programming Services</h1>
    <p>Learn, Build & Grow with Modern Technologies</p>
</header>

<section class="services">

    <div class="service-card">
        <i class="fas fa-code"></i>
        <h2>Web Development</h2>
        <p>Learn HTML, CSS, JavaScript and build modern responsive websites.</p>
        <button>Learn More</button>
    </div>

    <div class="service-card">
        <i class="fas fa-database"></i>
        <h2>Backend Development</h2>
        <p>Master PHP & MySQL to create dynamic and powerful web apps.</p>
        <button>Learn More</button>
    </div>

    <div class="service-card">
        <i class="fas fa-mobile-alt"></i>
        <h2>Responsive Design</h2>
        <p>Design mobile-friendly websites using Bootstrap and CSS frameworks.</p>
        <button>Learn More</button>
    </div>

    <div class="service-card">
        <i class="fas fa-project-diagram"></i>
        <h2>Projects</h2>
        <p>Work on real-world projects to gain practical coding experience.</p>
        <button>Learn More</button>
    </div>

</section>





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