<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

 if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#fs_firewall_issue_options a.fs-resolve' ).click(function() {
			var
				error_type       = $( this ).attr( 'data-type' ),
				notice           = $( this ).parents( '.fs-notice' ),
				ajaxActionSuffix = notice.attr( 'data-manager-id' ).replace( ':', '-' );

            var data = {
                action   : 'fs_resolve_firewall_issues_' + ajaxActionSuffix,
                // As such we don't need to use `wp_json_encode` method but using it to follow wp.org guideline.
                _wpnonce : <?php echo wp_json_encode( wp_create_nonce( 'fs_resolve_firewall_issues' ) ); ?>,
                error_type: error_type
            };

			if ( 'squid' === error_type ) {
				data.hosting_company = prompt( 'What is the name or URL of your hosting company?' );
				if ( null == data.hosting_company )
					return false;

				if ( '' === data.hosting_company ) {
					alert( 'We won\'t be able to help without knowing your hosting company.' );
					return false;
				}
			}

			if ( 'retry_ping' === error_type ) {
                data.action   = 'fs_retry_connectivity_test_' + ajaxActionSuffix;
                // As such we don't need to use `wp_json_encode` method but using it to follow wp.org guideline.
                data._wpnonce = <?php echo wp_json_encode( wp_create_nonce( 'fs_retry_connectivity_test' ) ); ?>;
			}

			$( this ).css({'cursor': 'wait'});

			// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			$.post( ajaxurl, data, function( response ) {
				if ( 1 == response ) {
					// Refresh page on success.
					location.reload();
				} else if ( 'http' === response.substr( 0, 4 ) ) {
					// Ping actually worked, redirect.
					window.location = response;
				}
			});
		});
	});
</script>
