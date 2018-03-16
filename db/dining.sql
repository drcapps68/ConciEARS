CREATE TABLE dining(
    dining_id VARCHAR(5) PRIMARY KEY UNIQUE NOT NULL,
    dining_name VARCHAR(50) NOT NULL,
    pricing varchar (5) NOT NULL,
    overview varchar (1000) NOT NULL,
    specialty varchar (1000) NOT NULL
);

INSERT INTO dining
(dining_id, dining_name, pricing, overview, specialty)
VALUES
("MK21", "Sunshine Tree Terrace", "$",
"While visiting with Orange Bird, taste a little bit of sunshine with a classic Citrus Swirl, an orange slushy
  mixed with soft-serve vanilla ice cream",
"Beat the Florida heat with a raspberry-lemonade slushy or the popular Pina Colada (non-alcoholic) Slush!"),
("MK22", "Jungle Navigation Co. Ltd. Skipper Canteen", "$$",
   "This jungle themed restaurant features dishes inspired by the cuisine of Asia, South America and Africa.
   There are 3 different rooms to dine in: the Mess Hall, the Jungle Room or the S.E.A. Room, which stands for the
 Society of Explorers and Adventurers",
  "You may wish to try the S.E.A shu mai as an appetizer and then dive in to Trader Sam's head-on shrimp. Don't forget to save room
  for Kungaloosh!, an African-inspired chocolate cake dusted with coffee."),
("MK23", "Aloha Isle", "$",
   "This quick service counter was originally where the Sunshine Tree Tavern was before being relocated",
    "Try the Pineapple Dole Whip Cup or grab a Souvenir Skull mug filled with Pineapple Dole Whip Float."),
("MK24", "Tortuga Tavern", "$",
   "If you need a quick snack while battling pirates, stop at Tortuga Tavern to fuel your sword arm.",
    "Adults can enjoy the fan-favorite turkey leg and little swashbucklers can sink their teeth into an all-beef hot dog. Don't forget
    to save room for the beautiful Tortuga Island Dessert!"),
("MK31", "Golden Oak Outpost", "$", "", ""),
("MK32", "Pecos Bill Tall Tale Inn and Cafe", "$",
  "Sit a spell in this Old West-style saloon while you enjoy wonderful Tex-Mex meals, such as the fajita platter with the cilantro-lime rice.",
   "If you have a large group, try the Nachos Rio Grande, a <strong>top secret</strong> menu item. This huge plate of nachos
   feeds 6-8 people and comes with the Pecos Bill VIP treatment."),
("MK33", "Westward Ho", "$",
   "This quick service food counter has corn dogs and chocolate chip cookies, as well as other snacks",
    "Enjoy a frozen lemonade in a Country Bears jug to beat the heat."),
("MK38", "The Diamond Horseshoe", "$$$$", "", ""),
("MK39", "Liberty Tree Tavern", "$", "", ""),
("MK40", "Sleepy Hallow", "$", "", "")
("MK41", "Liberty Square Market", "$", "", ""),
("MK42", "Columbia Harbour House", "$", "", ""),
("MK", "", "$", "", "")

;
