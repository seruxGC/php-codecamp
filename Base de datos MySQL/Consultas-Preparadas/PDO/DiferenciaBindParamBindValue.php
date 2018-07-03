<?php

//BindParam
$sex = 'male';
$s = $dbh->prepare('SELECT name FROM students WHERE sex = :sex');
$s->bindParam(':sex', $sex); // use bindParam to bind the variable
$sex = 'female';
$s->execute(); // executed with WHERE sex = 'female'

//BindValue
$sex = 'male';
$s = $dbh->prepare('SELECT name FROM students WHERE sex = :sex');
$s->bindValue(':sex', $sex); // use bindValue to bind the variable's value
$sex = 'female';
$s->execute(); // executed with WHERE sex = 'male'