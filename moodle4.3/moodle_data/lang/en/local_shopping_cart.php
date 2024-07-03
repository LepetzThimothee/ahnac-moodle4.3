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
 * Strings for component 'local_shopping_cart', language 'en', version '4.3'.
 *
 * @package     local_shopping_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accepttermsandconditions'] = 'Require acceptance of terms and conditions';
$string['accepttermsandconditions:description'] = 'Without accepting terms and conditions, buying is not possible.';
$string['accessdenied'] = 'Access denied';
$string['accountid'] = 'Payment account';
$string['accountid:description'] = 'Choose your preferred payment account.';
$string['adddiscounttoitem'] = 'You can reduce the price of this item either by a fixed sum or a percentage of the initial price.
    You can\'t apply both at the same time.';
$string['addedtocart'] = '{$a} was added to your cart.';
$string['additonalcashiersection'] = 'Add text for cashier section';
$string['additonalcashiersection:description'] = 'Add HTML shortcodes or items to buy for the cashier shopping tab';
$string['addon'] = 'Set addon time';
$string['addon:description'] = 'Addition to the expiration time after checkout process is initiated';
$string['addtocart'] = 'Add to cart';
$string['allowrebookingcredit'] = 'Rebooking credit';
$string['allowrebookingcredit_desc'] = 'If you activate rebooking credit, a user will get refunded the cancelation and booking fee
if (s)he cancels an item within the cancelation period and books another item.';
$string['alreadyincart'] = 'The item is already in your cart.';
$string['annotation'] = 'Annotation';
$string['annotation_rebook_desc'] = 'Enter an annotation or the OrderID of the payment transaction you want to rebook.';
$string['applydiscount'] = 'Apply discount';
$string['applytocomponent'] = 'Cancel without callback to plugin';
$string['applytocomponent_desc'] = 'With this setting unchecked, you can cancel eg a double booking without unenroling a buyer from the bought course.';
$string['backtohome'] = 'Back to home.';
$string['baseurl'] = 'Base URL';
$string['baseurldesc'] = 'Enter the base URL for your invoicing platform.';
$string['bookingfee'] = 'Booking fee';
$string['bookingfee_desc'] = 'Booking fee for every checkout.';
$string['bookingfeeonlyonce'] = 'Charge booking fee only once';
$string['bookingfeeonlyonce_desc'] = 'Every user pays the booking fee only once, no matter how many checkouts she makes.';
$string['cachedef_cachedcashreport'] = 'Cash report cache';
$string['cachedef_cacheshopping'] = 'Shopping cache';
$string['cachedef_cashier'] = 'Cashier cache';
$string['cachedef_schistory'] = 'Cache is used to store shopping cart items for users';
$string['calculateconsumation'] = 'Credit on cancelation minus already consumed value';
$string['calculateconsumation_desc'] = 'On cancelation, the credit is calculated depending on the already consumed share of a bought article.';
$string['calculateconsumationfixedpercentage'] = 'Use a FIXED percentage instead of calculating consumation by already passed time';
$string['calculateconsumationfixedpercentage_desc'] = 'If you choose a percentage here, the consumation won\'t be calculated with the
 time that has passed sind start of the booking option. Instead the FIXED percentage will ALWAYS be used.';
$string['cancelationfee'] = 'Cancelation fee';
$string['cancelationfee:description'] = 'Automatically deducted fee for cancelation by user.
                                        -1 means that cancelation by user is not possible.';
