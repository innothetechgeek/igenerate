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
        }

        label {
            font-size: 14px;
            margin-bottom: 2px;
            display: inline-block;
            max-width: 100%;
            font-weight: bold;
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

     </style>
  <div class="row justify-content-center mt-0" id ="mainRow" style =  "margin: auto;
  width: 60%;
  padding: 10px;">
        <form>
            <div class="row">
            <h3 class="sub-heading">Customer Details</h3>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">ID Number (if natural person)</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Company Reg. Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">VAT Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Tel. Number (Home)</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Cell Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tel_number_code">Fax Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Email Address</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Insurance Company</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Medical Aid Name</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Medical Aid Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Policy Number</label>
                        <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-sm-6">                             
                        <h3 class="sub-heading">Postal Address</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="street_address">Street Address</label>
                                    <input class="form-control" name="street_address" type="text" id="street_address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="street_address (line 2)">Street Address (line 2)</label>
                                    <input class="form-control" name="street_address_2" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="city_1">City / Town</label>
                            <input class="form-control" name="city_1" type="text" id="city_1">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="state">Province / State</label>
                            <select name="fk_province" class="form-control">
                                <option value="">Please Select</option>
                                <option value="1">Eastern Cape</option>
                                <option value="2">Free State</option>
                                <option value="3">Gauteng</option>
                                <option value="4">KwaZulu-Natal</option>
                                <option value="5">Limpopo</option>
                                <option value="6">Mpumalanga</option>
                                <option value="7">Northern Cape</option>
                                <option value="8">North West</option>
                                <option value="9">Western Cape</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                                                    <label for="postal_code_1">Postal Code</label>
                            <input class="form-control" name="postal_code_1" type="text" value="" id="postal_code_1">
                        </div>
                    </div>
                    </div>       
                </div>            
             <div class="col-sm-6">
                <div class="row">               
                    <h3 class="sub-heading">Postal Address</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="street_address">Street Address</label>
                                <input class="form-control" name="street_address" type="text" id="street_address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="street_address (line 2)">Street Address (line 2)</label>
                                <input class="form-control" name="street_address_2" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="city_1">City / Town</label>
                        <input class="form-control" name="city_1" type="text" id="city_1">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="state">Province / State</label>
                        <select name="fk_province" class="form-control">
                            <option value="">Please Select</option>
                            <option value="1">Eastern Cape</option>
                            <option value="2">Free State</option>
                            <option value="3">Gauteng</option>
                            <option value="4">KwaZulu-Natal</option>
                            <option value="5">Limpopo</option>
                            <option value="6">Mpumalanga</option>
                            <option value="7">Northern Cape</option>
                            <option value="8">North West</option>
                            <option value="9">Western Cape</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                                                <label for="postal_code_1">Postal Code</label>
                        <input class="form-control" name="postal_code_1" type="text" value="" id="postal_code_1">
                    </div>
                </div>
                </div>       
             </div>
             </div>   
            </div>
              <div class="row">
                <div class="col-sm-6"> 
                    <h3 class="sub-heading">Emergency Contact 1</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">ID Number (if natural person)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Tel. Number (Work)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Tel. Number (Home)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Cell Number</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Relationship / Position</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col-sm-6"> 
                    <h3 class="sub-heading">Emergency Contact 2</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">ID Number (if natural person)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Tel. Number (Work)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Tel. Number (Home)</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Cell Number</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Relationship / Position</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>                        
                </div>
             </div>
             <div class="row">
                <div class="col-12">
                    <h3 class="sub-heading">Driver Details (if different from contract holder)</h3>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-6"> 
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Name</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Address</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"> 
                   
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Tel. No (Work)</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Tel. No (Home)</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Cell No</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                   </div>
               </div>
             </div>   

              <div class="row">
                <div class="col-12">
                    <h3 class="sub-heading">Banking Details</h3>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-6"> 
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Account Name</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Bank Name</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Branch Name</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Authorised Signature 1 X</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"> 
                   
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Current/Cheque</label>
                               &nbsp
                               <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">    

                               &nbsp;&nbsp;&nbsp;
                                <label for="tel_number_code">Current/Cheque</label>
                                &nbsp
                               <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">

                           </div>       

                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Account Number</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Branch Code</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Branch Code</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                   </div>
               </div>
             </div>        
        </form>        
    </div>
</body>
</html>