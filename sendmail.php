<?php
  //���� ����� ����������
  if(isset($_POST['submit'])) {
 //�������� ���� ���
  if(trim($_POST['name']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['name']);
  }
 //�������� ���� ����
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //�������� ������������ ����� EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //�������� ������� ������ ���������
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  }
 //���� ������ ���, ��������� email
  if(!isset($hasError)) {
  $emailTo = 'doppeV@mail.ru'; //���� ������� ��� email
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
  }
  }
  ?>