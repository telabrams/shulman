<?php
include '../../../wp-load.php';
function remind_email_content_type($content_type)
{
    return 'text/html';
}

// if (!function_exists('wp_handle_upload')) {
//     require_once(ABSPATH . 'wp-admin/includes/file.php');
// }

$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$price = $_POST['price'];
$vehicle = $_POST['vehicle'];
$counries = $_POST['counries'];
$date_range = $_POST['date_range'];

echo $email;

    $msg = <<<EOD
         <strong>КОНТАКТНІ ДАНІ</strong><br>
            Телефон:</strong> - $phone<br>
            E-mail: - <a href="mailto:$email?subject=feedback" "email me">$email</a><br>
             <strong>ДАНІ КЛІЄНТА</strong><br>
            1. Тип ТЗ: $vehicle<br>
            2. Територія покриття: $counries<br>
            3. Період страхування: $date_range<br>
        <strong>ВАРТІСТЬ СТРАХОВКИ</strong><br>
            Всього до сплати: $price<br>
        <br>
EOD;

    // foreach ($files['name'] as $key => $value) {
    //     if ($files['name'][$key]) {
    //         $file = array(
    //             'name' => $files['name'][$key],
    //             'type' => $files['type'][$key],
    //             'tmp_name' => $files['tmp_name'][$key],
    //             'error' => $files['error'][$key],
    //             'size' => $files['size'][$key]
    //         );
    //         $movefile = wp_handle_upload(
    //             $file,
    //             $upload_overrides
    //         );
    //         $attachments[] = $movefile['file'];
    //     }
    // }


// $to = 'zakaz@shulman.com.ua';
$to = 'teldars@gmail.com';
//$to        = 'k@kirill.pp.ua';
$subject = 'Нагадати замовити (Зелена Карта)';

$headers[] = 'From:';

add_filter(
    'wp_mail_content_type',
    'remind_email_content_type'
);
$wp_mail_return = wp_mail(
    $to,
    $subject,
    $msg,
    $headers
);
if ($wp_mail_return) {
    echo 'Mail send';
} else {
    echo 'Failed';
}
remove_filter(
    'wp_mail_content_type',
    'remind_email_content_type'
);
