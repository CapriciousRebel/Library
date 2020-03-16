# Library

### A simple web-application, written in PHP, postgreSQL, HTML, CSS, JQuery. It uses AJAX to insert and retrieve data from the server.

## To run it on your system :

#### clone the repo and create "connection.php":
```
git clone git@github.com:CapriciousRebel/Library.git
cd Library
cd php
touch connection.php
echo '<?php
$conn_string = "host=localhost port=5432  dbname=library user=postgres password=";
$conn = pg_connect($conn_string);
if (!$conn) {
    echo "Connection failed to DB.\n";
    exit;
}' >> connection.php


```

#### create the database schema (postgreSQL):
```
CREATE DATABASE library;
\c library

CREATE TABLE books(
id SERIAL,
bookname VARCHAR(255),
quantity INT
);

CREATE TABLE records(
id SERIAL,
username VARCHAR(255),
bookname VARCHAR(255),
quantity INT,
status VARCHAR(63)
);

CREATE TABLE requests(
id SERIAL,
username VARCHAR(255),
bookname VARCHAR(255),
quantity INT,
);
```

#### start a development server:

`php -S localhost:8888`

#### open http://localhost:8888/

