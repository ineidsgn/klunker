<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<figure class="compare-table">
						<div class="row">
							<div class="col-md-4">Выберите две модели для сравнения:</div>
							<div class="col-md-4" id="auto_select_1" data-target="price_list_1">
								<?php klunker_car_list(); ?>
							</div>
							<div class="col-md-4" id="auto_select_2" data-target="price_list_2">
				        <?php klunker_car_list(); ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="parts-list">
									<h3>Ходовая часть</h3>
									<div>Амортизатор передний</div>
									<div>Пружина подвески передняя</div>
									<div>Шаровая опора нижнего рычага</div>
									<div>Рычаг подвески в сборе</div>
									<div>Диск тормозной передний</div>
									<div>Тормозные колодки передние</div>
									<div>Подшипник передней ступицы</div>
									<div>Передняя ступица в сборе</div>
									<div>Амортизатор задний</div>
									<div>Пружина задней подвески</div>
									<div>Подшипник задней ступицы</div>
									<div>Задняя ступица в сборе</div>
									<div><h3 class="text-right">Итого</h3></div>
								</div>

								<div class="parts-list">
									<h3>Кузовные части</h3>
									<div>Фара головного света</div>
									<div>Капот</div>
									<div>Бампер передний в сборе</div>
									<div>Крыло переднее</div>
									<div>Стекло лобовое</div>
									<div><h3 class="text-right">Итого</h3></div>
								</div>

								<div class="parts-list">
									<h3>Топливная система</h3>
									<div>Топливный насос</div>
								</div>

								<div class="parts-list">
									<h3>Технические решения</h3>
									<div>Рулевая рейка</div>
									<div>Трансмиссия</div>
								</div>

							</div>
							<div class="col-md-4" id="price_list_1"></div>
							<div class="col-md-4" id="price_list_2"></div>
						</div>
					</figure>
				</div>

      </article><!-- #post-## -->

				<?php
			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
