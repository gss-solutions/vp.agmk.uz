<?php

use yii\db\Migration;

class m170221_041336_init_treatment_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%treatment}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'sex' => $this->smallInteger()->notNull(),
            'birthday' => $this->integer()->notNull(),
            'status_person' => $this->string(32)->notNull(),
            'status_treatment'  => $this->string(32)->notNull(),
            'businessman' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'businessman_type' =>  $this->string(255),
            'text' =>  $this->string(),
            'file' =>  $this->string(32),
            'answer' =>  $this->string(),
            'code' =>  $this->string(32)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'ip' => $this->string(15),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170221_041336_init_treatment_table cannot be reverted.\n";

        $this->dropTable('{{%treatment}}');

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
