<?php
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()->newTable($installer->getTable('stasinfo/my_feedback'))
    ->addColumn('feedback_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ), 'Feedback ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ), 'Name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ), 'E-mail')
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
    ), 'phone')
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
    ), 'message')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TINYINT, null, array(
    ), 'Status')
    ->addColumn('timestamp', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
    ), 'Timestamp');

$installer->getConnection()->createTable($table);

$installer->endSetup();