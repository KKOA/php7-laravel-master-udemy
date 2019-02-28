<?php 
function printName2(string $name) : void{
    global $first_sentence; //Cannot access global variable without this
    echo $first_sentence.$name;
}