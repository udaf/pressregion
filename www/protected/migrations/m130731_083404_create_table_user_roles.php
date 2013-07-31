<?php

class m130731_083404_create_table_user_roles extends CDbMigration
{
	public function up()
	{
        $this->createTable('pr_user_roles', array(
            'id' => 'pk',
            'name' => 'string',
        ));
        $this->insert('pr_user_roles', array(
            'name' => 'admin',
        ));
        $this->insert('pr_user_roles', array(
            'name' => 'newspaper',
        ));
        $this->insert('pr_user_roles', array(
            'name' => 'advertiser',
        ));


	}

	public function down()
	{
		$this->dropTable('pr_user_roles');
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