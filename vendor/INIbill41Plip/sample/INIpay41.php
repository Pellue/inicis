<?php

/****************************************************************************************
 **** �Ԥ��ɤ�öº�Ԥ��ʤ�¼ö´�Ԥ��ʤ�º°·�Ԥ��ʤ� PGID¸¦ ´�Ԥ��ʤ�¸£°�Ԥ��ʤ� �Ԥ��ɤ�¥½�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ʤ� (2003.12.19 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) ****
 ****************************************************************************************
 *** �Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ʤ��Ԥ��ɤ� PGID º�Ԥ��ʤ�º�Ԥ��ʤ�º �Ԥ��ɤ�öº�Ԥ��ʤ�¼ö´�Ԥ��ʤ�º°·�Ԥ��ʤ� TID¸¦ º°µµ·�Ԥ��ʤ� �Ԥ��ɤ�¥½�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ�µµ·�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�¸ç,  ***
 *** �Ԥ��ʤ��Ԥ��ɤ�·�Ԥ��ʤ� ¼ö�Ԥ��ɤ�¤�Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ɤ� °æ¿ì �Ԥ��ɤ�öº�Ԥ��ʤ� ½�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ�°¡ ¹�Ԥ��ˤ�»ý µ�Ԥ��ɤ�¼ö �Ԥ��ʤ�¸¹�Ԥ��ɤ�·�Ԥ��ʤ� ý´ë·�Ԥ��ʤ� ¼ö�Ԥ��ɤ�¤  ***
 *** �Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�ö ¾�Ԥ��ʤ�µµ·�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�½�Ԥ��ɤ�±â ¹�Ԥ��ʤ�¶ø´�Ԥ��ʤ�´�Ԥ��ʤ�.     ********************************************* 
 *** �Ԥ��ʤ��Ԥ��ɤ�·�Ԥ��ʤ� ¼ö�Ԥ��ɤ�¤�Ԥ��ɤ��Ԥ��ʤ�¿© ¹�Ԥ��ˤ�»ýµ�Ԥ��ɤ� ¹®�Ԥ��ɤ�¦¿¡ ´ë�Ԥ��ɤ��Ԥ��ʤ�¼­´�Ԥ��ɤ� (�Ԥ��ɤ��Ԥ��ʤ�)�Ԥ��ʤ�´�Ԥ��ʤ�½�Ԥ��ɤ�½º¿¡ �Ԥ��ɤ�¥�Ԥ��ʤ��Ԥ��ʤ�    ***** 
 *** ¾ø¸´�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ʤ�½�Ԥ��ɤ�±â ¹�Ԥ��ʤ�¶ø´�Ԥ��ʤ�´�Ԥ��ʤ�.      ********************************************
 ***************************************************************************************/
extract($_POST);
extract($_GET);
/*************************************************************************************
 *************************************************************************************
   ********************        »ó±âº�Ԥ��ʤ�º�Ԥ��ʤ� ý´ë ¼ö�Ԥ��ɤ�¤ º�Ԥ��ʤ�°¡      ************************
 *************************************************************************************
 *************************************************************************************/
 
/*----------------------------------------------------------* 
 *¹«�Ԥ��ʤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ�°�Ԥ��ɤ�·¡�Ԥ��ʤ� °æ¿ì �Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ�°³¿ù¼ö µ�Ԥ��ʤ�¿¡ ¹«�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ʤ�» �Ԥ��ɤ�¥½�Ԥ��ɤ�*
 *----------------------------------------------------------*/

if( isset( $quotainterest) && !is_null( $quotainterest) && $quotainterest == "1")
{
	$interest = "(¹«�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ�)";
}
 
/*----------------------------------------------------------*/