$string['canceldidntwork'] = 'Cancel didn\'t work';
$string['canceled'] = 'Canceled';
$string['cancellationsettings'] = 'Cancellation settings';
$string['cancelpurchase'] = 'Cancel purchase';
$string['cancelsuccess'] = 'Successfully canceled';
$string['cartisempty'] = 'Your shopping cart is empty.';
$string['cartisfull'] = 'Your shopping cart is full.';
$string['cash'] = 'Cash';
$string['cashier'] = 'Cashier';
$string['cashier_manualrebook'] = 'Manual rebooking';
$string['cashier_manualrebook_desc'] = 'Someone made a manual rebooking of a payment transaction.';
$string['cashiermanualrebook'] = 'Rebook manually with annotation or TransactionID';
$string['cashout'] = 'Cash transactions';
$string['cashoutamount'] = 'Amount of cash transation';
$string['cashoutamount_desc'] = 'Negative amount is cashout, positive amount is a deposit.';
$string['cashoutnoamountgiven'] = 'Enter a positive (deposit) or negative amount (cashout), but not 0.';
$string['cashoutreason'] = 'Reason for the transaction';
$string['cashoutreason_desc'] = 'Possible reasons are change money, bank deposit etc.';
$string['cashoutreasonnecessary'] = 'You need to give a reason';
$string['cashoutsuccess'] = 'Cash transaction successful';
$string['cashreport'] = 'Cash report';
$string['cashreport:showcustomorderid'] = 'Show custom OrderID instead of normal OrderID';
$string['cashreport:showcustomorderid_desc'] = 'Be careful: Only activate this setting if your payment gateway supports custom order ids.';
$string['cashreport_desc'] = 'Here you get an overview over all accounting transactions.
You also can export the report in your preferred file format.';
$string['cashreportsettings'] = 'Cash report settings';
$string['cashtransfer'] = 'Cash transfer';
$string['cashtransferamount'] = 'Amount of cash transfer';
$string['cashtransferamount_help'] = 'Enter a positive amount. The amount will be removed from the first cashier and added to the second cashier.';
$string['cashtransfercashierfrom'] = 'From cashier';
$string['cashtransfercashierfrom_help'] = 'Cashier from whom the amount is taken';
$string['cashtransfercashierto'] = 'To cashier';
$string['cashtransfercashierto_help'] = 'Cashier to whom the amount is given';
$string['cashtransfernopositiveamount'] = 'No positive amount!';
$string['cashtransferreason'] = 'Reason for the cash transfer';
$string['cashtransferreason_help'] = 'Enter a reason why cash was transferred.';
$string['cashtransferreasonnecessary'] = 'You need to give a reason why cash was transferred.';
$string['cashtransfersuccess'] = 'Cash transfer successful';
$string['checkout'] = '<i class="fa fa-shopping-cart" aria-hidden="true"></i> Proceed to checkout ❯❯';
$string['checkout_completed'] = 'Checkout Completed';
$string['checkout_completed_desc'] = 'The user with userid {$a->userid} successfully completed the checkout with identifier {$a->identifier}';
$string['choose'] = 'Choose';
$string['choose...'] = 'Choose...';
$string['choosedefaultcountry'] = 'Choose Default Country for Customers';
$string['choosedefaultcountrydesc'] = 'Select the default country for your customers. If user does not provide invoice data, this
 country is selected for the invoice.';
$string['chooseplatform'] = 'Choose Platform';
$string['chooseplatformdesc'] = 'Select your invoicing platform.';
$string['confirmcancelallbody'] = 'Do you really want to cancel this purchase for all users?
 The following users will get their money back as credit:
 {$a->userlist}
 You can specify the cancelation fee below. It will be deduced from the original purchase price.';
$string['confirmcancelbody'] = 'Do you really want to cancel this purchase? It can\'t be undone.
 The user who purchased will get his money back of which the cancellation fee will be subtracted.';
$string['confirmcancelbodyconsumption'] = 'Do you really want to cancel this purchase? It can\'t be undone.
 The user who purchased will get the costs of {$a->price} {$a->currency} minus the already consumed share of {$a->percentage} minus a cancelation fee ({$a->cancelationfee} {$a->currency}) as credit ({$a->credit} {$a->currency}) for your next purchase.
 <br><br>
 <div class="progress">
 <div class="progress-bar progress-bar-striped bg-$bootrapstyle" role="progressbar"
 style="width: {$a->percentage}" aria-valuenow="{$a->percentage}"
 aria-valuemin="0" aria-valuemax="100">{$a->percentage}</div>
 </div>';
$string['confirmcancelbodynocredit'] = 'Do you really want to cancel this purchase?<br>
 The user has already consumed the whole article and won\'t get any refund of the price paid: {$a->price} {$a->currency}';
$string['confirmcancelbodyuser'] = 'Do you really want to cancel this purchase?<br>
 You\'ll get the costs of your purchase ({$a->price} {$a->currency}) minus a cancelation fee ({$a->cancelationfee} {$a->currency}) as credit ({$a->credit} {$a->currency}) for your next purchase.';
