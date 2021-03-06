<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: LocalStorageProtocol.proto

namespace Localstorage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>localstorage.SenderKeyRecordStructure</code>
 */
class SenderKeyRecordStructure extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .localstorage.SenderKeyStateStructure senderKeyStates = 1;</code>
     */
    private $senderKeyStates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Localstorage\SenderKeyStateStructure[]|\Google\Protobuf\Internal\RepeatedField $senderKeyStates
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LocalStorageProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .localstorage.SenderKeyStateStructure senderKeyStates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSenderKeyStates()
    {
        return $this->senderKeyStates;
    }

    /**
     * Generated from protobuf field <code>repeated .localstorage.SenderKeyStateStructure senderKeyStates = 1;</code>
     * @param \Localstorage\SenderKeyStateStructure[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSenderKeyStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Localstorage\SenderKeyStateStructure::class);
        $this->senderKeyStates = $arr;

        return $this;
    }

}

