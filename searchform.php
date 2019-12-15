<?php
/**
 * Search form
 *
 * @package lerole
 */

?>
<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php $form_id = rand( 100, 9999 ); ?>
	<div class="field has-addons">
		<div class="control has-icons-left">
			<label class="screen-reader-text" for="s<?php echo $form_id; ?>"><?php esc_html_x( 'Search for:', 'label', 'lerole' ); ?></label>
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s<?php echo $form_id; ?>" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'lerole' ); ?>" class="input" /><span class="icon is-small is-left"><i class="fas fa-search"></i></span>
		</div>
		<div class="control">
			<input type="submit" name="submit" value="<?php esc_attr_e( 'Search', 'lerole' ); ?>" class="button is-info" />
		</div>
	</div>
</form>
