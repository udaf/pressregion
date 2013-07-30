<?php

class m130730_103535_create_table_pr_regions extends CDbMigration
{
	public function up()
	{
        $this->createTable('pr_regions', array(
            'id' => 'pk',
            'name' => 'string',
            'code' => 'integer',
        ));
	}

	public function down()
	{
		$this->dropTable('pr_regions');
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