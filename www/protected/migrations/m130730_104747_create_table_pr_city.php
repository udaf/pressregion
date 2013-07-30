<?php

class m130730_104747_create_table_pr_city extends CDbMigration
{
	public function up()
	{
        $this->createTable('pr_city',array(
            'id'=>'pk',
            'region_id'=>'integer',
            'name'=>'string',
            'population'=>'integer',
        ));
	}

	public function down()
	{
		$this->dropTable('pr_city');
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