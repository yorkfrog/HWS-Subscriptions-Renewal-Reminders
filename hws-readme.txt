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


---------------------------------------------------------------------------

To merge changes from Plugin updates.

- Open git bash
- Checkout a branch based on the Tag for the original v1.1.2 code
>> (main)$ git checkout -b v1.1.6 T1.1.2 
- Download the plugin update zip.
- extract the plugin update files over the top of the new branch code.  Basically updating the original plugin code.
- commit changes to branch - this will show you which files have changed

- checkout "main"
- merge the updated plugin branch with our changes.
>> (main)$ git merge v1.1.6
- You can check the merge files by using Meld to compare the file from the plugin zip with the merged versions. No simple way to get git to do this.
- Commit the merged updates and push to orign.

- Tag the updated version
>> (main)$ git tag -a v1.1.6.hws -m "updated v1.1.6 with HWS changes"
- push the tag to origin
>> (main)$ git push origin v1.1.6.hws

- Zip up the plugin directory and dpeloy to the WP server.





See: https://stackoverflow.com/questions/5810804/whats-the-best-way-to-merge-external-changes-into-my-git-repo

