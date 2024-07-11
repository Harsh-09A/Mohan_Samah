<?php
// Assuming you have an array of banners, you can fetch this from a database or an API.
$banners = [
    ['src' => 'img/banners/banner01.jpg', 'alt' => 'Banner1'],
    ['src' => 'img/banners/banner02.jpg', 'alt' => 'Banner2'],
    // ['src' => 'img/banners/banner3.jpg', 'alt' => 'Banner3'],
    // ['src' => 'img/banners/banner3.jpg', 'alt' => 'Banner3']
];
?>

<!-- Slider Section -->
<section id="slider_section">
    <!-- Desktop Slider -->
    <div id="desktop_carousel" class="carousel slide desktop-slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($banners as $index => $banner) : ?>
                <button type="button" data-bs-target="#desktop_carousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($banners as $index => $banner) : ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img class="d-block w-100" width="100%" src="<?= $banner['src'] ?>" alt="<?= $banner['alt'] ?>" />
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#desktop_carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#desktop_carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>