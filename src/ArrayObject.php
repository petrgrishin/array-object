<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\ArrayObject;


interface ArrayObject {

    /**
     * @param array $data
     */
    public function setArray(array $data);

    /**
     * @return array
     */
    public function getArray();
}