class INIpay41
{
	var $fd;
	var $m_inipayHome; 		//�Ԥ��ʤ�´�Ԥ��ʤ��Ԥ��ɤ�ä�Ԥ��ʤ� �Ԥ��ɤ�¨µð·º�Ԥ��ɤ��Ԥ��ʤ�¸®
	var $m_test; 			// "true"¸é 17¹ø¸·�Ԥ��ʤ� º¸³½´�Ԥ��ʤ�
	var $m_debug; 			// "true"¸é »ó¼¼�Ԥ��ɤ��Ԥ��ʤ� ·�Ԥ��ʤ�±�Ԥ��ʤ�¸¦ ³²±ä´�Ԥ��ʤ�
	var $m_type; 			// °�Ԥ��ɤ�·¡ ¯�Ԥ��ɤ�ü
	var $m_pgId; 			// PGID
	var $m_keyPw; 			// keypass.enc�Ԥ��ɤ� pass phrase
	var $m_subPgIp; 		// 3¹ø�Ԥ��ɤ�° ¿¹ºñ PG IP Addr
	var $m_mid; 			// »ó�Ԥ��ɤ�¡ ¾�Ԥ��ɤ��Ԥ��ʤ�µð
	var $m_language; 		// »ç¿ë¾ð¾î
	var $m_oldTid; 			// º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�(ç½�Ԥ��ɤ��Ԥ��ʤ�) »ç¿ë½�Ԥ��ɤ� ¿ø°�Ԥ��ɤ�·¡¾�Ԥ��ɤ��Ԥ��ʤ�µð
	var $m_tid; 			// °�Ԥ��ɤ�·¡¾�Ԥ��ɤ��Ԥ��ʤ�µð
	var $m_goodName; 		// »ó�Ԥ��ɤ�°¸í
	var $m_currency; 		// �Ԥ��ɤ�­�Ԥ��ɤ�ó´�Ԥ��ʤ�§ (WON, USD)
	var $m_price; 			// ±�Ԥ��ʤ�¾�Ԥ��ʤ�
	var $m_confirm_price;		// ç½�Ԥ��ɤ��Ԥ��ʤ� ¿ä�Ԥ��ɤ�» ±�Ԥ��ʤ�¾�Ԥ��ʤ�
	var $m_buyerName; 		// ±¸¸�Ԥ��ɤ��Ԥ��ʤ� ¼º¸í
	var $m_buyerTel; 		// ±¸¸�Ԥ��ɤ��Ԥ��ʤ� ü�Ԥ��ɤ�­¹ø�Ԥ��ɤ�£ (SMS ¶«¿¡ ¹�Ԥ��ʤ�µå½�Ԥ��ɤ� �Ԥ��ʤ�µ¿ü�Ԥ��ɤ�­...)
	var $m_buyerEmail; 		// ±¸¸�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ʤ�¸�Ԥ��ʤ��Ԥ��ʤ�
	var $m_recvName; 		// ¼ö�Ԥ��ɤ�ë�Ԥ��ʤ� ¼º¸í
	var $m_recvTel; 		// ¼ö�Ԥ��ɤ�ë�Ԥ��ʤ� ¿¬¶ô�Ԥ��ɤ�³
	var $m_recvAddr; 		// ¼ö�Ԥ��ɤ�ë�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�¼�Ԥ��ʤ�
	var $m_recvPostNum; 		// ¼ö�Ԥ��ɤ�ë�Ԥ��ʤ� ¿ì�Ԥ��ɤ�í¹ø�Ԥ��ɤ�£
	var $m_recvMsg; 		// ¼ö�Ԥ��ɤ�ë�Ԥ��ʤ�¿¡°�Ԥ��ʤ� ü´�Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ� ¸�Ԥ��ʤ�½�Ԥ��ɤ��Ԥ��ɤ�ö
	var $m_companyNumber; 		// »ç¾÷�Ԥ��ʤ� µî·�Ԥ��ʤ�¹ø�Ԥ��ɤ�£(10�Ԥ��ʤ�¸® ¼ý�Ԥ��ʤ�)
	var $m_cardCode; 		// �Ԥ��ɤ�«µå»ç �Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_cardIssuerCode; 		// �Ԥ��ɤ�«µå ¹�Ԥ��ˤ�±�Ԥ��ʤ�»ç(º�Ԥ��ɤ��Ԥ��ˤ�) �Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_payMethod; 		// �Ԥ��ɤ�öº�Ԥ��ʤ�¹æ¹ý
	var $m_merchantReserved1; 	// ¿¹ºñ�Ԥ��ɤ��Ԥ��ʤ�µå (�Ԥ��ɤ�öº�Ԥ��ʤ�) 
	var $m_merchantReserved2; 	// ¿¹ºñ�Ԥ��ɤ��Ԥ��ʤ�µå (�Ԥ��ɤ�öº�Ԥ��ʤ�) 
	var $m_merchantReserved3; 	// ¿¹ºñ�Ԥ��ɤ��Ԥ��ʤ�µå (�Ԥ��ɤ�öº�Ԥ��ʤ�) 
	var $m_uip; 			// �Ԥ��ɤ�öº�Ԥ��ʤ��Ԥ��ʤ� PC IP Addr
	var $m_url; 			// �Ԥ��ɤ�öº�Ԥ��ʤ� »ó�Ԥ��ɤ�¡ URL
	var $m_billingPeriod; 		// Billing ±â°£ (2002/07 �Ԥ��ɤ�öç »ç¿ë¾�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ�)
	var $m_payOption; 		
	var $m_encrypted; 		// ¾�Ԥ��ʤ��Ԥ��ɤ�£¹® (´ë�Ԥ��ɤ�ª�Ԥ��ɤ�°·�Ԥ��ʤ� ¾�Ԥ��ʤ��Ԥ��ɤ�£�Ԥ��ɤ�­µ�Ԥ��ɤ� PLAIN TEXT)
	var $m_sessionKey; 		// ¾�Ԥ��ʤ��Ԥ��ɤ�£¹® (°ø°³�Ԥ��ɤ�°·�Ԥ��ʤ� ¾�Ԥ��ʤ��Ԥ��ɤ�£�Ԥ��ɤ�­µ�Ԥ��ɤ� ´ë�Ԥ��ɤ�ª�Ԥ��ɤ�°)
	var $m_uid; 			// INIpay User ID (2002/07 �Ԥ��ɤ�öç »ç¿ë¾�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ�)
	var $m_quotaInterest; 		// ¹«�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ� FLAG
	var $m_cardNumber;  		// ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ¹ø�Ԥ��ɤ�£
	var $m_price1; 			// OK Cashbag, Netimoney ¿¡¼­ »ç¿ë�Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ ±�Ԥ��ʤ�¾�Ԥ��ʤ��Ԥ��ɤ�¤º¸
	var $m_price2; 			// OK Cashbag, Netimoney ¿¡¼­ »ç¿ë�Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ ±�Ԥ��ʤ�¾�Ԥ��ʤ��Ԥ��ɤ�¤º¸
	var $m_cardQuota; 		// �Ԥ��ɤ��Ԥ��ʤ�º�Ԥ��ʤ�±â°£
	var $m_bankCode; 		// º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_ocbNumber; 		// OK Cashbag �Ԥ��ɤ�«µå ¹ø�Ԥ��ɤ�£
	var $m_ocbPasswd; 		// OK Cashbag �Ԥ��ɤ�«µå ºñ¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_authentification; 	// º»�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ�õ FLAG
	var $m_authField1; 		// º»�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ�õ¿¡ �Ԥ��ɤ��Ԥ��ʤ�¿ä�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£ µ�Ԥ��ʤ� 7�Ԥ��ʤ�¸®
	var $m_authField2; 		// º»�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ�õ¿¡ �Ԥ��ɤ��Ԥ��ʤ�¿ä�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ�«µå ºñ¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£ ¾�Ԥ��ʤ� 2�Ԥ��ʤ�¸®
	var $m_authField3; 		// º»�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ�õ¿¡ �Ԥ��ɤ��Ԥ��ʤ�¿ä�Ԥ��ɤ��Ԥ��ʤ� ¿¹ºñ�Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_passwd; 			// (¹ü¿ë) ºñ¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_cardExpy; 		// ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ¯�Ԥ��ɤ�¿±â°£-³â (YY)
	var $m_cardExpm; 		// ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ¯�Ԥ��ɤ�¿±â°£-¿ù (MM)
	var $m_cardExpire; 		// ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ¯�Ԥ��ɤ�¿±â°£ (YYMM)
	var $m_ocbCardType; 		// OK Cashbag �Ԥ��ɤ�«µå ¯�Ԥ��ɤ�ü (�Ԥ��ʤ�»ç�Ԥ��ɤ�«µå...)
	var $m_merchantReserved; 	// ¿¹ºñ�Ԥ��ɤ��Ԥ��ʤ�µå (ºñ�Ԥ��ɤ�öº�Ԥ��ʤ�)
	var $m_cancelMsg; 		// �Ԥ��ɤ�ë¼�Ԥ��ʤ� »ç¯
	var $m_resultCode; 		// °á°ú �Ԥ��ɤ��Ԥ��ʤ�µå (2 digit)
	var $m_resultMsg; 		// °á°ú ³»¿ë
	var $m_authCode; 		// ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ½�Ԥ��ɤ��Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_ocbResultPoint; 		// OK Cashbag Point �Ԥ��ɤ�¶�Ԥ��ɤ�¸½�Ԥ��ɤ� °¡¿ë�Ԥ��ɤ�÷�Ԥ��ʤ��Ԥ��ɤ�®
	var $m_authCertain; 		// PG¿¡¼­ º»�Ԥ��ʤ��Ԥ��ʤ��Ԥ��ɤ�õ» ¼ö�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�¿´´�Ԥ��ɤ��Ԥ��ɤ�ö¸¦ ³ª�Ԥ��ɤ�¸³»´�Ԥ��ɤ� FLAG
	var $m_ocbSaveAuthCode; 	// OK Cashbag û¸³ ½�Ԥ��ɤ��Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_ocbUseAuthCode; 		// OK Cashbag »ç¿ë ½�Ԥ��ɤ��Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_ocbAuthDate; 		// OK Cashbag ½�Ԥ��ɤ��Ԥ��ʤ� ³¯�Ԥ��ɤ�¥
	var $m_pgAuthDate; 		// PG ½�Ԥ��ɤ��Ԥ��ʤ� ³¯�Ԥ��ɤ�¥
	var $m_pgAuthTime; 		// PG ½�Ԥ��ɤ��Ԥ��ʤ� ½�Ԥ��ɤ�°¢
	var $m_pgCancelDate; 		// PG �Ԥ��ɤ�ë¼�Ԥ��ʤ� ³¯�Ԥ��ɤ�¥
	var $m_pgCancelTime; 		// PG �Ԥ��ɤ�ë¼�Ԥ��ʤ� ½�Ԥ��ɤ�°¢
	var $m_requestMsg; 		// º¸³¾ ¸�Ԥ��ʤ�½�Ԥ��ɤ��Ԥ��ɤ�ö
	var $m_responseMsg; 		// ¹�Ԥ��ʤ�º ¸�Ԥ��ʤ�½�Ԥ��ɤ��Ԥ��ɤ�ö
	var $m_resulterrcode; 		// °á°ú¸�Ԥ��ʤ�¼¼�Ԥ��ɤ�ö ¿¡·¯�Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_resultprice; 		// °á�Ԥ��ɤ�¦ ¿�Ԥ��ʤ�·á ±�Ԥ��ʤ�¾�Ԥ��ʤ�

/* == �Ԥ��ɤ�¾�Ԥ��ɤ�³½�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ �Ԥ��ɤ��Ԥ��ʤ�µå (2005.02.01 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
	var $m_remain_price;		// �Ԥ��ɤ�¾�Ԥ��ɤ�³½�Ԥ��ɤ� �Ԥ��ʤ�¾�Ԥ��ʤ�

/* == CMS°è�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¼ �Ԥ��ɤ��Ԥ��ʤ�µå �Ԥ��ɤ��Ԥ��ˤ�°¡ (2004. 11. 15 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
	var $m_bankAccount; 		// º�Ԥ��ɤ��Ԥ��ˤ� °è�Ԥ��ɤ��Ԥ��ɤ�¹ø�Ԥ��ɤ�£
	var $m_regNumber; 		// �Ԥ��ɤ��Ԥ��ʤ�¹�Ԥ��ʤ�µî·�Ԥ��ʤ�¹ø�Ԥ��ɤ�£ (½�Ԥ��ɤ�½�Ԥ��ɤ�°£ ºô¸µ¿ë �Ԥ��ɤ��Ԥ��ʤ�¹�Ԥ��ʤ�µî·�Ԥ��ʤ� ¹ø�Ԥ��ɤ�£ 13�Ԥ��ʤ�¸®)
	var $m_CMSBankCode;		// °á�Ԥ��ɤ�¦¿�Ԥ��ʤ�·á�Ԥ��ɤ��Ԥ��ɤ� ¸®�Ԥ��ɤ��Ԥ��ʤ� º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_price_org;		// �Ԥ��ɤ�â±�Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�±�Ԥ��ʤ�¾�Ԥ��ʤ�
	var $m_cmsday;			// �Ԥ��ɤ�â±�Ԥ��ʤ�¿¹�Ԥ��ɤ�¤�Ԥ��ʤ�
	var $m_cmsdatefrom;		// �Ԥ��ɤ�â±�Ԥ��ʤ�½�Ԥ��ɤ��Ԥ��ʤ�¿ù
	var $m_cmsdatero;		// �Ԥ��ɤ�â±�Ԥ��ʤ��Ԥ��ɤ�¾·á¿ù
	var $m_cmstype;			// 1-CMS �Ԥ��ʤ�µ¿(¿¹¾�Ԥ��ˤ�)�Ԥ��ʤ��Ԥ��ɤ�¼, 2-CMS°è�Ԥ��ɤ��Ԥ��ɤ�µî·�Ԥ��ʤ�

/* == º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�(ç½�Ԥ��ɤ��Ԥ��ʤ�) �Ԥ��ɤ��Ԥ��ˤ�°¡ �Ԥ��ɤ��Ԥ��ʤ�µå (2004.11.05 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
	var $m_tid_org;		// ¿ø°�Ԥ��ɤ�·¡ TID
	var $m_remains = "";		// �Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¾°á�Ԥ��ɤ�¦ ±�Ԥ��ʤ�¾�Ԥ��ʤ�
	var $m_flg_partcancel = "";	// º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�, ç½�Ԥ��ɤ��Ԥ��ʤ� ±¸º�Ԥ��ʤ�°ª
	var $m_cnt_partcancel = ""; 	// º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�(ç½�Ԥ��ɤ��Ԥ��ʤ�) ¿ä�Ԥ��ɤ�»�Ԥ��ɤ�½¼ö	
	
/* == �Ԥ��ɤ��Ԥ��ʤ�µå�Ԥ��ɤ��Ԥ��ˤ�°¡ (2004.06.23 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
	var $m_moid; 		// »ó�Ԥ��ɤ�°�Ԥ��ɤ��Ԥ��ʤ�¹®¹ø�Ԥ��ɤ�£
	var $m_codegw; 		// ü�Ԥ��ɤ�­°á�Ԥ��ɤ�¦ »ç¾÷�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_ParentEmail; 	// º¸�Ԥ��ɤ�£�Ԥ��ʤ� �Ԥ��ʤ�¸�Ԥ��ʤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�¼�Ԥ��ʤ�
	var $m_ocbcardnumber; 	// OK CASH BAG °á�Ԥ��ɤ�¦ , û¸³�Ԥ��ʤ� °æ¿ì OK CASH BAG �Ԥ��ɤ�«µå ¹ø�Ԥ��ɤ�£
	var $m_cultureid;	// �Ԥ��ɤ��Ԥ��ɤ��Ԥ��ɤ��Ԥ��ɤ� ·£µå ID
	var $m_directbankacc;	// º�Ԥ��ɤ��Ԥ��ˤ� °è�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¼ °á�Ԥ��ɤ�¦�Ԥ��ʤ� °æ¿ì º�Ԥ��ɤ��Ԥ��ˤ� °è�Ԥ��ɤ��Ԥ��ɤ� ¹ø�Ԥ��ɤ�£
	var $m_directbankcode;	// º�Ԥ��ɤ��Ԥ��ˤ� °è�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¼ °á�Ԥ��ɤ�¦�Ԥ��ʤ� °æ¿ì º�Ԥ��ɤ��Ԥ��ˤ� �Ԥ��ɤ��Ԥ��ʤ�µå ¹ø�Ԥ��ɤ�£
	var $m_billKey;		// ½�Ԥ��ɤ�½�Ԥ��ɤ�°£ ºô¸µ ºô�Ԥ��ɤ�°
	var $m_cardPass;	// ½�Ԥ��ɤ�½�Ԥ��ɤ�°£ ºô¸µ¿ë ½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå ºñ¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£ ¾�Ԥ��ʤ� 2�Ԥ��ʤ�¸®
	var $m_billtype;	// ºô¸µ�Ԥ��ɤ�¸�Ԥ��ʤ� (½�Ԥ��ɤ�¿ë�Ԥ��ɤ�«µå - card, �Ԥ��ɤ��Ԥ��ʤ�´ë�Ԥ��ɤ�ù - hpp)
	
	
/* ==  °¡»ó°è�Ԥ��ɤ��Ԥ��ɤ�¸¦ §�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ (2003.07.07 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�)  == */
	var $m_perno; 		// °¡»ó°è�Ԥ��ɤ��Ԥ��ɤ� �Ԥ��ɤ�öº�Ԥ��ʤ� ¿¹¾�Ԥ��ˤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�¹�Ԥ��ʤ�¹ø�Ԥ��ɤ�£
	var $m_oid; 		// �Ԥ��ɤ��Ԥ��ʤ�¹®¹ø�Ԥ��ɤ�£(»ó�Ԥ��ɤ�¡¿¡¼­ ü´�Ԥ��ʤ�µ�Ԥ��ɤ�´�Ԥ��ɤ� °ª)
	var $m_vacct; 		// °¡»ó°è�Ԥ��ɤ��Ԥ��ɤ� ¹ø�Ԥ��ɤ�£
	var $m_vcdbank; 	// �Ԥ��ɤ�¤¹ø¿¡ »ç¿ëµ�Ԥ��ɤ� º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_dtinput; 	// �Ԥ��ʤ�±�Ԥ��ʤ� ¿¹�Ԥ��ɤ�¤�Ԥ��ʤ�
	var $m_nminput; 	// ¼�Ԥ��ʤ�±�Ԥ��ʤ��Ԥ��ʤ� ¸í
	var $m_nmvacct; 	// ¿¹±�Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ� ¸í
	var $m_rvacct;		// �Ԥ��ɤ�¯º�Ԥ��ʤ�°è�Ԥ��ɤ��Ԥ��ɤ� ¹ø�Ԥ��ɤ�£
	var $m_rvcdbank;	// �Ԥ��ɤ�¯º�Ԥ��ʤ�°è�Ԥ��ɤ��Ԥ��ɤ� º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
	var $m_rnminput;	// �Ԥ��ɤ�¯º�Ԥ��ʤ�°è�Ԥ��ɤ��Ԥ��ɤ� ¿¹±�Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�¸í

/* == �Ԥ��ɤ�ö±�Ԥ��ʤ� ¿µ¼ö�Ԥ��ɤ�õ ¹�Ԥ��ˤ��Ԥ��ɤ��Ԥ��ˤ� �Ԥ��ɤ��Ԥ��ʤ�µå �Ԥ��ɤ��Ԥ��ˤ�°¡ (2003.12.08 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
	var $m_cr_price;	// �Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ�ö±�Ԥ��ʤ�°á�Ԥ��ɤ�¦ ±�Ԥ��ʤ�¾�Ԥ��ʤ�
	var $m_sup_price;	// °ø±�Ԥ��ʤ�°¡
	var $m_tax;		// º�Ԥ��ʤ�°¡¼¼
	var $m_srvc_price;	// º»ç·á
	var $m_usepot;		// ¿µ¼ö�Ԥ��ɤ�õ »ç¿ë¿ëµµ
	var $m_ocbprice;	// OCB û¸³¿ä�Ԥ��ɤ�»±�Ԥ��ʤ�¾�Ԥ��ʤ�

/* ==  °¡»ó°è�Ԥ��ɤ��Ԥ��ɤ�¸¦ §�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ (2006.10.18 ±è¿ë¿î)  == */
	var $m_tminput; 	// �Ԥ��ʤ�±�Ԥ��ʤ� ¿¹�Ԥ��ɤ�¤ ½�Ԥ��ɤ�°£

/* ==  ¥�Ԥ��ɤ�ä�Ԥ��ʤ��Ԥ��ɤ�ö §º¯�Ԥ��ɤ�¶ ¹æ�Ԥ��ɤ�ö (2006.12.27 �Ԥ��ʤ�½�Ԥ��ɤ�±¹)  == */
	var $m_enc_arr = array();
	var $m_enctype;
	var $m_checkopt;
	var $m_rn;
	var $m_ini_rn;
	var $m_ini_encfield;
	var $m_ini_certid;
    
/* ==  °á�Ԥ��ɤ�¦¿ä�Ԥ��ɤ�»�Ԥ��ɤ�ä�Ԥ��ʤ��Ԥ��ɤ�ö µ¥�Ԥ��ʤ��Ԥ��ɤ�¸ ¾�Ԥ��ʤ��Ԥ��ɤ�£�Ԥ��ɤ�­(2007.01.10 �Ԥ��ʤ�½�Ԥ��ɤ�±¹)  == */
	var $m_enc_src;
    	
/* ==  �Ԥ��ɤ�ë¹æ�Ԥ��ɤ��Ԥ��ɤ� KVP�Ԥ��ɤ��Ԥ��ɤ�·¯±�Ԥ��ʤ��Ԥ��ʤ� �Ԥ��ɤ�³¸®(2007.01.25 �Ԥ��ʤ�½�Ԥ��ɤ�±¹) == */
	var $m_kvp_card_prefix;
	var $m_kvp_noint;
	var $m_kvp_quota;

