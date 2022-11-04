<?php
    // Soy un page controller, para una página específica
    include 'model.php';
    include 'view.php';

    $navItemsModule = new NavItemsModule();
    
    // Voy a crear mediante la VISTA un objeto especifico para visualizar productos. Le voy a proporcionar la info que he solicitado al modelo
    $vista = new IndexView($navItemsModule->getNavItemsList());
    // Le pido a este objeeto de la vista que dibuje su contenido
    $vista->printFullHTML();
    

?>
