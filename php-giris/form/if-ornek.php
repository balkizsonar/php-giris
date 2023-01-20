<?php
/**
 * Author: Ozan SONAR
 * Mail : ozansonar1@gmail.com
 * User: User
 * Date: 20.01.2023
 * Time: 20:22
 */

$not = 6;

if($not <= 3){
    echo "düşük not";
}elseif($not >= 4 && $not <= 6){
    echo "geçer not";
}elseif($not >=7 && $not <= 9){
    echo "iyi not";
}else{
    echo "çok iyi not";
}