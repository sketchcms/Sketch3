<?php $this->partial('partials/header.php'); ?>
<?php // $this->partial('partials/shopcartmodal.php'); ?>
<div class="wrapper">
    <div class="header">
        <div class="container">
            <?php // $this->partial('partials/pagetop.php'); ?>
            <?php $this->partial('partials/topmenu.php'); ?>
        </div>
    </div>
    <?php $this->partial('partials/banner.php'); ?>
    <div class="container">
    <?php $this->partial('partials/breadcrumb.php'); ?>
    </div>
    <div class="inner-page">
        <?php $this->content(); ?>

        <?php $this->partial('partials/galleryimage.php'); ?>
    </div>
    <?php // $this->partial('partials/testimonials.php'); ?>
    <div class="push"></div>
</div>
<?php $this->partial('partials/footer.php'); ?>
