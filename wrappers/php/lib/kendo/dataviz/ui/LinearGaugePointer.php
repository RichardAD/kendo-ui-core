<?php

namespace kendo\dataviz\ui;

class LinearGaugePointer extends \kendo\SerializableObject {
//>> Properties

    public function setBorder(\kendo\dataviz\ui\LinearGaugePointerBorder $value) {
        $this->setProperty('border', $value);

        return $this;
    }

    public function setColor($value) {
        $this->setProperty('color', $value);

        return $this;
    }

    public function setMargin($value) {
        $this->setProperty('margin', $value);

        return $this;
    }

    public function setOpacity($value) {
        $this->setProperty('opacity', $value);

        return $this;
    }

    public function setShape($value) {
        $this->setProperty('shape', $value);

        return $this;
    }

    public function setSize($value) {
        $this->setProperty('size', $value);

        return $this;
    }

    public function setTrack(\kendo\dataviz\ui\LinearGaugePointerTrack $value) {
        $this->setProperty('track', $value);

        return $this;
    }

    public function setValue($value) {
        $this->setProperty('value', $value);

        return $this;
    }

//<< Properties
}

?>
