<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('agents/includes/head.php'); ?>



<div class="col-sm-4" style = "margin-right: 15px; border: 1px solid #EEEEEE; paddiging-top:150px; padding-bottom:50px; border-radius:15px;">
    <h3>Balance</h3>
    <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
        <h1 style = "color:#B4CA78">R <?= empty($active_user->wallet_balance) ? '0.00' : $active_user->wallet_balance ?></h1>
    </div>
</div>
<?php if(empty($active_user->wallet_balance)) { ?>
    <div class="row" style = "padding-left:15px; padding-right:15px">
        <div class="col-sm-4 " style = "text-align:center;border: 1px solid #EEEEEE; paddiging-top:150px; padding-bottom:150px; border-radius:15px">
                <h3>Withdraw</h3>
                <div class="withdrawl-fields" style = "width:98%; text-align:left;" >
                    <hr/>
                    <label>Account number </label>
                    <input disabled type = "number" id = "account-number" style = "padding-left:15px;width:100%; border-radius:15px" />
                </div>

                <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                    <label>Withdrawal Amount</label>
                    <input disabled type = "number" id = "account-number" style = "padding-left:15px;width:100%; border-radius:15px" />
                </div>

                <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                    <button disabled type = "button" class="btn btn-primary" id = "account-number" style = "width:100%; border-radius:15px">Send Withdrawal Request</button>
                </div>
        </div>
    </div>

<?php } else{ ?>

    <div class="row" style = "padding-left:15px; padding-right:15px">
        <div class="col-sm-4 " style = "text-align:center;border: 1px solid #EEEEEE; paddiging-top:150px; padding-bottom:150px; border-radius:15px">
            <form action = "<?=base_url()?>/clients/withdrawalRequest" method = "post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <h3>Withdraw</h3>
                <div class="withdrawl-fields" style = "width:98%; text-align:left;" >
                    <hr/>
                    <label>Account number </label>
                    <input  type = "number" name = "account_number" id = "account-number" style = "padding-left:15px;width:100%; border-radius:15px" />
                </div>

                <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                    <label>Withdrawal Amount</label>
                    <input  type = "number"  name = "withdrawl_amount" id = "withdrawl-amount" style = "padding-left:15px;width:100%; border-radius:15px" />
                </div>

                <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                    <button  type = "submit" class="btn btn-primary" style = "width:100%; border-radius:15px">Send Withdrawal Request</button>
                </div>
            </form>
        </div>
    </div>



<?php } ?>