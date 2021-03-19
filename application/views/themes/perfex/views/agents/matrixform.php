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

        .custom-form-control{
            border: none !important;
            border-bottom: 1px solid #868585 !important;;
            border-radius: 0 !important;
            box-shadow: none  !important;
            position:relative;
            top:-5px;
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

     </style>
  <div class="row justify-content-center mt-0" id ="mainRow" style =  "margin: auto;
  width: 60%;
  padding: 10px;">
        <form>
            <div class="row">
                <div class="col-sm-12">
                    <img  src = "<?php echo base_url() . 'assets/images/matrix_form_logo.png'; ?>"> </img>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">New Client: </label>&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                        <label for="tel_number_code"> &nbsp Existing Client: </label>&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                    </div>
                    <div class="form-group">
                        <label for="tel_number_code">Upgrade: </label>&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                        <label for="tel_number_code"> &nbsp &nbspAcc no</label>
                        <input class="custom-form-control" name="tel_number_code" type="text" id="tel_number_code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel_number_code">Vehicle Type: </label>&nbsp;&nbsp;&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                        <label for="tel_number_code">Vehicle Type: </label>&nbsp;&nbsp;&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                    </div>
                    <div class="form-group">
                        <label for="tel_number_code"> &nbsp Existing Client: </label>&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                        <label for="tel_number_code"> &nbsp Existing Client: </label>&nbsp;
                        <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="sub-heading">Customer Details</h3>
                </div>
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
                                <strong><label for="tel_number_code">Authorised Signature 2 X</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                   </div>
               </div>
             </div>        
             <div class="row">
                <div class="col-12">
                    <h3 class="sub-heading">Vehicle and Unit Details</h3>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-6"> 
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Vehicle Type: </label>&nbsp;&nbsp;&nbsp;
                                <span for="tel_number_code">Passenger</span>&nbsp;
                                <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                                <span for="tel_number_code">Commercial</span>&nbsp;
                                <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Make</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Model</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Window Etching No</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Equipment cost</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Other</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Amount due to installer (R)</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                               <strong><label for="tel_number_code">Monthly subscription fee due to Matrix (R)</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"> 
                   
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="form-group">
                                <div class="form-group">
                                    <label for="tel_number_code">Registration</label>
                                    <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                                </div>
                           </div>       

                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <label for="tel_number_code">Model</label>
                               <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                            <label for="tel_number_code">Colour: </label>&nbsp;&nbsp;&nbsp;
                            <span for="tel_number_code">Dark</span>&nbsp;
                            <input class="" name="tel_number_code" type="checkbox" id="tel_number_code">
                            <span for="tel_number_code">Light</span>&nbsp;
                            <input class="" name="tel_number_code" type="checkbox" id="tel_number_code"> <br/><br/>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                                <strong><label for="tel_number_code">Chassis No</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                                <strong><label for="tel_number_code">Module Code</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                                <strong><label for="tel_number_code">Beacon Code</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                                <strong><label for="tel_number_code">Equipment Serial No</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                                <strong><label for="tel_number_code">TS/TD (Remote) Number Sticker</label></strong>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                           </div>
                       </div>
                   </div>
               </div>
             </div>   
             <div class="row">
                <div class="col-sm-12"> 
                    <h3 class="sub-heading">Acceptance of Terms And Conditions</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>I, the undersigned, having read and understood Matrix’s terms and conditions, agree thereto and acknowledge that all details on this contract are correct.
                            I confirm that I indicated my desired payment plan by either ticking or not ticking the check box above. I acknowledge further that this agreement
                            commences on the date of signature below.</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Signature X</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Name in print</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="tel_number_code">Date</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                Signed for and on behalf of the Subscriber (who warrants his authority hereto)
                            </div>
                        </div>
                    </div>                        
                </div>  
              </div> 
              <div class="row">
                <div class="col-sm-12"> 
                    <h3 class="sub-heading">Declaration by the Fitment Centre</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>The fitment centre, which acts independently and is not an agent of Matrix, declares that:</p>
                            <ul>
                                <li>It fitted the unit professionally and in accordance with Matrix’s standards;</li>
                                <li>The unit is installed in the prescribed location and the correct installation details are given to Matrix.</li>
                                <li>If the fitment of the unit is of sub-standard quality, the fitment centre, and not Matrix, will be liable for
                                    damages and/or re-installation of the unit.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Signature: Fitment Centre</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Date</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Fitment Centre Name</label>
                                <input class="form-control" name="tel_number_code" type="text" id="tel_number_code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel_number_code">Fitment Centre Code</label>
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