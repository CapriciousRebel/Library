# Library

A simple web-application, written in PHP, postgreSQL, HTML, CSS, JQuery. 

### Features

- AJAX is used for communication with the server( Yes it was my first real world experience with ajax, hence it is a feature )
- Admin can add books in the library
- Student can send a request to borrow a book
- Admin can aprrove or reject that request
- Student can return a book, and request to update that status in the records


### Setup:

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

CREATE TABLE users(
id SERIAL,
name VARCHAR(255),
password VARCHAR(255),
isAdmin INT
);
```

#### start a development server:

`php -S localhost:8888`

#### open http://localhost:8888/

