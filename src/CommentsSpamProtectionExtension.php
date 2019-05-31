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


/**
 * Class CommentsSpamProtectionExtension
 * Enable spam prevention for comments
 * @package Suilven\CommonFormsSpamProtection
 */

class CommentsSpamProtectionExtension extends Extension
{
    public function updateReplyForm($form)
    {
        /** @var Form */
        $form->enableSpamProtection();
    }

    public function alterCommentForm($form)
    {
        /** @var Form */
        $form->enableSpamProtection();
    }

}