$string['confirmcancelbodyuserconsumption'] = '<p><b>Do you really want to cancel this purchase?</b></p>
 <p>
 You will receive <b>{$a->credit} {$a->currency}</b> as credit.<br>
 <table class="table table-light table-sm">
 <tbody>
     <tr>
       <th scope="row">Original price</th>
       <td align="right"> {$a->price} {$a->currency}</td>
     </tr>
     <tr>
       <th scope="row">Percentage cancellation fee ({$a->percentage})</th>
       <td align="right"> - {$a->deducedvalue} {$a->currency}</td>
     </tr>
     <tr>
       <th scope="row">Cancellation fee</th>
       <td align="right"> - {$a->cancelationfee} {$a->currency}</td>
     </tr>
     <tr>
       <th scope="row">Credit</th>
       <td align="right"> = {$a->credit} {$a->currency}</td>
     </tr>
   </tbody>
 </table>
 </p>
 <div class="progress">
   <div class="progress-bar progress-bar-striped bg-$bootrapstyle" role="progressbar"
     style="width: {$a->percentage}" aria-valuenow="{$a->percentage}"
     aria-valuemin="0" aria-valuemax="100">{$a->percentage}
   </div>
 </div>';
$string['confirmcancelbodyusernocredit'] = 'Do you really want to cancel this purchase?<br>
 You have already consumed the whole article and won\'t get any refund of the price paid: {$a->price} {$a->currency}';
$string['confirmcanceltitle'] = 'Confirm cancellation';
$string['confirmpaidback'] = 'Confirm';
$string['confirmpaidbackbody'] = 'Do you really want to confirm that you have paid back the user her credit? This will set her credit to 0.';
$string['confirmpaidbacktitle'] = 'Confirm Payback';
$string['confirmterms'] = 'I accept the terms and conditions';
$string['confirmzeropricecheckout'] = 'Confirm';
$string['confirmzeropricecheckoutbody'] = 'You have enough credits to pay fully for your purchase. Do you want to proceed?';
$string['confirmzeropricecheckouttitle'] = 'Pay with your credits';
$string['credit'] = 'Credit:';
$string['creditnotmatchbalance'] = 'Sum of credits in table local_shopping_cart_credits does not match with latest balance!
                                    There might be duplicate entries or corrupted records in the credits table for userid {$a}';
$string['creditpaidback'] = 'Credit paid back.';
$string['credits'] = 'Credits';
$string['creditsmanager'] = 'Credits manager';
$string['creditsmanager:correctcredits'] = 'Correct credits';
$string['creditsmanager:infotext'] = 'Add or remove credits for <b>{$a->username} (ID: {$a->userid})</b>.';
$string['creditsmanager:payback'] = 'Pay back credits';
$string['creditsmanagercredits'] = 'Correction value or credits to pay back';
$string['creditsmanagercredits_help'] = 'If you have chosen "Correct credits" then enter the correction value here.
Example: A user has 110 EUR in credits but should actually have 100 EUR in credits. In this case the correction value is -10.
If you have chosen "Pay back credits" then enter the amount to pay back and choose if you want to pay back via cash or bank transfer.';
$string['creditsmanagermode'] = 'What do you want to do?';
$string['creditsmanagerreason'] = 'Reason';
$string['creditsmanagersuccess'] = 'Credits have been booked successfully';
$string['creditsused'] = 'Credits used';
$string['creditsusedannotation'] = 'Extra row because credits were used';
$string['credittopayback'] = 'Amount to pay back';
$string['currency'] = 'Currency';
$string['dailysums:downloadpdf'] = 'Download daily sums as PDF';
$string['deductible'] = 'Deductible:';
$string['defaulttaxcategory'] = 'Default tax category';
$string['defaulttaxcategory_desc'] = 'Default tax category to be used when not explicitly declared by cart item (i.e. "A")';
$string['deletecreditcash'] = 'Refunded with cash';
$string['deletecredittransfer'] = 'Refunded via transfer';
$string['deleteledger'] = 'Delete ledger on deletion request of user';
$string['deleteledgerdescription'] = 'The ledger will hold payment information which you might need to keep for legal reasons, even when a user is deleted.';
$string['discount'] = 'Discount';
$string['discountabsolute'] = 'Amount';
$string['discountabsolute_help'] = 'Reduce price by this amount, like "15". No currency.';
$string['discountpercent'] = 'Percentage';
$string['discountpercent_help'] = 'Reduce price by this percentage, like "10". Don\'t enter %-symbol';
$string['email'] = 'E-Mail';
$string['enabletax'] = 'Enable Tax processing';
$string['enabletax_desc'] = 'Should tax information processing be enabled for this module';
$string['erpnext'] = 'ERPNext';
$string['error:alreadybooked'] = 'You have already booked this item.';
$string['error:alreadybookedtitle'] = 'Already booked';
$string['error:cancelationfeetoohigh'] = 'Cancelation fee cannot be bigger than amount to be paid back!';
$string['error:capabilitymissing'] = 'ERROR: You do not have a necessary capability.';
$string['error:cashiercapabilitymissing'] = 'ERROR: You are missing the cashier capability needed to create receipts.';
$string['error:choosevalue'] = 'Please enter a value.';
$string['error:costcentersdonotmatch'] = 'You already have an item with a different cost center in your cart.
You have to buy this item separately!';
$string['error:costcentertitle'] = 'Different cost center';
$string['error:fullybooked'] = 'You cannot book this item anymore because it is already fully booked.';
$string['error:fullybookedtitle'] = 'Fully booked';
$string['error:gatewaymissingornotsupported'] = 'Note: Your current payment gateway is either not supported or you still need
to set up a payment gateway.';
$string['error:generalcarterror'] = 'You cannot add this item to your shopping cart because there was an error.
Please contact an administrator.';
$string['error:mustnotbeempty'] = 'Must not be empty.';
$string['error:negativevaluenotallowed'] = 'Please enter a positive value.';
$string['error:nofieldchosen'] = 'You have to choose a field.';
$string['error:noreason'] = 'Please enter a reason.';
$string['error:notpositive'] = 'Please enter a positive number.';
$string['expirationtime'] = 'Set expiration time in minutes';
$string['expirationtime:description'] = 'How long should the item be in the cart?';
$string['failure'] = 'Failure';
$string['firstname'] = 'First name';
$string['fixedpercentageafterserviceperiodstart'] = 'Only apply fixed percentage after service period start';
$string['fixedpercentageafterserviceperiodstart_desc'] = 'Activate this if you want to apply the fixed percentage only
 after the service period has started which is provided by the plugin providing the items (e.g. course start or semester start).';
