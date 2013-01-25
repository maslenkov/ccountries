<?php
defined('_JEXEC') or die('Restricted access');
?>
<form action="index.php" method="post" name="adminForm">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->items as $item) : ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= JHTML::_('grid.id', $item->id, $item->id ); ?></td>
                <td>
                    <a href="<?= JRoute::_('index.php?option=com_countries&controller=country&task=edit&cid[]='.$item->id) ?>"><?= $item->name ?></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <input type="hidden" name="option" value="com_countries" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="country" />
    <?php 
    //Это что то вроде провержи на разбиение страницы.
    echo JHTML::_( 'form.token' ); ?>
</form>

