<?php
/*
 * Plugin Name: Insurance Calc Green
 * Description: настройки для калькулятора зеленая карта
*/
?>
<?php
add_action( 'admin_menu', 'inscal_green_add_admin_menu' );
add_action( 'admin_init', 'inscal_green_settings_init' );


function inscal_green_add_admin_menu(  ) {

	add_menu_page( 'insurance_calculator_green', 'Калькулятор зелена карта', 'manage_options', 'insurance_calculator_green', 'inscal_green_options_page' );

}


function inscal_green_settings_init(  ) {

	register_setting( 'pluginPage2', 'inscal_green_settings' );

	//Controllers
	add_settings_section(
		'inscal_green_pluginPage2_section7',
		__( 'Страхова компанія', 'wordpress' ),
		'inscal_green_settings_section_callback7',
		'pluginPage2'
	);

	//1-st insurance PZU
	add_settings_section(
		'inscal_green_pluginPage2_section1',
		__( 'ПЗУ Країни Європи', 'wordpress' ),
		'inscal_green_settings_section_callback1',
		'pluginPage2'
	);
	add_settings_section(
		'inscal_green_pluginPage2_section2',
		__( 'ПЗУ Країни СНГ', 'wordpress' ),
		'inscal_green_settings_section_callback2',
		'pluginPage2'
	);

	//2-st insurance Knyazha
	add_settings_section(
		'inscal_green_pluginPage2_section3',
		__( 'Княжа Країни Європи', 'wordpress' ),
		'inscal_green_settings_section_callback3',
		'pluginPage2'
	);
	add_settings_section(
		'inscal_green_pluginPage2_section4',
		__( 'Княжа Країни СНГ', 'wordpress' ),
		'inscal_green_settings_section_callback4',
		'pluginPage2'
	);

	//3-st insurance Random
	add_settings_section(
		'inscal_green_pluginPage2_section5',
		__( 'Інша Країни Європи', 'wordpress' ),
		'inscal_green_settings_section_callback5',
		'pluginPage2'
	);
	add_settings_section(
		'inscal_green_pluginPage2_section6',
		__( 'Інша Країни СНГ', 'wordpress' ),
		'inscal_green_settings_section_callback6',
		'pluginPage2'
	);

	//Show 3-t Ins-company
	add_settings_section(
		'inscal_green_pluginPage2_section8',
		__( 'Відображати 3 страхову компанію', 'wordpress' ),
		'inscal_green_settings_section_callback8',
		'pluginPage2'
	);

	//----------------------------------------//

	//Show 3-t Ins-company field
	add_settings_field(
		'insurance_add',
		__( '', 'wordpress' ),
		'insurance_add_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section8'
	);

	//PZU fields
	add_settings_field(
		'pzu_car_field',
		__( '', 'wordpress' ),
		'pzu_car_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
	add_settings_field(
		'pzu_trailer_field',
		__( '', 'wordpress' ),
		'pzu_trailer_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
	add_settings_field(
		'pzu_bike_field',
		__( '', 'wordpress' ),
		'pzu_bike_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
	add_settings_field(
		'pzu_car_field_sng',
		__( '', 'wordpress' ),
		'pzu_car_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);
	add_settings_field(
		'pzu_trailer_field_sng',
		__( '', 'wordpress' ),
		'pzu_trailer_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);
	add_settings_field(
		'pzu_bike_field_sng',
		__( '', 'wordpress' ),
		'pzu_bike_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);


	//Knyazha fields
	add_settings_field(
		'knz_car_field',
		__( '', 'wordpress' ),
		'knz_car_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section3'
	);
	add_settings_field(
		'knz_trailer_field',
		__( '', 'wordpress' ),
		'knz_trailer_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section3'
	);
	add_settings_field(
		'knz_bike_field',
		__( '', 'wordpress' ),
		'knz_bike_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section3'
	);
	add_settings_field(
		'knz_car_field_sng',
		__( '', 'wordpress' ),
		'knz_car_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section4'
	);
	add_settings_field(
		'knz_trailer_field_sng',
		__( '', 'wordpress' ),
		'knz_trailer_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section4'
	);
	add_settings_field(
		'knz_bike_field_sng',
		__( '', 'wordpress' ),
		'knz_bike_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section4'
	);

	//Random fields
	add_settings_field(
		'rnd_car_field',
		__( '', 'wordpress' ),
		'rnd_car_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section5'
	);
	add_settings_field(
		'rnd_trailer_field',
		__( '', 'wordpress' ),
		'rnd_trailer_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section5'
	);
	add_settings_field(
		'rnd_bike_field',
		__( '', 'wordpress' ),
		'rnd_bike_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section5'
	);
	add_settings_field(
		'rnd_car_field_sng',
		__( '', 'wordpress' ),
		'rnd_car_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section6'
	);
	add_settings_field(
		'rnd_trailer_field_sng',
		__( '', 'wordpress' ),
		'rnd_trailer_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section6'
	);
	add_settings_field(
		'rnd_bike_field_sng',
		__( '', 'wordpress' ),
		'rnd_bike_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section6'
	);

	//Controllers fields
	add_settings_field(
		'controller_field',
		__( '', 'wordpress' ),
		'controller_renderer',
		'pluginPage2',
		'inscal_green_pluginPage2_section7'
	);
}

function controller_renderer(  ) {
	$options = get_option( 'inscal_green_settings' );
	?>
<select class="change_ins" name="">
	<option selected value="pzu">ПЗУ Україна (Польща)</option>
	<option value="knz">Княжа (Австрія)</option>
	<option value="rnd">Інша</option>
</select>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function(){
	let selectVal = document.querySelector('.change_ins').value,
			containers = document.querySelectorAll('.green-table-container'),
			h2 = document.querySelectorAll('.update-nag + form h2'),
			allTable = document.querySelectorAll('.form-table');

	h2.forEach(function(item, i) {
		if (i > 1 && i < h2.length-1) {
			item.style.display = 'none'
		}
	})

	allTable.forEach(function(item, i) {
		if (i === 0 || i === allTable.length-1) {
			item.style.display = 'block'
		}
	})

	showInsBlock()

	function showInsBlock() {
		containers.forEach(function(target) {
			let table = target.parentNode.parentNode.parentNode.parentNode;
			if (target.classList.contains(selectVal)) {
				table.previousElementSibling.style.display = 'block'
				table.style.display = 'block'
			} else {
				table.previousElementSibling.style.display = 'none'
				table.style.display = 'none'
			}
		})
	}

	document.querySelector('.change_ins').onchange = function() {
		selectVal = document.querySelector('.change_ins').value

		showInsBlock()
	}
})

</script>

	<?php
}

function insurance_add_render(  ) {
	$options = get_option( 'inscal_green_settings' );
	?>
	<input type='checkbox' id='ins_add' <?php if ($options["ins_add"] == "on") { echo 'checked'; } ?> name='inscal_green_settings[ins_add]'></td>

	<?php
}

function pzu_car_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<style media="screen">
		.form-table {
			display: none;
		}

		.green-table-container {
			/*display: none;*/
			overflow-x: auto;
			text-align: center;
			width: 100%;
		}

		.green-table {
			width: 100%;
		}

		.form-table>tbody>tr>th{
			padding: 0;
			width: 0;
		}

		.green-table input {
			width: 50px;
		}
	</style>
	<div class="green-table-container pzu">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_c]' value='<?php echo $options['pzu_15_d_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_c]' value='<?php echo $options['pzu_1_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_c]' value='<?php echo $options['pzu_2_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_c]' value='<?php echo $options['pzu_3_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_c]' value='<?php echo $options['pzu_4_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_c]' value='<?php echo $options['pzu_5_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_c]' value='<?php echo $options['pzu_6_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_c]' value='<?php echo $options['pzu_7_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_c]' value='<?php echo $options['pzu_8_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_c]' value='<?php echo $options['pzu_9_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_c]' value='<?php echo $options['pzu_10_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_c]' value='<?php echo $options['pzu_11_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_c]' value='<?php echo $options['pzu_12_m_c']; ?>'></td>
			</tr>
	<?php

}

function pzu_trailer_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_t]' value='<?php echo $options['pzu_15_d_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_t]' value='<?php echo $options['pzu_1_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_t]' value='<?php echo $options['pzu_2_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_t]' value='<?php echo $options['pzu_3_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_t]' value='<?php echo $options['pzu_4_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_t]' value='<?php echo $options['pzu_5_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_t]' value='<?php echo $options['pzu_6_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_t]' value='<?php echo $options['pzu_7_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_t]' value='<?php echo $options['pzu_8_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_t]' value='<?php echo $options['pzu_9_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_t]' value='<?php echo $options['pzu_10_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_t]' value='<?php echo $options['pzu_11_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_t]' value='<?php echo $options['pzu_12_m_t']; ?>'></td>
			</tr>
	<?php

}

function pzu_bike_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_b]' value='<?php echo $options['pzu_15_d_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_b]' value='<?php echo $options['pzu_1_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_b]' value='<?php echo $options['pzu_2_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_b]' value='<?php echo $options['pzu_3_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_b]' value='<?php echo $options['pzu_4_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_b]' value='<?php echo $options['pzu_5_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_b]' value='<?php echo $options['pzu_6_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_b]' value='<?php echo $options['pzu_7_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_b]' value='<?php echo $options['pzu_8_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_b]' value='<?php echo $options['pzu_9_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_b]' value='<?php echo $options['pzu_10_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_b]' value='<?php echo $options['pzu_11_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_b]' value='<?php echo $options['pzu_12_m_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function pzu_car_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container pzu">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_sng_c]' value='<?php echo $options['pzu_15_d_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_sng_c]' value='<?php echo $options['pzu_1_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_sng_c]' value='<?php echo $options['pzu_2_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_sng_c]' value='<?php echo $options['pzu_3_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_sng_c]' value='<?php echo $options['pzu_4_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_sng_c]' value='<?php echo $options['pzu_5_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_sng_c]' value='<?php echo $options['pzu_6_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_sng_c]' value='<?php echo $options['pzu_7_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_sng_c]' value='<?php echo $options['pzu_8_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_sng_c]' value='<?php echo $options['pzu_9_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_sng_c]' value='<?php echo $options['pzu_10_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_sng_c]' value='<?php echo $options['pzu_11_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_sng_c]' value='<?php echo $options['pzu_12_m_sng_c']; ?>'></td>
			</tr>
	<?php

}

