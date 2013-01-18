<?php

namespace kendo\ui;

class TreeViewItem extends \kendo\SerializableObject {
//>> Properties

    public function setText($value) {
        $this->setProperty('text', $value);

        return $this;
    }

    public function setImageUrl($value) {
        $this->setProperty('imageUrl', $value);

        return $this;
    }

    public function setSpriteCssClass($value) {
        $this->setProperty('spriteCssClass', $value);

        return $this;
    }

    public function setEnabled($value) {
        $this->setProperty('enabled', $value);

        return $this;
    }

    public function setSelected($value) {
        $this->setProperty('selected', $value);

        return $this;
    }

    public function setExpanded($value) {
        $this->setProperty('expanded', $value);

        return $this;
    }

//<< Properties
}

?>
