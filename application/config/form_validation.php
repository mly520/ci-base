<?php
$config = array(
	'user' => array(
		array(
			'field' => 'user[name]',
			'label' => 'お名前',
			'rules' => 'trim|required|max_length[30]|xss_clean'
		),
		array(
			'field' => 'user[furigana]',
			'label' => 'ふりがな',
			'rules' => 'trim|convert[hiragana]|required|max_length[30]|xss_clean'
		),
		array(
			'field' => 'user[password]',
			'label' => 'パスワード',
			'rules' => 'trim|convert[single]|required|alpha_dash|min_length[8]|max_length[32]'
		),
		array(
			'field' => 'user[passconf]',
			'label' => 'パスワードの確認',
			'rules' => 'trim|required|convert[single]|alpha_dash|min_length[8]|max_length[32]|matches[user[password]]'
		),
		array(
			'field' => 'user[email]',
			'label' => 'メールアドレス',
			'rules' => 'trim|convert[single]|valid_email|xss_clean'
		),
		array(
			'field' => 'user[commentl]',
			'label' => '備考',
			'rules' => 'convert[html]|required|max_length[2000]'
		),
	),
);