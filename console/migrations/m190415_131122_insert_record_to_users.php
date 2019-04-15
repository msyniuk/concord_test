<?php

use yii\db\Migration;

/**
 * Class m190415_131122_insert_record_to_users
 */
class m190415_131122_insert_record_to_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'login' => 'admin',
            'email' => 'admin@test.com',
            'password' => Yii::$app->security->generatePasswordHash('222222'),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('users', [
            'login' => 'admin',
        ]);

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_131122_insert_record_to_users cannot be reverted.\n";

        return false;
    }
    */
}
