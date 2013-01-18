<?php

namespace kendo\dataviz\ui;

class StockChartSeriesItemHighlight extends \kendo\SerializableObject {
//>> Properties

    public function setBorder(\kendo\dataviz\ui\StockChartSeriesItemHighlightBorder $value) {
        $this->setProperty('border', $value);

        return $this;
    }

    public function setColor($value) {
        $this->setProperty('color', $value);

        return $this;
    }

    public function setLine(\kendo\dataviz\ui\StockChartSeriesItemHighlightLine $value) {
        $this->setProperty('line', $value);

        return $this;
    }

    public function setOpacity($value) {
        $this->setProperty('opacity', $value);

        return $this;
    }

//<< Properties
}

?>
