<?php
namespace amqphp\protocol;
/** Ampq binding code, generated from doc version 0.9.1 */
use amqphp\wire as wire;

const FRAME_METHOD = "\x01";
const FRAME_HEADER = "\x02";
const FRAME_BODY = "\x03";
const FRAME_HEARTBEAT = "\x08";
const FRAME_MIN_SIZE = "\x10\x00";
const FRAME_END = "\xCE";
const REPLY_SUCCESS = "\xC8";
const CONTENT_TOO_LARGE = "\x01\x37";
const NO_CONSUMERS = "\x01\x39";
const CONNECTION_FORCED = "\x01\x40";
const INVALID_PATH = "\x01\x92";
const ACCESS_REFUSED = "\x01\x93";
const NOT_FOUND = "\x01\x94";
const RESOURCE_LOCKED = "\x01\x95";
const PRECONDITION_FAILED = "\x01\x96";
const FRAME_ERROR = "\x01\xF5";
const SYNTAX_ERROR = "\x01\xF6";
const COMMAND_INVALID = "\x01\xF7";
const CHANNEL_ERROR = "\x01\xF8";
const UNEXPECTED_FRAME = "\x01\xF9";
const RESOURCE_ERROR = "\x01\xFA";
const NOT_ALLOWED = "\x02\x12";
const NOT_IMPLEMENTED = "\x02\x1C";
const INTERNAL_ERROR = "\x02\x1D";
function Konstant($c) {
    static $kz = array(1 => array('value' => '1', 'name' => 'FRAME_METHOD', 'class' => ''), 2 => array('value' => '2', 'name' => 'FRAME_HEADER', 'class' => ''), 3 => array('value' => '3', 'name' => 'FRAME_BODY', 'class' => ''), 8 => array('value' => '8', 'name' => 'FRAME_HEARTBEAT', 'class' => ''), 4096 => array('value' => '4096', 'name' => 'FRAME_MIN_SIZE', 'class' => ''), 206 => array('value' => '206', 'name' => 'FRAME_END', 'class' => ''), 200 => array('value' => '200', 'name' => 'REPLY_SUCCESS', 'class' => ''), 311 => array('value' => '311', 'name' => 'CONTENT_TOO_LARGE', 'class' => 'soft-error'), 313 => array('value' => '313', 'name' => 'NO_CONSUMERS', 'class' => 'soft-error'), 320 => array('value' => '320', 'name' => 'CONNECTION_FORCED', 'class' => 'hard-error'), 402 => array('value' => '402', 'name' => 'INVALID_PATH', 'class' => 'hard-error'), 403 => array('value' => '403', 'name' => 'ACCESS_REFUSED', 'class' => 'soft-error'), 404 => array('value' => '404', 'name' => 'NOT_FOUND', 'class' => 'soft-error'), 405 => array('value' => '405', 'name' => 'RESOURCE_LOCKED', 'class' => 'soft-error'), 406 => array('value' => '406', 'name' => 'PRECONDITION_FAILED', 'class' => 'soft-error'), 501 => array('value' => '501', 'name' => 'FRAME_ERROR', 'class' => 'hard-error'), 502 => array('value' => '502', 'name' => 'SYNTAX_ERROR', 'class' => 'hard-error'), 503 => array('value' => '503', 'name' => 'COMMAND_INVALID', 'class' => 'hard-error'), 504 => array('value' => '504', 'name' => 'CHANNEL_ERROR', 'class' => 'hard-error'), 505 => array('value' => '505', 'name' => 'UNEXPECTED_FRAME', 'class' => 'hard-error'), 506 => array('value' => '506', 'name' => 'RESOURCE_ERROR', 'class' => 'hard-error'), 530 => array('value' => '530', 'name' => 'NOT_ALLOWED', 'class' => 'hard-error'), 540 => array('value' => '540', 'name' => 'NOT_IMPLEMENTED', 'class' => 'hard-error'), 541 => array('value' => '541', 'name' => 'INTERNAL_ERROR', 'class' => 'hard-error'));
    return isset($kz[$c]) ? $kz[$c] : null;
}


class ClassFactory extends \amqphp\protocol\abstrakt\ClassFactory
{
    
    protected static $Cache = array(array(10, 'connection', '\\amqphp\\protocol\\connection\\ConnectionClass'),array(20, 'channel', '\\amqphp\\protocol\\channel\\ChannelClass'),array(40, 'exchange', '\\amqphp\\protocol\\exchange\\ExchangeClass'),array(50, 'queue', '\\amqphp\\protocol\\queue\\QueueClass'),array(60, 'basic', '\\amqphp\\protocol\\basic\\BasicClass'),array(90, 'tx', '\\amqphp\\protocol\\tx\\TxClass'),array(85, 'confirm', '\\amqphp\\protocol\\confirm\\ConfirmClass'));

}


class DomainFactory extends \amqphp\protocol\abstrakt\DomainFactory
{
    
