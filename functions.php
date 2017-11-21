<?php

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bxslider-css', get_stylesheet_directory_uri() . '/bxslider/jquery.bxslider.min.css' );
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script('bxslider', get_stylesheet_directory_uri() . '/bxslider/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


function codex_custom_init() {
// set up labels
	$labels = array(
		'name' => 'Autos',
		'singular_name' => 'Auto',
		'add_new' => 'Add New Auto',
		'add_new_item' => 'Add New Auto',
		'edit_item' => 'Edit Auto',
		'new_item' => 'New Auto',
		'all_items' => 'All Autos',
		'view_item' => 'View Auto',
		'search_items' => 'Search Autos',
		'not_found' =>  'No Autos Found',
		'not_found_in_trash' => 'No Autos found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Autos',
	);
	//register post type
	register_post_type( 'autos', array(
			'labels' => $labels,
			'has_archive' => true,
			'public' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
			'taxonomies' => array( 'post_tag', 'category' ),
			'exclude_from_search' => false,
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'autos' ),
		)
	);
}
add_action( 'init', 'codex_custom_init' );


/* Further reading meta boxes*/
add_action( 'add_meta_boxes', 'klunker_meta' );
function klunker_meta() {
	add_meta_box( 'car_data_meta_1', 'Car Data', 'klunker_meta_1', 'autos', 'normal', 'high' );
}

