<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/4
 * Time: 21:38
 */
header("Content-type:text/html;charset=utf-8");
include "ValidataClass.php";
$person = new ValidataClass();

$person->setInt("2");

echo $person->getInt();
