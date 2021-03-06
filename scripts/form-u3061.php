<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.2.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Contact RS2A',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'index.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'izopsixs@gmail.com',
		'to' => 'izopsixs@gmail.com'
	),
	'fields' => array(
		'custom_U3096' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nom',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Nom\' не может быть пустым.'
			)
		),
		'Email' => array(
			'order' => 8,
			'type' => 'email',
			'label' => ' Courriel',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \' Courriel\' не может быть пустым.',
				'format' => 'Поле \' Courriel\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U3078' => array(
			'order' => 3,
			'type' => 'string',
			'label' => ' Organisation',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3070' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Adresse',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3066' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Code postal',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3083' => array(
			'order' => 6,
			'type' => 'string',
			'label' => ' Ville',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3062' => array(
			'order' => 9,
			'type' => 'string',
			'label' => ' Message',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \' Message\' не может быть пустым.'
			)
		),
		'custom_U3376' => array(
			'order' => 2,
			'type' => 'string',
			'label' => ' Prénom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3426' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Téléphone',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Téléphone\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
