<?php

/**
 * Row
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;
use MajorTable\Model\Table as TableModel;

/**
 * Row
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Row extends AbstractHelper
{
    public function __invoke(TableModel $table = null, array $rowData = [])
    {
        if ($table instanceof TableModel) {
            return $this->render($table, $rowData);
        }

        return $this;
    }

    public function render(TableModel $table, array $rowData = [])
    {
        $html = $this->getView()->render('table/row', ['table' => $table, 'data' => $rowData]);

        return $html;
    }
}
