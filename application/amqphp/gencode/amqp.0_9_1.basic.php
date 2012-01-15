<?php
namespace amqphp\protocol\basic;
/** Ampq binding code, generated from doc version 0.9.1 */
class BasicClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'basic';
    protected $index = 60;
    protected $fields = array('content-type','content-encoding','headers','delivery-mode','priority','correlation-id','reply-to','expiration','message-id','timestamp','type','user-id','app-id','cluster-id');
    protected $methods = array(10 => 'qos',11 => 'qos-ok',20 => 'consume',21 => 'consume-ok',30 => 'cancel',31 => 'cancel-ok',40 => 'publish',50 => 'return',60 => 'deliver',70 => 'get',71 => 'get-ok',72 => 'get-empty',80 => 'ack',90 => 'reject',100 => 'recover-async',110 => 'recover',111 => 'recover-ok',120 => 'nack');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'qos', '\\amqphp\\protocol\\basic\\QosMethod'),array(11, 'qos-ok', '\\amqphp\\protocol\\basic\\QosOkMethod'),array(20, 'consume', '\\amqphp\\protocol\\basic\\ConsumeMethod'),array(21, 'consume-ok', '\\amqphp\\protocol\\basic\\ConsumeOkMethod'),array(30, 'cancel', '\\amqphp\\protocol\\basic\\CancelMethod'),array(31, 'cancel-ok', '\\amqphp\\protocol\\basic\\CancelOkMethod'),array(40, 'publish', '\\amqphp\\protocol\\basic\\PublishMethod'),array(50, 'return', '\\amqphp\\protocol\\basic\\ReturnMethod'),array(60, 'deliver', '\\amqphp\\protocol\\basic\\DeliverMethod'),array(70, 'get', '\\amqphp\\protocol\\basic\\GetMethod'),array(71, 'get-ok', '\\amqphp\\protocol\\basic\\GetOkMethod'),array(72, 'get-empty', '\\amqphp\\protocol\\basic\\GetEmptyMethod'),array(80, 'ack', '\\amqphp\\protocol\\basic\\AckMethod'),array(90, 'reject', '\\amqphp\\protocol\\basic\\RejectMethod'),array(100, 'recover-async', '\\amqphp\\protocol\\basic\\RecoverAsyncMethod'),array(110, 'recover', '\\amqphp\\protocol\\basic\\RecoverMethod'),array(111, 'recover-ok', '\\amqphp\\protocol\\basic\\RecoverOkMethod'),array(120, 'nack', '\\amqphp\\protocol\\basic\\NackMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('content-type', '', '\\amqphp\\protocol\\basic\\ContentTypeField'),array('content-encoding', '', '\\amqphp\\protocol\\basic\\ContentEncodingField'),array('headers', '', '\\amqphp\\protocol\\basic\\HeadersField'),array('delivery-mode', '', '\\amqphp\\protocol\\basic\\DeliveryModeField'),array('priority', '', '\\amqphp\\protocol\\basic\\PriorityField'),array('correlation-id', '', '\\amqphp\\protocol\\basic\\CorrelationIdField'),array('reply-to', '', '\\amqphp\\protocol\\basic\\ReplyToField'),array('expiration', '', '\\amqphp\\protocol\\basic\\ExpirationField'),array('message-id', '', '\\amqphp\\protocol\\basic\\MessageIdField'),array('timestamp', '', '\\amqphp\\protocol\\basic\\TimestampField'),array('type', '', '\\amqphp\\protocol\\basic\\TypeField'),array('user-id', '', '\\amqphp\\protocol\\basic\\UserIdField'),array('app-id', '', '\\amqphp\\protocol\\basic\\AppIdField'),array('cluster-id', '', '\\amqphp\\protocol\\basic\\ClusterIdField'),array('prefetch-size', 'qos', '\\amqphp\\protocol\\basic\\QosPrefetchSizeField'),array('prefetch-count', 'qos', '\\amqphp\\protocol\\basic\\QosPrefetchCountField'),array('global', 'qos', '\\amqphp\\protocol\\basic\\QosGlobalField'),array('reserved-1', 'consume', '\\amqphp\\protocol\\basic\\ConsumeReserved1Field'),array('queue', 'consume', '\\amqphp\\protocol\\basic\\ConsumeQueueField'),array('consumer-tag', 'consume', '\\amqphp\\protocol\\basic\\ConsumeConsumerTagField'),array('no-local', 'consume', '\\amqphp\\protocol\\basic\\ConsumeNoLocalField'),array('no-ack', 'consume', '\\amqphp\\protocol\\basic\\ConsumeNoAckField'),array('exclusive', 'consume', '\\amqphp\\protocol\\basic\\ConsumeExclusiveField'),array('no-wait', 'consume', '\\amqphp\\protocol\\basic\\ConsumeNoWaitField'),array('arguments', 'consume', '\\amqphp\\protocol\\basic\\ConsumeArgumentsField'),array('consumer-tag', 'consume-ok', '\\amqphp\\protocol\\basic\\ConsumeOkConsumerTagField'),array('consumer-tag', 'cancel', '\\amqphp\\protocol\\basic\\CancelConsumerTagField'),array('no-wait', 'cancel', '\\amqphp\\protocol\\basic\\CancelNoWaitField'),array('consumer-tag', 'cancel-ok', '\\amqphp\\protocol\\basic\\CancelOkConsumerTagField'),array('reserved-1', 'publish', '\\amqphp\\protocol\\basic\\PublishReserved1Field'),array('exchange', 'publish', '\\amqphp\\protocol\\basic\\PublishExchangeField'),array('routing-key', 'publish', '\\amqphp\\protocol\\basic\\PublishRoutingKeyField'),array('mandatory', 'publish', '\\amqphp\\protocol\\basic\\PublishMandatoryField'),array('immediate', 'publish', '\\amqphp\\protocol\\basic\\PublishImmediateField'),array('reply-code', 'return', '\\amqphp\\protocol\\basic\\ReturnReplyCodeField'),array('reply-text', 'return', '\\amqphp\\protocol\\basic\\ReturnReplyTextField'),array('exchange', 'return', '\\amqphp\\protocol\\basic\\ReturnExchangeField'),array('routing-key', 'return', '\\amqphp\\protocol\\basic\\ReturnRoutingKeyField'),array('consumer-tag', 'deliver', '\\amqphp\\protocol\\basic\\DeliverConsumerTagField'),array('delivery-tag', 'deliver', '\\amqphp\\protocol\\basic\\DeliverDeliveryTagField'),array('redelivered', 'deliver', '\\amqphp\\protocol\\basic\\DeliverRedeliveredField'),array('exchange', 'deliver', '\\amqphp\\protocol\\basic\\DeliverExchangeField'),array('routing-key', 'deliver', '\\amqphp\\protocol\\basic\\DeliverRoutingKeyField'),array('reserved-1', 'get', '\\amqphp\\protocol\\basic\\GetReserved1Field'),array('queue', 'get', '\\amqphp\\protocol\\basic\\GetQueueField'),array('no-ack', 'get', '\\amqphp\\protocol\\basic\\GetNoAckField'),array('delivery-tag', 'get-ok', '\\amqphp\\protocol\\basic\\GetOkDeliveryTagField'),array('redelivered', 'get-ok', '\\amqphp\\protocol\\basic\\GetOkRedeliveredField'),array('exchange', 'get-ok', '\\amqphp\\protocol\\basic\\GetOkExchangeField'),array('routing-key', 'get-ok', '\\amqphp\\protocol\\basic\\GetOkRoutingKeyField'),array('message-count', 'get-ok', '\\amqphp\\protocol\\basic\\GetOkMessageCountField'),array('reserved-1', 'get-empty', '\\amqphp\\protocol\\basic\\GetEmptyReserved1Field'),array('delivery-tag', 'ack', '\\amqphp\\protocol\\basic\\AckDeliveryTagField'),array('multiple', 'ack', '\\amqphp\\protocol\\basic\\AckMultipleField'),array('delivery-tag', 'reject', '\\amqphp\\protocol\\basic\\RejectDeliveryTagField'),array('requeue', 'reject', '\\amqphp\\protocol\\basic\\RejectRequeueField'),array('requeue', 'recover-async', '\\amqphp\\protocol\\basic\\RecoverAsyncRequeueField'),array('requeue', 'recover', '\\amqphp\\protocol\\basic\\RecoverRequeueField'),array('delivery-tag', 'nack', '\\amqphp\\protocol\\basic\\NackDeliveryTagField'),array('multiple', 'nack', '\\amqphp\\protocol\\basic\\NackMultipleField'),array('requeue', 'nack', '\\amqphp\\protocol\\basic\\NackRequeueField'));
}



class QosMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'qos';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('qos-ok');
    protected $fields = array('prefetch-size', 'prefetch-count', 'global');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class QosOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'qos-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class ConsumeMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'consume';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('consume-ok');
    protected $fields = array('reserved-1', 'queue', 'consumer-tag', 'no-local', 'no-ack', 'exclusive', 'no-wait', 'arguments');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class ConsumeOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'consume-ok';
    protected $index = 21;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('consumer-tag');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CancelMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'cancel';
    protected $index = 30;
    protected $synchronous = true;
    protected $responseMethods = array('cancel-ok');
    protected $fields = array('consumer-tag', 'no-wait');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = true;
}
  
class CancelOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'cancel-ok';
    protected $index = 31;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('consumer-tag');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class PublishMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'publish';
    protected $index = 40;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('reserved-1', 'exchange', 'routing-key', 'mandatory', 'immediate');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = true;
    protected $hasNoWait = false;
}
  
class ReturnMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'return';
    protected $index = 50;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('reply-code', 'reply-text', 'exchange', 'routing-key');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = true;
    protected $hasNoWait = false;
}
  
class DeliverMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'deliver';
    protected $index = 60;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('consumer-tag', 'delivery-tag', 'redelivered', 'exchange', 'routing-key');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = true;
    protected $hasNoWait = false;
}
  
class GetMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'get';
    protected $index = 70;
    protected $synchronous = true;
    protected $responseMethods = array('get-ok', 'get-empty');
    protected $fields = array('reserved-1', 'queue', 'no-ack');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class GetOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'get-ok';
    protected $index = 71;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('delivery-tag', 'redelivered', 'exchange', 'routing-key', 'message-count');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = true;
    protected $hasNoWait = false;
}
  
class GetEmptyMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'get-empty';
    protected $index = 72;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('reserved-1');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class AckMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'ack';
    protected $index = 80;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('delivery-tag', 'multiple');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RejectMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'reject';
    protected $index = 90;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('delivery-tag', 'requeue');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RecoverAsyncMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'recover-async';
    protected $index = 100;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('requeue');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RecoverMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'recover';
    protected $index = 110;
    protected $synchronous = true;
    protected $responseMethods = array('recover-ok');
    protected $fields = array('requeue');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class RecoverOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'recover-ok';
    protected $index = 111;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class NackMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'basic';
    protected $name = 'nack';
    protected $index = 120;
    protected $synchronous = false;
    protected $responseMethods = array();
    protected $fields = array('delivery-tag', 'multiple', 'requeue');
    protected $methFact = '\\amqphp\\protocol\\basic\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\basic\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class ContentTypeField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'content-type'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class ContentEncodingField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'content-encoding'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class HeadersField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'headers'; }
    function getSpecFieldDomain() { return 'table'; }

}

  
class DeliveryModeField extends \amqphp\protocol\OctetDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-mode'; }
    function getSpecFieldDomain() { return 'octet'; }

}

  
class PriorityField extends \amqphp\protocol\OctetDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'priority'; }
    function getSpecFieldDomain() { return 'octet'; }

}

  
class CorrelationIdField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'correlation-id'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class ReplyToField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reply-to'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class ExpirationField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'expiration'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class MessageIdField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'message-id'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class TimestampField extends \amqphp\protocol\TimestampDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'timestamp'; }
    function getSpecFieldDomain() { return 'timestamp'; }

}

  
class TypeField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'type'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class UserIdField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'user-id'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class AppIdField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'app-id'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class ClusterIdField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'cluster-id'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class QosPrefetchSizeField extends \amqphp\protocol\LongDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'prefetch-size'; }
    function getSpecFieldDomain() { return 'long'; }

}

  
class QosPrefetchCountField extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'prefetch-count'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class QosGlobalField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'global'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class ConsumeReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class ConsumeQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class ConsumeConsumerTagField extends \amqphp\protocol\ConsumerTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-tag'; }
    function getSpecFieldDomain() { return 'consumer-tag'; }

}

  
class ConsumeNoLocalField extends \amqphp\protocol\NoLocalDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-local'; }
    function getSpecFieldDomain() { return 'no-local'; }

}

  
class ConsumeNoAckField extends \amqphp\protocol\NoAckDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-ack'; }
    function getSpecFieldDomain() { return 'no-ack'; }

}

  
class ConsumeExclusiveField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exclusive'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class ConsumeNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class ConsumeArgumentsField extends \amqphp\protocol\TableDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'arguments'; }
    function getSpecFieldDomain() { return 'table'; }

}

  
class ConsumeOkConsumerTagField extends \amqphp\protocol\ConsumerTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-tag'; }
    function getSpecFieldDomain() { return 'consumer-tag'; }

}

  
class CancelConsumerTagField extends \amqphp\protocol\ConsumerTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-tag'; }
    function getSpecFieldDomain() { return 'consumer-tag'; }

}

  
class CancelNoWaitField extends \amqphp\protocol\NoWaitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-wait'; }
    function getSpecFieldDomain() { return 'no-wait'; }

}

  
class CancelOkConsumerTagField extends \amqphp\protocol\ConsumerTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-tag'; }
    function getSpecFieldDomain() { return 'consumer-tag'; }

}

  
class PublishReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class PublishExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class PublishRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class PublishMandatoryField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'mandatory'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class PublishImmediateField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'immediate'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class ReturnReplyCodeField extends \amqphp\protocol\ReplyCodeDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reply-code'; }
    function getSpecFieldDomain() { return 'reply-code'; }

}

  
class ReturnReplyTextField extends \amqphp\protocol\ReplyTextDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reply-text'; }
    function getSpecFieldDomain() { return 'reply-text'; }

}

  
class ReturnExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class ReturnRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class DeliverConsumerTagField extends \amqphp\protocol\ConsumerTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'consumer-tag'; }
    function getSpecFieldDomain() { return 'consumer-tag'; }

}

  
class DeliverDeliveryTagField extends \amqphp\protocol\DeliveryTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-tag'; }
    function getSpecFieldDomain() { return 'delivery-tag'; }

}

  
class DeliverRedeliveredField extends \amqphp\protocol\RedeliveredDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'redelivered'; }
    function getSpecFieldDomain() { return 'redelivered'; }

}

  
class DeliverExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class DeliverRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class GetReserved1Field extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class GetQueueField extends \amqphp\protocol\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'queue'; }
    function getSpecFieldDomain() { return 'queue-name'; }

}

  
class GetNoAckField extends \amqphp\protocol\NoAckDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'no-ack'; }
    function getSpecFieldDomain() { return 'no-ack'; }

}

  
class GetOkDeliveryTagField extends \amqphp\protocol\DeliveryTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-tag'; }
    function getSpecFieldDomain() { return 'delivery-tag'; }

}

  
class GetOkRedeliveredField extends \amqphp\protocol\RedeliveredDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'redelivered'; }
    function getSpecFieldDomain() { return 'redelivered'; }

}

  
class GetOkExchangeField extends \amqphp\protocol\ExchangeNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'exchange'; }
    function getSpecFieldDomain() { return 'exchange-name'; }

}

  
class GetOkRoutingKeyField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'routing-key'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class GetOkMessageCountField extends \amqphp\protocol\MessageCountDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'message-count'; }
    function getSpecFieldDomain() { return 'message-count'; }

}

  
class GetEmptyReserved1Field extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class AckDeliveryTagField extends \amqphp\protocol\DeliveryTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-tag'; }
    function getSpecFieldDomain() { return 'delivery-tag'; }

}

  
class AckMultipleField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'multiple'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class RejectDeliveryTagField extends \amqphp\protocol\DeliveryTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-tag'; }
    function getSpecFieldDomain() { return 'delivery-tag'; }

}

  
class RejectRequeueField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'requeue'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class RecoverAsyncRequeueField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'requeue'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class RecoverRequeueField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'requeue'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class NackDeliveryTagField extends \amqphp\protocol\DeliveryTagDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'delivery-tag'; }
    function getSpecFieldDomain() { return 'delivery-tag'; }

}

  
class NackMultipleField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'multiple'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class NackRequeueField extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'requeue'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  