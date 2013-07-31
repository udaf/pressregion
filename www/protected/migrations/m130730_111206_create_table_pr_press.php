<?php

class m130730_111206_create_table_pr_press extends CDbMigration
{
	public function up()
	{
        $this->createTable('{{press}}',array(
            'id'=>'pk',
            'city_id'=>'integer',
            'name'=>'string',
            'format'=>'string',
            'pages'=>'integer',

        ));
	}

	public function down()
	{
		$this->dropTable('{{press}}');
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