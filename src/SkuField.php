<?php

namespace Skus\Sku;

use Encore\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'sku::sku_field';

    protected static $js = [
        'vendor/skus/sku/sku.js'
    ];

    protected static $css = [
        'vendor/skus/sku/sku.css'
    ];

    public function render()
    {

        $this->script = <<< EOF
window.DemoSku = new SkusQinSKU('{$this->getElementClassSelector()}');
EOF;
        return parent::render();
    }
}
