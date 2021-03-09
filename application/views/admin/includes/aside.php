<?php defined('BASEPATH') or exit('No direct script access allowed');
   $totalQuickActionsRemoved = 0;
   $quickActions = $this->app->get_quick_actions_links();
   foreach($quickActions as $key => $item){
    if(isset($item['permission'])){
     if(!has_permission($item['permission'],'','create')){
       $totalQuickActionsRemoved++;
     }
   }
   }
   ?>
<aside id="menu" class="sidebar">
   <ul class="nav metis-menu" id="side-menu">
      <li class="dashboard_user<?php if($totalQuickActionsRemoved == count($quickActions)){echo ' dashboard-user-no-qa';}?>">
         <?php echo _l('welcome_top',$current_user->firstname); ?> <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="<?php echo _l('nav_logout'); ?>" data-placement="right" onclick="logout(); return false;"></i>
      </li>
      <?php if($totalQuickActionsRemoved != count($quickActions)){ ?>
      <li class="quick-links">
         <div class="dropdown dropdown-quick-links">
            <a href="#" class="dropdown-toggle" id="dropdownQuickLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-gavel" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownQuickLinks">
              
            </ul>
         </div>
      </li>
      <?php } ?>
      <li class="menu-item-customers">
         <a href="<?= base_url()?>admin/agents/list" aria-expanded="false">
             <i class="fa fa-user-o menu-icon"></i>
             <span class="menu-text">
             Business Partners             </span>
                      </a>
      </li>
      <?php hooks()->do_action('after_render_aside_menu'); ?>
      <?php $this->load->view('admin/projects/pinned'); ?>
   </ul>
</aside>
