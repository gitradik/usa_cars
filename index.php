<?php get_header(); ?>

    <div class="usa-cars-page">

        <div id="pageLoaderId" class="page-loader d-none">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>

        <?php require_once get_template_directory() . '/components/contact-form-modal/contact-form-modal.php'; ?>
        <?php require_once get_template_directory() . '/components/contact-form-modal-second/contact-form-modal.php'; ?>
        <?php require_once get_template_directory() . '/components/navbar/navbar.php'; ?>
        <?php require_once get_template_directory() . '/components/first-scroll/first-scroll.php'; ?>
        <?php require_once get_template_directory() . '/components/cost-calc/cost-calc.php'; ?>
        <?php require_once get_template_directory() . '/components/about/about.php'; ?>
        <?php require_once get_template_directory() . '/components/clients-have/clients-have.php'; ?>
        <?php require_once get_template_directory() . '/components/comparison/comparison.php'; ?>
        <?php require_once get_template_directory() . '/components/open-form/open-form.php'; ?>
        <?php require_once get_template_directory() . '/components/work/work.php'; ?>
        <?php require_once get_template_directory() . '/components/map/map.php'; ?>
        <?php require_once get_template_directory() . '/components/open-form-second/open-form-second.php'; ?>
        <?php require_once get_template_directory() . '/components/partners/partners.php'; ?>
        <?php require_once get_template_directory() . '/components/certificate/certificate.php'; ?>
        <?php require_once get_template_directory() . '/components/footer/footer.php'; ?>

    </div>

<?php get_footer(); ?>