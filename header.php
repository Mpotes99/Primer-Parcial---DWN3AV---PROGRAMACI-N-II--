<?php
$sections = array(
    'home' => 'Inicio',
    'products' => 'Productos',
    'contact' => 'Contacto',
);
?>
<div class="alert alert-dark custom-alert" role="alert">
    ENVÍO GRATIS desde $25.000. LLEGA HOY 🚚 [CABA/GBA] comprando hasta las 12PM
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/stanley-logo.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php
                // enlaces a las secciones
                foreach ($sections as $sectionId => $sectionName) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="#' . $sectionId . '">' . $sectionName . '</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
    
    
</nav>