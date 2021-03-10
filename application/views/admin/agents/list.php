<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
   <div class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body">
                <div class="row _buttons">
                     <div class="col-md-8">
                        
                     </div>
                     <div class="col-md-4">
                        
                     </div>
                  </div>
                  <hr class="hr-panel-heading hr-10" />
                  <div class="clearfix"></div>
                  <table  class="table dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"><thead>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name activate to sort column ascending">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status activate to sort column ascending">Surname</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date activate to sort column ascending">Email</th>
                        <th class="duedate sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Due Date activate to sort column descending">Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned to activate to sort column ascending">Next Of Kin</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned to activate to sort column ascending">Wallet Balance</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tags activate to sort column ascending">Action</th>
                        </tr>
                  </thead>
                     <tbody>
                      <?php foreach($agents as $key => $agent){ ?>
                        <tr>  
                              <td> <?= $agent['firstname'] ?> </td>
                              <td> <?= $agent['lastname'] ?> </td>
                              <td><?= $agent['email'] ?></td>
                              <td><?= $agent['phonenumber'] ?></td>
                              <td><?= $agent['nok_name']. ' ' .$agent['nok_surname'] .' ('.$agent['nok_cell_number'] .')' ?></td>
                              <td>R <?= empty($agent['wallet_balance']) ? 0.00 : $agent['wallet_balance']; ?></td>
                              <td ><a href = "#" onclick = "displayBalanceModal(<?= $agent['userid'] ?>)" id = "update-balance">Update Balance</a></td>
                        </tr>
                     <?php } ?>
                     </tbody>
                   </table>
            </div>
         </div>
      </div>
   </div>

    <div class="modal fade edit in" style = "display:none;" id="balance_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog" role="document">
   <div class="modal-content">
      <form action = "<?=base_url()?>/admin/agents/updatebalance" method ="post">
      <input type = "hidden" id = "userid" name = "userid"  value = ""/>
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">
               Update User Balance</h4>
         </div>
         <div class="modal-body">
            <label> New Balance &nbsp&nbsp&nbsp</label> 
            <input type="text" name = "new-balance">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info">Save</button>
         </div>
      </form>
   </div>
</div>
</script>
</div>


</div>
</div>
<?php init_tail(); ?>

<script>

   function displayBalanceModal(user_id){

      $('#userid').val(user_id);
      $('#balance_modal').show();

   

   }
  

  $('.close').click(function(){

   $('#balance_modal').hide();

  })

</script>
</body>
</html>
