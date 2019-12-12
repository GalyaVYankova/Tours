<?php
if (!defined('ABSPATH')) exit;
global $mainSignaturePlugin;
?>

<div class="wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 
        <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="main-signature-admin-form" value="1" />
                <div class="information">
                        <h2><?php _e('Signiture'); ?></h2>
            <p>
                <label><?php _e('Email'); ?></label><br />
                <input type="email" name="email" value="<?php echo $mainSignaturePlugin->getOption('email'); ?>" />
            </p>
            <p>
                <label><?php _e('Phone'); ?></label><br />
                <input name="phone" value="<?php echo $mainSignaturePlugin->getOption('phone'); ?>" />
            </p>
            <p>
                <label><?php _e('Additional info'); ?></label>
                <br />
                <textarea name="additional_info"><?php echo $mainSignaturePlugin->getOption('additional_info'); ?></textarea>
            </p>
        </div>
        <div class="google-map">
            <h2><?php _e('Google maps iframe code'); ?></h2>
            <p>
                <textarea name="gm_code"><?php echo $mainSignaturePlugin->getOption('gm_code'); ?></textarea>
            </p>
        </div>
        <?php
        wp_nonce_field('main-signature-save', 'main-signature-message');
        submit_button(); ?>  
    </form>
</div>
