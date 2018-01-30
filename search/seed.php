<?php

$con = new PDO('mysql:host=localhost;dbname=search', 'root', '');
$con->query("insert into people(name, email) values('nur', 'nur@gmail.com')");
$con->query("insert into people(name, email) values('tawhid', 'tawhid@gmail.com')");
$con->query("insert into people(name, email) values('jb', 'jb@gmail.com')");
$con->query("insert into people(name, email) values('sakhawat', 'sakhawat@gmail.com')");
$con->query("insert into people(name, email) values('arafat', 'arafat@gmail.com')");
$con->query("insert into people(name, email) values('monjur', 'monjur@gmail.com')");
$con->query("insert into people(name, email) values('tahmina', 'tahmina@gmail.com')");
