<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
      .container {
           background-image: url("images/banner/about.jpg");
           background-repeat: no-repeat;
           background-size: cover;
        }
        body {
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: white;
 
}

.deconstructed {
  position: relative;
  margin: auto;
  height: 0.91em;
  color: transparent;
  font-family: 'Cambay', sans-serif;
  font-size: 5vw;
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.03em;
}

.deconstructed > div {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: white;
  pointer-events: none;
}

.deconstructed > div:nth-child(1) {
  -webkit-mask-image: linear-gradient(white 25%, transparent 25%);
  mask-image: linear-gradient(black 25%, transparent 25%);
  animation: deconstructed1 5s infinite;
}

.deconstructed > div:nth-child(2) {
  -webkit-mask-image: linear-gradient(transparent 25%, white 25%, white 50%, transparent 50%);
  mask-image: linear-gradient(transparent 25%, white 25%, white 50%, transparent 50%);
  animation: deconstructed2 5s infinite;
}

.deconstructed > div:nth-child(3) {
   -webkit-mask-image: linear-gradient(transparent 50%, white 50%, white 75%, transparent 75%);
  mask-image: linear-gradient(transparent 50%, white 50%, white 75%, transparent 75%);
  animation: deconstructed3 5s infinite;
}

.deconstructed > div:nth-child(4) {
   -webkit-mask-image: linear-gradient(transparent 75%, white 75%);
  mask-image: linear-gradient(transparent 75%, white 75%);
  animation: deconstructed4 5s infinite;
}

@keyframes deconstructed1 {
  0% {
    transform: translateX(100%);
  }
  26% {
    transform: translateX(0%);
  }
  83% {
    transform: translateX(-0.1%);
  }
  100% {
    transform: translateX(-120%);
  }
}

@keyframes deconstructed2 {
  0% {
    transform: translateX(100%);
  }
  24% {
    transform: translateX(0.5%);
  }
  82% {
    transform: translateX(-0.2%);
  }
  100% {
    transform: translateX(-125%);
  }
}

@keyframes deconstructed3 {
  0% {
    transform: translateX(100%);
  }
  22% {
    transform: translateX(0%);
  }
  81% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-130%);
  }
}

@keyframes deconstructed4 {
  0% {
    transform: translateX(100%);
  }
  20% {
    transform: translateX(0%);
  }
  80% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-135%);
  }
}
.flex-container {
  display: flex;
  flex-direction:row;
  font-size: 25px;
  text-align: left;
}

.flex-item-left {
  background-color: #f1f1f1;
  padding: 30px;
  flex: 70%;
  font-family: 'Brush Script MT', cursive;
  font-weight:0;
}

.flex-item-right {
  background-image:url("images/product/showroom1.jpg");
  padding: 20px;
  flex: 30%;
  background-repeat: no-repeat;
           background-size: cover;
           width: 100%;
  height: auto;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction:column;
  }
}
        </style>

</head>
<body>
 <div class="container">
 <br>
        <br>
        dadadsa
        <br>
        dsadad
        <br>
        dsad
        <br>
        <br>
      

    <div class="deconstructed">
    Celebrate Akshaya Tritiya
  <div>Celebrate Akshaya Tritiya</div>
  <div>Celebrate Akshaya Tritiya</div>
  <div>Celebrate Akshaya Tritiya</div>
  <div>Celebrate Akshaya Tritiya</div>
  <br>
        <br>
        <br>
        dadadsa
        <br>
        dsadad
        <br>
        dsad
        <br>
        <br>
</div>
    
</div>
<div class="container-fluid">
<div class="flex-container">
  <div class="flex-item-left"><p>Tanishq has emerged as India’s fastest growing jewellery brand and is a name which signifies superior craftsmanship, exclusive designs and superlative product quality. The term Tanishq was coined by Mr. Xerxes Desai by marrying the words ‘Tan’ meaning body and ‘Nishk’ meaning a gold ornament.
<br>
The journey of Tanishq started with the launch of 18k gold watches studded with precious stones in 1994. But, it soon grew into a 22K jeweller who presented an exquisite range of gold and diamond jewellery while striking a perfect balance between traditional appeal and contemporary charm. The brand perfectly understands the ethos of the current Indian jewellery market and keeps evolving along with its changing demands and preferences.
<br>

Following the line of ethical practice further, adequate policies are in place for their karigars and they are well taken care of with benefits like health care and financial aid. It is also the only jeweller in India with a state-of-art factory in Hosur, Tamil Nadu and takes utmost care to ensure that it complies with labour laws and environmental standards. There are 3 other units in Dehradun, Pantnagar and Sikkim as well.
<br>
With retail sales of over Rs. 18600 crores in the last financial year, Tanishq continues to rule the jewellery segment in India.</p></div>
  <div class="flex-item-right"></div>
</div>
</div>
</body>
</html>