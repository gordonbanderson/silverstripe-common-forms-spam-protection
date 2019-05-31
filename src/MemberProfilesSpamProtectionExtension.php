<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 16/4/2561
 * Time: 14:55 น.
 */

namespace Suilven\CommonFormsSpamProtection;


use SilverStripe\Core\Extension;
use SilverStripe\Forms\Form;


class MemberProfilesSpamProtectionExtension extends Extension
{
    /**
     * Enable spam protection for the member profile forms
     *
     * @param $form
     */
    public function updateRegisterForm($form)
    {
        /** @var Form */
        $form->enableSpamProtection();
    }
}
