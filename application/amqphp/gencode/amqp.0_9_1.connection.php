<?php
namespace amqphp\protocol\connection;
/** Ampq binding code, generated from doc version 0.9.1 */
class ConnectionClass extends \amqphp\protocol\abstrakt\XmlSpecClass
{
    protected $name = 'connection';
    protected $index = 10;
    protected $fields = array();
    protected $methods = array(10 => 'start',11 => 'start-ok',20 => 'secure',21 => 'secure-ok',30 => 'tune',31 => 'tune-ok',40 => 'open',41 => 'open-ok',50 => 'close',51 => 'close-ok');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
}

abstract class MethodFactory extends \amqphp\protocol\abstrakt\MethodFactory
{
    protected static $Cache = array(array(10, 'start', '\\amqphp\\protocol\\connection\\StartMethod'),array(11, 'start-ok', '\\amqphp\\protocol\\connection\\StartOkMethod'),array(20, 'secure', '\\amqphp\\protocol\\connection\\SecureMethod'),array(21, 'secure-ok', '\\amqphp\\protocol\\connection\\SecureOkMethod'),array(30, 'tune', '\\amqphp\\protocol\\connection\\TuneMethod'),array(31, 'tune-ok', '\\amqphp\\protocol\\connection\\TuneOkMethod'),array(40, 'open', '\\amqphp\\protocol\\connection\\OpenMethod'),array(41, 'open-ok', '\\amqphp\\protocol\\connection\\OpenOkMethod'),array(50, 'close', '\\amqphp\\protocol\\connection\\CloseMethod'),array(51, 'close-ok', '\\amqphp\\protocol\\connection\\CloseOkMethod'));
}

abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('version-major', 'start', '\\amqphp\\protocol\\connection\\StartVersionMajorField'),array('version-minor', 'start', '\\amqphp\\protocol\\connection\\StartVersionMinorField'),array('server-properties', 'start', '\\amqphp\\protocol\\connection\\StartServerPropertiesField'),array('mechanisms', 'start', '\\amqphp\\protocol\\connection\\StartMechanismsField'),array('locales', 'start', '\\amqphp\\protocol\\connection\\StartLocalesField'),array('client-properties', 'start-ok', '\\amqphp\\protocol\\connection\\StartOkClientPropertiesField'),array('mechanism', 'start-ok', '\\amqphp\\protocol\\connection\\StartOkMechanismField'),array('response', 'start-ok', '\\amqphp\\protocol\\connection\\StartOkResponseField'),array('locale', 'start-ok', '\\amqphp\\protocol\\connection\\StartOkLocaleField'),array('challenge', 'secure', '\\amqphp\\protocol\\connection\\SecureChallengeField'),array('response', 'secure-ok', '\\amqphp\\protocol\\connection\\SecureOkResponseField'),array('channel-max', 'tune', '\\amqphp\\protocol\\connection\\TuneChannelMaxField'),array('frame-max', 'tune', '\\amqphp\\protocol\\connection\\TuneFrameMaxField'),array('heartbeat', 'tune', '\\amqphp\\protocol\\connection\\TuneHeartbeatField'),array('channel-max', 'tune-ok', '\\amqphp\\protocol\\connection\\TuneOkChannelMaxField'),array('frame-max', 'tune-ok', '\\amqphp\\protocol\\connection\\TuneOkFrameMaxField'),array('heartbeat', 'tune-ok', '\\amqphp\\protocol\\connection\\TuneOkHeartbeatField'),array('virtual-host', 'open', '\\amqphp\\protocol\\connection\\OpenVirtualHostField'),array('reserved-1', 'open', '\\amqphp\\protocol\\connection\\OpenReserved1Field'),array('reserved-2', 'open', '\\amqphp\\protocol\\connection\\OpenReserved2Field'),array('reserved-1', 'open-ok', '\\amqphp\\protocol\\connection\\OpenOkReserved1Field'),array('reply-code', 'close', '\\amqphp\\protocol\\connection\\CloseReplyCodeField'),array('reply-text', 'close', '\\amqphp\\protocol\\connection\\CloseReplyTextField'),array('class-id', 'close', '\\amqphp\\protocol\\connection\\CloseClassIdField'),array('method-id', 'close', '\\amqphp\\protocol\\connection\\CloseMethodIdField'));
}



class StartMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'start';
    protected $index = 10;
    protected $synchronous = true;
    protected $responseMethods = array('start-ok');
    protected $fields = array('version-major', 'version-minor', 'server-properties', 'mechanisms', 'locales');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class StartOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'start-ok';
    protected $index = 11;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('client-properties', 'mechanism', 'response', 'locale');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class SecureMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'secure';
    protected $index = 20;
    protected $synchronous = true;
    protected $responseMethods = array('secure-ok');
    protected $fields = array('challenge');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class SecureOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'secure-ok';
    protected $index = 21;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('response');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class TuneMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'tune';
    protected $index = 30;
    protected $synchronous = true;
    protected $responseMethods = array('tune-ok');
    protected $fields = array('channel-max', 'frame-max', 'heartbeat');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class TuneOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'tune-ok';
    protected $index = 31;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('channel-max', 'frame-max', 'heartbeat');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class OpenMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'open';
    protected $index = 40;
    protected $synchronous = true;
    protected $responseMethods = array('open-ok');
    protected $fields = array('virtual-host', 'reserved-1', 'reserved-2');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class OpenOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'open-ok';
    protected $index = 41;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array('reserved-1');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CloseMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'close';
    protected $index = 50;
    protected $synchronous = true;
    protected $responseMethods = array('close-ok');
    protected $fields = array('reply-code', 'reply-text', 'class-id', 'method-id');
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class CloseOkMethod extends \amqphp\protocol\abstrakt\XmlSpecMethod
{
    protected $class = 'connection';
    protected $name = 'close-ok';
    protected $index = 51;
    protected $synchronous = true;
    protected $responseMethods = array();
    protected $fields = array();
    protected $methFact = '\\amqphp\\protocol\\connection\\MethodFactory';
    protected $fieldFact = '\\amqphp\\protocol\\connection\\FieldFactory';
    protected $classFact = '\\amqphp\\protocol\\ClassFactory';
    protected $content = false;
    protected $hasNoWait = false;
}
  
class StartVersionMajorField extends \amqphp\protocol\OctetDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'version-major'; }
    function getSpecFieldDomain() { return 'octet'; }

}

  
class StartVersionMinorField extends \amqphp\protocol\OctetDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'version-minor'; }
    function getSpecFieldDomain() { return 'octet'; }

}

  
class StartServerPropertiesField extends \amqphp\protocol\PeerPropertiesDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'server-properties'; }
    function getSpecFieldDomain() { return 'peer-properties'; }

}

  
class StartMechanismsField extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'mechanisms'; }
    function getSpecFieldDomain() { return 'longstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class StartLocalesField extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'locales'; }
    function getSpecFieldDomain() { return 'longstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class StartOkClientPropertiesField extends \amqphp\protocol\PeerPropertiesDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'client-properties'; }
    function getSpecFieldDomain() { return 'peer-properties'; }

}

  
class StartOkMechanismField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'mechanism'; }
    function getSpecFieldDomain() { return 'shortstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class StartOkResponseField extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'response'; }
    function getSpecFieldDomain() { return 'longstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class StartOkLocaleField extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'locale'; }
    function getSpecFieldDomain() { return 'shortstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class SecureChallengeField extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'challenge'; }
    function getSpecFieldDomain() { return 'longstr'; }

}

  
class SecureOkResponseField extends \amqphp\protocol\LongstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'response'; }
    function getSpecFieldDomain() { return 'longstr'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }

}

  
class TuneChannelMaxField extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'channel-max'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class TuneFrameMaxField extends \amqphp\protocol\LongDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'frame-max'; }
    function getSpecFieldDomain() { return 'long'; }

}

  
class TuneHeartbeatField extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'heartbeat'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class TuneOkChannelMaxField extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'channel-max'; }
    function getSpecFieldDomain() { return 'short'; }

    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject) && true);
    }

}

  
class TuneOkFrameMaxField extends \amqphp\protocol\LongDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'frame-max'; }
    function getSpecFieldDomain() { return 'long'; }

}

  
class TuneOkHeartbeatField extends \amqphp\protocol\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'heartbeat'; }
    function getSpecFieldDomain() { return 'short'; }

}

  
class OpenVirtualHostField extends \amqphp\protocol\PathDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'virtual-host'; }
    function getSpecFieldDomain() { return 'path'; }

}

  
class OpenReserved1Field extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'shortstr'; }

}

  
class OpenReserved2Field extends \amqphp\protocol\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-2'; }
    function getSpecFieldDomain() { return 'bit'; }

}

  
class OpenOkReserved1Field extends \amqphp\protocol\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField
{
    function getSpecFieldName() { return 'reserved-1'; }
    function getSpecFieldDomain() { return 'shortstr'; }

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

  