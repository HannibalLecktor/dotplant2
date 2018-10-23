<?php

use yii\db\Migration;

/**
 * Class m181023_110149_add_additional_keyword_to_category
 */
class m181023_110149_add_additional_keyword_to_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            \app\modules\shop\models\Category::tableName(),
            'meta_keywords_before',
            $this->string(255)->defaultValue(null));

        $this->addColumn(
            \app\modules\shop\models\Category::tableName(),
            'meta_keywords_after',
            $this->string(255)->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\modules\shop\models\Category::tableName(), 'meta_keywords_before');
        $this->dropColumn(\app\modules\shop\models\Category::tableName(), 'meta_keywords_after');

        return false;
    }
}
