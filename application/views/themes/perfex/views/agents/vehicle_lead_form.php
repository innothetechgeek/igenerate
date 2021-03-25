<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('agents/includes/head.php'); ?>
<body class="">
<div >
     <style>
         body{
            background:#fff;
         }

        form .form-control {
            border: none;
            border-bottom: 1px solid #868585;
            border-radius: 0;
            box-shadow: none;
            height: 24px !important;
        }

        .custom-form-control{
            border: none !important;
            border-bottom: 1px solid #868585 !important;;
            border-radius: 0 !important;
            box-shadow: none  !important;
            position:relative;
            top:-10px;
        }

        input[type=checkbox]{
            position:relative;
            top:2px;
        }

        label {
            font-size: 14px;
            margin-bottom: 2px;
            display: inline-block;
            max-width: 100%;
        }

        .sub-heading {
            position: relative;
            padding-bottom: 10px;
            margin-top: 0;
            margin-bottom: 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            font-size: 28px !important;
            text-transform: capitalize;
            line-height: 24px;
        }

        .info-form{
            
            background: white; *
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgb(0 0 0 / 20%);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative;
        }

        @media only screen and (max-width: 795px) {
            #mainRow{
                width:95% !important;
            }

            img{
                width: 100%;
            }

            .sub-heading{
                font-size: 18px !important;
            }

            #inpt-account-number{

                height:24px;
                top:-1px;

            }
        }

     </style>
  <div class="row justify-content-center mt-0 info-form" id ="mainRow" style =  "margin: auto;
  width: 65%;
  padding: 25px;margin-top:20px;">
       <?php if(!empty($this->session->flashdata('message'))) { ?>
                <div class="alert alert-secondary" role="alert" style = "color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db;">
                    <?= $this->session->flashdata('message');?>
            </div>
        <?php } ?>
        <form action = "vehicle_tracking_lead" method = "post">
            <input type = "hidden" name = "type" value = "BEAME" />
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="sub-heading">Lead Details</h3>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Name</label>
                        <input class="form-control" name="lead_details[name]" type="text" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">ID Number</label>
                        <input class="form-control" name="lead_details[id_number]" type="text" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Cell Number 1</label>
                        <input class="form-control" name="lead_details[cell_number_1]" type="text">
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Alternate contact number</label>
                        <input class="form-control" name="lead_details[alternate_contact_number]" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Emergency name &amp; number 2</label>
                        <input class="form-control" name="lead_details[cell_number]" type="text">
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tel_number_code">Emergency name &amp;number 3</label>
                        <input class="form-control" name="lead_details[fax_number]" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Email Address</label>
                        <input class="form-control" name="lead_details[email_address]" type="text">
                    </div>
                </div>                 
               </div> <br/><br/>
               <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Vehicle Make</label>
                                <input class="form-control" name="lead_vehicle_details[vehicle_make]" type="text">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Vehicle Model</label>
                                <input class="form-control" name="lead_vehicle_details[vehicle_model]" type="text">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Registration number</label>
                                <input class="form-control" name="lead_vehicle_details[registration_number]" type="text">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Colour</label>
                                <input class="form-control" name="lead_vehicle_details[color]" type="text" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Year</label>
                                <input class="form-control" name="lead_vehicle_details[year]" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Engine number:</label>
                                <input class="form-control" name="lead_vehicle_details[engine_number]" type="text">
                            </div>
                        </div>
                </div>   
                <br/> <br/>
               <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Bank name</label>
                                <input class="form-control" name="lead_bank_details[email_address]" type="text" >
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Account number</label>
                                <input class="form-control" name="lead_bank_details[email_address]" type="text">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Debit Order</label>
                                <input class="form-control" name="lead_bank_details[email_address]" type="text" >
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Name of account holder</label>
                                <input class="form-control" name="lead_bank_details[email_address]" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Branch code</label>
                                <input class="form-control" name="lead_bank_details[email_address]" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <p>Matrix is a division of Mix Telematics, on your statement the Debit will appear as a
                            Mix Telematics transaction.</p>
                        </div>
                    </div>   <br/> <br/>         

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Installation Centre</label>
                                <input class="form-control" name="installation_details[installation_center]" type="text" id="tel_number_code">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Installation Date</label>
                                <input class="form-control" name="installation_details[installation_date]" type="text" id="tel_number_code">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Date of Sale</label>
                                <input class="form-control" name="installation_details[date_of_sale]" type="text" id="tel_number_code">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">BUSINESS PARTNER FULL NAME</label>
                                <input class="form-control" name="installation_details[business_partner_full_name]" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">BUSINESS PARTNER CELL NUM</label>
                                <input class="form-control" name="installation_details[business_partner_cell_num]" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">BUSINESS PARTNER ID NUMBER</label>
                                <input class="form-control" name="installation_details[business_partner_id_number]" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>            
                    <button type = "submit" class="btn btn-primary">Submit</button>            
        </form>        
    </div>
</body>
</html>