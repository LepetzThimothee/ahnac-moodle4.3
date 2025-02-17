<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'paygw_paymob', language 'en', version '4.3'.
 *
 * @package     paygw_paymob
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['IntegrationIDcard'] = 'cards integration ID';
$string['IntegrationIDcard_help'] = 'cards integration ID';
$string['IntegrationIDkiosk'] = 'aman or masary integration ID';
$string['IntegrationIDkiosk_help'] = 'aman or masary integration ID';
$string['IntegrationIDwallet'] = 'mobile wallets integration ID';
$string['IntegrationIDwallet_help'] = 'mobile wallets integration ID';
$string['abouttopay'] = 'You are about to pay for';
$string['aman_key'] = 'Reference key for aman or masary';
$string['apikey'] = 'API Key';
$string['apikey_help'] = 'API Key';
$string['callback'] = 'Callback URL';
$string['callback_help'] = 'Copy this and put it in callback URLs at your paymob account';
$string['card_deleted'] = 'The selected card has been successfully deleted.';
$string['choosemethod'] = 'Choose Your proper method';
$string['deletecard'] = 'delete card';
$string['discount'] = 'percentage discount';
$string['discount_help'] = 'the percentage discount applied upon payment';
$string['discountcondition'] = 'apply discount when cost >';
$string['discountcondition_help'] = 'condition for applying discounts only when the cost is greater than the amount applied here';
$string['gatewaydescription'] = 'Paymob is an authorized payment gateway provider for processing online transactions.';
$string['gatewayname'] = 'Paymob';
$string['hmac_secret'] = 'HMAC secret';
$string['hmac_secret_help'] = 'HMAC secret';
$string['iframe_id'] = 'Iframe ID';
$string['iframe_id_help'] = 'Iframe ID';
$string['invalidmethod'] = 'Invalid Method or Data, please try again';
$string['kiosk_bill_reference'] = 'Your Aman (or Masary) bill reference is';
$string['kiosk_process_help'] = 'To pay, Please go to the nearest Aman or Masary outlet, ask for "Madfouaat Accept" and provide your reference number.';
$string['message_declined'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you suppose to pay {$a->cost} {$a->currency} for it, using {$a->method} is declined. Reason: {$a->reason}';
$string['message_downpayment'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you paid {$a->cost} {$a->currency} for it, using {$a->method} is accepted as a down payment.';
$string['message_payment_receipt'] = 'Hello {$a->fullname}; This is the receipt url regarding your last transaction of {$a->cost} {$a->currency} for item of cost {$a->fee} {$a->currency}

Reciept: {$a->url}';
$string['message_pending'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you should pay {$a->cost} {$a->currency} for it is, using {$a->method} still pending and required action';
$string['message_refunded'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you paid {$a->cost} {$a->currency} for it, using {$a->method} is refunded and the same amount should return to your account in 48 hour. Contact your bank or the service provider for more details';
$string['message_success_completed'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you paid {$a->cost} {$a->currency} for it, using {$a->method} is successfully completed. If the item it not delivered please contact the admnistrator.';
$string['message_success_processing'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you paid {$a->cost} {$a->currency} for it, using {$a->method} is successful and now it is under transaction';
$string['message_voided'] = 'Hello {$a->fullname}, You transaction of payment id: ({$a->orderid}) with original cost of {$a->fee} {$a->currency} at which you suppose to pay {$a->cost} {$a->currency} for it, using {$a->method} is canceled and this amount should return to the same payment method in 48 hr, contact your bank for more information.';
$string['messageprovider:payment_receipt'] = 'Paymob payment receipt';
$string['messageprovider:payment_transaction'] = 'Paymob payment transaction status';
$string['messagesubject'] = 'Payment notification ({$a})';
$string['messagesubject_receipt'] = 'The receipt of your last transaction';
$string['method_card'] = 'Online Payment Card';
$string['method_kiosk'] = 'Aman or Masary';
$string['method_wallet'] = 'Mobile Wallet';
$string['payment_attention'] = 'Attention required about you last payment {$a}';
$string['payment_attention_receipt'] = 'This is the receipt url regarding your last transaction {$a->url}';
$string['payment_notification'] = 'You have a transaction notification';
$string['payment_receipt_url'] = 'Click here for the receipt';
$string['paymentcancelled'] = 'The payment is declined or cancelled. </br> reason: {$a}';
$string['paymentmethods'] = 'Payment Methods';
$string['paymentresponse'] = 'Your payment is in state of {$a}';
$string['pluginname'] = 'Paymob payment';
$string['pluginname_desc'] = 'Using Accept payment (by paymob) to receive transactions from moodle website';
$string['privacy:metadata:paygw_paymob'] = 'In order to perform a successful transaction, Paymob will receive various metadata about the user.';
$string['privacy:metadata:paygw_paymob:city'] = 'User\'s city will be sent to Paymob upon any transactions.';
$string['privacy:metadata:paygw_paymob:country'] = 'User\'s country will be sent to Paymob upon any transactions.';
$string['privacy:metadata:paygw_paymob:email'] = 'User\'s email will be sent to Paymob upon any transactions, and it should be a valid email.';
$string['privacy:metadata:paygw_paymob:firstname'] = 'User\'s first name will be sent to Paymob upon any transactions.';
$string['privacy:metadata:paygw_paymob:lastname'] = 'User\'s last name will be sent to Paymob upon any transactions.';
$string['privacy:metadata:paygw_paymob:phone'] = 'User\'s phone number will be sent to Paymob upon any transactions, this should be a valid number or it will return an error.';
$string['savedcardsnotify'] = 'Welcome {$a}, looks like you have saved cards please select which to use or you may use a new one.';
$string['somethingwrong'] = 'Something went wrong. Please try again later and if the problem still persist, contact support.';
$string['success_continue'] = 'After making sure of successful payment.. Click here.';
$string['usenewcard'] = 'Use another card';
$string['wallet_phone_number'] = 'Wallet Phone Number';
