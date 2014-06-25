<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\ArrayObject;


class BaseArrayObject implements ArrayObject {
    /** @var array|ArrayObject */
    private $data;

    /**
     * @param array|ArrayObject $data
     * @return $this
     */
    public function setArray($data) {
        if ($this->isArrayObject()) {
            $this->data->setArray($data);
        } else {
            $this->data = $data;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getArray() {
        if ($this->isArrayObject()) {
            return $this->data->getArray();
        }
        return $this->data;
    }

    /**
     * @return boolean
     */
    protected function isArrayObject() {
        return is_object($this->data) && $this->data instanceof ArrayObject;
    }
}
 