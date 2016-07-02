<?php

namespace SleepingOwl\Admin\Form\Panel;

use KodiComponents\Support\HtmlAttributes;
use SleepingOwl\Admin\Contracts\Form\PanelInterface;
use SleepingOwl\Admin\Form\FormElements;

class Body extends FormElements implements PanelInterface
{
    use HtmlAttributes;

    /**
     * @var string
     */
    protected $view = 'form.panel.body';

    /**
     * @return array
     */
    public function toArray()
    {
        return parent::toArray() + [
            'elements' => $this->getElements(),
            'attributes' => $this->htmlAttributesToString(),
        ];
    }
}