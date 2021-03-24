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
                                Hi <span>Admin, a new customer has signed up for vehicle tracking. Below are thier details:</span>
                                <br/>Customer Details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['customer_details'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>
                                    Physical Address:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['physical_address'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Postal Address:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['postal_address'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Emergency Contact 1:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['emergy_contact1'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Emergency Contact 2:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['emergy_contact2'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Driver Details (If Different From Contract Holder)
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['driver_details'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>
                                    Banking Details:

                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['banking_details'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Vehicle And Unit Details:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                        <?php foreach($data['vehicle_details'] as $input => $value ) { ?>
                                            <li>
                                            
                                                <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                            </li>      
                                        <?php } ?>                                     
                                    </ul>

                                    Acceptance Of Terms And Conditions:
                                        <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                            <?php foreach($data['terms_and_conditions'] as $input => $value ) { ?>
                                                <li>
                                                
                                                    <?= ucwords(str_replace('_', ' ', $input)) ?> <span  style = "color: #51647c"><strong><?= $value  ?></strong></span>
                                                </li>      
                                            <?php } ?>                                     
                                        </ul>

                                    Declaration By The Fitment Centre:
                                    <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                            <?php foreach($data['declaration'] as $input => $value ) { ?>
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