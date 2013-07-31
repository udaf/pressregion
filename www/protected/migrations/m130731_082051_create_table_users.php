<?php

class m130731_082051_create_table_users extends CDbMigration
{
	public function up()
	{
        $this->createTable('pr_users', array(
            'id' => 'pk',
            'login' => 'string',
            'password' => 'string',
            'email' => 'string',
            'registered' => 'datetime',
            'role_id' => 'integer',
        ));
        $this->insert('pr_users', array(
            'login' => 'admin',
            'password' => 'a$naBbVaP.9Zo',
            'email' => 'admin@pressregion.ru',

        ));
	}

	public function down()
	{
		$this->dropTable('pr_users');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}