	var $m_pgn;
/* ==  ¿�Ԥ��ɤ��Ԥ��ɤ�¸¶�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ(2007.06.28 �Ԥ��ʤ�½�Ԥ��ɤ�±¹) == */
	var $m_OMFlag;
	var $m_SubCrCnt;
	var $m_om = array();

/* ==  °�Ԥ��ʤ��Ԥ��ʤ�¹®�Ԥ��ɤ�­»ó�Ԥ��ɤ�°±�Ԥ��ɤ�(2009.04.17 �Ԥ��ʤ�½�Ԥ��ɤ�±¹) == */
  	var $m_dgcl_cardcount;
  	var $m_dgcl_cardnum = array();
  	var $m_dgcl_remain_price = array();
  	var $m_dgcl_errmsg = array();

/* ==  �Ԥ��ɤ��Ԥ��ʤ�´ë�Ԥ��ɤ�ù �Ԥ��ɤ�û�Ԥ��ɤ�ä�Ԥ��ʤ� ºñ�Ԥ��ʤ��Ԥ��ɤ�õ(2010.11.03 �Ԥ��ɤ�¤±æ�Ԥ��ɤ��Ԥ��ɤ�) == */
    var $m_hpptype;
    var $m_hppnumber;
    var $m_hppregnumber;
    var $m_hppauthnumber;
    var $m_hppcotype;
    var $m_hppcorp;
    var $m_hppauthserial;
    var $m_hppoid;
    var $m_hppsid;

/* ==  ºô¸µ º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ� °¡´�Ԥ��ɤ�¿©º�Ԥ��ʤ�(2012.07.11 ±è¼±±¹) == */
	var $m_prtcCode;
	
