<?php

use yii\db\Migration;

/**
 * Class m181022_074108_add_seo_fields_to_category
 */
class m181022_074108_add_seo_fields_to_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            \app\modules\shop\models\Category::tableName(),
            'title_before',
            $this->string(255)->defaultValue(null));

        $this->addColumn(
            \app\modules\shop\models\Category::tableName(),
            'title_after',
            $this->string(255)->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\modules\shop\models\Category::tableName(), 'title_before');
        $this->dropColumn(\app\modules\shop\models\Category::tableName(), 'title_after');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181022_074108_add_seo_fields_to_category cannot be reverted.\n";

        return false;
    }
    */
}
