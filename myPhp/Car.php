<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/13
 * Time: 14:26
 */

class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
$c = new Car();
$c1 = new Car('red');
echo $c->what_color();
echo "<br>";
echo $c1->what_color();
?>