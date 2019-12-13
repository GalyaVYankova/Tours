<?php
    if (!defined('ABSPATH')) exit;
    global $quotesPlugin;
?>

<div class="contact-us-container">
    <div class="information">
        <h2><?php _e('Избор на деня'); ?></h2>
        <img src="<?php echo $quotesPlugin->getOption('image');?>" class="image-plugin">
        <p>
            <?php _e('Дестинация'); ?>:
            <?php echo $quotesPlugin->getOption('destination'); ?>
        </p>
        <p>
            <?php _e('Описание'); ?>:
            <?php echo $quotesPlugin->getOption('info'); ?>
        </p>
    </div>
</div>