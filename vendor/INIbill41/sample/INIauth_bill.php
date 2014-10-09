<?php


/* INIauth_bill.php
 *
 * �̴����� �÷������� ���� ��û�� �ǽð� �ſ�ī�� ���� ����� ó���Ѵ�.
 * �ڵ忡 ���� �ڼ��� ������ �Ŵ����� �����Ͻʽÿ�.
 * <����> �������� ������ �ݵ�� üũ�ϵ����Ͽ� �����ŷ��� �����Ͽ� �ֽʽÿ�.
 *  
 * http://www.inicis.com
 * Copyright (C) 2004 Inicis Co., Ltd. All rights reserved.
 */

	$opts = getopt(
    '',
    array('params:')
	);

	// error_log("params : ");
	// error_log($opts['params']);
	$params = (array) json_decode($opts['params']);

	/**************************
	 * 1. ���̺귯�� ��Ŭ��� *
	 **************************/
	require("INIpay41Lib.php");
	
	/***************************************
	 * 2. INIpay41 Ŭ������ �ν��Ͻ� ���� *
	 ***************************************/
	$inipay = new INIpay41;

	/***********************
	 * 2. ���� ���� *
	 ***********************/
	$inipay->m_inipayHome = realpath(__DIR__ . '/..'); 	// �̴����� Ȩ���͸�
	$inipay->m_keyPw = "1111"; 					// Ű�н�����(�������̵� ���� ����)
	$inipay->m_type = "auth_bill"; 					// ���� (���� ��������)
	$inipay->m_pgId = "INIpayBill"; 				// ���� (���� ��������)
	$inipay->m_subPgIp = "203.238.3.10"; 				// ���� (���� ��������)
	$inipay->m_payMethod = mb_convert_encoding( $params['paymethod'], 'EUC-KR', 'UTF-8' ); 				// ���� (���� ��������)
	$inipay->m_billtype = "Card";					// ���� (���� ��������)
	$inipay->m_debug = "true"; 					// �α׸��("true"�� �����ϸ� ���� �αװ� ������)
	$inipay->m_mid = mb_convert_encoding( $params['mid'], 'EUC-KR', 'UTF-8' );  						// �������̵�
	$inipay->m_goodName = mb_convert_encoding( $params['goodname'], 'EUC-KR', 'UTF-8' ); 				// ��ǰ�� (�ִ� 40��)
	$inipay->m_buyerName = mb_convert_encoding( $params['buyername'], 'EUC-KR', 'UTF-8' ); 				// ������ (�ִ� 15��)
	$inipay->m_url = "http://mondayapple.com";				// ����Ʈ URL		
	$inipay->m_merchantReserved3 = mb_convert_encoding( $params['merchantReserved3'], 'EUC-KR', 'UTF-8' ); 		// ȸ�� ID
	$inipay->m_encrypted = mb_convert_encoding( $params['encrypted'], 'EUC-KR', 'UTF-8' );
	$inipay->m_sessionKey = mb_convert_encoding( $params['sessionKey'], 'EUC-KR', 'UTF-8' );

	/**************************************************************
	 * 3. �������� ������ ���� �ǽð� �ſ�ī�� ���� ��� ��ûó�� *
	 **************************************************************/
	
	$inipay->startAction();

	error_log("m_resultCode : ");
	error_log($inipay->m_resultCode);
	error_log("m_resultMsg : ");
	error_log($inipay->m_resultMsg);

	$result = array();
  $result['m_resultCode'] = mb_convert_encoding( trim($inipay->m_resultCode), 'UTF-8', 'EUC-KR' );
  $result['m_resultMsg'] = 	mb_convert_encoding( trim($inipay->m_resultMsg), 'UTF-8', 'EUC-KR' );
  $result['m_cardCode'] = 	mb_convert_encoding( trim($inipay->m_cardCode), 'UTF-8', 'EUC-KR' );
  $result['m_billKey'] = 		mb_convert_encoding( trim($inipay->m_billKey), 'UTF-8', 'EUC-KR' );
  $result['m_cardPass'] = 	mb_convert_encoding( trim($inipay->m_cardPass), 'UTF-8', 'EUC-KR' );
  $result['m_cardKind'] = 	mb_convert_encoding( trim($inipay->m_cardKind), 'UTF-8', 'EUC-KR' );
  $result['m_tid'] = 				mb_convert_encoding( trim($inipay->m_tid), 'UTF-8', 'EUC-KR' );

  return json_encode($result);
	/********************************************************	******
	 *   4. �������� ������ ���� �ǽð� �ſ�ī�� ���� ��� ���   *
	 **************************************************************
	 *                                                   	      *
	 * $inipay->m_resultCode           // "00"�̸� ��Ű���� ����  *
	 * $inipay->m_resultMsg            // ����� ���� ����        *
	 * $inipay->m_cardCode             // ī��� �ڵ�             *
	 * $inipay->m_billKey              // BILL KEY                *
	 * $inipay->m_cardPass             // ī�� ��й�ȣ �� ���ڸ� *
	 * $inipay->m_cardKind             // ī������(����-0,����-1) *
	 * $inipay->m_tid                  // �ŷ���ȣ                * 
	 **************************************************************/
?>