$string['floatonly'] = 'Only numeric values (decimals) are accepted. The correct separator depends on your system.';
$string['foo'] = 'foo';
$string['gateway'] = 'Gateway';
$string['getrefundforcredit'] = 'You can use your credits to buy a new item.';
$string['globalcurrency'] = 'Currency';
$string['globalcurrencydesc'] = 'Choose the currency for prices.';
$string['history'] = 'Purchases';
$string['id'] = 'ID';
$string['identifier'] = 'TransactionID';
$string['initialtotal'] = 'Price:';
$string['invoicingplatformdescription'] = 'Select your preferred invoicing platform from the options below.';
$string['invoicingplatformheading'] = 'Please choose your invoicing platform';
$string['item_added'] = 'Item added';
$string['item_bought'] = 'Item bought';
$string['item_canceled'] = 'Item canceled';
$string['item_deleted'] = 'Item deleted';
$string['item_expired'] = 'Item expired';
$string['item_notbought'] = 'Item could not be bought';
$string['itemcanceled'] = 'User with the userid {$a->userid} canceled item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['itemcouldntbebought'] = 'Item {$a} couldn\'t be bought';
$string['itemexpired'] = 'Item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid} expired';
$string['itemid'] = 'ItemID';
$string['itemname'] = 'Item name';
$string['itempriceisnet'] = 'Prices for items are net prices: Add the tax';
$string['itempriceisnet_desc'] = 'If the prices passed to the shopping cart are net prices, then check this checkbox in order
to add the taxes on top of the item prices. If the items already include the tax and thus are gross prices uncheck this checkbox
in order to calculate the tax based on the gross value of the item';
$string['lastname'] = 'Last name';
$string['ledger'] = 'Ledger';
$string['local/shopping_cart:cashier'] = 'User has cashier rights';
$string['manualrebookingisallowed'] = 'Allow manual rebooking at cashier\'s desk';
$string['manualrebookingisallowed_desc'] = 'With this setting activated, the cashier can manually
 rebook payments that were already paid online but are missing in the cash report.
 (<span class="text-danger">Be careful: Only activate this feature if you are sure that you really need it.
 Incorrect use might compromise your database integrity!</span>)';
