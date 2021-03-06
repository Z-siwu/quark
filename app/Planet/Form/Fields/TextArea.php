<?php

namespace App\Planet\Form\Fields;

use App\Planet\Form\Item;

class TextArea extends Item
{
    public  $autosize,
            $rows;

    function __construct() {
        $this->componentName = 'textArea';
    }

    static function make($labelName,$name)
    {
        $self = new self();

        $self->labelName = $labelName;
        $self->name = $name;

        $self->placeholder = '请输入'.$labelName;

        // 删除空属性
        $self->unsetNullProperty();
        return $self;
    }

    public function autosize($autosize)
    {
        $this->autosize = $autosize;
        return $this;
    }

    public function rows($rows)
    {
        $this->rows = $rows;
        return $this;
    }
}