function pzu_trailer_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_sng_t]' value='<?php echo $options['pzu_15_d_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_sng_t]' value='<?php echo $options['pzu_1_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_sng_t]' value='<?php echo $options['pzu_2_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_sng_t]' value='<?php echo $options['pzu_3_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_sng_t]' value='<?php echo $options['pzu_4_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_sng_t]' value='<?php echo $options['pzu_5_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_sng_t]' value='<?php echo $options['pzu_6_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_sng_t]' value='<?php echo $options['pzu_7_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_sng_t]' value='<?php echo $options['pzu_8_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_sng_t]' value='<?php echo $options['pzu_9_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_sng_t]' value='<?php echo $options['pzu_10_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_sng_t]' value='<?php echo $options['pzu_11_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_sng_t]' value='<?php echo $options['pzu_12_m_sng_t']; ?>'></td>
			</tr>
	<?php

}

function pzu_bike_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[pzu_15_d_sng_b]' value='<?php echo $options['pzu_15_d_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_1_m_sng_b]' value='<?php echo $options['pzu_1_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_2_m_sng_b]' value='<?php echo $options['pzu_2_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_3_m_sng_b]' value='<?php echo $options['pzu_3_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_4_m_sng_b]' value='<?php echo $options['pzu_4_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_5_m_sng_b]' value='<?php echo $options['pzu_5_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_6_m_sng_b]' value='<?php echo $options['pzu_6_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_7_m_sng_b]' value='<?php echo $options['pzu_7_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_8_m_sng_b]' value='<?php echo $options['pzu_8_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_9_m_sng_b]' value='<?php echo $options['pzu_9_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_10_m_sng_b]' value='<?php echo $options['pzu_10_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_11_m_sng_b]' value='<?php echo $options['pzu_11_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[pzu_12_m_sng_b]' value='<?php echo $options['12_m_sng_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function knz_car_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container knz">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_c]' value='<?php echo $options['knz_15_d_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_c]' value='<?php echo $options['knz_1_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_c]' value='<?php echo $options['knz_2_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_c]' value='<?php echo $options['knz_3_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_c]' value='<?php echo $options['knz_4_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_c]' value='<?php echo $options['knz_5_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_c]' value='<?php echo $options['knz_6_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_c]' value='<?php echo $options['knz_7_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_c]' value='<?php echo $options['knz_8_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_c]' value='<?php echo $options['knz_9_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_c]' value='<?php echo $options['knz_10_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_c]' value='<?php echo $options['knz_11_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_c]' value='<?php echo $options['knz_12_m_c']; ?>'></td>
			</tr>
	<?php

}

function knz_trailer_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_t]' value='<?php echo $options['knz_15_d_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_t]' value='<?php echo $options['knz_1_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_t]' value='<?php echo $options['knz_2_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_t]' value='<?php echo $options['knz_3_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_t]' value='<?php echo $options['knz_4_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_t]' value='<?php echo $options['knz_5_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_t]' value='<?php echo $options['knz_6_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_t]' value='<?php echo $options['knz_7_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_t]' value='<?php echo $options['knz_8_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_t]' value='<?php echo $options['knz_9_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_t]' value='<?php echo $options['knz_10_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_t]' value='<?php echo $options['knz_11_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_t]' value='<?php echo $options['knz_12_m_t']; ?>'></td>
			</tr>
	<?php

}

