<?php
// Define an array of navigation items
$navItems = [
    ['href' => '#slider_section', 'icon' => 'fa-solid fa-house', 'text' => 'Home', 'active' => true],
    ['href' => '#overview_section', 'icon' => 'fa-solid fa-coins', 'text' => 'Overview', 'active' => false],
    ['href' => '#gallery_section', 'icon' => 'fa-solid fa-images', 'text' => 'Gallery', 'active' => false],
    ['href' => '#configuration_section', 'icon' => 'fa-solid fa-sliders', 'text' => 'Configuration', 'active' => false],
    ['href' => '#amenities_section', 'icon' => 'fa-solid fa-wifi', 'text' => 'Amenities', 'active' => false],
    ['href' => '#location_section', 'icon' => 'fa-solid fa-map-location', 'text' => 'Location', 'active' => false],
    ['href' => '#about_section', 'icon' => 'fa-solid fa-user', 'text' => 'About Us', 'active' => false],
];
?>

<header class="fixed-top shadow-sm">
    <nav class="navbar navbar-expand-lg mx-auto" style="background-color: #ffffff" id="main-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo/logo3.png" alt="Logo" height="70px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($navItems as $item) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $item['active'] ? 'active' : '' ?>" aria-current="<?= $item['active'] ? 'page' : '' ?>" href="<?= $item['href'] ?>">
                                <i class="<?= $item['icon'] ?> nav-icon"></i>
                                <span class="d-sm-inline"><?= $item['text'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>