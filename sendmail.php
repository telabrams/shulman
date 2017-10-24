<?php
include '../../../wp-load.php';
function my_custom_email_content_type($content_type)
{
    return 'text/html';
}

if (!function_exists('wp_handle_upload')) {
    require_once(ABSPATH . 'wp-admin/includes/file.php');
}
// $test = $_POST['test'];
$tel = $_POST['tel'];
$polis = $_POST['polis'];
$pilgaText = $_POST['pilgaText'];
$preFinalForm_textWish = $_POST['textWish'];
$jQueryInputDoc = $_POST['jQueryInputDoc'];
$autoFilter = $_POST['autoFilter'];
$data = $_POST['data'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$insuranceName = $_POST['insuranceName'];
$engine = $_POST['engine'];
$DTP = $_POST['DTP'];
$franc = $_POST['franc'];
$dgo = explode('/ ДГО, ', $_POST['dgo']);
$dgo = $dgo[1];
$surnameEdit = $_POST['surnameEdit'];
$nameEdit = $_POST['nameEdit'];
$cityName = $_POST['cityName'];
$taxiQuestion = $_POST['taxiQuestion'];
$autoCategory = $_POST['autoCategory'];
$autoYear = $_POST['autoYear'];
$pilgaText = $_POST['pilgaText'];
$finalResult = $_POST['finalResult'];
$bat = $_POST['bat'];
$date = $_POST['date'];
$ipn = $_POST['ipn'];
$whome = $_POST['whome'];
$series = $_POST['series'];
$docNumber = $_POST['docNumber'];
$docDate = $_POST['docDate'];
$city = $_POST['city'];
$street = $_POST['street'];
$house = $_POST['house'];
$flat = $_POST['flat'];
$vin = $_POST['vin'];
$model = $_POST['model'];
$registNumber = $_POST['registNumber'];
$yearTz = $_POST['yearTz'];
$dcvEdit = $_POST['dcvEdit'];
$osago = ($finalResult - $dcvEdit);

if (!empty ($_FILES['documents'])) {
    $files = $_FILES['documents'];

} else {
    $files = $_FILES['polis'];

}
if (!empty ($_POST['deliveryCity'])) {
    $delivery = 'НП: ' . 'Місто - ' . $_POST['deliveryCity'] . ' Відділення НП:' . $_POST['poshta'];
} elseif (!empty ($_POST['deliveryHouse'])) {
    $delivery = 'Кур’єром ' . $_POST['deliveryStreet'] . ' ' . $_POST['deliveryHouse'] . ' ' . $_POST['deliveryFlat'];
} else {
    $delivery = 'Самовивіз';
}


$upload_overrides = array('test_form' => false);
$attachments = array();

if (!function_exists('wp_handle_upload')) require_once(ABSPATH . 'wp-admin/includes/file.php');

if (($_FILES['documents']['size'] == 0 && $_FILES['documents']['error'] == 0) && ($_FILES['polis']['size'] == 0 && $_FILES['polis']['error'] == 0)) {
    $msg = <<<EOD
        <strong>КОНТАКТНІ ДАНІ</strong><br>
            П.І. Замовника:</strong> - $name $surname<br>
            Телефон:</strong> - $tel<br>
            E-mail: - <a href="mailto:$mail?subject=feedback" "email me">$mail</a><br>
            Доставка: $delivery<br>
            <br>
        <strong>ДАНІ СТРАХУВАЛЬНИКА / ТЗ</strong><br>
                1. П.І.Б. Страхувальника: $surnameEdit $nameEdit $bat<br>
                2. Дата народження: $date<br>
                3. Код ІПН: $ipn<br>
                4. Документ: $jQueryInputDoc<br>
                 Серія: $series<br>
                 Номер: $docNumber<br>
                 Ким виданий: $whome<br>
                 Дата видачі: $docDate<br>
                5. Прописка Страхувальника<br>
                    Місто: $city<br>
                    Вулиця: $street<br>
                    Будинок: $house<br>
                    Квартира: $flat<br>
                6. Транспортний Засіб<br>
                    Марка ТЗ: $autoFilter<br>
                    Модель ТЗ: $model<br>
                    Рік випуску ТЗ: $yearTz<br>
                    VIN код ТЗ:  $vin<br>
                    Реєстраційний Номер ТЗ: $registNumber<br>
                    <br>
        <strong>ДАНІ РОЗРАХУНКУ СТРАХОВКИ</strong><br>
            1. Категорія ТЗ: $autoCategory<br>
            2. Тип ТЗ: $engine<br>
            3. Місто реєстрації ТЗ: $cityName<br>
            4. Рік випуску ТЗ: $autoYear<br>
            5. Без ДТП: $DTP<br>
            6. Таксі / перевезення пасажирів: $taxiQuestion<br>
            7. Право на пільгу: $pilgaText<br>
            8. ДЦВ: $dgo<br><br>
        <strong>ВАРТІСТЬ СТРАХОВКИ</strong><br>
            1. Страхова Компанія: $insuranceName<br>
            2. Франшиза: $franc<br>
            3. Бонус: Картка дій при ДТП + Тех Ассистнанс / Картка дій при ДТП<br>
            4. Всього до сплати: $finalResult<br>
            - ОСАГО: $osago<br>
            - ДГО: $dcvEdit<br>
    <br>
        Додатковий коментар - $preFinalForm_textWish<br>
EOD;

} else {
    $msg = <<<EOD
         <strong>КОНТАКТНІ ДАНІ</strong><br>
            П.І. Замовника:</strong> - $name $surname<br>
            Телефон:</strong> - $tel<br>
            E-mail: - <a href="mailto:$mail?subject=feedback" "email me">$mail</a><br>
            Доставка:  $delivery <br>
             <strong>ДАНІ РОЗРАХУНКУ СТРАХОВКИ</strong><br>
            1. Категорія ТЗ: $autoCategory<br>
            2. Тип ТЗ: $engine<br>
            3. Місто реєстрації ТЗ: $cityName<br>
            4. Рік випуску ТЗ: $autoYear<br>
            5. Без ДТП: $DTP<br>
            6. Таксі / перевезення пасажирів: $taxiQuestion<br>
            7. Право на пільгу: $pilgaText<br>
            8. ДЦВ: $dgo<br>
            <br>
        <strong>ВАРТІСТЬ СТРАХОВКИ</strong><br>
            1. Страхова Компанія: $insuranceName<br>
            2. Франшиза: $franc<br>
            3. Бонус: Картка дій при ДТП + Тех Ассистнанс / Картка дій при ДТП<br>
            4. Всього до сплати: $finalResult<br>
            - ОСАГО: $osago<br>
            - ДГО: $dcvEdit<br>
        <br>
        Додатковий коментар - $preFinalForm_textWish<br>

EOD;

    foreach ($files['name'] as $key => $value) {
        if ($files['name'][$key]) {
            $file = array(
                'name' => $files['name'][$key],
                'type' => $files['type'][$key],
                'tmp_name' => $files['tmp_name'][$key],
                'error' => $files['error'][$key],
                'size' => $files['size'][$key]
            );
            $movefile = wp_handle_upload(
                $file,
                $upload_overrides
            );
            $attachments[] = $movefile['file'];
        }

    }

}
// $to = 'zakaz@shulman.com.ua';
$to = 'teldars@gmail.com';
//$to        = 'k@kirill.pp.ua';
$subject = 'Замовлення (Автоцивілка)';

$headers[] = 'From:';

add_filter(
    'wp_mail_content_type',
    'my_custom_email_content_type'
);
$wp_mail_return = wp_mail(
    $to,
    $subject,
    $msg,
    $headers,
    $attachments
);
if ($wp_mail_return) {
    echo 'Mail send';
} else {
    echo 'Failed';
}
remove_filter(
    'wp_mail_content_type',
    'my_custom_email_content_type'
);

?>

<?php
if (($_FILES['documents']['size'] == 0 && $_FILES['documents']['error'] == 0) && ($_FILES['polis']['size'] == 0 && $_FILES['polis']['error'] == 0)) {
    echo get_theme_mod('true_footer_copyright_email2');
} else {
    echo get_theme_mod('true_footer_copyright_email2');
}
?>
