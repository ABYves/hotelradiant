<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radiant-sleep</title>

    <link href="../CSS/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
    <body>
    <nav class="nav-bar top-nav flex-row"><!-- Contains the navigations bar-->
        <ul class="nav-list">
            <li class="nav-list-item"><a class="nav-link " href="index.php">Home</a></li>
            <li class="nav-list-item"><a class="nav-link" href="eat.php">Eat</a></li>
            <li class="nav-list-item"><a class="nav-link" href="sleep.php"><i class="currentPage">Sleep</i></a></li>
            <li class="nav-list-item"><a class="nav-link" href="meet.php">Meetings</a></li>
            <li class="nav-list-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-list-item"><a class="nav-link" href="Shop\HTML\index.php">shop</a></li>
        </ul>
    </nav>
    <div id="top-section" >
        <img src="../images/suite-bedroom.jpg" alt="Image of a nice looking bedroom" title="Radiant Ochre bedroom" class="top-image">
        <p class="top-paragraph"><span class="white-text" style="font-size: 40px">LIKE KINGS AND QUEENS</span><br/> Enjoy your Sleep!</p>
    </div>
    <!--this section contains the details of the bedroom-->

    <h1 class="orange-font-color center-text " >OUR BEDROOMS</h1>
    <div id="bedrooms-container" class="grid-column-2">
       <div class="bedroom-description flex-column flex-column-center">
           <h2> Double-Beds</h2>
            <p class="center-text">Ideal for your family or group when you come visiting. The beds are comfortable, large enough. The washrooms are breathtaking.</p>
            <h3 class="center-text">Price: From Frw 40,000.00 </h3>
            <a href="sign.php" class="center-text"><button class="learn-more-button" > Book Now</button></a>
        </div>
        <img src="../images/two-bed.jpg" alt="Our double bed" class="grid-image-full">
        <img src="../images/honey-moon.jpg" alt="Our Honeymoon bedroom text" class="grid-image-full">
        <div class="bedroom-description flex-column flex-column-center">
            <h2> Honey Moon</h2>
            <p class="center-text">The scenery is breathtaking. It sets the mood for all your activities. You receive very special attention to ensure you get the best time.</p>
            <h3 class="center-text">Price: From Frw 100,000.00  </h3>
            <a href="sign.php" class="center-text"><button class="learn-more-button" > Book Now</button></a>
        </div>
        <div class="bedroom-description flex-column flex-column-center">
            <h2>Standard Beds</h2>
            <p class="center-text">Comfy, cozy and breathtaking are the words to describe this bedrooms. Come try out for youself.</p>
            <h3 class="center-text">Price: From Frw 25,000.00  </h3>
            <a href="sign.php" class="center-text"><button class="learn-more-button" > Book Now</button></a>
        </div>
        <img src="../images/Bedroom_standard.jpg" alt="Our double bed" class="grid-image-full">

    </div>
    <!--The div below will contain the contact form-->
    <div id="contact-container" class="flex-column">
        <h1 class="orange-font-color center-text">CONTACT US</h1>
        <div class="contact-content-container" style="width:100%">
            <div  id="contact-details">
                Let us know how to help/collaborate/do business via the contacts below.<br/> We are very friendly people.
                You will receive a response as soon as possible.
                <h3>Contact Details</h3>
                <p>Tel: +250785774412</p>
                <p> Email: radiantcontact@rochre.com</p>
                <p>Address: 245 Avenue, Kigali, Rwanda</p>
            </div>
            <div class="flex-column flex-column-center">
                <div id="message"></div> <!--Will contain the message if a user submits the form-->
                <p>Drop us a message here and we will respond as soon as possible.</p>
                <form action="message.php" method="post">
                    <input style=" border-style: none; background-color: white; border-radius: 20px; height: 25px;width: 300px; text-align: center;" type="text" placeholder="Your name" name="name" required><br/>
                  <input style=" border-style: none; background-color: white; border-radius: 20px;  height: 25px;width: 300px; text-align: center;" type="email" placeholder="Your email address" name="email" required><br/>
                 <input style=" border-style: none; background-color: white; border-radius: 20px;  height: 25px;width: 300px; text-align: center;" type="number" name="phone" placeholder="phone number"><br/>
                    <div  style="background-color: inherit"> <span style="float:left;margin-top: 15px; "></span><textarea style=" border-style: none; background-color: white; border-radius: 20px; width: 300px; text-align: center;" placeholder="What do you want to let us know?" name="message"></textarea><br/>
                    </div>
                    <input style="border-style: none; width: 300px; text-align: center;" type="submit" class="learn-more-button">
                </form>

            </div>
        </div>
    </div>
    <!-- Footer section--->
    <div class="nav-bar flex-row">
        <span class="white-text" style="justify-self: flex-start;margin:20px">&copy Radiant Ochre 2019</span><span style="margin:20px"><a href="#" class="white-text" style="text-decoration: none;">Back to top</a></span>
    </div>
    <!--script-->
    <script src="../JS/main.js"></script>

</body>
</html>