<?= $this->extend("layouts/main"); ?>

<?= $this->section("content"); ?>
<section class="banner animatedParent">
        <div class="inner-banner"
            style="background: url(<?= base_url(); ?>/public/assets/images/inner_ban4.jpg); height:450px">
        </div>
        <div class="meta ban-head">
           
        </div>
</section>
<div class="container">
<h1>Activation Process</h1>
<?php if(isset($error)) : ?>
<div class="aler-error">
<?= $error; ?>
</div>
<?php endif; ?>
</div>

<?=  $this->endSection(); ?>