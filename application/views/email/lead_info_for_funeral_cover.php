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
                                            Name: <span  style = "color: #51647c"><strong><?= $data['lead_name']  ?></strong></span>
                                        </li> 
                                        <li>                                            
                                            ID Number: <span  style = "color: #51647c"><strong><?= $data['id_number']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                            Cell Number 1: <span  style = "color: #51647c"><strong><?= $data['cell_number']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                           Emergency name &number 3: <span  style = "color: #51647c"><strong><?= $data['emergency_number_name']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                            Email Addres: <span  style = "color: #51647c"><strong><?= $data['email_address']  ?> </strong></span>
                                        </li> 
                                                                                                      
                                    </ul>
                                    General Question:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <li>                                            
                                          Where do you live: <span  style = "color: #51647c"><strong><?= $data['have_funeral_cover']  ?></strong></span>
                                        </li> 
                                        <li>                                            
                                            Are You Married?  <span  style = "color: #51647c"><strong><?= $data['maried']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                            Name Of Wife:   <span  style = "color: #51647c"><strong><?= $data['name_of_wife']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                            Number of Children:  <span  style = "color: #51647c"><strong><?= $data['number_of_children']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                             If Yes,Which Company is it with?  <span  style = "color: #51647c"><strong><?= $data['funeral_cover_company']  ?> </strong></span>
                                        </li>    
                                        <li>                                            
                                            If YES/What are you paying ?  <span  style = "color: #51647c"><strong><?= $data['funeral_cover_amount']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                            If Yes,Which Company is it with?  <span  style = "color: #51647c"><strong> <?= $data['funeral_cover_name']  ?> </strong></span>
                                        </li> 
                                        <li>                                            
                                          Medical Aid:  <span  style = "color: #51647c"><strong> <?= $data['have_medical_aid']  ?> </strong></span>
                                        </li>                                      
                                    </ul>

                                      Bank Details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                            <li>                                            
                                                Bank Name:  <span  style = "color: #51647c"><strong><?= $data['bank_name']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                Account Number:  <span  style = "color: #51647c"><strong> <?= $data['account_number']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                Account Number:  <span  style = "color: #51647c"><strong> <?= $data['account_type']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                Debit Order:  <span  style = "color: #51647c"><strong> <?= $data['debit_order']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                Account Holder:  <span  style = "color: #51647c"><strong> <?= $data['account_holder']  ?> </strong></span>
                                            </li>    
                                            <li>                                            
                                                Branch Code:  <span  style = "color: #51647c"><strong><?= $data['branch_code']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                When can the call centre call you?  <span  style = "color: #51647c"><strong> <?= $data['when_can_we_call']  ?> </strong></span>
                                            </li> 
                                            <li>                                            
                                                Date of LEAD and Place:  <span  style = "color: #51647c"><strong> <?= $data['date_place']  ?> </strong></span>
                                            </li>  
                                            <li>                                            
                                                BUSINESS PARTNER FULL NAME:  <span  style = "color: #51647c"><strong> <?= $data['business_partner_name']  ?> </strong></span>
                                            </li>
                                            <li>                                            
                                                BUSINESS PARTNER CELL NUM:  <span  style = "color: #51647c"><strong> <?= $data['business_partner_cell_number']  ?> </strong></span>
                                            </li>
                                            <li>                                            
                                                What time is best for you?  <span  style = "color: #51647c"><strong> <?= $data['best_time']  ?> </strong></span>
                                            </li>  
                                            <li>                                            
                                                BUSINESS PARTNER ID NUMBER:  <span  style = "color: #51647c"><strong> <?= $data['business_partner_id_number']  ?> </strong></span>
                                            </li>                                
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