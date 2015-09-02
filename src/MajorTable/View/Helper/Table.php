<?php

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;
use MajorTable\Model\Table as TableModel;

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Table extends AbstractHelper
{
    public function __invoke(TableModel $table = null)
    {
        if ($table instanceof TableModel) {
            return $this->render($table);
        }

        return $this;
    }

    public function render(TableModel $table)
    {
        $html = $this->getView()->render('table/header', ['table' => $table]);
        $html .= $this->getView()->render('table/body', ['table' => $table]);
        $html .= $this->getView()->render('table/footer', ['table' => $table]);

        return $html;
    }
}
