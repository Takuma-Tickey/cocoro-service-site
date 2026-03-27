<?php
if (class_exists('WP_Customize_Control')) {
	class Jinr_RadioBox_Control extends WP_Customize_Control
	{
		public $type = 'image-label-radio';
		public function render_content()
		{
			$input_id = '_customize-input-' . $this->id;
			$description_id = '_customize-description-' . $this->id;
			$describedby_attr = (!empty($this->description)) ? ' aria-describedby="' . esc_attr($description_id) . '" ' : '';
			if (empty($this->choices)) {
				return;
			}

			$name = '_customize-radio-' . $this->id;
?>
			<?php if (!empty($this->label)) : ?>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<?php endif; ?>
			<?php if (!empty($this->description)) : ?>
				<span id="<?php echo esc_attr($description_id); ?>" class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
			<ul class="o--icon-list">
				<?php foreach ($this->choices as $value => $label) : ?>
					<li class="c--icon-item">
						<input id="<?php echo esc_attr($input_id . '-iconitem-' . $value); ?>" type="radio" <?php echo $describedby_attr; ?> value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php $this->link(); ?> <?php checked($this->value(), $value); ?> />
						<label for="<?php echo esc_attr($input_id . '-iconitem-' . $value); ?>"><i class="jin-icons jin-ifont-<?php echo $label; ?>"></i></label>
					</li>
				<?php endforeach; ?>
			</ul>
<?php
		}
	}
}
