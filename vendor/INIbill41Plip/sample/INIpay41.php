<?php

/****************************************************************************************
 **** ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­Â¼Ã¶Â´¤Ô¤¾¤Ê¤¼ÂºÂ°Â·¤Ô¤¾¤Ê¤§ PGIDÂ¸Â¦ Â´¤Ô¤¾¤Ê¤¸Â¸Â£Â°¤Ô¤¾¤Ê¤¯ ¤Ô¤¾¤É¤¼Â¥Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¬Â´¤Ô¤¾¤Ê¤¸ (2003.12.19 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) ****
 ****************************************************************************************
 *** ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤Ê¤¼¤Ô¤¾¤É¤¼ PGID Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«Âº ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­Â¼Ã¶Â´¤Ô¤¾¤Ê¤¼ÂºÂ°Â·¤Ô¤¾¤Ê¤§ TIDÂ¸Â¦ ÂºÂ°ÂµÂµÂ·¤Ô¤¾¤Ê¤§ ¤Ô¤¾¤É¤¼Â¥Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂµÂµÂ·¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ¸Ã§,  ***
 *** ¤Ô¤¾¤Ê¤®¤Ô¤¾¤É¤¼Â·¤Ô¤¾¤Ê¤§ Â¼Ã¶¤Ô¤¾¤É¤²Â¤¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤É¤´ Â°Ã¦Â¿Ã¬ ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­ Â½¤Ô¤¾¤É¤¼¤Ô¤¾¤É¤»¤Ô¤¾¤Ê¤«Â°Â¡ Â¹¤Ô¤¾¤Ë¤¡Â»Ã½ Âµ¤Ô¤¾¤É¤¾Â¼Ã¶ ¤Ô¤¾¤Ê¤±Â¸Â¹¤Ô¤¾¤É¤¼Â·¤Ô¤¾¤Ê¤§ Ã½Â´Ã«Â·¤Ô¤¾¤Ê¤§ Â¼Ã¶¤Ô¤¾¤É¤²Â¤  ***
 *** ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤²Ã¶ Â¾¤Ô¤¾¤Ê¤¢ÂµÂµÂ·¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ½¤Ô¤¾¤É¤¶Â±Ã¢ Â¹¤Ô¤¾¤Ê¤¸Â¶Ã¸Â´¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤Ê¤¸.     ********************************************* 
 *** ¤Ô¤¾¤Ê¤®¤Ô¤¾¤É¤¼Â·¤Ô¤¾¤Ê¤§ Â¼Ã¶¤Ô¤¾¤É¤²Â¤¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ¿Â© Â¹¤Ô¤¾¤Ë¤¡Â»Ã½Âµ¤Ô¤¾¤É¤½ Â¹Â®¤Ô¤¾¤É¤²Â¦Â¿Â¡ Â´Ã«¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¶Â¼Â­Â´¤Ô¤¾¤É¤´ (¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±)¤Ô¤¾¤Ê¤¥Â´¤Ô¤¾¤Ê¤ªÂ½¤Ô¤¾¤É¤¶Â½ÂºÂ¿Â¡ ¤Ô¤¾¤É¤¶Â¥¤Ô¤¾¤Ê¤®¤Ô¤¾¤Ê¤¥    ***** 
 *** Â¾Ã¸Â¸Â´¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±¤Ô¤¾¤É¤¼ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ½¤Ô¤¾¤É¤¶Â±Ã¢ Â¹¤Ô¤¾¤Ê¤¸Â¶Ã¸Â´¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤Ê¤¸.      ********************************************
 ***************************************************************************************/
extract($_POST);
extract($_GET);
/*************************************************************************************
 *************************************************************************************
   ********************        Â»Ã³Â±Ã¢Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤« Ã½Â´Ã« Â¼Ã¶¤Ô¤¾¤É¤²Â¤ Âº¤Ô¤¾¤Ê¤­Â°Â¡      ************************
 *************************************************************************************
 *************************************************************************************/
 
/*----------------------------------------------------------* 
 *Â¹Â«¤Ô¤¾¤Ê¤¥¤Ô¤¾¤Ê¤º ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§Â°¤Ô¤¾¤É¤ºÂ·Â¡¤Ô¤¾¤Ê¤§ Â°Ã¦Â¿Ã¬ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§Â°Â³Â¿Ã¹Â¼Ã¶ Âµ¤Ô¤¾¤Ê¤ºÂ¿Â¡ Â¹Â«¤Ô¤¾¤Ê¤¥¤Ô¤¾¤Ê¤º¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤®Â» ¤Ô¤¾¤É¤¼Â¥Â½¤Ô¤¾¤É¤¶*
 *----------------------------------------------------------*/

if( isset( $quotainterest) && !is_null( $quotainterest) && $quotainterest == "1")
{
	$interest = "(Â¹Â«¤Ô¤¾¤Ê¤¥¤Ô¤¾¤Ê¤º¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§)";
}
 
/*----------------------------------------------------------*/


