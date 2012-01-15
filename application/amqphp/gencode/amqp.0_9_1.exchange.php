<?php
namespace amqphp\protocol\exchange;
/** Ampq binding code, generated from doc version 0.9.1 */
class ExchangeClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'exchange';
    protected $index = 40;
    protected $fields = array();
    protected $methods = array(10 => 'declare',11 => 'declare-ok',20 => 'delete',21 => 'delete-ok',30 => 'bind',31 => 'bind-ok',40 => 'unbind',41 => 'unbind-ok');
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'declare', '\\amqphp\\protocol\\exchange\\DeclareMethod'),array(11, 'declare-ok', '\\amqphp\\protocol\\exchange\\DeclareOkMethod'),array(20, 'delete', '\\amqphp\\protocol\\exchange\\DeleteMethod'),array(21, 'delete-ok', '\\amqphp\\protocol\\exchange\\DeleteOkMethod'),array(30, 'bind', '\\amqphp\\protocol\\exchange\\BindMethod'),array(31, 'bind-ok', '\\amqphp\\protocol\\exchange\\BindOkMethod'),array(40, 'unbind', '\\amqphp\\protocol\\exchange\\UnbindMethod'),array(41, 'unbind-ok', '\\amqphp\\protocol\\exchange\\UnbindOkMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('reserved-1', 'declare', '\\amqphp\\protocol\\exchange\\DeclareReserved1Field'),array('exchange', 'declare', '\\amqphp\\protocol\\exchange\\DeclareExchangeField'),array('type', 'declare', '\\amqphp\\protocol\\exchange\\DeclareTypeField'),array('passive', 'declare', '\\amqphp\\protocol\\exchange\\DeclarePassiveField'),array('durable', 'declare', '\\amqphp\\protocol\\exchange\\DeclareDurableField'),array('reserved-2', 'declare', '\\amqphp\\protocol\\exchange\\DeclareReserved2Field'),array('reserved-3', 'declare', '\\amqphp\\protocol\\exchange\\DeclareReserved3Field'),array('no-wait', 'declare', '\\amqphp\\protocol\\exchange\\DeclareNoWaitField'),array('arguments', 'declare', '\\amqphp\\protocol\\exchange\\DeclareArgumentsField'),array('reserved-1', 'delete', '\\amqphp\\protocol\\exchange\\DeleteReserved1Field'),array('exchange', 'delete', '\\amqphp\\protocol\\exchange\\DeleteExchangeField'),array('if-unused', 'delete', '\\amqphp\\protocol\\exchange\\DeleteIfUnusedField'),array('no-wait', 'delete', '\\amqphp\\protocol\\exchange\\DeleteNoWaitField'),array('reserved-1', 'bind', '\\amqphp\\protocol\\exchange\\BindReserved1Field'),array('destination', 'bind', '\\amqphp\\protocol\\exchange\\BindDestinationField'),array('source', 'bind', '\\amqphp\\protocol\\exchange\\BindSourceField'),array('routing-key', 'bind', '\\amqphp\\protocol\\exchange\\BindRoutingKeyField'),array('no-wait', 'bind', '\\amqphp\\protocol\\exchange\\BindNoWaitField'),array('arguments', 'bind', '\\amqphp\\protocol\\exchange\\BindArgumentsField'),array('reserved-1', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindReserved1Field'),array('destination', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindDestinationField'),array('source', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindSourceField'),array('routing-key', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindRoutingKeyField'),array('no-wait', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindNoWaitField'),array('arguments', 'unbind', '\\amqphp\\protocol\\exchange\\UnbindArgumentsField'));
}



class DeclareMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'declare';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('declare-ok');
    protected $fields = array('reserved-1', 'exchange', 'type', 'passive', 'durable', 'reserved-2', 'reserved-3', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class DeclareOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'declare-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class DeleteMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'delete';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('delete-ok');
    protected $fields = array('reserved-1', 'exchange', 'if-unused', 'no-wait');
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class DeleteOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'delete-ok';
    protected $index = 21;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class BindMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'bind';
    protected $index = 30;
    protected $synchronous = true;
    protected $responseMethods = array('bind-ok');
    protected $fields = array('reserved-1', 'destination', 'source', 'routing-key', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class BindOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'bind-ok';
    protected $index = 31;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class UnbindMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'unbind';
    protected $index = 40;
    protected $synchronous = true;
    protected $responseMethods = array('unbind-ok');
    protected $fields = array('reserved-1', 'destination', 'source', 'routing-key', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class UnbindOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'exchange';
    protected $name = 'unbind-ok';
    protected $index = 41;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\exchange\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\exchange\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class DeclareReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class DeclareExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class DeclareTypeField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'type'; }
    function getSpecFieldDomain() { return 'shortstr'; }

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

  
class DeclareReserved2Field extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-2'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeclareReserved3Field extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-3'; }
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

  
class DeleteReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class DeleteExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class DeleteIfUnusedField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'if-unused'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class DeleteNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class BindReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class BindDestinationField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'destination'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class BindSourceField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'source'; }
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

  
class UnbindDestinationField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'destination'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class UnbindSourceField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'source'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class UnbindRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class UnbindNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class UnbindArgumentsField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'arguments'; }
    function getSpecFieldDomain() { return 'table'; }

}

  