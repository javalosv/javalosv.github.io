<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id = uniqid( 'timeline-' );
$style = !empty($atts['timeline_style']) ? "{$atts['timeline_style']}" : 'timeline-second-style';
?>

<?php if (!empty($atts['title'])): ?>
	<div class="block-title fw-timeline-title">
		<h3><?php echo esc_html($atts['title']); ?></h3>
	</div>
<?php endif; ?>

<div id="<?php echo esc_attr($id); ?>" class="timeline <?php echo esc_attr($style); ?> clearfix">
	<?php foreach ($atts['timeline'] as $timeline):

	$title = $timeline['title'];
	$period = $timeline['period'];
	$company = $timeline['subtitle'];
	$text = $timeline['text'];
	$logo = $timeline['logo'];
	?>
		<?php if ($style == 'timeline-first-style') { ?>
		<div class="timeline-item">
			<span class="item-period"><?php echo esc_html($period); ?></span>
			<h4 class="item-title"><?php echo wp_kses_post($title); ?></h4>
			<span class="item-small"><?php echo esc_html($company); ?></span>
			<?php if( !empty( $logo ) ) : ?>
			<span class="item-logo"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php esc_attr_e('image', 'kerge-shortcodes'); ?>" /></span>
			<?php endif; ?>
			<p><?php echo wp_kses_post($text); ?></p>
		</div>
		<?php } else { ?>
		<div class="timeline-item clearfix">
			<div class="left-part">
				<h5 class="item-period"><?php echo esc_html($period); ?></h5>
				<span class="item-company"><?php echo esc_html($company); ?></span>
				<?php if( !empty( $logo ) ) : ?>
				<span class="item-logo"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php esc_attr_e('image', 'kerge-shortcodes'); ?>" /></span>
				<?php endif; ?>
			</div>
			<div class="divider"></div>
			<div class="right-part">
				<h4 class="item-title"><?php echo wp_kses_post($title); ?></h4>
				<p><?php echo wp_kses_post($text); ?></p>
			</div>
		</div>
		<?php } ?>
	<?php endforeach; ?>
</div>
