<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\ArrayObject;


interface ArrayObject {

    /**
     * @param array|ArrayObject $data
     */
    public function setArray($data);

    /**
     * @return array
     */
    public function getArray();
}
