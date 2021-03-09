<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('agents/includes/head.php'); ?>



<div class="col-sm-4" style = "margin-right: 15px; border: 1px solid #EEEEEE; paddiging-top:150px; padding-bottom:50px; border-radius:15px;">
    <h3>Balance</h3>
    <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
        <h1 style = "color:#B4CA78">R 0,00</h1>
    </div>
</div>
<div class="row" style = "padding-left:15px; padding-right:15px">
    <div class="col-sm-4 " style = "text-align:center;border: 1px solid #EEEEEE; paddiging-top:150px; padding-bottom:150px; border-radius:15px">
            <h3>Withdraw</h3>
            <div class="withdrawl-fields" style = "width:98%; text-align:left;" >
                <hr/>
                 <label>Account number </label>
                <input type = "number" id = "account-number" style = "padding-left:15px;width:100%; border-radius:15px" />
            </div>

            <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                <label>Withdrawal Amount</label>
                <input type = "number" id = "account-number" style = "padding-left:15px;width:100%; border-radius:15px" />
            </div>

            <div class="withdrawl-fields" style = "margin-top:20px;width:98%; text-align:left;" >
                <button type = "button" class="btn btn-primary" id = "account-number" style = "width:100%; border-radius:15px">Withdraw</button>
            </div>
    </div>
</div>