	function startAction()
	{
		switch( $this->m_type)
		{
			case("securepay") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"rn=" . $this->m_rn . "\x0B" .
					"encfield=" . $this->m_ini_encfield . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
	        "oid=" . $this->m_oid . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"parentemail=" . $this->m_ParentEmail . "\x0B" .
					"recvname=" . $this->m_recvName . "\x0B" .
					"recvtel=" . $this->m_recvTel . "\x0B" .
					"recvaddr=" . $this->m_recvAddr . "\x0B" .
					"recvpostnum=" . $this->m_recvPostNum . "\x0B" .
					"recvmsg=" . $this->m_recvMsg . "\x0B" .
					"sessionkey=" . $this->m_sessionKey . "\x0B" .
					"encrypted=" . $this->m_encrypted . "\x0B" .
					"pgn=" . $this->m_pgn . "\x0B" .
					"enctype=" . $this->m_enctype . "\x0B" .
					"merchantreserved1=" . $this->m_merchantReserved1 . "\x0B" .
					"merchantreserved2=" . $this->m_merchantReserved2 . "\x0B" .
					"merchantreserved3=" . $this->m_merchantReserved3;
				$exec_str = $this->m_inipayHome . "/phpexec/INIsecurepay.phpexec \"" . $this->m_requestMsg . "\"";
				$this->m_responseMsg = exec($exec_str);
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIsecurepay.phpexec";
				break;
		
			case("cancel") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"tid=" . $this->m_tid . "\x0B" .
					"msg=" . $this->m_cancelMsg . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"merchantreserved=" . $this->m_merchantReserved;
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIcancel.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIcancel.phpexec";
				break;

			case("confirm") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"tid=" . $this->m_tid . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"merchantreserved=" . $this->m_merchantReserved;
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIconfirm.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIconfirm.phpexec";
				break;
		
			case("capture") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"tid=" . $this->m_tid . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"merchantreserved=" . $this->m_merchantReserved;
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIcapture.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIcapture.phpexec";
				break;
		
			case("formpay") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"recvname=" . $this->m_recvName . "\x0B" .
					"recvtel=" . $this->m_recvTel . "\x0B" .
					"recvaddr=" . $this->m_recvAddr . "\x0B" .
					"recvpostnum=" . $this->m_recvPostNum . "\x0B" .
					"recvmsg=" . $this->m_recvMsg . "\x0B" .
					"cardnumber=" . $this->m_cardNumber . "\x0B" .
					"cardquota=" . $this->m_cardQuota . "\x0B" .
					"cardexpy=" . $this->m_cardExpy . "\x0B" .
					"cardexpm=" . $this->m_cardExpm . "\x0B" .
					"quotainterest=" . $this->m_quotaInterest . "\x0B" .
					"authentification=" . $this->m_authentification . "\x0B" .
					"authfield1=" . $this->m_authfield1 . "\x0B" .
					"authfield2=" . $this->m_authfield2 . "\x0B" .
					"price1=" . $this->m_price1 . "\x0B" .
					"price2=" . $this->m_price2 . "\x0B" .
					"bankcode=" . $this->m_bankCode . "\x0B" .
					"bankaccount=" . $this->m_bankAccount . "\x0B" .
					"regnumber=" . $this->m_regNumber . "\x0B" .
					"price_org=" . $this->m_price_org . "\x0B" .
					"cmsday=" . $this->m_cmsday .  "\x0B" .
					"cmsdatefrom=" . $this->m_cmsdatefrom . "\x0B" .
					"cmsdateto=" . $this->m_cmsdateto . "\x0B" .
					"cmstype=" . $this->m_cmstype . "\x0B" .
					"ocbnumber=" . $this->m_ocbNumber . "\x0B" .
					"ocbpasswd=" . $this->m_ocbPasswd . "\x0B" .
                   	"hpptype=" . $this->m_hpptype . "\x0B" .
                    "hppnumber=" . $this->m_hppnumber . "\x0B" .
                    "hppregnumber=" . $this->m_hppregnumber . "\x0B" .
                    "hppauthnumber=" . $this->m_hppauthnumber . "\x0B" .
                    "hppcotype=" . $this->m_hppcotype . "\x0B" .
                    "hppcorp=" . $this->m_hppcorp . "\x0B" .
                    "hppauthserial=" . $this->m_hppauthserial . "\x0B" .
                    "hppoid=" . $this->m_hppoid . "\x0B" .
                    "hppsid=" . $this->m_hppsid . "\x0B" .
					"passwd=" . $this->m_passwd . "\x0B" .
					"perno=" . $this->m_perno . "\x0B" .
	                "oid=" . $this->m_oid . "\x0B" .
	                "vacct=" . $this->m_vacct . "\x0B" .
	                "vcdbank=" . $this->m_vcdbank . "\x0B" .
	                "dtinput=" . $this->m_dtinput . "\x0B" .
	                "nminput=" . $this->m_nminput . "\x0B" .
					"companynumber=" . $this->m_companyNumber . "\x0B" .
					"merchantreserved1=" . $this->m_merchantReserved1 . "\x0B" .
					"merchantreserved2=" . $this->m_merchantReserved2 . "\x0B" .
					"merchantreserved3=" . $this->m_merchantReserved3;
																			
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIformpay.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIformpay.phpexec";
				
				
				break;
		
			case("repay") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"oldtid=" . $this->m_oldTid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"confirm_price=" . $this->m_confirm_price . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"cardquota=" . $this->m_cardQuota . "\x0B" .
					"quotainterest=" . $this->m_quotaInterest . "\x0B" .
					"merchantreserved1=" . $this->m_merchantReserved1 . "\x0B" .
					"merchantreserved2=" . $this->m_merchantReserved2 . "\x0B" .
					"merchantreserved3=" . $this->m_merchantReserved3;
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIrepay.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIrepay.phpexec";
				break;

			case("ocbquery") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"ocbnumber=" . $this->m_ocbNumber;
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIocbquery.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIocbquery.phpexec";
				break;
				
			case("auth_bill") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"billtype=" . $this->m_billtype . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"encrypted=" . $this->m_encrypted . "\x0B" .
					"sessionkey=" . $this->m_sessionKey . "\x0B" .
					"merchantReserved3=" . $this->m_merchantReserved3;

				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIauth_bill.phpexec \"" . $this->m_requestMsg . "\"", $output);
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIauth_bill.phpexec";
				
				break;
				
			case("auth") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"billtype=" . $this->m_billtype . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"encrypted=" . $this->m_encrypted . "\x0B" .
					"sessionkey=" . $this->m_sessionKey . "\x0B" .
					"merchantReserved3=" . $this->m_merchantReserved3;

				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIauth.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIauth.phpexec";
				
				break;

			case("formauth") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"billtype=" . $this->m_billtype . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"cardnumber=" . $this->m_cardNumber . "\x0B" .
					"cardexpy=" . $this->m_cardExpy . "\x0B" .
					"cardexpm=" . $this->m_cardExpm . "\x0B" .					
					"authfield1=" . $this->m_authfield1 . "\x0B" .
					"authfield2=" . $this->m_authfield2 . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"merchantReserved3=" . $this->m_merchantReserved3;

				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIformauth.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIformauth.phpexec";
				
				break;
				
			case("reqrealbill") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"oid=" . $this->m_oid . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"billkey=" . $this->m_billKey . "\x0B" .
					"billtype=" . $this->m_billtype . "\x0B" .
					"cardpass=" . $this->m_cardPass . "\x0B" .
					"regnumber=" . $this->m_regNumber . "\x0B" .
					"cardquota=" . $this->m_cardQuota . "\x0B" .
					"authentification=" . $this->m_authentification . "\x0B" .
					"quotainterest=" . $this->m_quotaInterest . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"merchantreserved1=" . $this->m_merchantReserved1 . "\x0B" .
					"merchantreserved3=" . $this->m_merchantReserved3;

				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIreqrealbill.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIreqrealbill.phpexec";
				
				break;
			
			case("receipt") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"cr_price=" . $this->m_cr_price . "\x0B" .
					"sup_price=" . $this->m_sup_price . "\x0B" .
					"tax=" . $this->m_tax . "\x0B" .
					"srvc_price=" . $this->m_srvc_price . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"ocbnumber=" . $this->m_ocbnumber . "\x0B" .
					"ocbprice=" . $this->m_ocbprice . "\x0B" .
					"reg_num=" . $this->m_reg_num . "\x0B" .
					"useopt=" . $this->m_useopt . "\x0B" .
					"companynumber=" . $this->m_companyNumber. "\x0B";
				//¿�Ԥ��ɤ��Ԥ��ɤ�¸¶�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ
				if( $this->m_OMFlag == "2" && $this->m_SubCrCnt > 0 )
				{
					$this->m_requestMsg .= "OMFlag=".$this->m_OMFlag."\x0B";
					$this->m_requestMsg .= "SubCrCnt=".$this->m_SubCrCnt."\x0B";
					for( $i=1; $i <= $this->m_SubCrCnt ; $i++ )
					{
						$arr["SubNmComp$i"] .= $this->m_om["Submall_NmComp$i"]	. "\x0C";
						$arr["SubNmComp$i"] .= $this->m_om["Submall_NoComp$i"]	. "\x0C";
						$arr["SubNmComp$i"] .= $this->m_om["Submall_NoCEO$i"]		. "\x0C";
						$arr["SubNmComp$i"] .= $this->m_om["Submall_ID$i"]			. "\x0C";
						$arr["SubNmComp$i"] .= $this->m_om["Submall_price$i"]		. "\x0C";
						$arr["SubNmComp$i"] .= $this->m_om["Submall_srvprice$i"]; 
						$this->m_requestMsg .= "SubNmComp$i=".$arr["SubNmComp$i"]."\x0B";
					}
				}
				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIreceipt.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIreceipt.phpexec";
				break;
				
			case("chkfake") :
				//¹è¿­�Ԥ��ɤ�¼�Ԥ��ɤ�©
				if( !is_array( $this->m_enc_arr ) )	
				{
					echo "�Ԥ��ɤ��Ԥ��ʤ�¼�Ԥ��ʤ� 4°³�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ʤ�¸ñ¿¡ ´ë�Ԥ��ɤ��Ԥ��ʤ�¼± ¾�Ԥ��ʤ��Ԥ��ɤ�£�Ԥ��ɤ�­�Ԥ��ɤ��Ԥ��ʤ�¼�Ԥ��ɤ�¾�Ԥ��ˤ� �Ԥ��ɤ��Ԥ��ʤ�´�Ԥ��ʤ�´�Ԥ��ʤ�.";
					return;
				} 
				//set parameter
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"debug=" . $this->m_debug. "\x0B".
					"enctype=" . $this->m_enctype. "\x0B".
					"admin=" . $this->m_keyPw . "\x0B" .
					"checkopt=" . $this->m_checkopt . "\x0B";

				foreach ($this->m_enc_arr as $key => $val)
				{
					$this->m_requestMsg = $this->m_requestMsg . $key . "=" . $val . "\x0B";	
				}
				$this->m_requestMsg = substr( $this->m_requestMsg, 0, -1 ); //trim end \x0B

				$exec_str = $this->m_inipayHome . "/phpexec/INIchkfake.phpexec \"" . $this->m_requestMsg . "\"";
        exec( $exec_str, $output );
        if( is_array( $output ) )
        {
            foreach( $output as $out_str )
            {
                $resData.= $out_str."\n";
            }
        		$resData = substr($resData, 0, -1); // Eliminate unnecessary \n
        }
        else
        {
            $resData .= $out_str;
        }
				$this->m_responseMsg = $resData;
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIchkfake.phpexec";
				break;
				
			case("makeenc") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"encsrc=" . $this->m_enc_src;
				$exec_str = $this->m_inipayHome . "/phpexec/INImakeenc.phpexec \"" . $this->m_requestMsg . "\"";
        exec( $exec_str, $output );
        if( is_array( $output ) )
        {
            foreach( $output as $out_str )
            {
                $resData.= $out_str."\n";
            }
        	$resData = substr($resData, 0, -1); // Eliminate unnecessary \n
        } 
        else
        {
          $resData .= $out_str;
        }
				$this->m_responseMsg = $resData;
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INImakeenc.phpexec";
				break;

			case("KVPSafeKeyIN") :
				$this->m_requestMsg = 
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"goodname=" . $this->m_goodName . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"cardcode=" . $this->m_cardCode . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"buyertel=" . $this->m_buyerTel . "\x0B" .
					"buyeremail=" . $this->m_buyerEmail . "\x0B" .
					"sessionkey=" . $this->m_sessionKey . "\x0B" .
					"encrypted=" . $this->m_encrypted . "\x0B" .
					"kvp_card_prefix=" . $this->m_kvp_card_prefix . "\x0B" .
					"kvp_noint=" . $this->m_kvp_noint . "\x0B" .
					"kvp_quota=" . $this->m_kvp_quota;
				$exec_str = $this->m_inipayHome . "/phpexec/INIKVPSafeKeyIN.phpexec \"" . $this->m_requestMsg . "\"";
				$this->m_responseMsg = exec($exec_str);
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIKVPSafeKeyIN.phpexec";
				break;

			case("formauth_bill") :
				$this->m_requestMsg =
					"inipayhome=" . $this->m_inipayHome . "\x0B" .
					"paymethod=" . $this->m_payMethod . "\x0B" .
					"pgid=" . $this->m_pgId . "\x0B" .
					"spgip=" . $this->m_subPgIp . "\x0B" .
					"admin=" . $this->m_keyPw . "\x0B" .
					"debug=" . $this->m_debug . "\x0B" .
					"billtype=" . $this->m_billtype . "\x0B" .
					"mid=" . $this->m_mid . "\x0B" .
					"test=" . $this->m_test . "\x0B" .
					"uip=" . $this->m_uip . "\x0B" .
					"cardnumber=" . $this->m_cardNumber . "\x0B" .
					"cardexpy=" . $this->m_cardExpy . "\x0B" .
					"cardexpm=" . $this->m_cardExpm . "\x0B" .					
					"authfield1=" . $this->m_authfield1 . "\x0B" .
					"authfield2=" . $this->m_authfield2 . "\x0B" .
					"authentification=" . $this->m_authentification . "\x0B" .
					"price=" . $this->m_price . "\x0B" .
					"currency=" . $this->m_currency . "\x0B" .
					"uid=" . $this->m_uid . "\x0B" .
					"url=" . $this->m_url . "\x0B" .
					"buyername=" . $this->m_buyerName . "\x0B" .
					"merchantReserved3=" . $this->m_merchantReserved3;

				$this->m_responseMsg = exec($this->m_inipayHome . "/phpexec/INIformauth_bill.phpexec \"" . $this->m_requestMsg . "\"");
				if(strlen($this->m_responseMsg) <= 1)
					$this->m_responseMsg = "ResultCode=01&ResultMsg=[9199]INVOKE ERR : " . $this->m_inipayHome . "/phpexec/INIformauth_bill.phpexec";
				break;
				
			default :
				$this->m_responseMsg = "ResultCode=01&ResultMsg=�Ԥ��ɤ�³¸®�Ԥ��ɤ��Ԥ��ʤ� ¼ö ¾ø´�Ԥ��ɤ� °�Ԥ��ɤ�·¡¯�Ԥ��ɤ�ü�Ԥ��ʤ�´�Ԥ��ʤ�´�Ԥ��ʤ� : " . $this->m_type;
		}
		
