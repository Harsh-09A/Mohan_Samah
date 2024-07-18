<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohan Samah</title>
    <!-- SEO -->

    <meta property="og:title" content="Mohan Samah" />
    <meta property="og:url" content="https://vmconstructions.co/mohan-samah/" />
    <meta property="og:image" content="https://vmconstructions.co/mohan-samah/img/gallery/gallery7.jpg" />
    <meta property="og:description" content=" Mohan Samah is a top-tier residential complex situated in Nerul, Navi Mumbai's heart." />
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link rel="icon" href="img/logo/favicon.png" sizes="16x16" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fancy Box CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- EmailJS CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="js/mail.js"></script>

    <!-- Custom CSS & JS  -->
    <link rel="stylesheet" href="css/style.css" />
    <script defer src="js/script.js"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NSXDLFH6');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body data-bs-spy="scroll" data-bs-target="#main-navbar" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true" class="scrollspy" tabindex="0" data-offset="1">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSXDLFH6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'components/header.php'; ?>
    <main>
        <?php include 'components/slider.php'; ?>
        <?php include 'components/overview.php'; ?>
    </main>
    <article>
        <?php include 'components/gallery.php'; ?>
        <?php include 'components/configuration.php'; ?>

        <?php include 'components/amenities.php'; ?>
        <?php include 'components/location.php'; ?>
        <?php include 'components/about.php'; ?>
    </article>

    <?php include 'components/footer.php'; ?>
    <?php include 'components/mobile_action_footer.php'; ?>
    <?php include 'components/modal.php'; ?>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>