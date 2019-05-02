<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radiant-contact</title>

    <link href="../CSS/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav class="nav-bar top-nav flex-row"><!-- Contains the navigations bar-->
    <ul class="nav-list">
        <li class="nav-list-item"><a class="nav-link " href="index.php">Home</a></li>
        <li class="nav-list-item"><a class="nav-link" href="eat.php">Eat</a></li>
        <li class="nav-list-item"><a class="nav-link" href="sleep.php">Sleep</a></li>
        <li class="nav-list-item"><a class="nav-link" href="meet.php">Meetings</a></li>
        <li class="nav-list-item"><a class="nav-link" href=""><i class="currentPage">Contact</i></a></li>
        <li class="nav-list-item"><a class="nav-link" href="">shop</a></li>
    </ul>
</nav>

<div id="top-section" style="height: 650px">
    <img src="../images/bright.jpg" alt="Image of a nice looking bedroom" title="Radiant Ochre bedroom" class="top-image">
    <div id="contact-container" class="flex-column "  style="position:absolute;top:8%;left:5%;background: rgba(31, 30, 30, 0.91);color: white;">
        <h1 class="orange-font-color center-text">CONTACT US</h1>
        <div class="contact-content-container" style="width:100%">
            <div  id="contact-details" style="background-color: inherit">
                Let us know how to help/collaborate/do business via the contacts below.<br/> We are very friendly people.
                You will receive a response as soon as possible.
                <h3>Contact Details</h3>
                <p>Tel: +250785774412</p>
                <p> Email: radiantcontact@rochre.com</p>
                <p>Address: 245 Avenue, Kigali, Rwanda</p>
            </div>
            <div class="flex-column flex-column-center" style="background-color: inherit">
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

</div>
<!-- Footer section--->
<div class="nav-bar flex-row">
    <span class="white-text" style="justify-self: flex-start;margin:20px">&copy Radiant Ochre 2019</span><span style="margin:20px"><a href="#" class="white-text" style="text-decoration: none;">Back to top</a></span>
</div>


<!--script-->
<script src="../JS/main.js"></script>

</body>
</html>