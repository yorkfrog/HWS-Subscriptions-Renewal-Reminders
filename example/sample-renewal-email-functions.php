// code added to function.php

//=============================================================================

// Changes made to plugin code: 
// -- ../subscriptions-renewal-reminders/inc/base/renewal-reminders-send-notifications.php
// -- ../subscriptions-renewal-reminders/templates/renewal-reminders-email.php


//=============================================================================
// Choose which subscriptions by period which we want to send reminders for.
// Filter called before sending reminder email
// Called from : ../subscriptions-renewal-reminders/inc/base/renewal-reminders-send-notifications.php
//   $should_send_for_period : true | false (default : true);
//   $subscription_period: "day", "week", "month", "year" (or custom Woo subscription period)
//=============================================================================
function hws_send_for_period_filter( $should_send_for_period, $subscription_period ) 
{
	$should_send_for_period = false;
	if ($subscription_period === 'year' ) {
		$should_send_for_period = true;
	}
	return  $should_send_for_period;
}
add_filter( 'hws_renewal_reminders_should_send_for_period', 'hws_send_for_period_filter' ,10,2) ;


//=============================================================================
// Filter to allow processing of user tags in reminder email template.
// Filter called after standard tag replacement processed.
// Called from : ../subscriptions-renewal-reminders/templates/renewal-reminders-email.php
//   $body_content : body_content template with tags.
//   $subscription_id: the subscription id for which the email reminder is being sent.
//=============================================================================
function hws_update_body_content_filter($body_content, $subscription_id) 
{
	$subscription_details = wcs_get_subscription( $subscription_id );
	$subscription_total = $subscription_details->get_total();

	$my_account_link_content = "<a href=\"" . get_permalink( get_option('woocommerce_myaccount_page_id') ) . "\" title=\"My Account\">My Account</a>";
	$subs_id_link_content = "<a href='" . get_permalink( get_option('woocommerce_myaccount_page_id') ) . "view-subscription/" . $subscription_id . "/' title='#" . $subscription_id . "'>#" . $subscription_id . "</a>";
	$subscription_products_list_content = "<br><ul>" ;
	$subscription_items = $subscription_details->get_items();
	foreach($subscription_items as $item){
		$subscription_products_list_content = $subscription_products_list_content . "<li>" . $item->get_name() . "</li>" ;
	}	
	$subscription_products_list_content = $subscription_products_list_content . "</ul><br>";
	
	$body_content =  str_replace("{subscription_number_link}", $subs_id_link_content, $body_content ); 
	$body_content =  str_replace("{subscription_total}", wc_price($subscription_total), $body_content ); 
	$body_content =  str_replace("{myaccount_link}", $my_account_link_content, $body_content ); 
	$body_content =  str_replace("{subscription_products_list}", $subscription_products_list_content, $body_content ); 
	
	return $body_content;
}
add_filter( 'hws_renewal_reminders_email_body_content', 'hws_update_body_content_filter' ,10,2) ;

//=============================================================================