class INIpay41
{
	var $fd;
	var $m_inipayHome; 		//¤Ô¤¾¤Ê¤¥Â´¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤»Ã¤¤Ô¤¾¤Ê¤¥ ¤Ô¤¾¤É¤½Â¨ÂµÃ°Â·Âº¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤¦Â¸Â®
	var $m_test; 			// "true"Â¸Ã© 17Â¹Ã¸Â¸Â·¤Ô¤¾¤Ê¤§ ÂºÂ¸Â³Â½Â´¤Ô¤¾¤Ê¤¸
	var $m_debug; 			// "true"Â¸Ã© Â»Ã³Â¼Â¼¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¬ Â·¤Ô¤¾¤Ê¤§Â±¤Ô¤¾¤Ê¤´Â¸Â¦ Â³Â²Â±Ã¤Â´¤Ô¤¾¤Ê¤¸
	var $m_type; 			// Â°¤Ô¤¾¤É¤ºÂ·Â¡ Â¯¤Ô¤¾¤É¤¼Ã¼
	var $m_pgId; 			// PGID
	var $m_keyPw; 			// keypass.enc¤Ô¤¾¤É¤¼ pass phrase
	var $m_subPgIp; 		// 3Â¹Ã¸¤Ô¤¾¤É¤´Â° Â¿Â¹ÂºÃ± PG IP Addr
	var $m_mid; 			// Â»Ã³¤Ô¤¾¤É¤²Â¡ Â¾¤Ô¤¾¤É¤»¤Ô¤¾¤Ê¤¥ÂµÃ°
	var $m_language; 		// Â»Ã§Â¿Ã«Â¾Ã°Â¾Ã®
	var $m_oldTid; 			// Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­(Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§) Â»Ã§Â¿Ã«Â½¤Ô¤¾¤É¤¶ Â¿Ã¸Â°¤Ô¤¾¤É¤ºÂ·Â¡Â¾¤Ô¤¾¤É¤»¤Ô¤¾¤Ê¤¥ÂµÃ°
	var $m_tid; 			// Â°¤Ô¤¾¤É¤ºÂ·Â¡Â¾¤Ô¤¾¤É¤»¤Ô¤¾¤Ê¤¥ÂµÃ°
	var $m_goodName; 		// Â»Ã³¤Ô¤¾¤É¤¼Â°Â¸Ã­
	var $m_currency; 		// ¤Ô¤¾¤É¤½Â­¤Ô¤¾¤É¤»Ã³Â´¤Ô¤¾¤Ê¤¼Â§ (WON, USD)
	var $m_price; 			// Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
	var $m_confirm_price;		// Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â¿Ã¤¤Ô¤¾¤É¤¶Â» Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
	var $m_buyerName; 		// Â±Â¸Â¸¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤º Â¼ÂºÂ¸Ã­
	var $m_buyerTel; 		// Â±Â¸Â¸¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤º Ã¼¤Ô¤¾¤É¤½Â­Â¹Ã¸¤Ô¤¾¤É¤½Â£ (SMS Â¶Â«Â¿Â¡ Â¹¤Ô¤¾¤Ê¤½ÂµÃ¥Â½¤Ô¤¾¤É¤¶ ¤Ô¤¾¤Ê¤¥ÂµÂ¿Ã¼¤Ô¤¾¤É¤½Â­...)
	var $m_buyerEmail; 		// Â±Â¸Â¸¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤º ¤Ô¤¾¤Ê¤¥Â¸¤Ô¤¾¤Ê¤¾¤Ô¤¾¤Ê¤ª
	var $m_recvName; 		// Â¼Ã¶¤Ô¤¾¤É¤¶Ã«¤Ô¤¾¤Ê¤§ Â¼ÂºÂ¸Ã­
	var $m_recvTel; 		// Â¼Ã¶¤Ô¤¾¤É¤¶Ã«¤Ô¤¾¤Ê¤§ Â¿Â¬Â¶Ã´¤Ô¤¾¤É¤¶Â³
	var $m_recvAddr; 		// Â¼Ã¶¤Ô¤¾¤É¤¶Ã«¤Ô¤¾¤Ê¤§ ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¼¤Ô¤¾¤Ê¤­
	var $m_recvPostNum; 		// Â¼Ã¶¤Ô¤¾¤É¤¶Ã«¤Ô¤¾¤Ê¤§ Â¿Ã¬¤Ô¤¾¤É¤»Ã­Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_recvMsg; 		// Â¼Ã¶¤Ô¤¾¤É¤¶Ã«¤Ô¤¾¤Ê¤§Â¿Â¡Â°¤Ô¤¾¤Ê¤¯ Ã¼Â´¤Ô¤¾¤Ê¤¾¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­ Â¸¤Ô¤¾¤Ê¤¾Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤²Ã¶
	var $m_companyNumber; 		// Â»Ã§Â¾Ã·¤Ô¤¾¤Ê¤º ÂµÃ®Â·¤Ô¤¾¤Ê¤ªÂ¹Ã¸¤Ô¤¾¤É¤½Â£(10¤Ô¤¾¤Ê¤ºÂ¸Â® Â¼Ã½¤Ô¤¾¤Ê¤º)
	var $m_cardCode; 		// ¤Ô¤¾¤É¤¸Â«ÂµÃ¥Â»Ã§ ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_cardIssuerCode; 		// ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¹¤Ô¤¾¤Ë¤¡Â±¤Ô¤¾¤Ê¤¾Â»Ã§(Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢) ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_payMethod; 		// ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­Â¹Ã¦Â¹Ã½
	var $m_merchantReserved1; 	// Â¿Â¹ÂºÃ±¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­) 
	var $m_merchantReserved2; 	// Â¿Â¹ÂºÃ±¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­) 
	var $m_merchantReserved3; 	// Â¿Â¹ÂºÃ±¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­) 
	var $m_uip; 			// ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­¤Ô¤¾¤Ê¤§ PC IP Addr
	var $m_url; 			// ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­ Â»Ã³¤Ô¤¾¤É¤²Â¡ URL
	var $m_billingPeriod; 		// Billing Â±Ã¢Â°Â£ (2002/07 ¤Ô¤¾¤É¤¼Ã¶Ã§ Â»Ã§Â¿Ã«Â¾¤Ô¤¾¤É¤½¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¯)
	var $m_payOption; 		
	var $m_encrypted; 		// Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£Â¹Â® (Â´Ã«¤Ô¤¾¤É¤¸Âª¤Ô¤¾¤É¤ºÂ°Â·¤Ô¤¾¤Ê¤§ Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£¤Ô¤¾¤É¤½Â­Âµ¤Ô¤¾¤É¤½ PLAIN TEXT)
	var $m_sessionKey; 		// Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£Â¹Â® (Â°Ã¸Â°Â³¤Ô¤¾¤É¤ºÂ°Â·¤Ô¤¾¤Ê¤§ Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£¤Ô¤¾¤É¤½Â­Âµ¤Ô¤¾¤É¤½ Â´Ã«¤Ô¤¾¤É¤¸Âª¤Ô¤¾¤É¤ºÂ°)
	var $m_uid; 			// INIpay User ID (2002/07 ¤Ô¤¾¤É¤¼Ã¶Ã§ Â»Ã§Â¿Ã«Â¾¤Ô¤¾¤É¤½¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¯)
	var $m_quotaInterest; 		// Â¹Â«¤Ô¤¾¤Ê¤¥¤Ô¤¾¤Ê¤º¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§ FLAG
	var $m_cardNumber;  		// Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_price1; 			// OK Cashbag, Netimoney Â¿Â¡Â¼Â­ Â»Ã§Â¿Ã«¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤É¤´ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´¤Ô¤¾¤É¤²Â¤ÂºÂ¸
	var $m_price2; 			// OK Cashbag, Netimoney Â¿Â¡Â¼Â­ Â»Ã§Â¿Ã«¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤É¤´ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´¤Ô¤¾¤É¤²Â¤ÂºÂ¸
	var $m_cardQuota; 		// ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­Âº¤Ô¤¾¤Ê¤§Â±Ã¢Â°Â£
	var $m_bankCode; 		// Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_ocbNumber; 		// OK Cashbag ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_ocbPasswd; 		// OK Cashbag ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ ÂºÃ±Â¹¤Ô¤¾¤Ê¤«Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_authentification; 	// ÂºÂ»¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²Ãµ FLAG
	var $m_authField1; 		// ÂºÂ»¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²ÃµÂ¿Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢Â¿Ã¤¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¬ ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£ Âµ¤Ô¤¾¤Ê¤º 7¤Ô¤¾¤Ê¤ºÂ¸Â®
	var $m_authField2; 		// ÂºÂ»¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²ÃµÂ¿Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢Â¿Ã¤¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¬ ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ ÂºÃ±Â¹¤Ô¤¾¤Ê¤«Â¹Ã¸¤Ô¤¾¤É¤½Â£ Â¾¤Ô¤¾¤Ê¤° 2¤Ô¤¾¤Ê¤ºÂ¸Â®
	var $m_authField3; 		// ÂºÂ»¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²ÃµÂ¿Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢Â¿Ã¤¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¬ Â¿Â¹ÂºÃ±¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥
	var $m_passwd; 			// (Â¹Ã¼Â¿Ã«) ÂºÃ±Â¹¤Ô¤¾¤Ê¤«Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_cardExpy; 		// Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¯¤Ô¤¾¤É¤½Â¿Â±Ã¢Â°Â£-Â³Ã¢ (YY)
	var $m_cardExpm; 		// Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¯¤Ô¤¾¤É¤½Â¿Â±Ã¢Â°Â£-Â¿Ã¹ (MM)
	var $m_cardExpire; 		// Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¯¤Ô¤¾¤É¤½Â¿Â±Ã¢Â°Â£ (YYMM)
	var $m_ocbCardType; 		// OK Cashbag ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¯¤Ô¤¾¤É¤¼Ã¼ (¤Ô¤¾¤Ê¤ºÂ»Ã§¤Ô¤¾¤É¤¸Â«ÂµÃ¥...)
	var $m_merchantReserved; 	// Â¿Â¹ÂºÃ±¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (ÂºÃ±¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­)
	var $m_cancelMsg; 		// ¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â»Ã§Â¯
	var $m_resultCode; 		// Â°Ã¡Â°Ãº ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥ (2 digit)
	var $m_resultMsg; 		// Â°Ã¡Â°Ãº Â³Â»Â¿Ã«
	var $m_authCode; 		// Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_ocbResultPoint; 		// OK Cashbag Point ¤Ô¤¾¤É¤²Â¶¤Ô¤¾¤É¤½Â¸Â½¤Ô¤¾¤É¤¶ Â°Â¡Â¿Ã«¤Ô¤¾¤É¤»Ã·¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤»Â®
	var $m_authCertain; 		// PGÂ¿Â¡Â¼Â­ ÂºÂ»¤Ô¤¾¤Ê¤§¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²ÃµÂ» Â¼Ã¶¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ¿Â´Â´¤Ô¤¾¤É¤´¤Ô¤¾¤É¤²Ã¶Â¸Â¦ Â³Âª¤Ô¤¾¤É¤ºÂ¸Â³Â»Â´¤Ô¤¾¤É¤´ FLAG
	var $m_ocbSaveAuthCode; 	// OK Cashbag Ã»Â¸Â³ Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_ocbUseAuthCode; 		// OK Cashbag Â»Ã§Â¿Ã« Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_ocbAuthDate; 		// OK Cashbag Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â³Â¯¤Ô¤¾¤É¤´Â¥
	var $m_pgAuthDate; 		// PG Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â³Â¯¤Ô¤¾¤É¤´Â¥
	var $m_pgAuthTime; 		// PG Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â½¤Ô¤¾¤É¤¶Â°Â¢
	var $m_pgCancelDate; 		// PG ¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â³Â¯¤Ô¤¾¤É¤´Â¥
	var $m_pgCancelTime; 		// PG ¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â½¤Ô¤¾¤É¤¶Â°Â¢
	var $m_requestMsg; 		// ÂºÂ¸Â³Â¾ Â¸¤Ô¤¾¤Ê¤¾Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤²Ã¶
	var $m_responseMsg; 		// Â¹¤Ô¤¾¤Ê¤¾Âº Â¸¤Ô¤¾¤Ê¤¾Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤²Ã¶
	var $m_resulterrcode; 		// Â°Ã¡Â°ÃºÂ¸¤Ô¤¾¤Ê¤¾Â¼Â¼¤Ô¤¾¤É¤²Ã¶ Â¿Â¡Â·Â¯¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_resultprice; 		// Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â¿¤Ô¤¾¤Ê¤ªÂ·Ã¡ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´

/* == ¤Ô¤¾¤É¤»Â¾¤Ô¤¾¤É¤¸Â³Â½¤Ô¤¾¤É¤¶ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (2005.02.01 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
	var $m_remain_price;		// ¤Ô¤¾¤É¤»Â¾¤Ô¤¾¤É¤¸Â³Â½¤Ô¤¾¤É¤¶ ¤Ô¤¾¤Ê¤¼Â¾¤Ô¤¾¤Ê¤´

/* == CMSÂ°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ (2004. 11. 15 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
	var $m_bankAccount; 		// Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_regNumber; 		// ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹¤Ô¤¾¤Ê¤§ÂµÃ®Â·¤Ô¤¾¤Ê¤ªÂ¹Ã¸¤Ô¤¾¤É¤½Â£ (Â½¤Ô¤¾¤É¤¼Â½¤Ô¤¾¤É¤¶Â°Â£ ÂºÃ´Â¸ÂµÂ¿Ã« ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹¤Ô¤¾¤Ê¤§ÂµÃ®Â·¤Ô¤¾¤Ê¤ª Â¹Ã¸¤Ô¤¾¤É¤½Â£ 13¤Ô¤¾¤Ê¤ºÂ¸Â®)
	var $m_CMSBankCode;		// Â°Ã¡¤Ô¤¾¤É¤²Â¦Â¿¤Ô¤¾¤Ê¤ªÂ·Ã¡¤Ô¤¾¤É¤½¤Ô¤¾¤É¤¸ Â¸Â®¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤ª Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_price_org;		// ¤Ô¤¾¤É¤¶Ã¢Â±¤Ô¤¾¤Ê¤½¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤¬Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
	var $m_cmsday;			// ¤Ô¤¾¤É¤¶Ã¢Â±¤Ô¤¾¤Ê¤½Â¿Â¹¤Ô¤¾¤É¤²Â¤¤Ô¤¾¤Ê¤ª
	var $m_cmsdatefrom;		// ¤Ô¤¾¤É¤¶Ã¢Â±¤Ô¤¾¤Ê¤½Â½¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤»Â¿Ã¹
	var $m_cmsdatero;		// ¤Ô¤¾¤É¤¶Ã¢Â±¤Ô¤¾¤Ê¤½¤Ô¤¾¤É¤²Â¾Â·Ã¡Â¿Ã¹
	var $m_cmstype;			// 1-CMS ¤Ô¤¾¤Ê¤ºÂµÂ¿(Â¿Â¹Â¾¤Ô¤¾¤Ë¤¢)¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼, 2-CMSÂ°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ÂµÃ®Â·¤Ô¤¾¤Ê¤ª

/* == Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­(Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§) ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (2004.11.05 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
	var $m_tid_org;		// Â¿Ã¸Â°¤Ô¤¾¤É¤ºÂ·Â¡ TID
	var $m_remains = "";		// ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤±¤Ô¤¾¤É¤²Â¾Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
	var $m_flg_partcancel = "";	// Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­, Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â±Â¸Âº¤Ô¤¾¤Ê¤«Â°Âª
	var $m_cnt_partcancel = ""; 	// Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­(Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§) Â¿Ã¤¤Ô¤¾¤É¤¶Â»¤Ô¤¾¤É¤½Â½Â¼Ã¶	
	
/* == ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ (2004.06.23 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
	var $m_moid; 		// Â»Ã³¤Ô¤¾¤É¤¼Â°¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹Â®Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_codegw; 		// Ã¼¤Ô¤¾¤É¤½Â­Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â»Ã§Â¾Ã·¤Ô¤¾¤Ê¤º ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_ParentEmail; 	// ÂºÂ¸¤Ô¤¾¤É¤½Â£¤Ô¤¾¤Ê¤º ¤Ô¤¾¤Ê¤¥Â¸¤Ô¤¾¤Ê¤¾¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¼¤Ô¤¾¤Ê¤­
	var $m_ocbcardnumber; 	// OK CASH BAG Â°Ã¡¤Ô¤¾¤É¤²Â¦ , Ã»Â¸Â³¤Ô¤¾¤Ê¤§ Â°Ã¦Â¿Ã¬ OK CASH BAG ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_cultureid;	// ¤Ô¤¾¤É¤¸¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤¸ Â·Â£ÂµÃ¥ ID
	var $m_directbankacc;	// Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼ Â°Ã¡¤Ô¤¾¤É¤²Â¦¤Ô¤¾¤Ê¤§ Â°Ã¦Â¿Ã¬ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_directbankcode;	// Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼ Â°Ã¡¤Ô¤¾¤É¤²Â¦¤Ô¤¾¤Ê¤§ Â°Ã¦Â¿Ã¬ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_billKey;		// Â½¤Ô¤¾¤É¤¼Â½¤Ô¤¾¤É¤¶Â°Â£ ÂºÃ´Â¸Âµ ÂºÃ´¤Ô¤¾¤É¤ºÂ°
	var $m_cardPass;	// Â½¤Ô¤¾¤É¤¼Â½¤Ô¤¾¤É¤¶Â°Â£ ÂºÃ´Â¸ÂµÂ¿Ã« Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ ÂºÃ±Â¹¤Ô¤¾¤Ê¤«Â¹Ã¸¤Ô¤¾¤É¤½Â£ Â¾¤Ô¤¾¤Ê¤° 2¤Ô¤¾¤Ê¤ºÂ¸Â®
	var $m_billtype;	// ÂºÃ´Â¸Âµ¤Ô¤¾¤É¤ºÂ¸¤Ô¤¾¤Ê¤¯ (Â½¤Ô¤¾¤É¤ºÂ¿Ã«¤Ô¤¾¤É¤¸Â«ÂµÃ¥ - card, ¤Ô¤¾¤É¤½¤Ô¤¾¤Ê¤¾Â´Ã«¤Ô¤¾¤É¤»Ã¹ - hpp)
	
	
/* ==  Â°Â¡Â»Ã³Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´Â¸Â¦ Â§¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¶ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ (2003.07.07 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª)  == */
	var $m_perno; 		// Â°Â¡Â»Ã³Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ ¤Ô¤¾¤É¤²Ã¶Âº¤Ô¤¾¤Ê¤­ Â¿Â¹Â¾¤Ô¤¾¤Ë¤¢¤Ô¤¾¤Ê¤º ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_oid; 		// ¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹Â®Â¹Ã¸¤Ô¤¾¤É¤½Â£(Â»Ã³¤Ô¤¾¤É¤²Â¡Â¿Â¡Â¼Â­ Ã¼Â´¤Ô¤¾¤Ê¤¾Âµ¤Ô¤¾¤É¤¼Â´¤Ô¤¾¤É¤´ Â°Âª)
	var $m_vacct; 		// Â°Â¡Â»Ã³Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_vcdbank; 	// ¤Ô¤¾¤É¤¶Â¤Â¹Ã¸Â¿Â¡ Â»Ã§Â¿Ã«Âµ¤Ô¤¾¤É¤½ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_dtinput; 	// ¤Ô¤¾¤Ê¤¯Â±¤Ô¤¾¤Ê¤½ Â¿Â¹¤Ô¤¾¤É¤²Â¤¤Ô¤¾¤Ê¤ª
	var $m_nminput; 	// Â¼¤Ô¤¾¤Ê¤»Â±¤Ô¤¾¤Ê¤½¤Ô¤¾¤Ê¤º Â¸Ã­
	var $m_nmvacct; 	// Â¿Â¹Â±¤Ô¤¾¤Ê¤½¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤± Â¸Ã­
	var $m_rvacct;		// ¤Ô¤¾¤É¤½Â¯Âº¤Ô¤¾¤Ê¤­Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ Â¹Ã¸¤Ô¤¾¤É¤½Â£
	var $m_rvcdbank;	// ¤Ô¤¾¤É¤½Â¯Âº¤Ô¤¾¤Ê¤­Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
	var $m_rnminput;	// ¤Ô¤¾¤É¤½Â¯Âº¤Ô¤¾¤Ê¤­Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´ Â¿Â¹Â±¤Ô¤¾¤Ê¤½¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¸Ã­

/* == ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½ Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â¹¤Ô¤¾¤Ë¤¡¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ (2003.12.08 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
	var $m_cr_price;	// ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤¬ ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
	var $m_sup_price;	// Â°Ã¸Â±¤Ô¤¾¤Ê¤¾Â°Â¡
	var $m_tax;		// Âº¤Ô¤¾¤Ê¤§Â°Â¡Â¼Â¼
	var $m_srvc_price;	// ÂºÂ»Ã§Â·Ã¡
	var $m_usepot;		// Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â»Ã§Â¿Ã«Â¿Ã«ÂµÂµ
	var $m_ocbprice;	// OCB Ã»Â¸Â³Â¿Ã¤¤Ô¤¾¤É¤¶Â»Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´

/* ==  Â°Â¡Â»Ã³Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´Â¸Â¦ Â§¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¶ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ (2006.10.18 Â±Ã¨Â¿Ã«Â¿Ã®)  == */
	var $m_tminput; 	// ¤Ô¤¾¤Ê¤¯Â±¤Ô¤¾¤Ê¤½ Â¿Â¹¤Ô¤¾¤É¤²Â¤ Â½¤Ô¤¾¤É¤¶Â°Â£

/* ==  Â¥¤Ô¤¾¤É¤»Ã¤¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Ã¶ Â§ÂºÂ¯¤Ô¤¾¤É¤²Â¶ Â¹Ã¦¤Ô¤¾¤É¤²Ã¶ (2006.12.27 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹)  == */
	var $m_enc_arr = array();
	var $m_enctype;
	var $m_checkopt;
	var $m_rn;
	var $m_ini_rn;
	var $m_ini_encfield;
	var $m_ini_certid;
    
/* ==  Â°Ã¡¤Ô¤¾¤É¤²Â¦Â¿Ã¤¤Ô¤¾¤É¤¶Â»¤Ô¤¾¤É¤»Ã¤¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Ã¶ ÂµÂ¥¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤ºÂ¸ Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£¤Ô¤¾¤É¤½Â­(2007.01.10 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹)  == */
	var $m_enc_src;
    	
/* ==  ¤Ô¤¾¤É¤ºÃ«Â¹Ã¦¤Ô¤¾¤É¤»¤Ô¤¾¤É¤¼ KVP¤Ô¤¾¤É¤¼¤Ô¤¾¤É¤¶Â·Â¯Â±¤Ô¤¾¤Ê¤´¤Ô¤¾¤Ê¤§ ¤Ô¤¾¤É¤¶Â³Â¸Â®(2007.01.25 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹) == */
	var $m_kvp_card_prefix;
	var $m_kvp_noint;
	var $m_kvp_quota;

