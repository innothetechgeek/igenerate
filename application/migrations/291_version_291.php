<?php

class Migration_Version_291 extends CI_Migration
{
      public function up(){


            $fields = array(

                  'have_funeral_cover' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

            );

            $this->dbforge->add_column('leads', $fields);

      }

      public function down(){

            

      }


}