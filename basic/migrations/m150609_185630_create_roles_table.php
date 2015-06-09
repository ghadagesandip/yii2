<?php

use yii\db\Schema;
use yii\db\Migration;

class m150609_185630_create_roles_table extends Migration
{
    public function up()
    {
        $this->createTable('roles',[
            'id'=>Schema::TYPE_PK,
            'name'=>Schema::TYPE_STRING .' NOT NULL',

        ]);
    }

    public function down()
    {
        $this->dropTable('roles');

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