$string['maxitems'] = 'Max. items in the shopping cart';
$string['maxitems:description'] = 'Set the maximum number of items for the user shopping cart';
$string['modulename'] = 'Shopping Cart';
$string['mycart'] = 'My Cart';
$string['nofixedpercentage'] = 'No fixed percentage';
$string['noitemsincart'] = 'There are no items in the cart';
$string['nopaymentaccounts'] = '<div class="text-danger font-weight-bold">No payment account exists!</div>';
$string['nopaymentaccountsdesc'] = '<p><a href="{$a->link}" target="_blank">Click here to create a payment account.</a></p>';
$string['nopermission'] = 'No permission to cancel';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">You have no permission to access this page.</div>';
$string['notenoughcredits'] = 'Not enough credits available.';
$string['nouserselected'] = 'No user selected';
$string['nousersfound'] = 'No users found';
$string['optioncancelled'] = 'Booking option cancelled';
$string['orderid'] = 'OrderID';
$string['paid'] = 'Paid';
$string['paidby'] = 'Paid by';
$string['paidby:americanexpress'] = 'American Express';
$string['paidby:dinersclub'] = 'Diners Club';
$string['paidby:eps'] = 'EPS';
$string['paidby:mastercard'] = 'Mastercard';
$string['paidby:unknown'] = 'Unknown';
$string['paidby:visa'] = 'VISA';
$string['paidwithcash'] = 'Confirm cash payment';
$string['paidwithcreditcard'] = 'Confirm credit card payment';
$string['paidwithdebitcard'] = 'Confirm debit card payment';
$string['payment'] = 'Payment method';
$string['payment_added'] = 'User has started a payment transaction';
$string['payment_added_log'] = 'User with the userid {$a->userid} has started a payment with the identifier {$a->identifier} for item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['paymentaborted'] = 'Aborted';
$string['paymentcanceled'] = 'Canceled';
$string['paymentcashier'] = 'at cashier\'s office';
$string['paymentcashier:cash'] = 'with cash at cashier\'s office';
$string['paymentcashier:creditcard'] = 'with credit card at cashier\'s office';
$string['paymentcashier:debitcard'] = 'with debit card at cashier\'s office';
$string['paymentcashier:manual'] = 'with error - manually rebooked';
$string['paymentconfirmed'] = 'Payment confirmed';
$string['paymentcredits'] = 'with credits';
$string['paymentdenied'] = 'Payment denied!';
$string['paymentmethod'] = 'Payment method';
$string['paymentmethodcashier'] = 'Cashier';
$string['paymentmethodcashier:cash'] = 'Cashier (Cash)';
$string['paymentmethodcashier:creditcard'] = 'Cashier (Credit card)';
$string['paymentmethodcashier:debitcard'] = 'Cashier (Debit card)';
$string['paymentmethodcashier:manual'] = 'Manually rebooked';
$string['paymentmethodcredits'] = 'Credits';
$string['paymentmethodcreditscorrection'] = 'Credits correction';
$string['paymentmethodcreditspaidbackcash'] = 'Credits paid back by cash';
$string['paymentmethodcreditspaidbacktransfer'] = 'Credits paid back by transfer';
$string['paymentmethodonline'] = 'Online';
$string['paymentonline'] = 'online';
$string['paymentpending'] = 'Pending';
$string['paymentstatus'] = 'Status';
$string['paymentsuccess'] = 'Success';
$string['paymentsuccessful'] = 'Payment successful!';
$string['paymentsuccessfultext'] = 'Your payment provider has confirmed the payment. Thank you for your purchase.';
$string['pending'] = 'Pending';
$string['pluginname'] = 'Shopping Cart';
$string['previouspurchases'] = 'Previous purchases';
$string['price'] = 'Price';
$string['print'] = 'Print';
$string['privacyheading'] = 'Privacy settings';
$string['privacyheadingdescription'] = 'Set behaviour related to the privacy settings in Moodle';
$string['rebookingcredit'] = 'Rebooking credit';
$string['receipt'] = 'Receipt';
$string['receipt:bookingconfirmation'] = 'Booking confirmation';
$string['receipt:dayofweektime'] = 'Day & Time';
$string['receipt:location'] = 'Location';
$string['receipt:name'] = 'Name';
$string['receipt:price'] = 'Price';
$string['receipt:total'] = 'Total sum';
$string['receipt:transactionno'] = 'Transaction number';
$string['receipthtml'] = 'Put in template for receipt';
$string['receipthtml:description'] = 'You can use the following placeholders:
[[price]], [[pos]], [[name]], [[location]], [[dayofweektime]] between [[items]] and [[/items]].
 Before and afterwards you can also use [[sum]], [[firstname]], [[lastname]], [[mail]] and [[date]] (outside of [[items]] tag).
 Only use basic HTML supported by TCPDF';
