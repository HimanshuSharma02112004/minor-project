<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

.slider {
    width: 100%;
    height: 600px;
    overflow: hidden;
}


.slides {
    display: flex;
    width: 300%;
    height: 100%;
    animation: slide 12s infinite;
}

.slide {
    width: 33.333%;
    height: 100%;
    flex-shrink: 0;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

@keyframes slide {

    0% {
        transform: translateX(0);
    }

    30% {
        transform: translateX(0);
    }

    35% {
        transform: translateX(-33.333%);
    }

    65% {
        transform: translateX(-33.333%);
    }

    70% {
        transform: translateX(-66.666%);
    }

    95% {
        transform: translateX(-66.666%);
    }

    100% {
        transform: translateX(0);
    }
}

/* Mobile */
@media (max-width: 600px) {
    .slider {
        height: 350px;
    }
}


</style>
<body>
   
<div class="slider">

        <div class="slides">

            <div class="slide">
                <img src="image/image1.jpg" alt="Slide 1">
            </div>

            <div class="slide">
                <img src="image/image2.jpg" alt="Slide 2">
            </div>

            <div class="slide">
                <img src="image/image4.jpg" alt="Slide 3">
            </div>

        </div>

    </div>
   
</body>
</html>