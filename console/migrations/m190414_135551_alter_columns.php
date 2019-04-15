<?php

use yii\db\Migration;

/**
 * Class m190414_135551_alter_columns
 */
class m190414_135551_alter_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('users', 'created_at', 'datetime');
        $this->alterColumn('users', 'updated_at', 'datetime');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190414_135551_alter_columns cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190414_135551_alter_columns cannot be reverted.\n";

        return false;
    }
    */
}
