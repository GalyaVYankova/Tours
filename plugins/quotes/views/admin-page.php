<?php
    if (!defined('ABSPATH')) exit;
    global $quotesPlugin;
?>

<div class="wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 
            <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="quotes-admin-form" value="1" />
        <div class="information"><h2><?php _e('Information'); ?></h2>
            <div class="google-map">
                    <h2><?php _e('Image URL'); ?></h2>
                <p>
                    <textarea name="image"><?php echo $quotesPlugin->getOption('image'); ?></textarea>
                </p>
            </div>
                <p>
                    <label><?php _e('Destination'); ?></label>
                </p>
                <p>
                    <input name="destination" value="<?php echo $quotesPlugin->getOption('destination'); ?>" />
                </p>
                <p>
                    <label><?php _e('Description'); ?></label>
                </p>
                <p>
                    <textarea name="info"><?php echo $quotesPlugin->getOption('info'); ?></textarea>
                </p>
        </div>
        
        <?php
        wp_nonce_field('quotes-save', 'quotes-message');
        submit_button(); ?>  
    </form>
</div>