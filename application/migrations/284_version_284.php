<?php

class Migration_Version_284 extends CI_Migration
{
    public function up()
    {


      $fields = array(
            'where_did_you_hear_about_us' => array('type' => 'TEXT')
      );
      $this->dbforge->add_column('contacts', $fields);


      //the client requested that these should be seperate questions
      $questions = [
            0 => "What is your favorite brand that you use for food",
            1 => "What is your favorite brand that you use for clothing",
            2 => "What is your favorite brand that you use for banking",
            3 => "What is your favorite brand that you use for shopping mall",
      ];

      foreach($questions as $key => $question){

            $this->db->insert('tblagent_signup_questions', ['question'=>$question]);
      
      }

    }

   public function down(){

   }


}