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
                                <td  valign="top">
                                    Hi <span>Admin, a new withdrawal request has been submitted:</span>
                                   
                                        <ul style = "list-style-type:none;padding:0px;line-height:1.5">
                                            <li>
                                                Business Partner Name: <span  style = "color: #51647c"><strong><?= $data['agent_name'] ?></strong></span>
                                            </li>
                                            <li>
                                                Withdrawal Amount: <span  style = "color: #51647c"><strong><?= $data['withdrawal_amount'] ?></strong></span>
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