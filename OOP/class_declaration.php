<?php

class User {

}

$classes = get_declared_classes();

$date = new DateTime();

$date->setTimeZone(new DateTimeZone("America/New_York"));

echo $date->getTimezone()->getName();