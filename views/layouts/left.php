<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Buses', 
                        'icon' => 'fas fa-bus', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'All Buses', 'icon' => 'fas fa-file-text-o', 'url' => ['/bus']],
                              ['label' => 'New Bus', 'icon' => 'fas fa-bus', 'url' => ['/bus/create']],
                              ['label' => 'Owners', 'icon' => 'fas fa-users', 'url' => ['/bus-owner']],

                        ],
                    ],

                    [
                        'label' => 'Scanners', 
                        'icon' => 'fas fa-fax', 
                        'url' => ['/scanner'],
                    ],

                     [
                        'label' => 'Agents', 
                        'icon' => 'fas fa-bank', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'All Agents', 'icon' => 'fas fa-database', 'url' => ['/agent']],
                              ['label' => 'New Agent', 'icon' => 'fas  fa-plus-circle', 'url' => ['/agent/create']],
                        ],
                    ],

                    [
                        'label' => 'Cards', 
                        'icon' => 'fas fa-credit-card', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'Track Card', 'icon' => 'fas fa-line-chart', 'url' => ['/agent']],
                              ['label' => 'View Cards', 'icon' => 'fas  fa-bars', 'url' => ['/agent/create']],
                              ['label' => 'Block Cards', 'icon' => 'fas fa-lock', 'url' => ['/agent/create']],
                        ],
                    ],

                    [
                        'label' => 'Routes', 
                        'icon' => 'fas fa-road', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'All Routes', 'icon' => 'fas fa-map', 'url' => ['/agent']],
                              ['label' => 'New Route', 'icon' => 'fas fa-plus-square-o', 'url' => ['/agent/create']],
                        ],
                    ],


                    [
                        'label' => 'Setting', 
                        'icon' => 'fas fa-cog', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'Address', 'icon' => 'fa-book', 'url' => ['/address'], ],
                        ],
                    ],
                    [
                        'label' => 'Users', 
                        'icon' => 'fas fa-user', 
                        'url' => ['#'],
                        'items' => [
                             ['label' => 'User management', 'icon' => 'fas fa-users', 'url' => ['/user/admin/index'], ],
                             ['label' => 'New User', 'icon' => ' fa-user-md', 'url' => ['/user/admin/create'], ],
                        ],
                    ],                   
                ],
            ]
        );
        ?>



    </section>

</aside>
