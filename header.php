<?php
$sections = array(
    'home' => 'Inicio',
    'products' => 'Productos',
    'contact' => 'Contacto',
);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Tienda Stanley</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php
                // Generar enlaces a las secciones
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