function knz_bike_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_b]' value='<?php echo $options['knz_15_d_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_b]' value='<?php echo $options['knz_1_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_b]' value='<?php echo $options['knz_2_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_b]' value='<?php echo $options['knz_3_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_b]' value='<?php echo $options['knz_4_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_b]' value='<?php echo $options['knz_5_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_b]' value='<?php echo $options['knz_6_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_b]' value='<?php echo $options['knz_7_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_b]' value='<?php echo $options['knz_8_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_b]' value='<?php echo $options['knz_9_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_b]' value='<?php echo $options['knz_10_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_b]' value='<?php echo $options['knz_11_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_b]' value='<?php echo $options['knz_12_m_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function knz_car_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container knz">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_sng_c]' value='<?php echo $options['knz_15_d_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_sng_c]' value='<?php echo $options['knz_1_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_sng_c]' value='<?php echo $options['knz_2_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_sng_c]' value='<?php echo $options['knz_3_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_sng_c]' value='<?php echo $options['knz_4_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_sng_c]' value='<?php echo $options['knz_5_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_sng_c]' value='<?php echo $options['knz_6_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_sng_c]' value='<?php echo $options['knz_7_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_sng_c]' value='<?php echo $options['knz_8_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_sng_c]' value='<?php echo $options['knz_9_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_sng_c]' value='<?php echo $options['knz_10_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_sng_c]' value='<?php echo $options['knz_11_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_sng_c]' value='<?php echo $options['knz_12_m_sng_c']; ?>'></td>
			</tr>
	<?php

}