		parse_str($this->m_responseMsg);
		$this->m_resultCode = $ResultCode;
		$this->m_resultMsg = $ResultMsg;

		if( $ResultCode !== '00')
			return false;

		$this->m_payMethod = $PayMethod;

		switch( $PayMethod){
			case "Card":
				$this->m_authCode = $CardAuthCode;
				$this->m_cardCode = $CardResultCode;

				$this->m_cardNumber = $CardResultNumber;
				$this->m_cardExpire = $CardResultExpire;
				$this->m_cardQuota = $CardResultQuota;

				break;
			case "Auth":
				/* == ½�Ԥ��ɤ�½�Ԥ��ɤ�°£ ºô¸µ �Ԥ��ɤ��Ԥ��ʤ�µå == */
				$this->m_billKey = $BillKey;
			    $this->m_cardPass = $CardPass;
			    $this->m_cardKind = $CardKind;
				$this->m_cardCode = $CardResultCode;

			    break;
			case "reqrealbill":
				$this->m_quotaInterest = $QuotaInterest;

				break;
			default:
				$this->m_authCertain = $AuthCertain;

				$this->m_ocbSaveAuthCode = $OCBauthcode1;
				$this->m_ocbUseAuthCode = $OCBauthcode2;
				$this->m_ocbAuthDate = $OCBauthdate;
				$this->m_ocbResultPoint = $ResultPoint;
				
				$this->m_perno = $perno;
		}
		$this->m_resultCode = $ResultCode;
		$this->m_resultMsg = $ResultMsg;
		$this->m_payMethod = $PayMethod;

