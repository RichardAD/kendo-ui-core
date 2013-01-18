<?php

namespace kendo\ui;

class GridColumnCommandItem extends \kendo\SerializableObject {
//>> Properties

    public function setName($value) {
        $this->setProperty('name', $value);

        return $this;
    }

    public function setText($value) {
        $this->setProperty('text', $value);

        return $this;
    }

    public function setClassName($value) {
        $this->setProperty('className', $value);

        return $this;
    }

    public function setClick($value) {
        $this->setProperty('click', $value);

        return $this;
    }

//<< Properties
}

?>
