<?php

use yii\db\Migration;

/**
 * Class m211225_153318_add_demo_data_to_order
 */
class m211225_153318_add_demo_data_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 0; $i < 200; $i++){
            $faker = \Faker\Factory::create();
            $rows[] = [
                $faker->unixTime('now'),
                $faker->firstName,
                $faker->lastName,
                $faker->address,
            ];
        }
        $this->batchInsert('order',[
            'created_at',
            'first_name',
            'last_name',
            'address'
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('order');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211225_153318_add_demo_data_to_order cannot be reverted.\n";

        return false;
    }
    */
}
