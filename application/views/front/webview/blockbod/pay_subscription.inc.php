<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="hidden" id="frm_pay">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="payment@blockbod.com"/>

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick"/>

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" id="item_name" name="item_name"/>
    <input type="hidden" id="item_number" name="item_number"/>
    <input type="hidden" id="amount" name="amount" value="<?php echo CUSTOM_NEWSLETTER_PRICE_NEW; ?>"/>
    <input type="hidden" name="currency_code" value="USD"/>

    <input type="hidden" id="return" name="return"/>
    <input type="hidden" id="cancel_return" name="cancel_return"/>
    <input type="hidden" name="notify_url" value="http://blockbod.com/publicapi/newsletter_pay_ipn"/>

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
           src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
           alt="Buy Now"/>

    <img alt="" border="0" width="1" height="1"
         src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" />

</form>