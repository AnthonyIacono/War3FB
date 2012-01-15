<?php
namespace amqphp\protocol\queue;
/** Ampq binding code, generated from doc version 0.9.1 */
class QueueClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'queue';
    protected $index = 50;
    protected $fields = array();
    protected $methods = array(10 => 'declare',11 => 'declare-ok',20 => 'bind',21 => 'bind-ok',50 => 'unbind',51 => 'unbind-ok',30 => 'purge',31 => 'purge-ok',40 => 'delete',41 => 'delete-ok');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'declare', '\\amqphp\\protocol\\queue\\DeclareMethod'),array(11, 'declare-ok', '\\amqphp\\protocol\\queue\\DeclareOkMethod'),array(20, 'bind', '\\amqphp\\protocol\\queue\\BindMethod'),array(21, 'bind-ok', '\\amqphp\\protocol\\queue\\BindOkMethod'),array(50, 'unbind', '\\amqphp\\protocol\\queue\\UnbindMethod'),array(51, 'unbind-ok', '\\amqphp\\protocol\\queue\\UnbindOkMethod'),array(30, 'purge', '\\amqphp\\protocol\\queue\\PurgeMethod'),array(31, 'purge-ok', '\\amqphp\\protocol\\queue\\PurgeOkMethod'),array(40, 'delete', '\\amqphp\\protocol\\queue\\DeleteMethod'),array(41, 'delete-ok', '\\amqphp\\protocol\\queue\\DeleteOkMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('reserved-1', 'declare', '\\amqphp\\protocol\\queue\\DeclareReserved1Field'),array('queue', 'declare', '\\amqphp\\protocol\\queue\\DeclareQueueField'),array('passive', 'declare', '\\amqphp\\protocol\\queue\\DeclarePassiveField'),array('durable', 'declare', '\\amqphp\\protocol\\queue\\DeclareDurableField'),array('exclusive', 'declare', '\\amqphp\\protocol\\queue\\DeclareExclusiveField'),array('auto-delete', 'declare', '\\amqphp\\protocol\\queue\\DeclareAutoDeleteField'),array('no-wait', 'declare', '\\amqphp\\protocol\\queue\\DeclareNoWaitField'),array('arguments', 'declare', '\\amqphp\\protocol\\queue\\DeclareArgumentsField'),array('queue', 'declare-ok', '\\amqphp\\protocol\\queue\\DeclareOkQueueField'),array('message-count', 'declare-ok', '\\amqphp\\protocol\\queue\\DeclareOkMessageCountField'),array('consumer-count', 'declare-ok', '\\amqphp\\protocol\\queue\\DeclareOkConsumerCountField'),array('reserved-1', 'bind', '\\amqphp\\protocol\\queue\\BindReserved1Field'),array('queue', 'bind', '\\amqphp\\protocol\\queue\\BindQueueField'),array('exchange', 'bind', '\\amqphp\\protocol\\queue\\BindExchangeField'),array('routing-key', 'bind', '\\amqphp\\protocol\\queue\\BindRoutingKeyField'),array('no-wait', 'bind', '\\amqphp\\protocol\\queue\\BindNoWaitField'),array('arguments', 'bind', '\\amqphp\\protocol\\queue\\BindArgumentsField'),array('reserved-1', 'unbind', '\\amqphp\\protocol\\queue\\UnbindReserved1Field'),array('queue', 'unbind', '\\amqphp\\protocol\\queue\\UnbindQueueField'),array('exchange', 'unbind', '\\amqphp\\protocol\\queue\\UnbindExchangeField'),array('routing-key', 'unbind', '\\amqphp\\protocol\\queue\\UnbindRoutingKeyField'),array('arguments', 'unbind', '\\amqphp\\protocol\\queue\\UnbindArgumentsField'),array('reserved-1', 'purge', '\\amqphp\\protocol\\queue\\PurgeReserved1Field'),array('queue', 'purge', '\\amqphp\\protocol\\queue\\PurgeQueueField'),array('no-wait', 'purge', '\\amqphp\\protocol\\queue\\PurgeNoWaitField'),array('message-count', 'purge-ok', '\\amqphp\\protocol\\queue\\PurgeOkMessageCountField'),array('reserved-1', 'delete', '\\amqphp\\protocol\\queue\\DeleteReserved1Field'),array('queue', 'delete', '\\amqphp\\protocol\\queue\\DeleteQueueField'),array('if-unused', 'delete', '\\amqphp\\protocol\\queue\\DeleteIfUnusedField'),array('if-empty', 'delete', '\\amqphp\\protocol\\queue\\DeleteIfEmptyField'),array('no-wait', 'delete', '\\amqphp\\protocol\\queue\\DeleteNoWaitField'),array('message-count', 'delete-ok', '\\amqphp\\protocol\\queue\\DeleteOkMessageCountField'));
}



class DeclareMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'declare';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('declare-ok');
    protected $fields = array('reserved-1', 'queue', 'passive', 'durable', 'exclusive', 'auto-delete', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class DeclareOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'declare-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('queue', 'message-count', 'consumer-count');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class BindMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'bind';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('bind-ok');
    protected $fields = array('reserved-1', 'queue', 'exchange', 'routing-key', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class BindOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'bind-ok';
    protected $index = 21;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class UnbindMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'unbind';
    protected $index = 50;
    protected $synchronous = true;
    protected $responseMethods = array('unbind-ok');
    protected $fields = array('reserved-1', 'queue', 'exchange', 'routing-key', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class UnbindOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'unbind-ok';
    protected $index = 51;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class PurgeMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'purge';
    protected $index = 30;
    protected $synchronous = true;
    protected $responseMethods = array('purge-ok');
    protected $fields = array('reserved-1', 'queue', 'no-wait');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class PurgeOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'purge-ok';
    protected $index = 31;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('message-count');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class DeleteMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'delete';
    protected $index = 40;
    protected $synchronous = true;
    protected $responseMethods = array('delete-ok');
    protected $fields = array('reserved-1', 'queue', 'if-unused', 'if-empty', 'no-wait');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class DeleteOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'queue';
    protected $name = 'delete-ok';
    protected $index = 41;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('message-count');
    protected $methFact = '\\amqphp\\protocol\\queue\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\queue\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class DeclareReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class DeclareQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class DeclarePassiveField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'passive'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeclareDurableField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'durable'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeclareExclusiveField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exclusive'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeclareAutoDeleteField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'auto-delete'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeclareNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class DeclareArgumentsField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'arguments'; }
    function getSpecFieldDomain() { return 'table'; }

}

  
class DeclareOkQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class DeclareOkMessageCountField extends \amqphp\protocol\MessageCountDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'message-count'; }
    function getSpecFieldDomain() { return 'message-count'; }

}

  
class DeclareOkConsumerCountField extends \amqphp\protocol\LongDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-count'; }
    function getSpecFieldDomain() { return 'long'; }

}

  
class BindReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class BindQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class BindExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class BindRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class BindNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class BindArgumentsField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'arguments'; }
    function getSpecFieldDomain() { return 'table'; }

}

  
class UnbindReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class UnbindQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class UnbindExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class UnbindRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class UnbindArgumentsField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'arguments'; }
    function getSpecFieldDomain() { return 'table'; }

}

  
class PurgeReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class PurgeQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class PurgeNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class PurgeOkMessageCountField extends \amqphp\protocol\MessageCountDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'message-count'; }
    function getSpecFieldDomain() { return 'message-count'; }

}

  
class DeleteReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class DeleteQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class DeleteIfUnusedField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'if-unused'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeleteIfEmptyField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'if-empty'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeleteNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class DeleteOkMessageCountField extends \amqphp\protocol\MessageCountDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'message-count'; }
    function getSpecFieldDomain() { return 'message-count'; }

}

  