	var $m_pgn;
/* ==  Â¿¤Ô¤¾¤É¤¼¤Ô¤¾¤É¤´Â¸Â¶¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ(2007.06.28 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹) == */
	var $m_OMFlag;
	var $m_SubCrCnt;
	var $m_om = array();

/* ==  Â°¤Ô¤¾¤Ê¤¯¤Ô¤¾¤Ê¤®Â¹Â®¤Ô¤¾¤É¤½Â­Â»Ã³¤Ô¤¾¤É¤¼Â°Â±¤Ô¤¾¤É¤¼(2009.04.17 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹) == */
  	var $m_dgcl_cardcount;
  	var $m_dgcl_cardnum = array();
  	var $m_dgcl_remain_price = array();
  	var $m_dgcl_errmsg = array();

/* ==  ¤Ô¤¾¤É¤½¤Ô¤¾¤Ê¤¾Â´Ã«¤Ô¤¾¤É¤»Ã¹ ¤Ô¤¾¤É¤»Ã»¤Ô¤¾¤É¤»Ã¤¤Ô¤¾¤Ê¤¥ ÂºÃ±¤Ô¤¾¤Ê¤§¤Ô¤¾¤É¤²Ãµ(2010.11.03 ¤Ô¤¾¤É¤²Â¤Â±Ã¦¤Ô¤¾¤É¤½¤Ô¤¾¤É¤») == */
    var $m_hpptype;
    var $m_hppnumber;
    var $m_hppregnumber;
    var $m_hppauthnumber;
    var $m_hppcotype;
    var $m_hppcorp;
    var $m_hppauthserial;
    var $m_hppoid;
    var $m_hppsid;

/* ==  ÂºÃ´Â¸Âµ Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â°Â¡Â´¤Ô¤¾¤É¤¾Â¿Â©Âº¤Ô¤¾¤Ê¤§(2012.07.11 Â±Ã¨Â¼Â±Â±Â¹) == */
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
				//Â¿¤Ô¤¾¤É¤¼¤Ô¤¾¤É¤´Â¸Â¶¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ
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
				//Â¹Ã¨Â¿Â­¤Ô¤¾¤É¤¶Â¼¤Ô¤¾¤É¤ºÂ©
				if( !is_array( $this->m_enc_arr ) )	
				{
					echo "¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤±Â¼¤Ô¤¾¤Ê¤­ 4Â°Â³¤Ô¤¾¤É¤¼ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤´Â¸Ã±Â¿Â¡ Â´Ã«¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¶Â¼Â± Â¾¤Ô¤¾¤Ê¤ª¤Ô¤¾¤É¤½Â£¤Ô¤¾¤É¤½Â­¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤ªÂ¼¤Ô¤¾¤É¤ºÂ¾¤Ô¤¾¤Ë¤¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤°Â´¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤Ê¤¸.";
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
				$this->m_responseMsg = "ResultCode=01&ResultMsg=¤Ô¤¾¤É¤¶Â³Â¸Â®¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤­ Â¼Ã¶ Â¾Ã¸Â´¤Ô¤¾¤É¤´ Â°¤Ô¤¾¤É¤ºÂ·Â¡Â¯¤Ô¤¾¤É¤¼Ã¼¤Ô¤¾¤Ê¤¯Â´¤Ô¤¾¤Ê¤ªÂ´¤Ô¤¾¤Ê¤¸ : " . $this->m_type;
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
				/* == Â½¤Ô¤¾¤É¤¼Â½¤Ô¤¾¤É¤¶Â°Â£ ÂºÃ´Â¸Âµ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ == */
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

		
/* == ¤Ô¤¾¤É¤»Â¾¤Ô¤¾¤É¤¸Â³Â½¤Ô¤¾¤É¤¶ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥(2005.02.01 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
		// $this->m_remain_price = $remain_price;		// ¤Ô¤¾¤É¤»Â¾¤Ô¤¾¤É¤¸Â³Â½¤Ô¤¾¤É¤¶ ¤Ô¤¾¤Ê¤¼Â¾¤Ô¤¾¤Ê¤´

/* == ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â¹¤Ô¤¾¤Ë¤¡¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â¸Â®¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ == */
		// $this->m_rcr_price = $RCR_Price;		// ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤¬¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
		// $this->m_rsup_price = $RSup_Price;		// Â°Ã¸Â±¤Ô¤¾¤Ê¤¾Â°Â¡
		// $this->m_rtax = $RTax;				// Âº¤Ô¤¾¤Ê¤§Â°Â¡Â¼Â¼
		// $this->m_rsrvc_price = $RSrvc_Price;		// ÂºÂ»Ã§Â·Ã¡
		// $this->m_ruseopt = $RUseOpt;			// ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â¿Ã«ÂµÂµ Â±Â¸Âº¤Ô¤¾¤Ê¤«
		// $this->m_rcash_noappl = $Rcash_noappl;		// ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â¹¤Ô¤¾¤Ë¤¡¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢ Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§Â¹Ã¸¤Ô¤¾¤É¤½Â£
		// $this->m_rcash_rslt = $Rcash_rslt;		// ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ Â¹¤Ô¤¾¤Ë¤¡Â±¤Ô¤¾¤Ê¤¾¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥ (4¤Ô¤¾¤Ê¤ºÂ¸Â®)
		
/* == ¤Ô¤¾¤É¤¼Ã¶Â±¤Ô¤¾¤Ê¤½Â¿ÂµÂ¼Ã¶¤Ô¤¾¤É¤²Ãµ ¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â¹Ã¸¤Ô¤¾¤É¤½Â£ Â¸Â®¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤ª == */		
		// $this->m_rcash_cancel_noappl = $Rcash_cancel_noappl;
	
		
/* == CMS Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼ Â¸Â®¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤ª ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (2004. 11. 15 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
		// $this->m_cmsbankcode = $CMSBankCode;		// Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
 		

// /* == Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­(Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§) ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (2004.11.05 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
// 		$this->m_tid_org = $TID_org;			// Â¿Ã¸Â°¤Ô¤¾¤É¤ºÂ·Â¡ TID
// 		$this->m_remains = $PR_remains;			// ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ê¤±¤Ô¤¾¤É¤²Â¾Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â±¤Ô¤¾¤Ê¤½Â¾¤Ô¤¾¤Ê¤´
// 		$this->m_flg_partcancel = $flg_partcancel;	// Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­, Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§ Â±Â¸Âº¤Ô¤¾¤Ê¤«Â°Âª
// 		$this->m_cnt_partcancel = $cnt_partcancel; 	// Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­(Ã§Â½¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤§) Â¿Ã¤¤Ô¤¾¤É¤¶Â»¤Ô¤¾¤É¤½Â½Â¼Ã¶		
		
/* == ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡Â°Â¡ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (2004.6.23 Â´Ã«Â¸Â® ¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Â¾Â¿¤Ô¤¾¤Ê¤ª) == */
		$this->m_moid = $MOID;				// Â»Ã³¤Ô¤¾¤É¤²Â¡¤Ô¤¾¤É¤²¤Ô¤¾¤Ê¤±Â¹Â®Â¹Ã¸¤Ô¤¾¤É¤½Â£
		$this->m_codegw = $CodeGW;			// Ã¼¤Ô¤¾¤É¤½Â­Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â»Ã§Â¾Ã·¤Ô¤¾¤Ê¤º ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
		// $this->m_ocbcardnumber = $OCBcardnumber; 	// OCB ¤Ô¤¾¤É¤¸Â«ÂµÃ¥Â¹Ã¸¤Ô¤¾¤É¤½Â£	
		// $this->m_cultureid = $CultureID;		// ¤Ô¤¾¤É¤¸¤Ô¤¾¤É¤¶¤Ô¤¾¤É¤¶Â³Â·Â£ÂµÃ¥ ID, ¤Ô¤¾¤É¤»Â¾¤Ô¤¾¤É¤¸Â³Â½¤Ô¤¾¤É¤¶ ID
		// $this->m_directbankcode = $DirectBankCode;	// Â½¤Ô¤¾¤É¤¼Â½¤Ô¤¾¤É¤¶Â°Â£ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢Â°Ã¨¤Ô¤¾¤É¤²¤Ô¤¾¤É¤´¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤¶Â¼ Âº¤Ô¤¾¤É¤¼¤Ô¤¾¤Ë¤¢¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥
		
/* ==  ÂºÃ´Â¸Âµ Âº¤Ô¤¾¤Ê¤§Âº¤Ô¤¾¤Ê¤«¤Ô¤¾¤É¤¶Ã«Â¼¤Ô¤¾¤Ê¤­ Â°Â¡Â´¤Ô¤¾¤É¤¾Â¿Â©Âº¤Ô¤¾¤Ê¤§(2012.07.11 Â±Ã¨Â¼Â±Â±Â¹) == */
		// $this->m_prtcCode = $PrtcCode;

		
/* == Â°Ã¡Â°ÃºÂ¸¤Ô¤¾¤Ê¤¾Â¼Â¼¤Ô¤¾¤É¤²Ã¶ ($m_resultMsg)Â¿Â¡Â¼Â­ Â¿Â¡Â·Â¯¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥ ¤Ô¤¾¤É¤¶¤Ô¤¾¤Ë¤¡¤Ô¤¾¤É¤¶Ã¢ == */
		$str = $ResultMsg ;
		//$arr = split("\]+", $str);
		$arr = preg_split("/\]+/", $str);
		$this->m_resulterrcode = substr($arr[0],1);	// []Â¾¤Ô¤¾¤É¤½¤Ô¤¾¤É¤¼ ¤Ô¤¾¤É¤¸¤Ô¤¾¤Ê¤ºÂµÃ¥Â¸Â¸ ¤Ô¤¾¤É¤¼Â¥Â½¤Ô¤¾¤É¤¶


/* == ÂµÃ°¤Ô¤¾¤É¤²Ã¶¤Ô¤¾¤É¤º¤Ô¤¾¤Ê¤« Â¹Â®¤Ô¤¾¤É¤½Â­ Â»Ã³¤Ô¤¾¤É¤¼Â°Â±¤Ô¤¾¤É¤¼ ¤Ô¤¾¤É¤¸Â«ÂµÃ¥ Â¼Ã¶ (SKT Â»Ã³¤Ô¤¾¤É¤¼Â°Â±¤Ô¤¾¤É¤¼ Â°Ã¸¤Ô¤¾¤É¤ºÃ«Â¸Â·¤Ô¤¾¤Ê¤§ Â»Ã§Â¿Ã«)== */		
		// $this->m_dgcl_cardcount = $dgcl_cardcount;
  //   for($i=1 ; $i < $this->m_dgcl_cardcount+1 ; $i++)
  //   {
  //     $this->m_dgcl_cardnum[$i-1] = ${"dgcl_cardnum".$i};
  //     $this->m_dgcl_remain_price[$i-1] = ${"dgcl_remain_price".$i};
  //     $this->m_dgcl_errmsg[$i-1] =  ${"dgcl_errmsg".$i};
  //   }


/* == SKT Â»Ã³¤Ô¤¾¤É¤¼Â°Â±¤Ô¤¾¤É¤¼ ¤Ô¤¾¤É¤¼¤Ô¤¾¤Ê¤¢ÂµÃ¥ (Â°Ã¡¤Ô¤¾¤É¤²Â¦ Â¹Ã¦Â¹Ã½ Â±Â¸Âº¤Ô¤¾¤Ê¤«) == */
		// $this->m_sktg_method = $sktg_method;
		
/* ==  Â¥¤Ô¤¾¤É¤»Ã¤¤Ô¤¾¤Ê¤¥¤Ô¤¾¤É¤²Ã¶ Â§ÂºÂ¯¤Ô¤¾¤É¤²Â¶ Â¹Ã¦¤Ô¤¾¤É¤²Ã¶ (2006.12.27 ¤Ô¤¾¤Ê¤¥Â½¤Ô¤¾¤É¤´Â±Â¹)  == */
		// $this->m_ini_rn = $rn;
		// if($this->m_enctype == "asym")
		// {
		// 	$this->m_ini_encfield = str_replace(" ", "+", $encfield); 
		// 	$this->m_ini_encfield .= "&src=";
		// 	$this->m_ini_encfield .= str_replace(" ", "+", $src); 
		// }
		// else
		// {
		// 	$this->m_ini_encfield = str_replace(" ", "+", $encfield); //Â¿Ã¸Â»Ã³¤Ô¤¾¤É¤½Â¸ÂºÂ¹ because parse_strÂ°Â¡ "+"->" "
		// }
		// $this->m_ini_certid = str_replace(" ", "+", $certid);
	}
}

?>
