<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m210209_205301_createArticleTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){

        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down(){
        $this->dropTable('article');
    }
}