function knz_trailer_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_sng_t]' value='<?php echo $options['knz_15_d_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_sng_t]' value='<?php echo $options['knz_1_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_sng_t]' value='<?php echo $options['knz_2_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_sng_t]' value='<?php echo $options['knz_3_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_sng_t]' value='<?php echo $options['knz_4_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_sng_t]' value='<?php echo $options['knz_5_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_sng_t]' value='<?php echo $options['knz_6_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_sng_t]' value='<?php echo $options['knz_7_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_sng_t]' value='<?php echo $options['knz_8_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_sng_t]' value='<?php echo $options['knz_9_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_sng_t]' value='<?php echo $options['knz_10_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_sng_t]' value='<?php echo $options['knz_11_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_sng_t]' value='<?php echo $options['knz_12_m_sng_t']; ?>'></td>
			</tr>
	<?php

}

function knz_bike_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[knz_15_d_sng_b]' value='<?php echo $options['knz_15_d_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_1_m_sng_b]' value='<?php echo $options['knz_1_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_2_m_sng_b]' value='<?php echo $options['knz_2_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_3_m_sng_b]' value='<?php echo $options['knz_3_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_4_m_sng_b]' value='<?php echo $options['knz_4_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_5_m_sng_b]' value='<?php echo $options['knz_5_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_6_m_sng_b]' value='<?php echo $options['knz_6_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_7_m_sng_b]' value='<?php echo $options['knz_7_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_8_m_sng_b]' value='<?php echo $options['knz_8_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_9_m_sng_b]' value='<?php echo $options['knz_9_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_10_m_sng_b]' value='<?php echo $options['knz_10_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_11_m_sng_b]' value='<?php echo $options['knz_11_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[knz_12_m_sng_b]' value='<?php echo $options['12_m_sng_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function rnd_car_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container rnd">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_c]' value='<?php echo $options['rnd_15_d_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_c]' value='<?php echo $options['rnd_1_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_c]' value='<?php echo $options['rnd_2_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_c]' value='<?php echo $options['rnd_3_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_c]' value='<?php echo $options['rnd_4_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_c]' value='<?php echo $options['rnd_5_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_c]' value='<?php echo $options['rnd_6_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_c]' value='<?php echo $options['rnd_7_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_c]' value='<?php echo $options['rnd_8_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_c]' value='<?php echo $options['rnd_9_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_c]' value='<?php echo $options['rnd_10_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_c]' value='<?php echo $options['rnd_11_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_c]' value='<?php echo $options['rnd_12_m_c']; ?>'></td>
			</tr>
	<?php

}

function rnd_trailer_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_t]' value='<?php echo $options['rnd_15_d_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_t]' value='<?php echo $options['rnd_1_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_t]' value='<?php echo $options['rnd_2_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_t]' value='<?php echo $options['rnd_3_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_t]' value='<?php echo $options['rnd_4_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_t]' value='<?php echo $options['rnd_5_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_t]' value='<?php echo $options['rnd_6_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_t]' value='<?php echo $options['rnd_7_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_t]' value='<?php echo $options['rnd_8_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_t]' value='<?php echo $options['rnd_9_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_t]' value='<?php echo $options['rnd_10_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_t]' value='<?php echo $options['rnd_11_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_t]' value='<?php echo $options['rnd_12_m_t']; ?>'></td>
			</tr>
	<?php

}

