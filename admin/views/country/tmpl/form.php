<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
  <div>
    <fieldset>
      <legend><?php echo JText::_('Details'); ?></legend>

      <table>
        <tr>
          <td width="100" align="right">
            <label for="name">
              <?php echo JText::_('NAME'); ?>:
            </label>
          </td>
          <td>
            <input type="text" name="name" id="name" size="32" maxlength="250" value="<?php echo $this->hello->name; ?>" />
          </td>
        </tr>
      </table>
    </fieldset>
  </div>
  <div></div>

  <input type="hidden" name="option" value="com_countries" />
  <input type="hidden" name="id" value="<?php echo $this->hello->id; ?>" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="controller" value="country" />
</form>
