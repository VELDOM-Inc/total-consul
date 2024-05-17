<?php

return array (
	array (
		'field' => 'class',
		'label' => 'お問い合わせ種別',
		'rules' => 'required',
		'options' => array('機械の導入について', '施設の導入について', '地域活性化事業について', 'その他')
	),
	array (
		'field' => 'must',
		'label' => '必須項目の記載確認',
		'rules' => 'required',
		'options' => array('必須項目への記載を確認しました。')
	),
	array (
		'field' => 'company',
		'label' => '会社名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'tel',
		'label' => '電話番号',
		'rules' => 'trim|required|tel'
	),
	array (
		'field' => 'email',
		'label' => 'メールアドレス',
		'rules' => 'trim|required|email'
	),
	array (
		'field' => 'comment',
		'label' => 'お問い合わせ内容',
		'rules' => ''
	),
	array (
		'field' => 'agreement',
		'label' => 'プライバシーポリシーに同意する',
		'rules' => 'required',
		'options' => array('プライバシーポリシーに同意する')
	),
);
