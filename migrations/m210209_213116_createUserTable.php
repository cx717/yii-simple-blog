<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210209_213116_createUserTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){

        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down(){
        $this->dropTable('user');
    }
}
