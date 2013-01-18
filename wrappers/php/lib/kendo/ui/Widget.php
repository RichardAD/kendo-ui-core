<?php

namespace kendo\ui;

abstract class Widget extends \kendo\SerializableObject{

    private $id;

    private $attributes = array();

    function __construct($id) {
        $this->id = $id;
    }

    public function attr($key, $value) {
        $this->attributes[$key] = $value;

        return $this;
    }

    protected function createElement() {
        return new \kendo\html\Element('div');
    }

    protected function addAttributes(\kendo\html\Element $element) {
        $element->attr('id', $this->id);

        foreach ($this->attributes as $key => $value) {
            $element->attr($key, $value);
        }
    }

    public function html() {
        $element = $this->createElement();

        $this->addAttributes($element);

        return $element->outerHtml();
    }

    abstract function name();

    public function render() {
        $output = array();

        $output[] = $this->html();
        $output[] = '<script>';
        $output[] = $this->script();
        $output[] = '</script>';

        return implode($output);
    }

    public function script($executeOnDomReady = true) {
        $script = array();

        if ($executeOnDomReady) {
            $script[] = 'jQuery(function(){';
        }

        $script[] = 'jQuery("#';
        $script[] = $this->id;
        $script[] = '").kendo';
        $script[] = $this->name();
        $script[] = '(';
        $script[] = $this->toJSON();
        $script[] = ');';

        if ($executeOnDomReady) {
            $script[] = '});';
        }

        return implode($script);
    }

}

?>