function rnd_bike_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_b]' value='<?php echo $options['rnd_15_d_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_b]' value='<?php echo $options['rnd_1_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_b]' value='<?php echo $options['rnd_2_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_b]' value='<?php echo $options['rnd_3_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_b]' value='<?php echo $options['rnd_4_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_b]' value='<?php echo $options['rnd_5_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_b]' value='<?php echo $options['rnd_6_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_b]' value='<?php echo $options['rnd_7_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_b]' value='<?php echo $options['rnd_8_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_b]' value='<?php echo $options['rnd_9_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_b]' value='<?php echo $options['rnd_10_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_b]' value='<?php echo $options['rnd_11_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_b]' value='<?php echo $options['rnd_12_m_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function rnd_car_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container rnd">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_sng_c]' value='<?php echo $options['rnd_15_d_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_sng_c]' value='<?php echo $options['rnd_1_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_sng_c]' value='<?php echo $options['rnd_2_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_sng_c]' value='<?php echo $options['rnd_3_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_sng_c]' value='<?php echo $options['rnd_4_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_sng_c]' value='<?php echo $options['rnd_5_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_sng_c]' value='<?php echo $options['rnd_6_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_sng_c]' value='<?php echo $options['rnd_7_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_sng_c]' value='<?php echo $options['rnd_8_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_sng_c]' value='<?php echo $options['rnd_9_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_sng_c]' value='<?php echo $options['rnd_10_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_sng_c]' value='<?php echo $options['rnd_11_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_sng_c]' value='<?php echo $options['rnd_12_m_sng_c']; ?>'></td>
			</tr>
	<?php

}

function rnd_trailer_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_sng_t]' value='<?php echo $options['rnd_15_d_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_sng_t]' value='<?php echo $options['rnd_1_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_sng_t]' value='<?php echo $options['rnd_2_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_sng_t]' value='<?php echo $options['rnd_3_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_sng_t]' value='<?php echo $options['rnd_4_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_sng_t]' value='<?php echo $options['rnd_5_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_sng_t]' value='<?php echo $options['rnd_6_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_sng_t]' value='<?php echo $options['rnd_7_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_sng_t]' value='<?php echo $options['rnd_8_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_sng_t]' value='<?php echo $options['rnd_9_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_sng_t]' value='<?php echo $options['rnd_10_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_sng_t]' value='<?php echo $options['rnd_11_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_sng_t]' value='<?php echo $options['rnd_12_m_sng_t']; ?>'></td>
			</tr>
	<?php

}

function rnd_bike_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[rnd_15_d_sng_b]' value='<?php echo $options['rnd_15_d_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_1_m_sng_b]' value='<?php echo $options['rnd_1_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_2_m_sng_b]' value='<?php echo $options['rnd_2_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_3_m_sng_b]' value='<?php echo $options['rnd_3_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_4_m_sng_b]' value='<?php echo $options['rnd_4_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_5_m_sng_b]' value='<?php echo $options['rnd_5_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_6_m_sng_b]' value='<?php echo $options['rnd_6_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_7_m_sng_b]' value='<?php echo $options['rnd_7_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_8_m_sng_b]' value='<?php echo $options['rnd_8_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_9_m_sng_b]' value='<?php echo $options['rnd_9_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_10_m_sng_b]' value='<?php echo $options['rnd_10_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_11_m_sng_b]' value='<?php echo $options['rnd_11_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[rnd_12_m_sng_b]' value='<?php echo $options['12_m_sng_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function inscal_green_settings_section_callback1(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback2(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback3(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback4(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback5(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback6(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback7(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback8(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Калькулятор Зелена Карта</h2>

		<?php
		settings_fields( 'pluginPage2' );
		do_settings_sections( 'pluginPage2' );
		submit_button();
		?>

	</form>
	<?php

}

?>
<?php
$a = get_option('inscal_green_settings');

$b =  wp_json_encode($a);

// encode array to json
$json = json_encode(array('dataGreen' => $a));
$fp = fopen('dataGreen.json', 'w');
fwrite($fp, $json);
fclose($fp);

?>
