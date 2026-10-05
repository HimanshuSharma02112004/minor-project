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
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CONTAINER */
.container {
    display: flex;
    width: 850px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0,0,0,0.4);
    animation: fadeIn 1.5s ease;
}

/* LEFT INFO */
.contact-info {
    width: 40%;
    background: rgba(0,0,0,0.3);
    padding: 40px;
    color: white;
    animation: slideLeft 1.5s ease;
}

.contact-info h2 {
    margin-bottom: 20px;
}

.contact-info p {
    margin-bottom: 15px;
    font-size: 14px;
}

.contact-info i {
    margin-right: 10px;
    color: #00f7ff;
}

/* RIGHT FORM */
.contact-form {
    width: 60%;
    padding: 40px;
    animation: slideRight 1.5s ease;
}

.contact-form h2 {
    margin-bottom: 20px;
    color: white;
}

/* INPUT */
.input-box {
    position: relative;
    margin-bottom: 25px;
}

.input-box input,
.input-box textarea {
    width: 100%;
    padding: 12px;
    background: transparent;
    border: none;
    border-bottom: 2px solid #aaa;
    color: white;
    outline: none;
    resize: none;
}

.input-box label {
    position: absolute;
    left: 0;
    top: 10px;
    color: #aaa;
    transition: 0.3s;
}

/* FLOAT LABEL */
.input-box input:focus ~ label,
.input-box input:valid ~ label,
.input-box textarea:focus ~ label,
.input-box textarea:valid ~ label {
    top: -12px;
    font-size: 12px;
    color: #00f7ff;
}

/* BUTTON */
button {
    background: #00f7ff;
    border: none;
    padding: 12px 25px;
    color: black;
    font-weight: bold;
    cursor: pointer;
    border-radius: 25px;
    transition: 0.3s;
}

button:hover {
    background: white;
    transform: scale(1.05);
}

/* ANIMATIONS */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideLeft {
    from { transform: translateX(-100px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideRight {
    from { transform: translateX(100px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        width: 90%;
    }

    .contact-info, .contact-form {
        width: 100%;
    }
}

     </style>
    <title>Contact page</title>
  </head>
  <body>
      
    

<div class="container">

    <!-- LEFT -->
    <div class="contact-info">
        <h2>Contact Info</h2>
        <p><i class="fas fa-map-marker-alt"></i> India</p>
        <p><i class="fas fa-envelope"></i> info@programminghub.com</p>
        <p><i class="fas fa-phone"></i> +91 9876543210</p>
        <p>We are here to help you learn coding easily.</p>
    </div>

    <!-- RIGHT -->
    <div class="contact-form">
        <h2>Send Message</h2>

        <form>
            <div class="input-box">
                <input type="text" required>
                <label>Full Name</label>
            </div>

            <div class="input-box">
                <input type="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
                <textarea rows="4" required></textarea>
                <label>Your Message</label>
            </div>

            <button type="submit">Send</button>
        </form>
    </div>

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