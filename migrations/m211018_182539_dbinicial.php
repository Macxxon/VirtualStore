<?php

use yii\db\Migration;

/**
 * Class m211018_182539_dbinicial
 */
class m211018_182539_dbinicial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('stores',[
            'id'=>$this->primaryKey(),
            'name_store'=>$this->string('45'),
            'address'=>$this->string('45'),
            'phone_number'=>$this->string('45'),
            'whatsapp'=>$this->string('45'),
            'image'=>$this->string('150')
        ]);

        $this->createTable('category',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string('45'),
            'description'=>$this->string('300')
        ]);


        $this->createTable('products',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string('45'),
            'description'=>$this->string('300'),
            'price'=>$this->string('45'),
            'image'=>$this->string('150'),
            'id_category'=>$this->string('45')
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211018_182539_dbinicial cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211018_182539_dbinicial cannot be reverted.\n";

        return false;
    }
    */
}
