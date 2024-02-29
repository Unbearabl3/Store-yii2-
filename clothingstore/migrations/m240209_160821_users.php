<?php

use yii\db\Migration;

/**
 * Class m240209_160821_users
 */
class m240209_160821_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(250)->notNull(),
            'password' => $this->string(250)->notNull(),
            'email' => $this->string(250)->notNull(),
            'first_name' => $this->string(250)->notNull(),
            'second_name' => $this->string(250)->notNull(),
            'auth_key' => $this->string(250)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240209_160821_users cannot be reverted.\n";

        return false;
    }
}
    // Use up()/down() to run migration code without a transaction.
//    public function up()
//    {
//        $this->createTable('users', [
//            "id"=>$this->primaryKey(),
//            "name"=>$this->string(),
//            "password"=>$this->string(),
//            "email"=>$this->string(),
//            'first_name'=>$this->string(),
//            'second_name'=>$this->string(),
//            'auth_key'=>$this->primaryKey()
//        ]);
//    }

//    public function down()
//    {
//        echo "m240209_160821_users cannot be reverted.\n";
//
//        return false;
//    }
//}
