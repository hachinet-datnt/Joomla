<?php
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;

$uri = Uri::getInstance();
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên môn học</th>
        <th>Mã môn học</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($this->items as $i=>$item)
    {?>
        <tr class="row<?php echo $i%2;?>">
            <td><?php echo $i+1; ?></td>
            <td>
                <a href="<?php echo $uri->toString(); ?>&view=documents&id_mon_hoc=<?php echo $item->id; ?>"><?php echo $item->ten_mon_hoc;?></a>
            </td>
            <td><?php echo $item->ma_mon_hoc;?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>