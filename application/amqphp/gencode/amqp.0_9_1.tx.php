<?php
namespace amqphp\protocol\tx;
/** Ampq binding code, generated from doc version 0.9.1 */
class TxClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'tx';
    protected $index = 90;
    protected $fields = array();
    protected $methods = array(10 => 'select',11 => 'select-ok',20 => 'commit',21 => 'commit-ok',30 => 'rollback',31 => 'rollback-ok');
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'select', '\\amqphp\\protocol\\tx\\SelectMethod'),array(11, 'select-ok', '\\amqphp\\protocol\\tx\\SelectOkMethod'),array(20, 'commit', '\\amqphp\\protocol\\tx\\CommitMethod'),array(21, 'commit-ok', '\\amqphp\\protocol\\tx\\CommitOkMethod'),array(30, 'rollback', '\\amqphp\\protocol\\tx\\RollbackMethod'),array(31, 'rollback-ok', '\\amqphp\\protocol\\tx\\RollbackOkMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array();
}



class SelectMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'select';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('select-ok');
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class SelectOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'select-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CommitMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'commit';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('commit-ok');
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CommitOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'commit-ok';
    protected $index = 21;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RollbackMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'rollback';
    protected $index = 30;
    protected $synchronous = true;
    protected $responseMethods = array('rollback-ok');
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RollbackOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'tx';
    protected $name = 'rollback-ok';
    protected $index = 31;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\tx\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\tx\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  