		$this->m_cardIssuerCode = $Detailcode;
		$this->m_tid = $Tid;
		$this->m_price1 = $Price1;
		$this->m_price2 = $Price2;
		$this->m_pgAuthDate = $PGauthdate;
		$this->m_pgAuthTime = $PGauthtime;

		// $this->m_void = $void;
		// $this->m_vacct = $vacct;
		// $this->m_vcdbank = $vcdbank;
		// $this->m_dtinput = $dtinput;

		
/* == �Ԥ��ɤ�¾�Ԥ��ɤ�³½�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ˤ�°¡ �Ԥ��ɤ��Ԥ��ʤ�µå(2005.02.01 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
		// $this->m_remain_price = $remain_price;		// �Ԥ��ɤ�¾�Ԥ��ɤ�³½�Ԥ��ɤ� �Ԥ��ʤ�¾�Ԥ��ʤ�

/* == �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ ¹�Ԥ��ˤ��Ԥ��ɤ��Ԥ��ˤ� ¸®�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�µå == */
		// $this->m_rcr_price = $RCR_Price;		// �Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�ö±�Ԥ��ʤ�°á�Ԥ��ɤ�¦ ±�Ԥ��ʤ�¾�Ԥ��ʤ�
		// $this->m_rsup_price = $RSup_Price;		// °ø±�Ԥ��ʤ�°¡
		// $this->m_rtax = $RTax;				// º�Ԥ��ʤ�°¡¼¼
		// $this->m_rsrvc_price = $RSrvc_Price;		// º»ç·á
		// $this->m_ruseopt = $RUseOpt;			// �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ ¿ëµµ ±¸º�Ԥ��ʤ�
		// $this->m_rcash_noappl = $Rcash_noappl;		// �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ ¹�Ԥ��ˤ��Ԥ��ɤ��Ԥ��ˤ� ½�Ԥ��ɤ��Ԥ��ʤ�¹ø�Ԥ��ɤ�£
		// $this->m_rcash_rslt = $Rcash_rslt;		// �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ ¹�Ԥ��ˤ�±�Ԥ��ʤ��Ԥ��ɤ��Ԥ��ʤ�µå (4�Ԥ��ʤ�¸®)
		
/* == �Ԥ��ɤ�ö±�Ԥ��ʤ�¿µ¼ö�Ԥ��ɤ�õ �Ԥ��ɤ�ë¼�Ԥ��ʤ� ½�Ԥ��ɤ��Ԥ��ʤ� ¹ø�Ԥ��ɤ�£ ¸®�Ԥ��ɤ��Ԥ��ʤ� == */		
		// $this->m_rcash_cancel_noappl = $Rcash_cancel_noappl;
	
		
/* == CMS °è�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¼ ¸®�Ԥ��ɤ��Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�µå (2004. 11. 15 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
		// $this->m_cmsbankcode = $CMSBankCode;		// º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
 		

// /* == º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�(ç½�Ԥ��ɤ��Ԥ��ʤ�) �Ԥ��ɤ��Ԥ��ˤ�°¡ �Ԥ��ɤ��Ԥ��ʤ�µå (2004.11.05 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
// 		$this->m_tid_org = $TID_org;			// ¿ø°�Ԥ��ɤ�·¡ TID
// 		$this->m_remains = $PR_remains;			// �Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¾°á�Ԥ��ɤ�¦ ±�Ԥ��ʤ�¾�Ԥ��ʤ�
// 		$this->m_flg_partcancel = $flg_partcancel;	// º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�, ç½�Ԥ��ɤ��Ԥ��ʤ� ±¸º�Ԥ��ʤ�°ª
// 		$this->m_cnt_partcancel = $cnt_partcancel; 	// º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ�(ç½�Ԥ��ɤ��Ԥ��ʤ�) ¿ä�Ԥ��ɤ�»�Ԥ��ɤ�½¼ö		
		
/* == �Ԥ��ɤ��Ԥ��ˤ�°¡ �Ԥ��ɤ��Ԥ��ʤ�µå (2004.6.23 ´ë¸® �Ԥ��ʤ��Ԥ��ɤ�¾¿�Ԥ��ʤ�) == */
		$this->m_moid = $MOID;				// »ó�Ԥ��ɤ�¡�Ԥ��ɤ��Ԥ��ʤ�¹®¹ø�Ԥ��ɤ�£
		$this->m_codegw = $CodeGW;			// ü�Ԥ��ɤ�­°á�Ԥ��ɤ�¦ »ç¾÷�Ԥ��ʤ� �Ԥ��ɤ��Ԥ��ʤ�µå
		// $this->m_ocbcardnumber = $OCBcardnumber; 	// OCB �Ԥ��ɤ�«µå¹ø�Ԥ��ɤ�£	
		// $this->m_cultureid = $CultureID;		// �Ԥ��ɤ��Ԥ��ɤ��Ԥ��ɤ�³·£µå ID, �Ԥ��ɤ�¾�Ԥ��ɤ�³½�Ԥ��ɤ� ID
		// $this->m_directbankcode = $DirectBankCode;	// ½�Ԥ��ɤ�½�Ԥ��ɤ�°£ º�Ԥ��ɤ��Ԥ��ˤ�°è�Ԥ��ɤ��Ԥ��ɤ��Ԥ��ʤ��Ԥ��ɤ�¼ º�Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ��Ԥ��ʤ�µå
		
/* ==  ºô¸µ º�Ԥ��ʤ�º�Ԥ��ʤ��Ԥ��ɤ�ë¼�Ԥ��ʤ� °¡´�Ԥ��ɤ�¿©º�Ԥ��ʤ�(2012.07.11 ±è¼±±¹) == */
		// $this->m_prtcCode = $PrtcCode;

		
/* == °á°ú¸�Ԥ��ʤ�¼¼�Ԥ��ɤ�ö ($m_resultMsg)¿¡¼­ ¿¡·¯�Ԥ��ɤ��Ԥ��ʤ�µå �Ԥ��ɤ��Ԥ��ˤ��Ԥ��ɤ�â == */
		$str = $ResultMsg ;
		//$arr = split("\]+", $str);
		$arr = preg_split("/\]+/", $str);
		$this->m_resulterrcode = substr($arr[0],1);	// []¾�Ԥ��ɤ��Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ʤ�µå¸¸ �Ԥ��ɤ�¥½�Ԥ��ɤ�


/* == µð�Ԥ��ɤ�ö�Ԥ��ɤ��Ԥ��ʤ� ¹®�Ԥ��ɤ�­ »ó�Ԥ��ɤ�°±�Ԥ��ɤ� �Ԥ��ɤ�«µå ¼ö (SKT »ó�Ԥ��ɤ�°±�Ԥ��ɤ� °ø�Ԥ��ɤ�ë¸·�Ԥ��ʤ� »ç¿ë)== */		
		// $this->m_dgcl_cardcount = $dgcl_cardcount;
  //   for($i=1 ; $i < $this->m_dgcl_cardcount+1 ; $i++)
  //   {
  //     $this->m_dgcl_cardnum[$i-1] = ${"dgcl_cardnum".$i};
  //     $this->m_dgcl_remain_price[$i-1] = ${"dgcl_remain_price".$i};
  //     $this->m_dgcl_errmsg[$i-1] =  ${"dgcl_errmsg".$i};
  //   }


/* == SKT »ó�Ԥ��ɤ�°±�Ԥ��ɤ� �Ԥ��ɤ��Ԥ��ʤ�µå (°á�Ԥ��ɤ�¦ ¹æ¹ý ±¸º�Ԥ��ʤ�) == */
		// $this->m_sktg_method = $sktg_method;
		
/* ==  ¥�Ԥ��ɤ�ä�Ԥ��ʤ��Ԥ��ɤ�ö §º¯�Ԥ��ɤ�¶ ¹æ�Ԥ��ɤ�ö (2006.12.27 �Ԥ��ʤ�½�Ԥ��ɤ�±¹)  == */
		// $this->m_ini_rn = $rn;
		// if($this->m_enctype == "asym")
		// {
		// 	$this->m_ini_encfield = str_replace(" ", "+", $encfield); 
		// 	$this->m_ini_encfield .= "&src=";
		// 	$this->m_ini_encfield .= str_replace(" ", "+", $src); 
		// }
		// else
		// {
		// 	$this->m_ini_encfield = str_replace(" ", "+", $encfield); //¿ø»ó�Ԥ��ɤ�¸º¹ because parse_str°¡ "+"->" "
		// }
		// $this->m_ini_certid = str_replace(" ", "+", $certid);
	}
}

?>
