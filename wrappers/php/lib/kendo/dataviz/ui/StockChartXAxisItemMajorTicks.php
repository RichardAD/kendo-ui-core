<?php

namespace kendo\dataviz\ui;

class StockChartXAxisItemMajorTicks extends \kendo\SerializableObject {
//>> Properties

    public function setSize($value) {
        $this->setProperty('size', $value);

        return $this;
    }

    public function setVisible($value) {
        $this->setProperty('visible', $value);

        return $this;
    }

//<< Properties
}

?>
