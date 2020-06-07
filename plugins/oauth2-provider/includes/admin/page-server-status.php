<?php
/**
 * Server Status
 *
 */
global $license_error;
$license_error = null;
function wo_server_status_page() {
	wp_enqueue_style( 'wo_admin' );
	wp_enqueue_script( 'wo_admin' );
	wp_enqueue_script( 'jquery-ui-tabs' );
	?>
    <div class="wrap">
        <h2><?php _e( 'Server Status', 'wp-oauth' ); ?></h2>
        <div class="section group">
            <div class="col span_4_of_6">
				<?php wo_display_settings_tabs(); ?>
            </div>
            <div class="col span_2_of_6 sidebar">
                <div class="module hire-us">
                    <h3>Need Help?</h3>
                    <div class="inner">
                        <p>
                            We are a US based development company that develops custom authentication solutions for
                            WordPress and other platforms.
                        </p>

                        <a href="https://wp-oauth.com/hire-us/" class="button button-primary">
                            Contact Us for Free Consulting
                        </a>
                    </div>
                </div>

                <div class="module">
                    <h3>Technical Support</h3>
                    <div class="inner">
                        <p>
                            <strong>Upgrade</strong> to Pro with discount and receive priority support and all the grant types.
                        </p>

                        <ul>
                            <li>
                                Mobile Authentication
                            </li>
                            <li>
                                Desktop Software Authentication
                            </li>
                            <li>
                                All Grant Types
                            </li>
                            <li>
                                Support & Add-Ons
                            </li>
                        </ul>

                        <a href="https://wp-oauth.com/downloads/wp-oauth-server/?utm_source=wp-oauth-server-free&utm_medium=settings-page"
                           class="button button-primary">Download
                            PRO</a>

                        <h4>Use "PROME" at checkout for the discount.</h4>
                        <strong>Build <?php echo _WO()->version; ?></strong>
                    </div>
                </div>
                </div>
            </div>

        </div>

    </div>
	<?php
}