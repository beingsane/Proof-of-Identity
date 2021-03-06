<?php
/**
 * @package      ProofOfIdentity
 * @subpackage   Component
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php?option=com_identityproof'); ?>" method="post" name="ipDownloadForm" id="ipDownloadForm" autocomplete="off">

    <div class="form-group">
        <?php echo $this->form->getLabel('password'); ?>
        <?php echo $this->form->getInput('password'); ?>
    </div>

    <?php echo $this->form->getInput('file_id'); ?>

    <input type="hidden" name="format" value="raw"/>
    <input type="hidden" name="task" value="file.download"/>
    <?php echo JHtml::_('form.token'); ?>
</form>