$string['receiptimage'] = 'Background image for cashiers receipt';
$string['receiptimage:description'] = 'Set a background image, e.g. with logo';
$string['remainingcredit'] = 'Remaining credit:';
$string['remainingtotal'] = 'Price:';
$string['reports'] = 'Reports';
$string['restart'] = 'Next customer';
$string['rounddiscounts'] = 'Round discounts';
$string['rounddiscounts_desc'] = 'Round discounts to full numbers (no decimals)';
$string['samecostcenter'] = 'Only one cost center per payment';
$string['samecostcenter_desc'] = 'All payment items in shopping cart need to have the same cost center.
Items with different cost centers need to be booked separately.';
$string['searchforitem'] = 'Search for item...';
$string['selectuser'] = 'Select a user...';
$string['selectuserfirst'] = 'Select user first';
$string['sendpaymentbutton'] = 'Checkout';
$string['shopping_cart:canbuy'] = 'Can buy';
$string['shopping_cart:cashier'] = 'Is a cashier';
$string['shopping_cart:cashiermanualrebook'] = 'Can manually rebook users';
$string['shopping_cart:cashtransfer'] = 'Can transfer cash from one cashier to another';
$string['shopping_cart:history'] = 'See History';
$string['shoppingcarthistory'] = 'All purchases of a given user';
$string['showdailysums'] = '&sum; Show daily sums';
$string['showdailysumscurrentcashier'] = '&sum; Show daily sums of current cashier';
$string['showdescription'] = 'Show description';
$string['showorderid'] = 'Show Order-ID...';
$string['startinvoicingdate'] = 'Enter a date from which you want to start generating invoices';
$string['startinvoicingdatedesc'] = 'In order to prevent invoice creation from invoices in the past
 enter a UNIX timestamp for starting date to issue invoices. Get it from there: https://www.unixtimestamp.com/';
$string['success'] = 'Success';
$string['taxcategories'] = 'Tax categories and their tax percentage';
$string['taxcategories_desc'] = 'Tax categories per user-country and their tax percentage.';
$string['taxcategories_examples_button'] = '(Examples)';
$string['taxcategories_invalid'] = 'The given tax categories can not be parsed!';
$string['taxsettings'] = 'Shopping Cart Taxes';
$string['termsandconditions'] = 'Terms & Conditions';
$string['termsandconditions:description'] = 'You can link to your PDF. For localization of this field, use
 <a href=\'https://docs.moodle.org/402/en/Multi-language_content_filter\' target=\'_blank\'>Moodle multi-language filters</a>.';
$string['timecreated'] = 'Created';
$string['timemodified'] = 'Completed';
$string['titledailysums'] = 'Daily revenue';
$string['titledailysums:all'] = 'All revenues';
$string['titledailysums:current'] = 'Current cashier';
$string['titledailysums:total'] = 'Total revenue';
$string['token'] = 'Token';
$string['tokendesc'] = 'Enter your authentication token. For ERPNext use &lt;api_key&gt;:&lt;api_secret&gt;';
$string['total'] = 'Total:';
$string['total_gross'] = 'Total Gross:';
$string['total_net'] = 'Total Net:';
$string['uniqueidentifier'] = 'Unique id';
$string['uniqueidentifier_desc'] = 'Define the starting id, if you want. If you set this value to 10000000 the first purchase will have the id 10000001. If you set the value, the max number of digits will be defined as well. If you set it to 1, you can only have 9 purchases.';
$string['unknown'] = '- method unknown';
$string['usecredit'] = 'Use credit:';
$string['user'] = 'User...';
$string['useraddeditem'] = 'User with the userid {$a->userid} added item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['userboughtitem'] = 'User with the userid {$a->userid} bought item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['userdeleteditem'] = 'User with the userid {$a->userid} deleted item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['usermodified'] = 'Modified by';
$string['usernotboughtitem'] = 'User with the userid {$a->userid} could not buy item {$a->itemid} {$a->component} for the user with the id {$a->relateduserid}';
$string['youcancanceluntil'] = 'You can cancel until {$a}.';
$string['youcannotcancelanymore'] = 'No cancelation possible.';
$string['yourcart'] = 'Your shopping cart';
