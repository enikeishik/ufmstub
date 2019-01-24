<?php
/**
 * @var \Ufo\Modules\Enikeishik\Stub\View $this
 * @var array $items
 * @var stdClass $item
 */

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$section->title?></title>
</head>
<body>
<?php if (!empty($item)): ?>
    <h2><?=$section->title?></h2>
    <h1><?=$item->title?></h1>
    <p><?=$item->text?></p>
<?php elseif (!empty($items) && is_array($items) && count($items) > 0): ?>
    <h1><?=$section->title?></h1>
    <?php foreach ($items as $item): ?>
        <p>
        <b><?=$item->title?></b><br>
        <?=$item->text?>
        </p>
    <?php endforeach; ?>
<?php else: ?>
    <p>Content not present for this page.</p>
<?php endif; ?>
<?=($content??'')?>
<?=$this->renderWidgets('left col top')?>
</body>
</html>
