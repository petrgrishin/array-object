<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */


namespace PetrGrishin\ArrayObject;


class BaseElementArrayObject implements ElementArrayObject {
    
    private $value;
    private $key;

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function getKey() {
        return $this->key;
    }

    public function setKey($key) {
        $this->key = $key;
        return $this;
    }
}