<!DOCTYPE html>
<html>
<title>New withdrawal request</title>
<body>
<style>
	body{background:#f2f3f5;
        font: 15px sans-serif;
    }
    .button{
    font-size: 16px;
    color: #ffffff;
    text-decoration: none;
    border-radius: 2px;
    background-color: #28A745;
    border-top: 12px solid #28A745;
    border-bottom: 12px solid #28A745;
    border-right: 18px solid #28A745;
    border-left: 18px solid #28A745;
    display: inline-block;
    
    }
</style>
<table border="0" cellpadding="0" style = "" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
        <td valign="top">
            <table border="0" style = "background:#fff;margin-top:25px" cellpadding="" cellspacing="0" width="580" id="emailContainer">
                <tr>
                    <td  valign="top">
                        <table border="0"  cellspacing="0" width="100%" id="emailHeader" >
                            <tr >
                                <td style = "border-top: 4px solid #51647c; border-bottom:2px solid #51647c;"  valign="top" >
                                    <!-- <img width = "150" alt="" src="https://vanguard-wealth.com/upload/orig/logo_49391.png">  -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td  valign="top">
                        <table border="0" cellpadding="" cellspacing="0" width="100%" id="emailBody">
                            <tr>
                                <td  valign="top"><br/><br/>
                                Hi <span>Admin, a new lead has signed up for vehicle tracking. Below are thier details:</span>
                                
                                <br/>Lead details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                       
                                        <li>                                            
                                          <?= $data['lead_name']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['id_number']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['cell_number']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['emergency_number_name']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['email_address']  ?> 
                                        </li> 
                                                                                                      
                                    </ul>
                                    Vehicle Details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <li>                                            
                                          <?= $data['where_do_you_live']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['maried']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['name_of_wife']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['number_of_children']  ?> 
                                        </li> 
                                        <li>                                            
                                          <?= $data['funeral_cover_company']  ?> 
                                        </li>    
                                        <li>                                            
                                          <?= $data['funeral_cover_amount']  ?> 
                                        </li> 
                                        <li>                                            
                                        If Yes,Which Company is it with?<?= $data['funeral_cover_name']  ?> 
                                        </li> 
                                        <li>                                            
                                          Medical Aid: <?= $data['have_medical_aid']  ?> 
                                        </li>                                      
                                    </ul>

                                    Bank Details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                            <li>                                            
                                                Bank Name:<?= $data['bank_name']  ?> 
                                            </li> 
                                            <li>                                            
                                                Account Number: <?= $data['account_number']  ?> 
                                            </li> 
                                            <li>                                            
                                                Account Number: <?= $data['account_type']  ?> 
                                            </li> 
                                            <li>                                            
                                                Debit Order: <?= $data['debit_order']  ?> 
                                            </li> 
                                            <li>                                            
                                                Account Holder: <?= $data['account_holder']  ?> 
                                            </li>    
                                            <li>                                            
                                                Branch Code: <?= $data['branch_code']  ?> 
                                            </li> 
                                            <li>                                            
                                                When can the call centre call you? <?= $data['when_can_we_call']  ?> 
                                            </li> 
                                            <li>                                            
                                                Date of LEAD and Place:<?= $data['date_place']  ?> 
                                            </li>  
                                            <li>                                            
                                                BUSINESS PARTNER FULL NAME: <?= $data['business_partner_name']  ?> 
                                            </li>
                                            <li>                                            
                                                BUSINESS PARTNER CELL NUM: <?= $data['business_partner_cell_number']  ?> 
                                            </li>
                                            <li>                                            
                                                What time is best for you? <?= $data['best_time']  ?> 
                                            </li>  
                                            <li>                                            
                                                BUSINESS PARTNER ID NUMBER:  <?= $data['business_partner_id_number']  ?> 
                                            </li>                                
                                    </ul>

                                    Intallation:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['installation_details'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>                
            </table>
            <tr>
                <td valign="top">
                    <table border="0" cellspacing="0" width="100%" id="emailFooter">
                        <tr>
                            <td valign="top">
                                <p style = "font-size: 11px;color: #686f7a;" >Delivered by Igenerate 284 Oak Avenue, Randburg, Gauteng.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </td>
    </tr>
</table
</body>
</html>