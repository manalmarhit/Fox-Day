<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Fox Day Registration Result 🦊</h1>
    </header>
    <main>
        <?php

    $eventMessages = [
    "Midnight Fox Movie Lawn" => "Don't forget your blanket and popcorn! 🍿",
    "Fox Tales & Treats" => "Come hungry for snacks and stories! 🍪",
    "Mystery Destination Bus Ride" => "Pack light and bring your sense of adventure! 🚌",
    "Campus Clue Hunt: Find the Fox" => "Put on your detective hat! 🔍",
    "Fox Day Picnic & Lemonade" => "Perfect weather for a picnic! ☀️",
    "Photo Booth: Fox Ears Edition" => "Get ready to strike a pose! 📸"    
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $year = $_POST["year"];
    $message = $_POST["message"];
    
        if ($name == "" || $email == "" || $event == "" ||$year == ""||$message == "") {
        echo "<h2>Oops! Missing information 😅</h2>";
        echo "<p>Please make sure you fill in all required fields:</p>";
        echo "<ul>";
        if ($name == "") echo "<li>Name is required</li>";
        if ($email == "") echo "<li>Email is required</li>";
        if ($event == "") echo "<li>Please select an event</li>";
        if ($year == "") echo "<li>Please select your year</li>";
        if ($message == "") echo "<li>Please share what you're excited about</li>";
        echo "</ul>";
        echo "<p><a href='register.html'>← Go back to the registration page</a></p>";
        
        } else {

            echo "<h2>✅ Welcome to Fox Day! Your adventure is booked 🦊✨</h2>";
            echo "<p>Here is your registration info:</p>";

            echo "<ul>";
            echo "<li><strong>Name:</strong> " . $name . "</li>";
            echo "<li><strong>Email:</strong> " . $email . "</li>";
            echo "<li><strong>Event:</strong> " . $event . "</li>";
            echo "<li><strong>Year:</strong> " . $year . "</li>";
            echo "<li><strong>Message:</strong> " . $message . "</li>";
            echo "</ul>";
            if (isset($eventMessages[$event])) {
                echo $eventMessages[$event];
            }

            echo "<p><a href='events.php'>View Events</a> | <a href='register.html'>Register Again</a></p>";
        }
    
    } else {
        echo "<h2>Invalid Access</h2>";
        echo "<p>Please use the registration form to sign up.</p>";
        echo "<p><a href='register.html'>Go to Registration Form</a></p>";
    }

    ?>
    </main>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="events.php">View Events</a></li>
            <li><a href="register.html">Register</a></li>
        </ul>
    </nav>

    <footer>
        <p>"Today is too pretty to have class!" — Happy Fox Day! 🌸
        <br><br>
            © 2026 Fox Day Campus Events
        </p>
    </footer>
</body>
</html>
