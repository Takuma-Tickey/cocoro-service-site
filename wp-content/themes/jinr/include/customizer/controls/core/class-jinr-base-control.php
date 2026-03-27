<?php
class Jinr_Base_Control extends WP_Customize_Control
{
	public $content = '';
	public function render_content()
	{
		$input_id         = '_customize-input-' . $this->id;
		$description_id   = '_customize-description-' . $this->id;
		$describedby_attr = (!empty($this->description)) ? ' aria-describedby="' . esc_attr($description_id) . '" ' : '';

		switch ($this->type) {
			case 'checkbox':
?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="jinr-title"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<span class="customize-inside-control-row">
					<input id="<?php echo esc_attr($input_id); ?>" <?php echo $describedby_attr; ?> type="checkbox" value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> <?php checked($this->value()); ?> />
					<label for="<?php echo esc_attr($input_id); ?>"><?php echo esc_html($this->label); ?></label>
				</span>
			<?php

				break;

			case 'radio':
				if (!empty($this->label)) {
					echo '<span class="jinr-title">' . $this->label . '</span>';
				}
				if (isset($this->content)) {
					echo $this->content;
				}
				if (empty($this->choices)) {
					return;
				}
				$name = '_customize-radio-' . $this->id;
			?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<div class="customize_inside_control">
					<?php foreach ($this->choices as $value => $label) : ?>
						<span class="customize-inside-control-row">
							<input id="<?php echo esc_attr($input_id . '-radio-' . $value); ?>" type="radio" <?php echo $describedby_attr; ?> value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php $this->link(); ?> <?php checked($this->value(), $value); ?> />
							<label for="<?php echo esc_attr($input_id . '-radio-' . $value); ?>"><?php echo esc_html($label); ?></label>
						</span>
					<?php endforeach; ?>
				</div>
			<?php
				break;
			case 'tab':
				if (isset($this->content)) {
					echo $this->content;
				}
				if (empty($this->choices)) {
					return;
				}
				$name = '_customize-radio-' . $this->id;
			?>
				<div class="customize_inside_control_tab">
					<?php foreach ($this->choices as $value => $label) : ?>
						<span class="customize-inside-control-row">
							<input id="<?php echo esc_attr($input_id . '-radio-' . $value); ?>" type="radio" <?php echo $describedby_attr; ?> value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php $this->link(); ?> <?php checked($this->value(), $value); ?> />
							<label for="<?php echo esc_attr($input_id . '-radio-' . $value); ?>"><?php echo esc_html($label); ?></label>
						</span>
					<?php endforeach; ?>
				</div>
			<?php
				break;

			case 'spmenu':
			?>
				<div class="jinr-spmane-image">
					<img src="<?php echo $this->description; ?>" alt="スマホメニューの画像">
				</div>
			<?php
				break;

			case 'select':
				if (empty($this->choices)) {
					return;
				}
			?>
				<?php if (!empty($this->label)) : ?>
					<label for="<?php echo esc_attr($input_id); ?>" class="jinr-title"><?php echo esc_html($this->label); ?></label>
				<?php endif; ?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<div class="cutomize-control-select jinr-select">
					<select id="<?php echo esc_attr($input_id); ?>" <?php echo $describedby_attr; ?> <?php $this->link(); ?> class="">
						<?php
						foreach ($this->choices as $value => $label) {
							echo '<option value="' . esc_attr($value) . '"' . selected($this->value(), $value, false) . '>' . $label . '</option>';
						}
						?>
					</select>
				</div>
			<?php
				break;

			case 'text':
			?>
				<?php if (!empty($this->label)) : ?>
					<label for="<?php echo esc_attr($input_id); ?>" class="jinr-title"><?php echo esc_html($this->label); ?></label>
				<?php endif; ?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<div class="jinr-text-input">
					<input id="<?php echo esc_attr($input_id); ?>" type="<?php echo esc_attr($this->type); ?>" <?php echo $describedby_attr; ?> <?php $this->input_attrs(); ?> <?php if (!isset($this->input_attrs['value'])) : ?> value="<?php echo esc_attr($this->value()); ?>" <?php endif; ?> <?php $this->link(); ?> />
				</div>
			<?php
				break;

			case 'textarea':
			?>
				<?php if (!empty($this->label)) : ?>
					<label for="<?php echo esc_attr($input_id); ?>" class="customize-control-title"><?php echo esc_html($this->label); ?></label>
				<?php endif; ?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<textarea id="<?php echo esc_attr($input_id); ?>" rows="5" <?php echo $describedby_attr; ?> <?php $this->input_attrs(); ?> <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
			<?php
				break;
			default:
			?>
				<?php if (!empty($this->label)) : ?>
					<label for="<?php echo esc_attr($input_id); ?>" class="jinr-title"><?php echo esc_html($this->label); ?></label>
				<?php endif; ?>
				<?php if (!empty($this->description)) : ?>
					<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<input id="<?php echo esc_attr($input_id); ?>" type="<?php echo esc_attr($this->type); ?>" <?php echo $describedby_attr; ?> <?php $this->input_attrs(); ?> <?php if (!isset($this->input_attrs['value'])) : ?> value="<?php echo esc_attr($this->value()); ?>" <?php endif; ?> <?php $this->link(); ?> />
<?php
				break;
		}
	}
}
