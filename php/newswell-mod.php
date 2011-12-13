<?php
/**
 * Odyssey Promo Feed Template for displaying Posts on Odyssey web sites.
 *
 * @package WordPress
 */
?>
<?php //echo $_GET['category']; ?>

<?php 
// begin with a basic limit of 10 posts
$args = array(
    'posts_per_page'  => 10
);  

// assemble a string of categories to include and exclude
$_category_name = isset($_GET['categoryslug']) ? $_GET['categoryslug'] : '';
$_category_in = isset($_GET['category']) ? $_GET['category'] : '';
$_category_not_in = isset($_GET['excategory']) ? $_GET['excategory'] : '';

if ($_category_name!='') { // category slug takes precedence over everything
	$args['category_name'] = $_category_name;
	$label = "Slug:" . $_category_name;
} else {
	$args['category__in'] = $_category_in;
	$args['category__not_in'] = $_category_not_in;
	$label = "In: " . $_category_in . ", Ex: " . $_category_not_in;
}

// run the query
query_posts( $args );
//echo $label;
$_loop_index = 0;
?>

<div class="vertical-divider">
    <ol class="secP1 secP2">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php 
			$_kicker = get_post_meta(get_the_ID(), 'Kicker', true); 
			?>

			<li>
				<?php if ( $_kicker ) { ?> <span class="bold gray"><?php echo $_kicker; ?>:</span> <?php } ?>
				<a href="<?php the_permalink_rss() ?>"><?php the_title_rss() ?></a>
				<span class="time clienttime gel-time"><?php echo human_time_diff( get_post_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
				<!-- -->
				<?php if ($_loop_index == 4) echo "</ol><ol class=\"secP2\">"; ?>
			</li>
		<?php $_loop_index = $_loop_index+1; endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</ol>
</div>


