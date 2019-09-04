drop table if exists movies;
CREATE TABLE movies (
  movie_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title varchar(50) NOT NULL,
  year int not null,
  genre varchar(50) NOT NULL,
  image_name varchar(50),
  description text
);


INSERT INTO movies(title, year, genre,image_name, description) VALUES
("IT",2017,"Thriller","pic/it.jpg","In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("Baby Driver",2017,"Crime","pic/babydriver.jpg","After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("Avengers: Infinity War",2018,"Fantasy","pic/avenger.jpg","The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("Tomb Raider",2018,"Adventure","pic/tombrider.jpg","Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("Jumanji: Welcome to the Jungle",2017,"Comedy","pic/jumanji.jpg","Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("Justice League",2017,"Fantasy","pic/justiceleague.jpg","Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("The Greatest Showman",2017,"Other","pic/thegreatestshowman.jpg","Celebrates the birth of show business, and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.");
INSERT INTO movies(title, year, genre,image_name, description) VALUES
("The Dark Knight",2008 ,"Action","pic/The_Dark_Knight.jpg","When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.");


