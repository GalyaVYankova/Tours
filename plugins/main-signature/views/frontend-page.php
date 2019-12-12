<?php
if (!defined('ABSPATH')) exit;
global $mainSignaturePlugin;
?>

<div class="contact-us-container">
    <div class="information">
        <h2><?php _e('Signiture'); ?></h2>
        <p>
            <?php _e('Email'); ?>:
            <?php echo $mainSignaturePlugin->getOption('email'); ?>
        </p>
        <p><?php _e('Phone'); ?>:
            <?php echo $mainSignaturePlugin->getOption('phone'); ?>
        </p>
        <p>
            <?php _e('Additional info'); ?>:
            <?php echo $mainSignaturePlugin->getOption('additional_info'); ?>
        </p>
    </div>
     <div class="google-map">
        <h2><?php _e('Google maps'); ?></h2>
        <?php echo $mainSignaturePlugin->getOption('gm_code'); ?>
    </div>
</div>