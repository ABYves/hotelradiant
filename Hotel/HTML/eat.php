<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radiant-eat</title>
    <link href="../CSS/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <nav class="nav-bar top-nav flex-row"><!-- Contains the navigations bar-->
        <ul class="nav-list">
            <li class="nav-list-item"><a class="nav-link " href="index.php">Home</a></li>
            <li class="nav-list-item"><a class="nav-link" href="eat.php"><i class="currentPage">Eat</i></a></li>
            <li class="nav-list-item"><a class="nav-link" href="sleep.php">Sleep</a></li>
            <li class="nav-list-item"><a class="nav-link" href="meet.php">Meetings</a></li>
            <li class="nav-list-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-list-item"><a class="nav-link" href="Shop\HTML\index.php">shop</a></li>
        </ul>
    </nav>
    <div id="top-section" >
        <img src="../images/burrito.jpg" alt="Image of a nice looking bedroom" title="Radiant Ochre bedroom" class="top-image">
        <p class="top-paragraph"><span class="white-text" style="font-size: 40px">EAT THE BEST FOOD</span><br/> Enjoy exquisite drinks</p>
    </div>
    <h1 class="orange-font-color center-text">OUR RESTAURANTS</h1>
    <div class="main-description  grid-column" style="height:300px;grid-column-gap:0 ">
        <div id="eat" class="food-description center-text">
            <h2>COFFEE BAR</h2>
            <p>Brewed by 1st star baristers, you will enjoy the stimulating drink that is native in our continent. Get other refreshing and stimulating drinbks from this bar. </p>

        </div>
        <div id="sleep" class="food-description-darker center-text">
            <h2>NYAMZONE</h2>
            <p>Enjoy traditional African cuisine from this place while being enterntained by the best Benga music.
                Delicacies include: roasted beef, pork, chicken & goat; traditional vegetables; fresh lake fish, chips.
                All varieties of drinks served!</p>

        </div>
        <div id="meet" class="food-description center-text">
            <h2> JACK</h2>
            <p>Get a taste of everything here at a very affordable price. Perfect place for a date.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aut. Acusandae sequi ullam voluptate!
            </p>

        </div>
    </div>
    <!--section for offerings-->
    <h1 class="orange-font-color center-text">OFFERINGS</h1>
    <div class="grid-column-2 grid-row-gap-20 offerings-container">
        <img  src="../images/breakfast-buffet.jpg" alt="Breakfast" title="Breakfast Buffet" class="grid-image-full">
        <div class="other-services-item center-text">
            <h2>Buffet </h2>
            <p>Our buffets are a great way to get a taste of everything. We provide lunch buffets, dinner buffets, breakfast buffets and customized buffets</p>

        </div>
        <img  src="../images/outside-cat.jpg" alt="Breakfast" title="Breakfast" class="grid-image-full">
        <div class="other-services-item center-text">
            <h2>Outside Catering</h2>
            <p> If you need food for your event at your premises, we are just a call away. Our outside catering department is up to the task to ensure yo enjoy the same great experience as if you were at our hotel </p>
        </div>
   </div>
    <!--section contains the pictorial, will be an image slider in the future-->
    <div id="pictorial-container">
        <h1 class="orange-font-color center-text">PICTORIAL</h1>
        <h3 class="center-text white-text">Take a look at some of the dishes</h3>
        <div class="grid-column" id="pictorial-content-container">
            <img src="../images/food-1-Pictorial.jpg" class="grid-image-full" alt="Delicious Food">
            <img src="../images/food-drink-pictorial.jpg" class="grid-image-full" alt="Delicious Food">
            <img src="../images/drink.jpg" class="grid-image-full" alt="Drink">
        </div>

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