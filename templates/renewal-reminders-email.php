<?php 

/**
 * @package  RenewalReminders
 * 
 */
  function sprr_renewalremindersemail($subscriber_details_first_name,$subscriber_details_last_name, $next_payment_date) {
   ob_start(); // We have to turn on output buffering. VERY IMPORTANT! or else wp_mail() wont work ?>
   <!DOCTYPE html>
    <html lang="en-US" xmlns="http://www.w3.org/1999/xhtml"  >
   <head  >
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Renewal Reminders Scheduled Notifications </title>
      <meta name="description" content="Email Template for Renewal Reminders.">
   </head>
   <?php    $rr_bg        = stripslashes_deep(get_option( 'woocommerce_email_background_color' ));
            $rr_body      = stripslashes_deep(get_option( 'woocommerce_email_body_background_color' ));
            $rr_text      = stripslashes_deep(get_option( 'woocommerce_email_text_color' ));
            $rr_base      = stripslashes_deep(get_option('woocommerce_email_base_color' ));
            $rrbase_text    = wc_light_or_dark($rr_base, '#202020', '#ffff');


      ?>
   <body>

      <div class="body-div" width="600"  style="background-color:<?php echo esc_attr( $rr_bg ); ?>;margin: 0;padding: 70px 0;border-radius:3px;" >
      
      <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color:<?php echo esc_attr( $rr_base ); ?>;border-radius: 3px;margin:auto;" bgcolor="#fff">
							<tbody><tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style="background-color:<?php echo esc_attr( $rr_base ); ?>;color: #fff;border-bottom: 0;font-weight: bold;line-height: 100%;vertical-align: middle;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius: 3px 3px 0 0;" bgcolor="#7f54b3">
										<tbody><tr>
											<td id="header_wrapper" style="padding: 36px 48px">
												<h1 style="font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 30px;font-weight: 400;line-height: 150%;margin: 0;text-align: left;color:<?php echo esc_attr( $rrbase_text ); ?>;background-color: inherit">Renewal Reminder</h1>
											</td>
										</tr>
									</tbody></table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Body -->
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
										<tbody><tr>
											<td valign="top" id="body_content" style="background-color: <?php echo esc_attr( $rr_body ); ?>" bgcolor="#fff">
												<!-- Content -->
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tbody><tr>
														<td valign="top" style="padding: 48px 48px 32px">
															<div id="body_content_inner" style="background-color:<?php echo esc_attr( $rr_body ); ?>;color:<?php echo esc_attr( $rr_text ); ?>;font-family: &quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size: 14px;line-height: 150%;text-align: left;margin-bottom:70px;" align="left">

                                                <p style="margin: 0 0 16px">
                                                <?php
                                                            $body_content = stripslashes_deep(get_option( 'email_content' )); 

                                                            $body_content =  str_replace("{first_name}", $subscriber_details_first_name, $body_content );
															$body_content =  str_replace("{last_name}", $subscriber_details_last_name, $body_content );
                                                            $body_content =  str_replace("{next_payment_date}", $next_payment_date, $body_content );
                                                         
                                                            $body_content_rr = '<p class="rr-content-text" de="" style="whitespace:pre-line">' . $body_content .'</p>'  ;
                                                            echo  $body_content_rr;
                                                         ?>
                                                </p>

															</div>
                                             <hr class="rr-footer-rule">
														</td>
													</tr>
												</tbody></table>
												<!-- End Content -->
											</td>
										</tr>
									</tbody></table>
									<!-- End Body -->
								</td>
							</tr>
						</tbody></table>
         </div>


      </body>
   </html>
    <?php


    
    return ob_get_contents();
  ob_get_clean();
    
  }