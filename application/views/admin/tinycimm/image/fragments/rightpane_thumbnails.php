<div id="filelist" class="clearfix">
	<?if (sizeof($images) == 0) {?>
		(folder is empty)
	<?} else {?>
		<?foreach($images as $image):?>
			<span class="thumb-wrapper">
				<span class="thumb" onclick="TinyCIMMImage.loadResizer('<?=$image['id'].$image['extension'];?>', event);" style="background:url(<?=$this->config->item('tinycimm_image_controller');?>get/<?=$image['id'];?>/92/92) no-repeat center center;">
					<span class="loader"></span>
				</span>
				<span class="controls-bg"></span>
				<span class="controls">
					<a href="#" title="edit image" class="edit" onclick="TinyCIMMImage.showManager(this, <?=$image['id'];?>);return false;">&nbsp;</a>
					<a href="#" title="delete image" class="delete" onclick="TinyCIMMImage.deleteImage(<?=$image['id'];?>);return false;">&nbsp;</a>
					<a href="#" title="insert thumbnail" class="thumbnail" onclick="TinyCIMMImage.insertThumbnail(this, '<?=$image['id'];?>');return false;">&nbsp;</a>
				</span>
			</span>
		<?endforeach;?>
	<?}?>
</div>
<?=$this->pagination->create_links();?>
