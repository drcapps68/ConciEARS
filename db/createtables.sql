CREATE TABLE rides(
    ride_id VARCHAR(5) PRIMARY KEY UNIQUE NOT NULL,
    ride_name VARCHAR(50) NOT NULL
);

/**Create New table for Ride counter to display
most recent ride added on ride history page*/
CREATE TABLE ride_counter (
  user_id int(11) DEFAULT NULL,
  ride_id varchar(5) DEFAULT NULL,
  date varchar(10)  DEFAULT NULL,
  time_stamp TIME
)

/** RIDES TABLE - FOR RIDE ID GO TO 2017 MAGIC KINGDOM MAP. ID # HAS CHANGED -EM**/
INSERT INTO rides
(ride_id, ride_name)
VALUES
("MK15", "Swiss Family Treehouse"),
("MK16", "The Magic Carpets of Aladdin"),
("MK17", "Jungle Cruise"),
("MK18", "Enchanted Tiki Room"),
("MK19", "Pirates of the Caribbean"),
("MK26", "Splash Mountain"),
("MK28", "Big Thunder Mountain Railroad"),
("MK38", "Haunted Mansion"),
("MK43", "Prince Charming Regal Carrousel"),
("MK44", "Mickey's PhilharMagic"),
("MK45", "Peter Pan's Flight"),
("MK46", "It's A Small World"),
("MK47", "Enchanted Tales with Belle"),
("MK48", "Under the Sea - Journey of The Little Mermaid"),
("MK51", "Walt Disney World Railroad"),
("MK53", "The Barnstormer"),
("MK54", "Dumbo the Flying Elephant"),
("MK55", "Mad Tea Party"),
("MK57", "The Many Adventures of Winnie the Pooh"),
("MK58", "Seven Dwarfs Mine Train"),
("MK72", "Stitches Great Escape"),
("MK73", "Tomorrowland Speedway"),
("MK74", "Space Mountain"),
("MK75", "Astro Orbiter"),
("MK77", "Carousel of Progress"),
("MK78", "Buzz Lightyear's Space Ranger Spin"),
("EP1", "Spaceship Earth"),
("EP4", "Mission: SPACE"),
("EP6", "Test Track"),
("EP24", "The Sea with Nemo and Friends"),
("EP26", "Soarin"),
("EP27", "Living with the Land"),
("EP29", "Journey Into the Imagination with Figment"),
("EP58", "Grand Fiesta Tour Starring the Three Caballeros"),
("EP63", "Frozen Ever After"),
("HS1", "The Great Movie Ride"),
("HS13", "Star Tours the Adventure Continues"),
("HS29", "Toy Story Mania"),
("HS32", "Voyage of the Little Mermaid"),
("HS36", "Rock n' Roller Coaster"),
("HS37", "The Hollywood Tower of Terror"),
("AK21", "Kilimanjaro Safaris"),
("AK34", "Kali River Rapids"),
("AK35", "Expedition Everest"),
("AK50", "Primeval Whirl"),
("AK51", "TriceraTop Spin"),
("AK52", "DINOSAUR");



/*
SQL insert and select statements
*/
INSERT INTO ride_counter
VALUES(1, 'MK46', '05-23-2017');/* please note that the date will have to be variables we will need to implement*/

/* This counts all peter pan rides*/
SELECT COUNT(time_stamp) FROM ride_counter
WHERE user_id = 1 and ride_id = "MK46";


/*this gets the recent timestamp of that ride */SELECT MAX(time_stamp)
FROM ride_counter
WHERE user_id = 1;







