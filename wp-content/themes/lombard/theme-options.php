<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
    register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
    add_theme_page( __( 'Настройки темы', 'sampletheme' ), __( 'Настройки темы', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
    'blue' => array(
        'value' =>	'blue',
        'label' => __( 'Blue', 'sampletheme' )
    ),
    'pink' => array(
        'value' =>	'pink',
        'label' => __( 'Pink', 'sampletheme' )
    ),
    'purple' => array(
        'value' => 'purple',
        'label' => __( 'Purple', 'sampletheme' )
    ),
    'tomato' => array(
        'value' => 'tomato',
        'label' => __( 'Tomato', 'sampletheme' )
    )
);

$radio_options = array(
    'yes' => array(
        'value' => 'yes',
        'label' => __( 'Yes', 'sampletheme' )
    ),
    'no' => array(
        'value' => 'no',
        'label' => __( 'No', 'sampletheme' )
    ),
    'maybe' => array(
        'value' => 'maybe',
        'label' => __( 'Maybe', 'sampletheme' )
    )
);

/**
 * Create the options page
 */
function theme_options_do_page() {
    global $select_options, $radio_options;

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;

    ?>
    <div class="wrap">
        <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Настройки темы', 'sampletheme' ) . "</h2>"; ?>

        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="updated fade"><p><strong><?php _e( 'Настройки сохранены', 'sampletheme' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'sample_options' ); ?>
            <?php $options = get_option( 'sample_theme_options' ); ?>

            <table class="form-table">

                <?php
                /**
                 * A sample checkbox option
                 */
                ?>


                <?php
                /**
                 * A sample text input option
                 */
                ?>
                <tr>Персональная информация</tr>


                <?php
                /**
                 * A sample select input option
                 */
                ?>


                <?php
                /**
                 * A sample of radio buttons
                 */
                ?>


                <?php
                /**
                 * A sample textarea option
                 */
                ?>
                <tr>
                    <td> Адрес : <hr> </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e( 'Номер телефона', 'sampletheme' ); ?></th>
                    <td>
                        <textarea id="sample_theme_options[phone]" class="large-text" cols="50" rows="1" name="sample_theme_options[phone]"><?php echo esc_textarea( $options['phone'] ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e( 'E-mail', 'sampletheme' ); ?></th>
                    <td>
                        <textarea id="sample_theme_options[email]" class="large-text" cols="50" rows="1" name="sample_theme_options[email]"><?php echo esc_textarea( $options['email'] ); ?></textarea>
                    </td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
            </p>
        </form>
    </div>
    <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
    global $select_options, $radio_options;

    // Our checkbox value is either 0 or 1
    if ( ! isset( $input['option1'] ) )
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

    // Our select option must actually be in our array of select options
    if ( ! array_key_exists( $input['selectinput'], $select_options ) )
        $input['selectinput'] = null;

    // Our radio option must actually be in our array of radio options
    if ( ! isset( $input['radioinput'] ) )
        $input['radioinput'] = null;
    if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
        $input['radioinput'] = null;

    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

    return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/