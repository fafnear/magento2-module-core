<?php

namespace Fafnear\Core\Methods;

trait OptionsToArrayMethod
{
    public function toArray(): array
    {
        $options = $this->toOptionArray();
        $values = array_column($options, 'value');
        $labels = array_column($options, 'label');

        return array_combine($values, $labels);
    }
}