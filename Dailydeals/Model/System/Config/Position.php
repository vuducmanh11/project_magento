<?php
namespace Magestore\Dailydeals\Model\System\Config;
use Magento\Framework\Option\ArrayInterface;
class Position implements ArrayInterface
{
    const LEFT      = 0;
    const RIGHT     = 1;
    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return[
            self::LEFT => __('Left'),
            self::RIGHT => __('Right')
        ];
    }
}