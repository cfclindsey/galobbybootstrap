<?php /* Smarty version 2.6.26, created on 2018-02-05 15:11:43
         compiled from wysiwyg/popup_hyperlink.html */ ?>
<table><tr><td><?php echo $this->_tpl_vars['names']['hyperlink_text']; ?>
:</td><td><input id="<?php echo $this->_tpl_vars['id']; ?>
_hyperlink_text"  type="text" /></td></tr>
       <tr><td><?php echo $this->_tpl_vars['names']['hyperlink_url']; ?>
:</td><td><input id="<?php echo $this->_tpl_vars['id']; ?>
_hyperlink_url"   type="text" /></td></tr>
       <tr><td><?php echo $this->_tpl_vars['names']['hyperlink_title']; ?>
:</td><td><input id="<?php echo $this->_tpl_vars['id']; ?>
_hyperlink_title" type="text" /></td></tr>
       <tr><td></td><td><input type="button" value="<?php echo $this->_tpl_vars['names']['submit']; ?>
" onclick="WysiwygInsHyperlink('<?php echo $this->_tpl_vars['id']; ?>
');" /></td></tr></table>