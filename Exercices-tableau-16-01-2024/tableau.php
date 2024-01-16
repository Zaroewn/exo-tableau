<?php

return [
    'users' => [
            [
                'name' => 'Maxime Dufond',
                'email' => 'dufond@dwwm.fr',
                'isAdmin' => 'Oui',
                'contactDetails' => array(
                    'address' => ['1 rue du dev front'],
                    'phoneNumber' => '0686479123'
                ),
                'id' => 1,
                'posts' => [
                    [
                        'id' => '1',
                        'title' => 'Post 1',
                        'excerpt' => 'Ceci est un extrait',
                        'comments' => [
                            [
                                'content' => 'commentaire 1',
                            ],
                            [
                                'content' => 'commentaire 2', 
                            ]
                        ]
                    ],
                    [
                        'id' => '2',
                        'title' => 'Post 2',
                        'excerpt' => 'Ceci est encore un extrait',
                        'comments' => [
                            [
                                'content' => 'commentaire 1',
                            ],
                            [
                                'content' => 'commentaire 2', 
                            ]
                        ]
                    ],
            ]
      
            
           
        ],

        [
            'name' => 'Maxime Dudevant',
            'email' => 'dudevant@dwwm.fr',
            'isAdmin' => '',
            'contactDetails' => array(
                'address' => ['1 rue du dev back'],
                'phoneNumber' => '0654786941'
            ),
            'id' => 2,
            'posts' => [
                [
                    'id' => '1',
                    'title' => 'Post 1',
                    'excerpt' => 'Ceci est un extrait',
                    'comments' => [
                        [
                            'content' => 'commentaire 1',
                        ],
                        [
                            'content' => 'commentaire 2', 
                        ]
                    ]
                ],
                [
                    'id' => '2',
                    'title' => 'Post 2',
                    'excerpt' => 'Ceci est encore un extrait',
                    'comments' => [
                        [
                            'content' => 'commentaire 1',
                        ],
                        [
                            'content' => 'commentaire 2', 
                        ]
                    ] 
                ],
                [
                    'id' => '3',
                    'title' => 'Post 3',
                    'excerpt' => 'Ceci est encore encore un extrait',
                    'comments' => [
                        [
                            'content' => 'commentaire 1',
                        ],
                        [
                            'content' => 'commentaire 2', 
                        ]
                    ]
                ],
            ]
        ],

    ]
];