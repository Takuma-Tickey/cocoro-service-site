<?php
class Jinr_Range_Control extends WP_Customize_Control {
	public $type = 'range';

	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		$defaults = array(
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		);
		$args     = wp_parse_args( $args, $defaults );

		$this->min  = $args['min'];
		$this->max  = $args['max'];
		$this->step = $args['step'];
	}

	public function render_content() {
		$description_id   = '_customize-description-' . $this->id;
		$describedby_attr = (!empty($this->description)) ? ' aria-describedby="' . esc_attr($description_id) . '" ' : '';
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php if (!empty($this->description)) : ?>
				<span id="<?php echo esc_attr($description_id); ?>" class="description jinr-text-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
			<div class="jinr-range-box">
				<input class='jinr-range-slider range-slider' min="<?php echo $this->min; ?>" max="<?php echo $this->max; ?>" step="<?php echo $this->step; ?>" type='range' <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>" oninput="jQuery(this).next('input').val( jQuery(this).val() )">
				<input class='jinr-range-slider' onKeyUp="jQuery(this).prev('input').val( jQuery(this).val() )" type='number' value='<?php echo esc_attr( $this->value() ); ?>'>
			</div>

		</label>
			<?php
	}
}