function klunker_meta_1( $post ) {
	$car_data_manufacturer = get_post_meta( $post->ID, '_car_data_manufacturer', true);
	$car_data_model = get_post_meta( $post->ID, '_car_data_model', true);
	$car_data_model_year = get_post_meta( $post->ID, '_car_data_model_year', true);
	$car_data_body_type = get_post_meta( $post->ID, '_car_data_body_type', true);
	$car_data_engine_hp = get_post_meta( $post->ID, '_car_data_engine_hp', true);
	$car_data_gearbox_type = get_post_meta( $post->ID, '_car_data_gearbox_type', true);
	$car_data_wheel_drive = get_post_meta( $post->ID, '_car_data_wheel_drive', true);


	$car_data_front_shock_absorber_price = get_post_meta( $post->ID, '_car_data_front_shock_absorber_price', true);
	$car_data_front_shock_absorber_price_2 = get_post_meta( $post->ID, '_car_data_front_shock_absorber_price_2', true);
	$car_data_front_shock_absorber_code = get_post_meta( $post->ID, '_car_data_front_shock_absorber_code', true);

	$car_data_front_spring_price = get_post_meta( $post->ID, '_car_data_front_spring_price', true);
	$car_data_front_spring_price_2 = get_post_meta( $post->ID, '_car_data_front_spring_price_2', true);
	$car_data_front_spring_code = get_post_meta( $post->ID, '_car_data_front_spring_code', true);

	$car_data_front_bush_price = get_post_meta( $post->ID, '_car_data_front_bush_price', true);
	$car_data_front_bush_code = get_post_meta( $post->ID, '_car_data_front_bush_code', true);

	$car_data_front_lower_arm_price = get_post_meta( $post->ID, '_car_data_front_lower_arm_price', true);
	$car_data_front_lower_arm_price_2 = get_post_meta( $post->ID, '_car_data_front_lower_arm_price_2', true);
	$car_data_front_lower_arm_code = get_post_meta( $post->ID, '_car_data_front_lower_arm_code', true);

	$car_data_front_brake_disc_price = get_post_meta( $post->ID, '_car_data_front_brake_disc_price', true);
	$car_data_front_brake_disc_price_2 = get_post_meta( $post->ID, '_car_data_front_brake_disc_price_2', true);
	$car_data_front_brake_disc_code = get_post_meta( $post->ID, '_car_data_front_brake_disc_code', true);

	$car_data_front_brake_pads_price = get_post_meta( $post->ID, '_car_data_front_brake_pads_price', true);
	$car_data_front_brake_pads_price_2 = get_post_meta( $post->ID, '_car_data_front_brake_pads_price_2', true);
	$car_data_front_brake_pads_code = get_post_meta( $post->ID, '_car_data_front_brake_pads_code', true);

	$car_data_front_hub_bearing_price = get_post_meta( $post->ID, '_car_data_front_hub_bearing_price', true);
	$car_data_front_hub_bearing_code = get_post_meta( $post->ID, '_car_data_front_hub_bearing_code', true);

	$car_data_front_hub_price = get_post_meta( $post->ID, '_car_data_front_hub_price', true);
	$car_data_front_hub_price_2 = get_post_meta( $post->ID, '_car_data_front_hub_price_2', true);
	$car_data_front_hub_code = get_post_meta( $post->ID, '_car_data_front_hub_code', true);

	$car_data_rear_shock_absorber_price = get_post_meta( $post->ID, '_car_data_rear_shock_absorber_price', true);
	$car_data_rear_shock_absorber_price_2 = get_post_meta( $post->ID, '_car_data_rear_shock_absorber_price_2', true);
	$car_data_rear_shock_absorber_code = get_post_meta( $post->ID, '_car_data_rear_shock_absorber_code', true);

	$car_data_rear_spring_price = get_post_meta( $post->ID, '_car_data_rear_spring_price', true);
	$car_data_rear_spring_price_2 = get_post_meta( $post->ID, '_car_data_rear_spring_price_2', true);
	$car_data_rear_spring_code = get_post_meta( $post->ID, '_car_data_rear_spring_code', true);

	$car_data_rear_hub_bearing_price = get_post_meta( $post->ID, '_car_data_rear_hub_bearing_price', true);
	$car_data_rear_hub_bearing_code = get_post_meta( $post->ID, '_car_data_rear_hub_bearing_code', true);

	$car_data_rear_hub_price = get_post_meta( $post->ID, '_car_data_rear_hub_price', true);
	$car_data_rear_hub_price_2 = get_post_meta( $post->ID, '_car_data_rear_hub_price_2', true);
	$car_data_rear_hub_code = get_post_meta( $post->ID, '_car_data_rear_hub_code', true);

	$car_data_headlamp_price = get_post_meta( $post->ID, '_car_data_headlamp_price', true);
	$car_data_headlamp_price_2 = get_post_meta( $post->ID, '_car_data_headlamp_price_2', true);
	$car_data_headlamp_code = get_post_meta( $post->ID, '_car_data_headlamp_code', true);

	$car_data_hood_price = get_post_meta( $post->ID, '_car_data_hood_price', true);
	$car_data_hood_price_2 = get_post_meta( $post->ID, '_car_data_hood_price_2', true);
	$car_data_hood_code = get_post_meta( $post->ID, '_car_data_hood_code', true);

	$car_data_front_bumper_price = get_post_meta( $post->ID, '_car_data_front_bumper_price', true);
	$car_data_front_bumper_code = get_post_meta( $post->ID, '_car_data_front_bumper_code', true);

	$car_data_front_fender_price = get_post_meta( $post->ID, '_car_data_front_fender_price', true);
	$car_data_front_fender_price_2 = get_post_meta( $post->ID, '_car_data_front_fender_price_2', true);
	$car_data_front_fender_code = get_post_meta( $post->ID, '_car_data_front_fender_code', true);

	$car_data_wind_screen_price = get_post_meta( $post->ID, '_car_data_wind_screen_price', true);
	$car_data_wind_screen_price_2 = get_post_meta( $post->ID, '_car_data_wind_screen_price_2', true);
	$car_data_wind_screen_code = get_post_meta( $post->ID, '_car_data_wind_screen_code', true);

	$car_data_fuel_pump_price = get_post_meta( $post->ID, '_car_data_fuel_pump_price', true);
	$car_data_fuel_pump_price_2 = get_post_meta( $post->ID, '_car_data_fuel_pump_price_2', true);
	$car_data_fuel_pump_code = get_post_meta( $post->ID, '_car_data_fuel_pump_code', true);

	$car_data_steering_rack = get_post_meta( $post->ID, '_car_data_steering_rack', true);
	$car_data_gearbox = get_post_meta( $post->ID, '_car_data_gearbox', true);
	?>
	<p>
		<label>Описание автомобиля:</label>
	</p>
	<p>
		<input type="text" name="car_data_manufacturer" value="<?php echo esc_attr( $car_data_manufacturer ); ?>" placeholder="Производитель"/>
	</p>
	<p>
		<input type="text" name="car_data_model" value="<?php echo esc_attr( $car_data_model ); ?>" placeholder="Модель"/>
	</p>
	<p>
		<input type="text" name="car_data_model_year" value="<?php echo esc_attr( $car_data_model_year ); ?>" placeholder="Модельный год"/>
	</p>
	<p>Кузов</p>
	<p>
		<select name="car_data_body_type">
			<option value="sedan" <?php if ($car_data_body_type == "sedan") { echo "selected";} ?>>Седан</option>
			<option value="hatchback" <?php if ($car_data_body_type == "hatchback") { echo "selected";} ?>>Хэтчбек</option>
			<option value="wagon" <?php if ($car_data_body_type == "wagon") { echo "selected";} ?>>Универсал</option>
			<option value="coupe" <?php if ($car_data_body_type == "coupe") { echo "selected";} ?>>Купе</option>
			<option value="convertible" <?php if ($car_data_body_type == "convertible") { echo "selected";} ?>>Кабрио</option>
			<option value="pickup" <?php if ($car_data_body_type == "pickup") { echo "selected";} ?>>Пикап</option>
		</select>
	</p>
	<p>
		<input type="text" name="car_data_engine_hp" value="<?php echo esc_attr( $car_data_engine_hp ); ?>" placeholder="Мощность ДВС"/>
	</p>
	<p>Привод</p>
	<p>
		<select name="car_data_wheel_drive">
			<option value="2wd" <?php if ($car_data_wheel_drive == "2wd") { echo "selected";} ?>>2WD</option>
			<option value="4wd" <?php if ($car_data_wheel_drive == "4wd") { echo "selected";} ?>>4WD</option>
		</select>
	</p>
	<p>Тип КПП</p>
	<p>
		<select name="car_data_gearbox_type">
			<option value="" <?php if ($car_data_gearbox_type == "") { echo "selected";} ?>>Механическая</option>
			<option value="hydro" <?php if ($car_data_gearbox_type == "hydro") { echo "selected";} ?>>Гидротрансформатор</option>
			<option value="cvt" <?php if ($car_data_gearbox_type == "cvt") { echo "selected";} ?>>Вариатор</option>
			<option value="singleclutch" <?php if ($car_data_gearbox_type == "singleclutch") { echo "selected";} ?>>Робот 1 сц</option>
			<option value="doubleclutch" <?php if ($car_data_gearbox_type == "doubleclutch") { echo "selected";} ?>>Робот 2 сц</option>
		</select>
	</p>
	<p>Запчасти для АКПП</p>
	<p>
		<select name="car_data_gearbox">
			<option value="1" <?php if ($car_data_gearbox == "1") { echo "selected";} ?>>Да</option>
			<option value="0" <?php if ($car_data_gearbox == "0") { echo "selected";} ?>>Нет</option>
		</select>
	</p>
	<p>Ремонтопригодность рейки</p>
	<p>
		<select name="car_data_steering_rack">
			<option value="1" <?php if ($car_data_steering_rack == "1") { echo "selected";} ?>>Да</option>
			<option value="0" <?php if ($car_data_steering_rack == "0") { echo "selected";} ?>>Нет</option>
		</select>
	</p>

	<p>
		<label>Цены запчастей:</label>
	</p>

	<p>
		<input type="text" size="30" name="car_data_front_shock_absorber_price" value="<?php echo esc_attr( $car_data_front_shock_absorber_price ); ?>" placeholder="Стойка амортизации перед"/>
		<input type="text" name="car_data_front_shock_absorber_price_2" value="<?php echo esc_attr( $car_data_front_shock_absorber_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_shock_absorber_code" value="<?php echo esc_attr( $car_data_front_shock_absorber_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_spring_price" value="<?php echo esc_attr( $car_data_front_spring_price ); ?>" placeholder="Передняя пружина"/>
		<input type="text" name="car_data_front_spring_price_2" value="<?php echo esc_attr( $car_data_front_spring_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_spring_code" value="<?php echo esc_attr( $car_data_front_spring_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_bush_price" value="<?php echo esc_attr( $car_data_front_bush_price ); ?>" placeholder="Шаровая нижняя (0 если не доступна)"/>
		<input type="text" name="car_data_front_bush_code" value="<?php echo esc_attr( $car_data_front_bush_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_lower_arm_price" value="<?php echo esc_attr( $car_data_front_lower_arm_price ); ?>" placeholder="Рычаг нижний в сборе"/>
		<input type="text" name="car_data_front_lower_arm_price_2" value="<?php echo esc_attr( $car_data_front_lower_arm_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_lower_arm_code" value="<?php echo esc_attr( $car_data_front_lower_arm_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_brake_disc_price" value="<?php echo esc_attr( $car_data_front_brake_disc_price ); ?>" placeholder="Передний тормозной диск"/>
		<input type="text" name="car_data_front_brake_disc_price_2" value="<?php echo esc_attr( $car_data_front_brake_disc_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_brake_disc_code" value="<?php echo esc_attr( $car_data_front_brake_disc_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_brake_pads_price" value="<?php echo esc_attr( $car_data_front_brake_pads_price ); ?>" placeholder="Передние колодки тормозные"/>
		<input type="text" name="car_data_front_brake_pads_price_2" value="<?php echo esc_attr( $car_data_front_brake_pads_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_brake_pads_code" value="<?php echo esc_attr( $car_data_front_brake_pads_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_hub_bearing_price" value="<?php echo esc_attr( $car_data_front_hub_bearing_price ); ?>" placeholder="Подшипник передней ступицы"/>
		<input type="text" name="car_data_front_hub_bearing_code" value="<?php echo esc_attr( $car_data_front_hub_bearing_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_hub_price" value="<?php echo esc_attr( $car_data_front_hub_price ); ?>" placeholder="Передняя ступица"/>
		<input type="text" name="car_data_front_hub_price_2" value="<?php echo esc_attr( $car_data_front_hub_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_hub_code" value="<?php echo esc_attr( $car_data_front_hub_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_rear_shock_absorber_price" value="<?php echo esc_attr( $car_data_rear_shock_absorber_price ); ?>" placeholder="Задняя стойка амортизации"/>
		<input type="text" name="car_data_rear_shock_absorber_price_2" value="<?php echo esc_attr( $car_data_rear_shock_absorber_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_rear_shock_absorber_code" value="<?php echo esc_attr( $car_data_rear_shock_absorber_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_rear_spring_price" value="<?php echo esc_attr( $car_data_rear_spring_price ); ?>" placeholder="Задняя пружина"/>
		<input type="text" name="car_data_rear_spring_price_2" value="<?php echo esc_attr( $car_data_rear_spring_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_rear_spring_code" value="<?php echo esc_attr( $car_data_rear_spring_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_rear_hub_bearing_price" value="<?php echo esc_attr( $car_data_rear_hub_bearing_price ); ?>" placeholder="Подшипник задней ступицы"/>
		<input type="text" name="car_data_rear_hub_bearing_code" value="<?php echo esc_attr( $car_data_rear_hub_bearing_code ); ?>" placeholder="Коде"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_rear_hub_price" value="<?php echo esc_attr( $car_data_rear_hub_price ); ?>" placeholder="Задняя ступица"/>
		<input type="text" name="car_data_rear_hub_price_2" value="<?php echo esc_attr( $car_data_rear_hub_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_rear_hub_code" value="<?php echo esc_attr( $car_data_rear_hub_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>

	<p>
		<label>Цены кузовных частей:</label>
	</p>

	<p>
		<input type="text" size="30" name="car_data_headlamp_price" value="<?php echo esc_attr( $car_data_headlamp_price ); ?>" placeholder="Фара"/>
		<input type="text" name="car_data_headlamp_price_2" value="<?php echo esc_attr( $car_data_headlamp_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_headlamp_code" value="<?php echo esc_attr( $car_data_headlamp_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_hood_price" value="<?php echo esc_attr( $car_data_hood_price ); ?>" placeholder="Капот"/>
		<input type="text" name="car_data_hood_price_2" value="<?php echo esc_attr( $car_data_hood_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_hood_code" value="<?php echo esc_attr( $car_data_hood_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_bumper_price" value="<?php echo esc_attr( $car_data_front_bumper_price ); ?>" placeholder="Передний бампер"/>
		<input type="text" name="car_data_front_bumper_code" value="<?php echo esc_attr( $car_data_front_bumper_code ); ?>" placeholder="Код"/>
	</p>
	<p>
		<input type="text" size="30" name="car_data_front_fender_price" value="<?php echo esc_attr( $car_data_front_fender_price ); ?>" placeholder="Переднее крыло"/>
		<input type="text" name="car_data_front_fender_price_2" value="<?php echo esc_attr( $car_data_front_fender_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_front_fender_code" value="<?php echo esc_attr( $car_data_front_fender_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_wind_screen_price" value="<?php echo esc_attr( $car_data_wind_screen_price ); ?>" placeholder="Лобовое стекло"/>
		<input type="text" name="car_data_wind_screen_price_2" value="<?php echo esc_attr( $car_data_wind_screen_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_wind_screen_code" value="<?php echo esc_attr( $car_data_wind_screen_code ); ?>" placeholder="Код"/>
	</p>
	<p>
	</p>
	<p>
		<input type="text" size="30" name="car_data_fuel_pump_price" value="<?php echo esc_attr( $car_data_fuel_pump_price ); ?>" placeholder="Топливный насос"/>
		<input type="text" name="car_data_fuel_pump_price_2" value="<?php echo esc_attr( $car_data_fuel_pump_price_2 ); ?>" placeholder="Дубликат"/>
		<input type="text" name="car_data_fuel_pump_code" value="<?php echo esc_attr( $car_data_fuel_pump_code ); ?>" placeholder="Код"/>
	</p>


	<?php
}





