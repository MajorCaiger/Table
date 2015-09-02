<?php

/**
 * Attributes
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

/**
 * Attributes
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Attributes extends AbstractHelper
{
    public function __invoke(array $attributes = null)
    {
        if ($attributes !== null) {
            return $this->render($attributes);
        }

        return $this;
    }

    public function render(array $attributes = [])
    {
        $attributeArray = [];

        foreach ($attributes as $key => $val) {
            $attributeArray[] = sprintf('%s="%s"', $key, $val);
        }

        return implode(' ', $attributeArray);
    }
}
