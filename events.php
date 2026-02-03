<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fox Day Events | Campus Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Fox Day Campus Events 🦊</h1>
        <p>The most anticipated day of the year is finally here! 🎉</p>
    </header>

    <main>
        <h2>🦊 Fox Day Events Lineup</h2>
        <p>
            Choose your adventure! Each event is Fox Day-themed and unique.
            <br>
            Don't forget to register for your favorite and bring your friends!!!
        </p>

        <?php

        $events = [
            [
                "title" => "Midnight Fox Movie Lawn",
                "datetime" => "Fox Day Night | 9:00 PM - 11:30 PM",
                "location" => "Main Quad Lawn",
                "description" => "Bring a blanket and enjoy a cozy outdoor movie night under the stars. Popcorn available while supplies last."
            ],
            [
                "title" => "Fox Tales & Treats",
                "datetime" => "Fox Day Afternoon | 3:30 PM - 4:30 PM",
                "location" => "Student Center Lounge",
                "description" => "A relaxed hangout with fun Fox Day mini-stories, quick trivia, and themed snacks. Come for the treats, stay for the vibes."
            ],
            [
                "title" => "Mystery Destination Bus Ride",
                "datetime" => "Fox Day Morning | 9:00 AM - 3:00 PM",
                "location" => "Depart from Main Campus Circle",
                "description" => "Hop on the bus for a surprise adventure to a mystery destination. The location is revealed only after departure. Limited seats!"
            ],
            [
                "title" => "Campus Clue Hunt: Find the Fox",
                "datetime" => "Fox Day All Day | 10:00 AM - 4:00 PM",
                "location" => "Starts at Student Center",
                "description" => "Follow clues hidden around campus to find the fox! Work with friends to solve riddles and reach the final spot."
            ],
            [
                "title" => "Fox Day Picnic & Lemonade",
                "datetime" => "Fox Day Midday | 12:00 PM - 2:30 PM",
                "location" => "The Great Lawn",
                "description" => "Relax with a picnic, fresh lemonade, and simple lawn games. Bring friends, take photos, and enjoy the Fox Day sunshine."
            ],
            [
                "title" => "Photo Booth: Fox Ears Edition",
                "datetime" => "Fox Day All Day | 11:00 AM - 5:00 PM",
                "location" => "Campus Center Atrium",
                "description" => "Strike a pose with fox-ear props and themed backdrops! Get fun pics with friends and save the memory."
            ]
        ];

        foreach ($events as $event) {
            echo "<hr>";
            echo "<h3>" . $event["title"] . "</h3>";
            echo "<p>Date/Time: " . $event["datetime"] . "</p>";
            echo "<p>Location: " . $event["location"] . "</p>";
            echo "<p>" . $event["description"] . "</p>";
        }

        ?>


    </main>
    
<nav>
    <ul>
        <li><a href="index.html">Go back to the Home page</a></li>
        <li><a href="register.html">Register for an Event</a></li>
    </ul>
</nav>

    <footer>
        <p>"Today is too pretty to have class! — Happy Fox Day! 🌸</p>
        <br><br>
        <p>© 2026 Fox Day Campus Events</p>
    </footer>
</body>
</html>
