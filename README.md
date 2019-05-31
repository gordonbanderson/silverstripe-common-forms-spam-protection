# Spam Protection Enabler for Common SilverStripe Modules

This currently enables spam protection for the following 2 modules as a one shot solution.

* silverstripe/comments - Add a new comment, reply to a comment
* symbiote/silverstripe-memberprofiles - Member registration

## Contents

- [Installation](#installation)

## Installation
### Module
```bash
composer require suilven/silverstripe-common-forms-spam-protection
```

### Enable Default Spam Protection
Add a file, e.g. app/_config/spamprotection.yml, and add likes of the following:

```
---
name: mysitespamprotection
---
SilverStripe\SpamProtection\Extension\FormSpamProtectionExtension:
  default_spam_protector: '\Symbiote\SilverStripe\SpamProtection\Honeypot\SpamProtector\HoneypotSpamProtector'


```

Change the spam protector to your preference.
