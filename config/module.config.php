<?php

return [
    'view_helpers' => [
        'invokables' => [
            'table' => 'MajorTable\View\Helper\Table',
            'row' => 'MajorTable\View\Helper\Row',
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'table/header' => __DIR__ . '/../view/table/header.phtml',
            'table/body' => __DIR__ . '/../view/table/body.phtml',
            'table/row' => __DIR__ . '/../view/table/row.phtml',
            'table/footer' => __DIR__ . '/../view/table/footer.phtml',
        ],
    ],
];
