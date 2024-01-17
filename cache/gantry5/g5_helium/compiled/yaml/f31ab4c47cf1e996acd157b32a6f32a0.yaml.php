<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\sitioweb1/templates/g5_helium/custom/config/12/layout.yaml',
    'modified' => 1689086955,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1686678739
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'spacer-4122 5',
                    1 => 'logo-9608 45',
                    2 => 'spacer-5279 25',
                    3 => 'custom-9595 25'
                ]
            ],
            '/header/' => [
                0 => [
                    0 => 'spacer-4674 5',
                    1 => 'menu-6409 83',
                    2 => 'custom-2082 12'
                ]
            ],
            '/intro/' => [
                
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'aside 25' => [
                            0 => [
                                0 => 'position-position-4734'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 50' => [
                            0 => [
                                0 => 'system-content-1587'
                            ]
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-3949'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'spacer-8368 5',
                    1 => 'logo-9571 18',
                    2 => 'custom-8024 30',
                    3 => 'custom-3989 19',
                    4 => 'custom-3164 17',
                    5 => 'totop-8670 11'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-5697'
                ]
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'position' => 'g-offcanvas-left',
                    'class' => '',
                    'extra' => [
                        
                    ],
                    'swipe' => '1',
                    'css3animation' => '1'
                ]
            ]
        ],
        'content' => [
            'logo-9608' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://LogoMakr-107aDH.png',
                    'svg' => '',
                    'class' => 'g-logo'
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'custom-9595' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<div>
  <span style="display: inline-block; vertical-align: middle;">
    <img src="http://localhost/sitioweb1/images/icons8-google-maps-40.png" alt="Icono de Ubicación" width="20" height="25">
  </span>
  <span style="display: inline-block; vertical-align: middle; margin-left: 5px; color: white; font-weight: bold;">
    Zarumilla - Aguas Verdes
  </span>
</div>'
                ]
            ],
            'menu-6409' => [
                'attributes' => [
                    'menu' => 'menuprincipal',
                    'base' => '102',
                    'hoverExpand' => '1'
                ]
            ],
            'custom-2082' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<!-- Agrega la librería SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<form action="http://localhost/sitioweb1/index.php/antienvejecimiento" method="get" class="search-form" onsubmit="return buscar(event)">
  <input type="text" name="search" id="search-input" placeholder="Buscar..." />
  <button type="submit" style="background-color: #f09f27; padding: 5px 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  margin-right: 0px;">Buscar</button>
</form>

<script>
  function buscar(event) {
    event.preventDefault(); // Evita que el formulario se envíe

    var searchInput = document.getElementById(\'search-input\');
    var searchTerm = searchInput.value.trim();

    // Realizar lógica de búsqueda
    if (searchTerm === \'\') {
      Swal.fire({
        icon: \'warning\',
        title: \'Campo vacío\',
        text: \'Por favor, ingresa un término de búsqueda.\',
      });
    } else if (window.location.pathname === \'http://localhost/sitioweb1/index.php/antienvejecimiento\') {
      Swal.fire({
        icon: \'success\',
        title: \'Página encontrada\',
        text: \'La página que buscas ha sido encontrada.\',
      });
    } else {
\'http://localhost/sitioweb1/index.php/antienvejecimiento\'
      // Realizar la búsqueda en Joomla
      // ...
      // Lógica para buscar en Joomla y redirigir
      // ...

      Swal.fire({
        icon: \'error\',
        title: \'Búsqueda no encontrada\',
        text: \'No se encontraron resultados para: \' + searchTerm,
      });
      searchInput.value = \'\'; // Limpiar el campo de búsqueda
    }
  }
</script>
',
                    'filter' => '0'
                ]
            ],
            'position-position-4734' => [
                'title' => 'Aside',
                'attributes' => [
                    'key' => 'aside'
                ]
            ],
            'position-position-3949' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ],
            'logo-9571' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'url' => '',
                    'target' => '_self',
                    'image' => 'gantry-media://LogoMakr-107aDH.png',
                    'svg' => '',
                    'text' => 'COMPRA CON CONFIANZA',
                    'class' => 'g-logo g-logo-helium'
                ],
                'block' => [
                    'variations' => 'title1'
                ]
            ],
            'custom-8024' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<p>COMPRA CON CONFIANZA</br>
SEGUIMIENTO DE ESTADO DE CUENTA </br>CAMBIO Y DEVOLUCIONES</p>'
                ]
            ],
            'custom-3989' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<div class="libro-reclamaciones">
  <img src="http://localhost/sitioweb1/images/libro-de-reclamaciones-removebg-preview%201.png" alt="Libro de Reclamaciones" width="150" height="150">
  
</div>'
                ]
            ],
            'custom-3164' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<p>SERVICIO AL CLIENTE</br>TLF: 987547390 </br>RUC: 1054382856</p>
'
                ]
            ],
            'totop-8670' => [
                'title' => 'To Top',
                'attributes' => [
                    'content' => ''
                ]
            ]
        ]
    ]
];
