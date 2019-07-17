<?php

namespace Malpani\Weightunits\Model\Config\Source;

class WeightUnit extends \Magento\Directory\Model\Config\Source\WeightUnit
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
					['value' => 'lbs', 'label' => __('lbs')],
					['value' => 'kgs', 'label' => __('kgs')],
					['value' => 'cts', 'label' => __('Carats')],	// Adds Carats as a unit for weights in Magento2
					['value' => 'ratti', 'label' => __('Ratti')],	// Adds Ratti as a unit for weights in Magento2
					['value' => 'gms', 'label' => __('grams')]		// Adds grams as a unit for weights in Magento2
					];
    }
}