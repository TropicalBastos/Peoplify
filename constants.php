<?php
define("SERVER","ian.1pcswebdesign.co.uk");
define("DB","ian1pcsw_Test");
define("ADMIN","ian1pcsw_Ian");
define("ADMINPASS","ian123");
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define(
    "DATA_TABLE",
    "(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(250),
    lastname varchar(250),
    company varchar(250),
    profession varchar(250),
    chaptername varchar(250),
    phone varchar(20),
    altphone varchar(20),
    fax varchar(20),
    mobile varchar(20),
    email varchar(250),
    website varchar(250),
    address varchar(250),
    city varchar(250),
    state varchar(250),
    zip varchar(250),
    substitute varchar(250),
    status varchar(100),
    joindate varchar(100),
    renewal varchar(250),
    sponsor varchar(250)
);");
ini_set('max_execution_time', 300);
?>