=== HWS Mods ===

// Added filter: renewal_reminders_email_body_content
// Allow additional replacement tokens to be added to email body content
subscriptions-renewal-reminders/templates/renewal-reminders-email.php

// added filter: renewal_reminders_should_send_for_period
// Allows a filter to choose if a reminder is sent for a given subscription period
subscriptions-renewal-reminders/inc/base/renewal-reminders-send-notifications.php

I have mixed period subscriptions on site (mostly monthly, yearly) and I only send renewal reminders for yearly subs - it would be really annoying for monthly subscribers.
Using the body content filter I am able to provide much more useful; info in the emails. e.g :

For example usage see examples/sample-renewal-email-functions.php


=== Renewal Reminders ===
Contributors: StorePro
Tags: subscriptions, renew subscriptions, renew subscriptions automatically, renew subscriptions days before, reminder emails, subscription reminder emails, renewal alerts
Requires at least: 5.2
Tested up to: 6.1.1
Stable tag: 1.1.2
Requires PHP: 7.0
License: GPL v3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Renewal Reminders for Subscriptions, automatically send your subscribers a courtesy reminder via email X days before their subscription renews.


== Description ==
###  Subscriptions Renewal Reminders Plugin
Subscriptions Renewal Reminders allows you to send your subscribers a Renewal notifications by Emails X days before their subscription ends. This plugin only works with WooCommerce Subscriptions plugin.
Renewal reminders are only sent to active subscribers. Emails will not be sent to customers whos subscription is On hold or Suspended.
Install this plugin and make sure your customers have not forgotten the subscriptions! 
= Features of Subscriptions Renewal Reminders =
* Enable/Disable the option for sending e-mails.
* Days prior to sending your renewal email option.
* Option to enter email subject.
* Option to enter email content via Wysiwyg editor.
* Automatic sending of e-mails with the help of wp-cron job.



== Changelog ==

=  1.1.2 - 2022-12-22 =
* Bug fixed in the email send out functionality.
* Tested with WooCommerce 7.2.0 and WordPress 6.1.1

=  1.1.1 - 2022-08-25 =
* Shortcodes created to add the subscriber's First Name and Last Name individually.
* Tested with WooCommerce 6.8.2

=  1.1.0 - 2022-08-16 =
* Email template base,background colors is adjusted.
* Renewal date in the template is formatted
* Tested with woocommerce 6.8.0.

=  1.0.9 - 2022-08-05 =
* Email template style changes
* Date is formatted
* Changed tooltip glitch in Admin setting Page.

=  1.0.8 - 2022-07-20 =
* Included base colors in the email template.
* Renewal email styled as default woocommerce emails.

=  1.0.7 - 2022-07-13 =
* Option to choose text,body and background colors from woocommerce email settings is added
* Configured to get from address in the email as of website admin.
* Tested with wordpress 6.0.1 and woocommerce 6.7.0.

=  1.0.6 - 2022-06-30 =
* WYSIWYG Editor issue is fixed
* Html entities appearing in email contents is fixed
* Tested with wordpress 6.0 and woocommerce 6.6.1

=  1.0.5 - 2022-06-09 =
* Licensing/Trademark Violation is Fixed
* Tested with wordpress 5.9 and woocommerce 6.4.1
* Email template color missing on title fixed
* Data Santitization and Escaping made to input variables
* Activation message conflict is fixed

=  1.0.4 - 2022-02-04 =
* Introduced Manual Sync feature for data update
* Changed Layout and Styles
* Auto update data on subscription status change
* Scehduled event trigger updated
* Tested with wordpress 5.9 and woocommerce 6.1.1

=  1.0.3 - 2021-11-24 =
* Bug fixes on email send out

=  1.0.2 - 2021-11-16 =
* Added HTML Editor in admin panel
* Some style changes
* Removed footer brand name and link

=  1.0.1 - 2021-10-30 =
* Tested with wordpress 5.8.1 and woocommerce 5.8.0

=  1.0.0 - 2021-05-14 =
* Tested with wordpress 5.7.2 and woocommerce 5.3.0


== Screenshots ==
1. Subscriptions Renewal Reminders admin panel



