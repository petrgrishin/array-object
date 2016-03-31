<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */


namespace PetrGrishin\ArrayObject;


interface ElementArrayObject {

    public function getValue();
    
    public function setValue($value);

    public function getKey();
    
    public function setKey($key);
}