add_action( 'save_post', 'klunker_save_meta' );
function klunker_save_meta( $post_ID ) {
	global $post;
	if( $post->post_type == "autos" ) {
		if (isset( $_POST ) ) {
			update_post_meta( $post_ID, '_car_data_manufacturer', strip_tags( $_POST['car_data_manufacturer'] ) );
			update_post_meta( $post_ID, '_car_data_model', strip_tags( $_POST['car_data_model'] ) );
			update_post_meta( $post_ID, '_car_data_model_year', strip_tags( $_POST['car_data_model_year'] ) );
			update_post_meta( $post_ID, '_car_data_body_type', strip_tags( $_POST['car_data_body_type'] ) );
			update_post_meta( $post_ID, '_car_data_engine_hp', strip_tags( $_POST['car_data_engine_hp'] ) );
			update_post_meta( $post_ID, '_car_data_gearbox_type', strip_tags( $_POST['car_data_gearbox_type'] ) );
			update_post_meta( $post_ID, '_car_data_wheel_drive', strip_tags( $_POST['car_data_wheel_drive'] ) );

			update_post_meta( $post_ID, '_car_data_front_shock_absorber_price', strip_tags( trim($_POST['car_data_front_shock_absorber_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_shock_absorber_price_2', strip_tags( trim($_POST['car_data_front_shock_absorber_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_shock_absorber_code', strip_tags( trim($_POST['car_data_front_shock_absorber_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_spring_price', strip_tags( trim($_POST['car_data_front_spring_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_spring_price_2', strip_tags( trim($_POST['car_data_front_spring_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_spring_code', strip_tags( trim($_POST['car_data_front_spring_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_bush_price', strip_tags( trim($_POST['car_data_front_bush_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_bush_code', strip_tags( trim($_POST['car_data_front_bush_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_large_bush_price', strip_tags( trim($_POST['car_data_front_large_bush_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_large_bush_code', strip_tags( trim($_POST['car_data_front_large_bush_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_lower_arm_price', strip_tags( trim($_POST['car_data_front_lower_arm_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_lower_arm_price_2', strip_tags( trim($_POST['car_data_front_lower_arm_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_lower_arm_code', strip_tags( trim($_POST['car_data_front_lower_arm_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_disc_price', strip_tags( trim($_POST['car_data_front_brake_disc_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_disc_price_2', strip_tags( trim($_POST['car_data_front_brake_disc_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_disc_code', strip_tags( trim($_POST['car_data_front_brake_disc_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_pads_price', strip_tags( trim($_POST['car_data_front_brake_pads_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_pads_price_2', strip_tags( trim($_POST['car_data_front_brake_pads_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_brake_pads_code', strip_tags( trim($_POST['car_data_front_brake_pads_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_hub_bearing_price', strip_tags( trim($_POST['car_data_front_hub_bearing_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_hub_bearing_code', strip_tags( trim($_POST['car_data_front_hub_bearing_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_hub_price', strip_tags( trim($_POST['car_data_front_hub_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_hub_price_2', strip_tags( trim($_POST['car_data_front_hub_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_hub_code', strip_tags( trim($_POST['car_data_front_hub_code']) ) );

			update_post_meta( $post_ID, '_car_data_rear_shock_absorber_price', strip_tags( trim($_POST['car_data_rear_shock_absorber_price']) ) );
			update_post_meta( $post_ID, '_car_data_rear_shock_absorber_price_2', strip_tags( trim($_POST['car_data_rear_shock_absorber_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_rear_shock_absorber_code', strip_tags( trim($_POST['car_data_rear_shock_absorber_code']) ) );
			update_post_meta( $post_ID, '_car_data_rear_spring_price', strip_tags( trim($_POST['car_data_rear_spring_price']) ) );
			update_post_meta( $post_ID, '_car_data_rear_spring_price_2', strip_tags( trim($_POST['car_data_rear_spring_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_rear_spring_code', strip_tags( trim($_POST['car_data_rear_spring_code']) ) );
			update_post_meta( $post_ID, '_car_data_rear_hub_bearing_price', strip_tags( trim($_POST['car_data_rear_hub_bearing_price']) ) );
			update_post_meta( $post_ID, '_car_data_rear_hub_bearing_code', strip_tags( trim($_POST['car_data_rear_hub_bearing_code']) ) );
			update_post_meta( $post_ID, '_car_data_rear_hub_price', strip_tags( trim($_POST['car_data_rear_hub_price']) ) );
			update_post_meta( $post_ID, '_car_data_rear_hub_price_2', strip_tags( trim($_POST['car_data_rear_hub_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_rear_hub_code', strip_tags( trim($_POST['car_data_rear_hub_code']) ) );

			update_post_meta( $post_ID, '_car_data_headlamp_price', strip_tags( trim($_POST['car_data_headlamp_price']) ) );
			update_post_meta( $post_ID, '_car_data_headlamp_price_2', strip_tags( trim($_POST['car_data_headlamp_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_headlamp_code', strip_tags( trim($_POST['car_data_headlamp_code']) ) );
			update_post_meta( $post_ID, '_car_data_hood_price', strip_tags( trim($_POST['car_data_hood_price']) ) );
			update_post_meta( $post_ID, '_car_data_hood_price_2', strip_tags( trim($_POST['car_data_hood_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_hood_code', strip_tags( trim($_POST['car_data_hood_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_bumper_price', strip_tags( trim($_POST['car_data_front_bumper_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_bumper_code', strip_tags( trim($_POST['car_data_front_bumper_code']) ) );
			update_post_meta( $post_ID, '_car_data_front_fender_price', strip_tags( trim($_POST['car_data_front_fender_price']) ) );
			update_post_meta( $post_ID, '_car_data_front_fender_price_2', strip_tags( trim($_POST['car_data_front_fender_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_front_fender_code', strip_tags( trim($_POST['car_data_front_fender_code']) ) );
			update_post_meta( $post_ID, '_car_data_wind_screen_price', strip_tags( trim($_POST['car_data_wind_screen_price']) ) );
			update_post_meta( $post_ID, '_car_data_wind_screen_price_2', strip_tags( trim($_POST['car_data_wind_screen_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_wind_screen_code', strip_tags( trim($_POST['car_data_wind_screen_code']) ) );

			update_post_meta( $post_ID, '_car_data_fuel_pump_price', strip_tags( trim($_POST['car_data_fuel_pump_price']) ) );
			update_post_meta( $post_ID, '_car_data_fuel_pump_price_2', strip_tags( trim($_POST['car_data_fuel_pump_price_2']) ) );
			update_post_meta( $post_ID, '_car_data_fuel_pump_code', strip_tags( trim($_POST['car_data_fuel_pump_code']) ) );

			update_post_meta( $post_ID, '_car_data_steering_rack', strip_tags( $_POST['car_data_steering_rack'] ) );
			update_post_meta( $post_ID, '_car_data_gearbox', strip_tags( $_POST['car_data_gearbox'] ) );

			$total_drivetrain = intval(str_replace(' ', '', $_POST['car_data_front_shock_absorber_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_front_spring_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_front_bush_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_front_brake_disc_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_front_brake_pads_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_front_hub_bearing_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_rear_shock_absorber_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_rear_spring_price']))+
			                    intval(str_replace(' ', '', $_POST['car_data_rear_hub_bearing_price']));


			if ($_POST['car_data_front_bush_price'] == 0) {
				$total_drivetrain += intval(str_replace(' ', '', $_POST['car_data_front_lower_arm_price']));
            }

			if ($_POST['car_data_front_hub_bearing_price'] == 0) {
				$total_drivetrain += intval(str_replace(' ', '', $_POST['car_data_front_hub_price']));
            }

			if ($_POST['car_data_rear_hub_bearing_price'] == 0) {
				$total_drivetrain += intval(str_replace(' ', '', $_POST['car_data_front_hub_price']));
			}

			update_post_meta( $post_ID, '_car_data_drive_total', $total_drivetrain );


			$total_body = intval(str_replace(' ', '', $_POST['car_data_headlamp_price']))+
			              intval(str_replace(' ', '', $_POST['car_data_hood_price']))+
			              intval(str_replace(' ', '', $_POST['car_data_front_bumper_price']))+
			              intval(str_replace(' ', '', $_POST['car_data_front_fender_price']))+
			              intval(str_replace(' ', '', $_POST['car_data_wind_screen_price']));

			update_post_meta( $post_ID, '_car_data_body_total', $total_body );


















		}
	}
}

