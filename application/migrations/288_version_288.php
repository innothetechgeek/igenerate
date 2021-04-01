<?php

class Migration_Version_288 extends CI_Migration
{
      public function up(){


            $fields = array(

                  'lead_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'cell_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'alternative_cell_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'emergency_number_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'emergency_number_name2' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'email_address' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'where_do_you_live' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'maried' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'name_of_wife' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'number_of_children' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'have_funeral_over' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'funeral_cover_company' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'funeral_cover_amount' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'funeral_cover_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'bank_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'have_medical_aid' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'bank_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'account_type' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'account_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'account_holder' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'debit_order' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'branch_code' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'when_can_we_call' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'best_time' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'date_place' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'business_partner_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'business_partner_cell_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),
                  'business_partner_id_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

                  'lead_type' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

            );

            $this->dbforge->add_column('leads', $fields);

      }

      public function down(){

            

      }


}