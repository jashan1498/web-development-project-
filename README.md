# web-development-project-

this is the web development project by students of wuhan university

Databases Description:

File name: complete_table.sql
How to Use: Go to PHPMyAdmin, import, select the .sql file, and click import. It should import everything

Database Name is 'webdevproject'. Inside there are 3 tables

1. customer
2. places
3. special_city

1. Customer is used for email, then ticket confirmation thing. it has these columns:
    customer_id     int,
    customer_name   varchar(255),
    email           varchar(255),
    phone_number    varchar(255)
2. places contains all available places, can be used to randomly generate 2 flights. it has these columns
    place_id        int
    place_name      varchar(255)        Formatted like: 'Wuhan, China', 'Mumbai, India', etc
    review_count    int                 randomly generated review count, between 1 and 250 reviews
    review_score    double              Randomly generated review score average, between 2 and 5
    latitude        double              Latitude of said place
    longitude       double              Longitude of said place
    special_city_id int                 if city is featured in hot destinations, it should has this id, otherwise null
3. special_city contains the special city id, and the location of that city image file. it has these columns
    special_city_id int                 foreign keys to places table
    img_name        varchar(255)        name of image file in harddisk

places table can be used to randomly generate two flights, for example irfan wants to go from wuhan to jakarta
he can choose directly like in most ticket sites, instead of him just typing random places name.
this is to prevent case like somebody ordering tickets from wuhan to heaven
we can get these 2 cities from places table, then randomly generate 5 flights, with different prices, and different airlines name
