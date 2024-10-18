<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page of GameZone</title>
        <link rel="stylesheet" href="Event.css">
        <script src="https://kit.fontawesome.com/0119a0d3c2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <img src="logo1.png" class="logo" alt="GameZone Logo">
                <nav>
                    <ul id="menuList">
                        <li><a href="HomePage.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="Event.php">Event</a></li>
                        <li><a href="sports.html">Sport</a></li>
                        <li><a href="New Register Form.html">Membership</a></li>
                        <li><a href="ruls.html">Rules</a></li>
                        <li><a href="contactUs.html">Contact</a></li>
                        <li><a href="login.html" class="login">Login</a></li>
                    </ul>
                </nav>
                <i class="fa-solid fa-bars menu-icon" onclick="togglemenu()"></i>
            </div>
            <main>
                <h1 style="text-align: center;">Event and News SportsClub</h1>
   
            
            <marquee behavior="scroll" direction="left">
                <a href="News.html" target="_blank" style="margin-right: 20px;">Cricket Tournament - October 23, 2025  |  </a>
                <a href="News.html" target="_blank" style="margin-right: 20px;">Volleyball Championship - September 28, 2024  |  </a>
                <a href="News.html" target="_blank" style="margin-right: 20px;">Membership Discount - October 22, 2024  |  </a>
                <a href="News.html" target="_blank" style="margin-right: 20px;">Team Selection - October 25, 2024  |  </a>
                <a href="News.html" target="_blank" style="margin-right: 20px;">Swimming Competition - November 5, 2024</a>
            </marquee>

            <section class="event-schedule">
                <h2>Our Event Schedule & Facilities</h2>
                <p>
                    At GameZone Club, we are committed to offering a wide range of sporting events and activities for all ages and skill levels. Our event schedule includes regular tournaments, training sessions, and social gatherings, ensuring that there’s always something exciting happening. 
                </p>
                <br>
                <p>
                    Our state-of-the-art facilities include fully equipped sports fields, indoor courts, a swimming pool, and a fitness center, designed to help you stay active and improve your skills. Whether you're participating in one of our organized events or simply enjoying a casual game, our club spaces are available for your convenience.
                </p>
                <br>
                <p>
                    Members can book courts and fields for personal use or training, participate in coaching sessions, or join scheduled events. Don’t forget to check our event calendar regularly to stay updated on upcoming tournaments and special events!
                </p>
                <br>
            </section>

            <section class="booking-form">
                <h2>Book Your Event</h2>
                <form action="submit_booking.php" method="post">

                    <label for="name">Name of Event:</label>
                    <input type="text" id="name" name="name" required placeholder="Event name">
                    
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Your Phone Number">
                    
                    <label for="date"> Date:</label>
                    <input type="date" id="event-date" name="event-date" required>
                    
                    <label for="booking-date">Booking Date:</label>
                    <input type="date" id="booking-date" name="booking-date" required>

                    <label for="area"> Booking place:</label>
                    <input type="text" id="place-name" name="place-name" required placeholder="Place name">
                    
                    <label for="buyer-name">Buyer Name:</label>
                    <input type="text" id="buyer-name" name="buyer-name" required placeholder="Buyer Name">
                    
                    <button type="submit" name="submit" id="submit">Book Now</button>
                </form>
            </section>

            <section class="sport-description">
                <h2>Hot News</h2>
            </section>

            <section class="sport-description">
                <div class="row">
                    <div class="column">
                        <br>
                        <p>
                            Join us for an exciting day of cricket at the GameZone Club's annual Cricket Tournament, taking place on October 23, 2025, at the Pallekale Ground. The event will kick off at 8:30 AM, bringing together players and fans for a thrilling showcase of talent and sportsmanship. Whether you're a seasoned player or a passionate supporter, come out to cheer for your favorite teams and enjoy a day filled with competitive spirit, camaraderie, and fun activities for all ages. Don't miss this chance to be part of an unforgettable cricketing experience!
                        </p>
                        
                        <a href="#">Register</a>
                    </div>
                    <div class="column">
                        <img src="g1.jpg" alt="Swimming Training" class="description-image">
                    </div>
                </div>
            </section>

            <div class="sport-description">
                <div class="row">
                    <div class="column">
                        <img src="vol2.jpg" alt="Swimming Image" class="description-image">
                    </div>
                    <div class="column">
                        <p>
                            On September 28, 2024, the atmosphere was electric as the annual volleyball tournament came to a thrilling conclusion. After a day filled with intense matches and breathtaking plays, the championship title was claimed by the "Star" team, who showcased remarkable teamwork and skillful strategy to secure 1st place. The "Lions" fought valiantly, finishing in a strong 2nd  place, while the "Revolution" team displayed impressive talent to take home the 3rd place trophy. The crowd erupted in cheers as the "Star" team lifted the trophy, celebrating not just their  success but also the spirit of sportsmanship and camaraderie that defined the event. It was a memorable day that showcased the best of volleyball talent and community spirit.

                        </p>
                       
                        <a href="#">Register</a>
                    </div>
                </div>
            </div>

             
            <section class="sport-description">
                <div class="row">
                    <div class="column">
                        <br>
                        <p>
                            Exciting news for all sports enthusiasts! From October 22, 2024, to January 1, 2025, we’re offering a fantastic 15% discount on membership fees at GameZone Club. This limited-time offer is the perfect opportunity to join our vibrant community and enjoy exclusive access to facilities, events, and activities. Whether you’re looking to enhance your skills or simply enjoy a friendly game, there’s something for everyone. Don’t miss out on this chance to save while diving into a world of sports and camaraderie—sign up and be part of the action today!
                        </p>
                        
                        <a href="#">Register</a>
                    </div>
                    <div class="column">
                        <img src="a2.jpg" alt=" Training" class="description-image">
                    </div>
                </div>
            </section>
            
            <div class="sport-description">
                <div class="row">
                    <div class="column">
                        <img src="4.jpg" alt=" Image" class="description-image">
                    </div>
                    <div class="column">
                        <p>
                            We are excited to announce the selection process for our new team, Team D! From October 25 to November 1, 2024, aspiring players will have the opportunity to showcase their skills and potentially join this dynamic new squad. Whether you’re a seasoned athlete or a passionate newcomer, this is your chance to shine and become part of our growing community. Selected players will not only gain access to training and development opportunities but also represent the club in upcoming competitions. Mark your calendars and prepare to take your game to the next level!
                        </p>
                       
                        <a href="#">Register</a>
                    </div>
                </div>
            </div>
            
            <section class="sport-description">
                <div class="row">
                    <div class="column">
                        <br>
                        <p>
                            We are thrilled to announce the selection of the best swimmers for the upcoming national swimming competition on November 5, 2024, at 9:00 AM. This is an exciting opportunity for talented swimmers to demonstrate their skills and compete at a higher level. Swimmers will be evaluated on their performance, technique, and competitive spirit during the selection process. The chosen athletes will represent our club with pride and determination, showcasing their hard work and dedication. Don’t miss your chance to be part of this prestigious event and make a splash on the national stage!
                        </p>
                        
                        <a href="#">Register</a>
                    </div>
                    <div class="column">
                        <img src="2.jpg" alt="Swimming Training" class="description-image">
                    </div>
                </div>
            </section>
             
            </main>
        <script>
            var menuList = document.getElementById("menuList");
            menuList.style.maxHeight = "0px";

            function togglemenu(){
                if(menuList.style.maxHeight == "0px"){
                     menuList.style.maxHeight = "240px";
                }
                else{
                     menuList.style.maxHeight = "0px";
                }
            }
        </script>

