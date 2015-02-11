Dotmailer SMTP
==========================================

This module uses modman

First ensure you have modman installed (see here: https://github.com/colinmollenhour/modman#installation)
...and run the following in your magento root:
`modman init`
`modman clone https://github.com/dotagency/dotmailer-magento-transactional-emails.git`

Don't forget to enable symlinks in:
`System->Configuration->Advanced->Developer->Template Settings`

Core files overriten
----
* Mage_Core_Model_Email_Template
* Mage_Core_Model_Email


Facts
-----
- community version.
- current version - V.0.0.1 [config.xml](https://github.com/dotmailer/dotmailer_magento_transactional_emails/blob/master/code/community/Dotmailer/Smtp/etc/config.xml)


Compatibility
-------------
- Magento >= 1.6.2