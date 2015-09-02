<?php

return [
    'view_helpers' => [
        'invokables' => [
            'attributes' => 'Table\View\Helper\Attributes',
            'table' => 'Table\View\Helper\Table',
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'table/header' => __DIR__ . '/../view/table/header.phtml',
            'table/body' => __DIR__ . '/../view/table/body.phtml',
            'table/footer' => __DIR__ . '/../view/table/footer.phtml',
        ],
    ],
];