<div class="footer">
    <div class="col-1">
        <h3>QUICK LINKS</h3>
        <a href="#">About Us</a>
        <a href="#">Event</a>
        <a href="#">Sport</a>
        <a href="#">Contact</a>
        <a href="#">Login</a>
    </div>
    <div class="col-2">
        <h3>NEWSLETTER</h3>
        <form>
            <input type="email" placeholder="Your Email Address" required>
            <br>
            <button type="submit">SUBSCRIBE NOW</button>
        </form>
       
    </div>
    <div class="col-3">
        <h3>CONTACT US</h3>
        <P>24/A, Udhaya Road, Lane 1<br>New Shade, Colombo 03</P>
        <div class="social-icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>
</div>
    </body>
</html>

<?php

include "connectionE.php"; 
if(isset($_POST['submit'])) {


// Get form data
$event_name = $_POST['name'];
$phone_number = $_POST['phone'];
$event_date = $_POST['event-date'];
$booking_date = $_POST['booking-date'];
$place_name = $_POST['place-name'];
$buyer_name = $_POST['buyer-name'];

// Prepare and bind the SQL query
$stmt = $conn->prepare("INSERT INTO bookings (event_name, phone_number, event_date, booking_date, place_name, buyer_name) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $event_name, $phone_number, $event_date, $booking_date, $place_name, $buyer_name);

// Execute the query
if ($stmt->execute()) {
  
} else {
   
}

// Close the connection
$stmt->close();
$conn->close();
}
?>