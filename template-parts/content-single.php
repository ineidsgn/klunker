<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <div class="row">
        <div class="col-md-4">
	        <?php twentysixteen_post_thumbnail(); ?>
        </div>
        <div class="col-md-8">
	        <?php twentysixteen_excerpt(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
	        <?php
	        the_content();
	        ?>
         </div>
    </div>

	<div class="entry-content">

        <h2>Запасные части</h2>
        <h3>Ходовая часть</h3>

        <div class="parts-table">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3">Оригинал</div>
                <div class="col-md-3">Дубликат</div>
            </div>
            <div class="row">
                <div class="col-md-6">Амортизатор передний</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_shock_absorber_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_shock_absorber_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Пружина подвески передняя</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_spring_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_spring_price_2', true); ?></div>
            </div>
            <div class="row <?php if (get_post_meta( $post->ID, '_car_data_front_bush_price', true) == 0) {echo "bg-warning";}?>">
                <div class="col-md-6">Шаровая опора нижнего рычага</div>
		        <?php if (get_post_meta( $post->ID, '_car_data_front_bush_price', true) == 0) {?>
                    <div class="col-md-6">Замена только в сборе с рычагом подвески</div>
		        <?php } else { ?>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_bush_price', true); ?></div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_bush_price_price_2', true); ?></div>
		        <?php } ?>
            </div>
	        <?php if (get_post_meta( $post->ID, '_car_data_front_bush_price', true) == 0) {?>
                <div class="row">
                    <div class="col-md-6">Рычаг подвески в сборе</div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_lower_arm_price', true); ?></div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_lower_arm_price_2', true); ?></div>
                </div>
	        <?php } ?>
            <div class="row">
                <div class="col-md-6">Диск тормозной передний</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_brake_disc_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_brake_disc_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Тормозные колодки передние</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_brake_pads_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_brake_pads_price_2', true); ?></div>
            </div>
            <div class="row <?php if (get_post_meta( $post->ID, '_car_data_front_hub_bearing_price', true) == 0) {echo "bg-warning";}?>">
                <div class="col-md-6">Подшипник передней ступицы</div>
	            <?php if (get_post_meta( $post->ID, '_car_data_front_hub_bearing_price', true) == 0) {?>
                    <div class="col-md-6">Замена только в сборе со ступицей</div>
	            <?php } else { ?>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_hub_bearing_price', true); ?></div>
	            <?php } ?>
            </div>
	        <?php if (get_post_meta( $post->ID, '_car_data_front_hub_bearing_price', true) == 0) {?>
                <div class="row">
                    <div class="col-md-6">Передняя ступица в сборе</div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_hub_price', true); ?></div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_hub_price_2', true); ?></div>
                </div>
	        <?php } ?>
            <div class="row">
                <div class="col-md-6">Амортизатор задний</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_shock_absorber_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_shock_absorber_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Пружина задней подвески</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_spring_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_spring_price_2', true); ?></div>
            </div>
            <div class="row <?php if (get_post_meta( $post->ID, '_car_data_rear_hub_bearing_price', true) == 0) {echo "bg-warning";}?>">
                <div class="col-md-6">Подшипник задней ступицы</div>
	            <?php if (get_post_meta( $post->ID, '_car_data_rear_hub_bearing_price', true) == 0) {?>
                    <div class="col-md-6">Замена только в сборе со ступицей</div>
	            <?php } else { ?>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_hub_bearing_price', true); ?></div>
	            <?php } ?>
            </div>
	        <?php if (get_post_meta( $post->ID, '_car_data_rear_hub_bearing_price', true) == 0) {?>
                <div class="row">
                    <div class="col-md-6">Задняя ступица в сборе</div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_hub_price', true); ?></div>
                    <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_rear_hub_price_2', true); ?></div>
                </div>
	        <?php } ?>
            <div class="row">
                <div class="col-md-6"><h3 class="text-right">Итого</h3></div>
                <div class="col-md-3"><h3><?php echo get_post_meta( $post->ID, '_car_data_drive_total', true); ?></h3></div>
                <div class="col-md-3"></div>
            </div>

        </div>

        <h3>Кузовные части</h3>
        <div class="parts-table">
            <div class="row">
                <div class="col-md-6">Фара головного света</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_headlamp_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_headlamp_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Капот</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_hood_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_hood_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Бампер передний в сборе</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_bumper_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_bumper_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Крыло переднее</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_fender_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_front_fender_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">Стекло лобовое</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_wind_screen_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_wind_screen_price_2', true); ?></div>
            </div>
            <div class="row">
                <div class="col-md-6 "><h3 class="text-right">Итого</h3></div>
                <div class="col-md-3"><h3><?php echo get_post_meta( $post->ID, '_car_data_body_total', true); ?></h3></div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <h3>Топливная система</h3>
        <div class="parts-table">
            <div class="row ">
                <div class="col-md-6">Топливный насос</div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_fuel_pump_price', true); ?></div>
                <div class="col-md-3"><?php echo get_post_meta( $post->ID, '_car_data_fuel_pump_price_2', true); ?></div>
            </div>


        </div>

        <h3>Технические решения</h3>
        <div class="parts-table">
            <div class="row <?php if (get_post_meta( $post->ID, '_car_data_steering_rack', true) == 0) {echo "bg-warning";} else {echo "bg-success";}?>">
	            <?php if (get_post_meta( $post->ID, '_car_data_steering_rack', true) == 0) {?>
                    <div class="col-md-12">Ремкомплект рулевой рейки недоступен, предусмотрена замена рейки целиком</div>
	            <?php } else { ?>
                    <div class="col-md-12">Ремкомплект рулевой рейки доступен</div>
	            <?php } ?>
            </div>
            <div class="row <?php if (get_post_meta( $post->ID, '_car_data_gearbox', true) == 0) {echo "bg-warning";} else {echo "bg-success";}?>">
		        <?php if (get_post_meta( $post->ID, '_car_data_gearbox', true) == 0) {?>
                    <div class="col-md-12">Детали коробки передач недоступны, предусмотрена замена агрегата целиком</div>
		        <?php } else { ?>
                    <div class="col-md-12">Детали коробки передач доступны</div>
		        <?php } ?>
            </div>

        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php get_post_meta(get_the_ID()); ?>
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