    protected static $Cache = array('class-id' => '\\amqphp\\protocol\\ClassIdDomain', 'consumer-tag' => '\\amqphp\\protocol\\ConsumerTagDomain', 'delivery-tag' => '\\amqphp\\protocol\\DeliveryTagDomain', 'exchange-name' => '\\amqphp\\protocol\\ExchangeNameDomain', 'method-id' => '\\amqphp\\protocol\\MethodIdDomain', 'no-ack' => '\\amqphp\\protocol\\NoAckDomain', 'no-local' => '\\amqphp\\protocol\\NoLocalDomain', 'no-wait' => '\\amqphp\\protocol\\NoWaitDomain', 'path' => '\\amqphp\\protocol\\PathDomain', 'peer-properties' => '\\amqphp\\protocol\\PeerPropertiesDomain', 'queue-name' => '\\amqphp\\protocol\\QueueNameDomain', 'redelivered' => '\\amqphp\\protocol\\RedeliveredDomain', 'message-count' => '\\amqphp\\protocol\\MessageCountDomain', 'reply-code' => '\\amqphp\\protocol\\ReplyCodeDomain', 'reply-text' => '\\amqphp\\protocol\\ReplyTextDomain', 'bit' => '\\amqphp\\protocol\\BitDomain', 'octet' => '\\amqphp\\protocol\\OctetDomain', 'short' => '\\amqphp\\protocol\\ShortDomain', 'long' => '\\amqphp\\protocol\\LongDomain', 'longlong' => '\\amqphp\\protocol\\LonglongDomain', 'shortstr' => '\\amqphp\\protocol\\ShortstrDomain', 'longstr' => '\\amqphp\\protocol\\LongstrDomain', 'timestamp' => '\\amqphp\\protocol\\TimestampDomain', 'table' => '\\amqphp\\protocol\\TableDomain');
}


// Fundamental domains

class BitDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'bit';
    protected $protocolType = 'bit';
}
  
class OctetDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'octet';
    protected $protocolType = 'octet';
}
  
class ShortDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'short';
    protected $protocolType = 'short';
}
  
class LongDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'long';
    protected $protocolType = 'long';
}
  
class LonglongDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'longlong';
    protected $protocolType = 'longlong';
}
  
class ShortstrDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'shortstr';
    protected $protocolType = 'shortstr';
}
  
class LongstrDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'longstr';
    protected $protocolType = 'longstr';
}
  
class TimestampDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'timestamp';
    protected $protocolType = 'timestamp';
}
  
class TableDomain extends \amqphp\protocol\abstrakt\XmlSpecDomain
{
    protected $name = 'table';
    protected $protocolType = 'table';
}
  
// Global domains

class ClassIdDomain extends ShortDomain
{
    protected $name = 'class-id';
    protected $protocolType = 'short';
    
}
  
class ConsumerTagDomain extends ShortstrDomain
{
    protected $name = 'consumer-tag';
    protected $protocolType = 'shortstr';
    
}
  
class DeliveryTagDomain extends LonglongDomain
{
    protected $name = 'delivery-tag';
    protected $protocolType = 'longlong';
    
}
  
class ExchangeNameDomain extends ShortstrDomain
{
    protected $name = 'exchange-name';
    protected $protocolType = 'shortstr';
    
    function validate($subject) {
        return (parent::validate($subject) && strlen($subject) < 127 && preg_match("/^[a-zA-Z0-9-_.:]*$/", $subject));
    }
    
}
  
class MethodIdDomain extends ShortDomain
{
    protected $name = 'method-id';
    protected $protocolType = 'short';
    
}
  
class NoAckDomain extends BitDomain
{
    protected $name = 'no-ack';
    protected $protocolType = 'bit';
    
}
  
class NoLocalDomain extends BitDomain
{
    protected $name = 'no-local';
    protected $protocolType = 'bit';
    
}
  
class NoWaitDomain extends BitDomain
{
    protected $name = 'no-wait';
    protected $protocolType = 'bit';
    
}
  
class PathDomain extends ShortstrDomain
{
    protected $name = 'path';
    protected $protocolType = 'shortstr';
    
    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject) && strlen($subject) < 127);
    }
    
}
  
class PeerPropertiesDomain extends TableDomain
{
    protected $name = 'peer-properties';
    protected $protocolType = 'table';
    
}
  
class QueueNameDomain extends ShortstrDomain
{
    protected $name = 'queue-name';
    protected $protocolType = 'shortstr';
    
    function validate($subject) {
        return (parent::validate($subject) && strlen($subject) < 127 && preg_match("/^[a-zA-Z0-9-_.:]*$/", $subject));
    }
    
}
  
class RedeliveredDomain extends BitDomain
{
    protected $name = 'redelivered';
    protected $protocolType = 'bit';
    
}
  
class MessageCountDomain extends LongDomain
{
    protected $name = 'message-count';
    protected $protocolType = 'long';
    
}
  
class ReplyCodeDomain extends ShortDomain
{
    protected $name = 'reply-code';
    protected $protocolType = 'short';
    
    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }
    
}
  
class ReplyTextDomain extends ShortstrDomain
{
    protected $name = 'reply-text';
    protected $protocolType = 'shortstr';
    
    function validate($subject) {
        return (parent::validate($subject) && ! is_null($subject));
    }
    
}
  
// Include generated sub-namespaces

require 'amqp.0_9_1.connection.php';
require 'amqp.0_9_1.channel.php';
require 'amqp.0_9_1.exchange.php';
require 'amqp.0_9_1.queue.php';
require 'amqp.0_9_1.basic.php';
require 'amqp.0_9_1.tx.php';
require 'amqp.0_9_1.confirm.php';