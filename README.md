# Major Caiger / Table
Table builder module for ZF2.

# Installation

composer require major-caiger/table ~0.0.1

Add *MajorTable* to the modules list of your application config

application.config.php

    'modules' => [
        ...
        'MajorTable',
        ...
    ],

# Usage

Example table definition

    <?php

    namespace Application\Table;

    use MajorTable\Model;

    class MyTable extends Model\Table
    {
        public function __construct(array $data = array(), array $attributes = array())
        {
            // You can add built in (or custom) input filters to your columns to filter data
            $filter = new \Zend\Filter\HtmlEntities();

            $defaultAttributes = array('class' => 'table');

            $attributes = array_merge($defaultAttributes, $attributes);

            parent::__construct($data, $attributes);

            $column1 = new Model\Column('Column 1');
            $column1->addFilter($filter);
            $this->addColumn('foo', $column1);

            $column2 = new Model\Column('Column 2');
            $column2->addFilter($filter);
            $this->addColumn('bar', $column2);
        }
    }

Example implementation

    ...

    $data = array(
        array(
            'foo' => 'Row 1 foo',
            'bar' => 'Row 1 bar'
        ),
        array(
            'foo' => 'Row 2 foo',
            'bar' => 'Row 2 bar'
        )
    );

    $table = new \Application\Table\MyTable($data);

    ...

    return new ViewModel(['myTable' => $table]);

    ...

Example view
    <div>
        <?php echo $this->table($myTable); ?>
    </div>

Example output
    <table class="table">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 foo</td>
                <td>Row 1 bar</td>
            </tr>
            <tr>
                <td>Row 2 foo</td>
                <td>Row 2 bar</td>
            </tr>
        </tbody>
    </table>

# Extending

## Filtering data
You can create custom input filters to filter your table data before rendering

## Markup
You can override the table markup by overriding the following in your module config

    'view_manager' => [
        'template_map' => [
            'table/header' => __DIR__ . '/../view/table/header.phtml',
            'table/body' => __DIR__ . '/../view/table/body.phtml',
            'table/row' => __DIR__ . '/../view/table/row.phtml',
            'table/footer' => __DIR__ . '/../view/table/footer.phtml',
        ],
    ],

# Todo
Use a custom mechanism for formatting data, rather than using InputFilters and FilterChain