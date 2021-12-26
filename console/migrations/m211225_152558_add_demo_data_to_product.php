<?php

use yii\db\Migration;

/**
 * Class m211225_152558_add_demo_data_to_product
 */
class m211225_152558_add_demo_data_to_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 0; $i < 100; $i++){
            $faker = \Faker\Factory::create('ru_RU');
            $rows[] = [
                $faker->unixTime('now'),
                'Product: ' . $faker->text(rand(50,100)),
                $faker->colorName,
                $faker->randomFloat(2,10,10000),
            ];
        }
        $this->batchInsert('product',[
            'created_at',
            'name',
            'color',
            'price'
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('product');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211225_152558_add_demo_data_to_product cannot be reverted.\n";

        return false;
    }
    */
}
