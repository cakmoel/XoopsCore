<?php
require_once(dirname(__FILE__).'/../../../../../init_new.php');

use Xoops\Core\Kernel\Handlers\XoopsConfigItemHandler;

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class ConfigItemHandlerTest extends \PHPUnit_Framework_TestCase
{
    protected $myclass='XoopsConfigItemHandler';
	protected $conn = null;
    
    public function setUp()
	{
		$this->conn = Xoops::getInstance()->db();
    }
    
    public function test___construct()
	{
        $instance=new $this->myclass($this->conn);
        $this->assertInstanceOf($this->myclass, $instance);
		$this->assertRegExp('/^.*config$/', $instance->table);
		$this->assertSame('\Xoops\Core\Kernel\Handlers\XoopsConfigItem', $instance->className);
		$this->assertSame('conf_id', $instance->keyName);
		$this->assertSame('conf_name', $instance->identifierName);
    }
    
}