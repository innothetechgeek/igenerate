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
                              <td>0833968710</td>
                              <td>Taya Smith (0833968710)</td>
                              <td>R0.00</td>
                              <td ><a href = "#" onclick="edit_task(1);">Update Balance</a></td>
                        </tr>
                     <?php } ?>
                     </tbody>
                   </table>
            </div>
         </div>
      </div>
   </div>

    <div class="modal fade edit in" style = "display:none;" id="_task_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
         <h4 class="modal-title" id="myModalLabel">
            Update User Balance</h4>
      </div>
      <div class="modal-body">
          <label> New Balance &nbsp&nbsp&nbsp</label> 
          <input type="text">
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-info">Save</button>
      </div>
   </div>
</div>
</script>
</div>


</div>
</div>
<?php init_tail(); ?>
</body>
</html>
