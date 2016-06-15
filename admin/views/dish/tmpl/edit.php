<?php
/*------------------------------------------------------------------------
# com_jomoeasyrestaurantmenu - JOMO Easy Restaurant Menu Extension for Joomla 2.5
# -----------------------------------------------------------------------
# author: http://www.jomotheme.com
# copyright Copyright (C) 2013 jomotheme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://www.jomotheme.com
# Technical Support: Visit Forum on http://www.jomotheme.com
*/

defined('_JEXEC') or die; 
?>
<form action="<?php echo JRoute::_('index.php?option=com_jomoeasyrestaurantmenu&amp&id=' . $this->item->id); ?>" method="post" name="adminForm" class="form-validate">

    <div class="width-60 fltlft">
         <fieldset class="adminform">
            <ul class="adminformlist">
                <?php foreach ($this->form->getFieldset("leftcol") as $field): ?>
                    <li><?php echo $field->label; ?>
                        <?php echo $field->input; ?></li>
                <?php endforeach; ?>
            </ul>
        </fieldset>
    </div>

    <div class="width-40 fltrt">
        <fieldset class="adminform">
            <ul class="adminformlist">
                <?php foreach ($this->form->getFieldset("rightcol") as $field): ?>
                    <li><?php echo $field->label; ?>
                        <?php echo $field->input; ?></li>
                <?php endforeach; ?>
            </ul>
        </fieldset>
    </div>
    
    <input type="hidden" name="task" vaule="" />
    <?php echo JHtml::_('form.token'); ?>
</form>