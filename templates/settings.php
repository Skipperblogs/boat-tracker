<?php
/**
 * Settings View
 * 
 *
 * 
 * @category Admin
 * @author Skipperblogs <info@skipperblogs.com>
 */

$title = $plugin_data['Name'];
$description = __('A plugin for adding live tracking map from Skipperblogs.com.', 'boat-tracking');
$version = $plugin_data['Version'];
?>
<div class="wrap">

<h1><?php echo esc_html($title); ?> <small>version: <?php echo esc_html($version); ?></small></h1>

<?php
/** START FORM SUBMISSION */

// validate nonce!
define('NONCE_NAME', 'boat-tracking-nonce');
define('NONCE_ACTION', 'boat-tracking-action');

function verify_nonce () {
    $verified = (
        isset($_POST[NONCE_NAME]) &&
        check_admin_referer(NONCE_ACTION, NONCE_NAME)
    );

    if (!$verified) {
        // side-effects can be fun?
        ?>
        <div class="notice notice-error is-dismissible">
            <p>Sorry, your nonce did not verify</p>
        </div>
        <?php
    }

    return $verified;
}

if (isset($_POST['submit']) && verify_nonce() && check_admin_referer(NONCE_ACTION, NONCE_NAME)) {
    /* copy and overwrite $post for checkboxes */
    $form = $_POST;

    foreach ($settings->options as $name => $option) {
        if (!$option->type) continue;

        /* checkboxes don't get sent if not checked */
        if ($option->type === 'checkbox') {
            $form[$name] = isset($_POST[ $name ]) ? 1 : 0;
        }

        $value = trim( stripslashes( $form[$name]) );

        $settings->set($name, $value);
    }
?>
<div class="notice notice-success is-dismissible">
    <p>Options Updated!</p>
</div>
<?php
} elseif (isset($_POST['reset']) && verify_nonce() && check_admin_referer(NONCE_ACTION, NONCE_NAME)) {
    $settings->reset();
?>
<div class="notice notice-success is-dismissible">
    <p>Options have been reset to default values!</p>
</div>
<?php
}
/** END FORM SUBMISSION */
?>

<p><?php echo esc_html($description); ?></p>
<h3>Found an issue?</h3>
<p>Send an email to<b>: <a href="mailto:support@skipperblogs.com" target="_blank">support@skipperblogs.com</a></p>
    <div class="container">
        <h2>Settings</h2>
        <hr>
    </div>
<div id="settings">
    <div class="form wrap">
        <form method="post">
            <div class="settings">
                <?php wp_nonce_field(NONCE_ACTION, NONCE_NAME); ?>

                <?php
                foreach ($settings->options as $name => $option) {
                    if (!$option->type) continue;
                ?>
                <div class="container">
                    <label>
                        <span class="label"><?php echo esc_html($option->display_name); ?></span>
                        <span class="input-group">
                        <?php
                        $option->widget($name, $settings->get($name));
                        ?>
                        </span>
                    </label>

                    <?php
                    if ($option->helptext) {
                    ?>
                    <div class="helptext">
                        <p class="description"><?php echo esc_html($option->helptext); ?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                }
                ?>
                <div class="submit">
                    <input type="submit"
                        name="submit"
                        id="submit"
                        class="button button-primary"
                        value="Save Changes">
                    <input type="submit"
                        name="reset"
                        id="reset"
                        class="button button-secondary"
                        value="Reset to Defaults">
                </div>
            </div>
        </form>
    </div>
    <div class="instructions wrap">
        <div class="card">
            <h2 class="title">1. Create your Skipperblogs account</h2>
            <p>
                This plugins work in combination with an active Skipperblogs account. If you don't have one, register here <a href="https://www.skipperblogs.com/register?source=wp" target="_blank">https://www.skipperblogs.com/register</a>
            </p>
        </div>
        <div class="card">
            <h2 class="title">2. Initialize navigation and trackings</h2>
            <p>
                Once registered, you will need to <a href="https://www.skipperblogs.com/dashboard/map-editor?source=wp" target="_blank">initalize the navigation </a> and <a target="_blank" href="https://www.skipperblogs.com/dashboard/nav/tracking?source=wp">enable some trackings</a>.         </p>
        </div>
        <div class="card">
            <h2 class="title">3. Add the shortcode on your Wordpress site</h2>
            <p>
                Copy our Map ID from the Skipperblogs' dashboard <a href="https://www.skipperblogs.com/dashboard/nav/map/share?source=wp" target="_blank">map share settings</a> in the plugin configuration below.<br>
                Add the following shortcode in your Wordpress content where you want to display the map. <br>
                <code>[live-map]</code>
            </p>
        </div>
        <div class="card">
            <h2 class="title">4. Map customization</h2>
            <p>
                Customize the map background, boat icon, track color and style directly from your Skipperblogs account in the  <a href="https://www.skipperblogs.com/dashboard/map-editor?source=wp" target="_blank">map editor</a>
            </p>
            <p>
                To change the map dimension on Wordpress, use the following shortcode parameters<br>
                <code>[live-map height="250" width="100%"]</code>
            </p>
        </div>
    </div>
</div>
