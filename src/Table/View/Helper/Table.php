<?php

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace Table\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Table extends AbstractHelper
{
    public function __invoke(\Table\Model\Table $table = null)
    {
        if ($table instanceof \Table\Model\Table) {
            return $this->render($table);
        }

        return $this;
    }

    public function render(\Table\Model\Table $table)
    {
        $html = '';

        $html .= $this->getView()->render('table/header', ['table' => $table]);
        $html .= $this->getView()->render('table/body', ['table' => $table]);
        $html .= $this->getView()->render('table/footer', ['table' => $table]);

        return $html;
    }
}
