<?php
class Jinr_CheckBox_Control extends WP_Customize_Control
{

	public $content = '';
	public function render_content()
	{
		$input_id         = '_customize-input-' . $this->id;
		$description_id   = '_customize-description-' . $this->id;
		$describedby_attr = (!empty($this->description)) ? ' aria-describedby="' . esc_attr($description_id) . '" ' : '';

		switch ($this->type) {
			default:
?>
				<?php if ($this->type == 'input') : ?>
					<?php if (!empty($this->label)) : ?>
						<label for="<?php echo esc_attr($input_id); ?>" class="jinr-title"><?php echo esc_html($this->label); ?></label>
					<?php endif; ?>
					<?php if (!empty($this->description)) : ?>
						<span id="<?php echo esc_attr($description_id); ?>" class="description sns-description jinr-text-description"><?php echo $this->description; ?></span>
					<?php endif; ?>
				<?php elseif ($this->type == 'checkbox') : ?>
					<?php if (!empty($this->description)) : ?>
						<span id="<?php echo esc_attr($description_id); ?>" class="jinr-title"><?php echo $this->description; ?></span>
					<?php endif; ?>
					<div class="jinr-checkbox">
						<input id="<?php echo esc_attr($input_id); ?>" <?php echo $describedby_attr; ?> type="checkbox" value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> <?php checked($this->value()); ?> />
						<label for="<?php echo esc_attr($input_id); ?>">
							<div class="jinr-checkbox-base"></div>
							<div class="jinr-checkbox-circle"></div>
							<?php echo esc_html($this->label); ?>
						</label>
					</div>
				<?php endif; ?>
<?php
				break;
		}
	}
}
