<?php

class Migration_Version_290 extends CI_Migration
{
      public function up(){


            $fields = array(

                  'id_number' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

            );

            $this->dbforge->add_column('leads', $fields);

      }

      public function down(){

            

      }


}