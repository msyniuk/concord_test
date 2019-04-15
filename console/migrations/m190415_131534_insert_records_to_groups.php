<?php

use yii\db\Migration;

/**
 * Class m190415_131534_insert_records_to_groups
 */
class m190415_131534_insert_records_to_groups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('groups', ['name'], [
            ['Admins'],
            ['Customers'],
            ['Developers'],
            ['Guests'],
            ['Management'],
            ['Security'],
            ['Users'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('groups', ['in', 'name', [
            'Admins', 'Customers', 'Developers', 'Guests',
            'Management', 'Security', 'Users']]);

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_131534_insert_records_to_groups cannot be reverted.\n";

        return false;
    }
    */
}
