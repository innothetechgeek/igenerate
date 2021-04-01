<?php

class Migration_Version_291 extends CI_Migration
{
      public function up(){


            $fields = array(

                  'vehicle_make' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'vehicle_model' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'registration_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'vehicle_color' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'vehicle_year' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'registration_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'bank_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'account_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'debit_order' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'account_holder' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'branch_code' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'installation_center' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'installation_date' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'date_of_sale' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'business_partner_full_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),                 

            );

            $this->dbforge->add_column('leads', $fields);

      }

      public function down(){

            

      }


}