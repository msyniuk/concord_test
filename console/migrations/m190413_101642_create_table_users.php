<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m190413_101642_create_table_users
 */
class m190413_101642_create_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(50)->notNull()->unique(),
            'password' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'group_id' => $this->integer(),
            'photo' => $this->string()->notNull(),
            'created_at' => $this->date(),
            'updated_at' => $this->date(),
        ]);

        // creates index for column `group_id`
        $this->createIndex(
            'idx-users-group_id',
            'users',
            'group_id'
        );

        // add foreign key for table `groups`
        $this->addForeignKey(
            'fk-users-group_id',
            'users',
            'group_id',
            'groups',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190413_101642_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
