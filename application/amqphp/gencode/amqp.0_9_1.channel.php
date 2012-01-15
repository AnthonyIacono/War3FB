<?php
namespace amqphp\protocol\channel;
/** Ampq binding code, generated from doc version 0.9.1 */
class ChannelClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'channel';
    protected $index = 20;
    protected $fields = array();
    protected $methods = array(10 => 'open',11 => 'open-ok',20 => 'flow',21 => 'flow-ok',40 => 'close',41 => 'close-ok');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'open', '\\amqphp\\protocol\\channel\\OpenMethod'),array(11, 'open-ok', '\\amqphp\\protocol\\channel\\OpenOkMethod'),array(20, 'flow', '\\amqphp\\protocol\\channel\\FlowMethod'),array(21, 'flow-ok', '\\amqphp\\protocol\\channel\\FlowOkMethod'),array(40, 'close', '\\amqphp\\protocol\\channel\\CloseMethod'),array(41, 'close-ok', '\\amqphp\\protocol\\channel\\CloseOkMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('reserved-1', 'open', '\\amqphp\\protocol\\channel\\OpenReserved1Field'),array('reserved-1', 'open-ok', '\\amqphp\\protocol\\channel\\OpenOkReserved1Field'),array('active', 'flow', '\\amqphp\\protocol\\channel\\FlowActiveField'),array('active', 'flow-ok', '\\amqphp\\protocol\\channel\\FlowOkActiveField'),array('reply-code', 'close', '\\amqphp\\protocol\\channel\\CloseReplyCodeField'),array('reply-text', 'close', '\\amqphp\\protocol\\channel\\CloseReplyTextField'),array('class-id', 'close', '\\amqphp\\protocol\\channel\\CloseClassIdField'),array('method-id', 'close', '\\amqphp\\protocol\\channel\\CloseMethodIdField'));
}



class OpenMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'open';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('open-ok');
    protected $fields = array('reserved-1');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class OpenOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'open-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('reserved-1');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class FlowMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'flow';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('flow-ok');
    protected $fields = array('active');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class FlowOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'flow-ok';
    protected $index = 21;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('active');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CloseMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'close';
    protected $index = 40;
    protected $synchronous = true;
    protected $responseMethods = array('close-ok');
    protected $fields = array('reply-code', 'reply-text', 'class-id', 'method-id');
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CloseOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'channel';
    protected $name = 'close-ok';
    protected $index = 41;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\channel\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\channel\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class OpenReserved1Field extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class OpenOkReserved1Field extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'longstr'; }

}

  
class FlowActiveField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'active'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class FlowOkActiveField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'active'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class CloseReplyCodeField extends \amqphp\protocol\ReplyCodeDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reply-code'; }
    function getSpecFieldDomain() { return 'reply-code'; }

}

  
class CloseReplyTextField extends \amqphp\protocol\ReplyTextDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reply-text'; }
    function getSpecFieldDomain() { return 'reply-text'; }

}

  
class CloseClassIdField extends \amqphp\protocol\ClassIdDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'class-id'; }
    function getSpecFieldDomain() { return 'class-id'; }

}

  
class CloseMethodIdField extends \amqphp\protocol\MethodIdDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'method-id'; }
    function getSpecFieldDomain() { return 'method-id'; }

}

  