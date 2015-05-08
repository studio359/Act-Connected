<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<!-- Start K2 Tag Layout -->
<div class="container<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">
    <div class="col-12">
    <h2><?php echo $this->params->get('page_title',1); ?></h2>
	<?php if(count($this->items)): ?>
	<div id="container">
		<?php foreach($this->items as $item): ?>

		<!-- Start K2 Item Layout -->
		<div class="item col-3">
			<div class="item-inner">
                <div class="item-image-wrapper">
                <img src="<?php echo ($item->featured) ? $item->imageMedium : $item->imageSmall; ?>" alt="<?php echo $item->title; ?>" />
                </div>
                <div class="item-details">
                <h2><?php echo $item->title; ?></h2>
                <p><?php echo strip_tags($item->introtext); ?></p>
                <a class="item-link" href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"></a>
                </div>
		  </div>
		</div>
		<!-- End K2 Item Layout -->
		<?php endforeach; ?>
	</div>

	<!-- Pagination -->
	<?php if($this->pagination->getPagesLinks()): ?>
	<div class="k2Pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<div class="clr"></div>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</div>
	<?php endif; ?>

	<?php endif; ?>
</div>  	
</div>
<!-- End K2 Tag Layout -->
