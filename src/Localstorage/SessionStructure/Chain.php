<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: LocalStorageProtocol.proto

namespace Localstorage\SessionStructure;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>localstorage.SessionStructure.Chain</code>
 */
class Chain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKey = 1;</code>
     */
    protected $senderRatchetKey = null;
    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKeyPrivate = 2;</code>
     */
    protected $senderRatchetKeyPrivate = null;
    /**
     * Generated from protobuf field <code>optional .localstorage.SessionStructure.Chain.ChainKey chainKey = 3;</code>
     */
    protected $chainKey = null;
    /**
     * Generated from protobuf field <code>repeated .localstorage.SessionStructure.Chain.MessageKey messageKeys = 4;</code>
     */
    private $messageKeys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $senderRatchetKey
     *     @type string $senderRatchetKeyPrivate
     *     @type \Localstorage\SessionStructure\Chain\ChainKey $chainKey
     *     @type \Localstorage\SessionStructure\Chain\MessageKey[]|\Google\Protobuf\Internal\RepeatedField $messageKeys
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LocalStorageProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKey = 1;</code>
     * @return string
     */
    public function getSenderRatchetKey()
    {
        return isset($this->senderRatchetKey) ? $this->senderRatchetKey : '';
    }

    public function hasSenderRatchetKey()
    {
        return isset($this->senderRatchetKey);
    }

    public function clearSenderRatchetKey()
    {
        unset($this->senderRatchetKey);
    }

    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderRatchetKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->senderRatchetKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKeyPrivate = 2;</code>
     * @return string
     */
    public function getSenderRatchetKeyPrivate()
    {
        return isset($this->senderRatchetKeyPrivate) ? $this->senderRatchetKeyPrivate : '';
    }

    public function hasSenderRatchetKeyPrivate()
    {
        return isset($this->senderRatchetKeyPrivate);
    }

    public function clearSenderRatchetKeyPrivate()
    {
        unset($this->senderRatchetKeyPrivate);
    }

    /**
     * Generated from protobuf field <code>optional bytes senderRatchetKeyPrivate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderRatchetKeyPrivate($var)
    {
        GPBUtil::checkString($var, False);
        $this->senderRatchetKeyPrivate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .localstorage.SessionStructure.Chain.ChainKey chainKey = 3;</code>
     * @return \Localstorage\SessionStructure\Chain\ChainKey|null
     */
    public function getChainKey()
    {
        return isset($this->chainKey) ? $this->chainKey : null;
    }

    public function hasChainKey()
    {
        return isset($this->chainKey);
    }

    public function clearChainKey()
    {
        unset($this->chainKey);
    }

    /**
     * Generated from protobuf field <code>optional .localstorage.SessionStructure.Chain.ChainKey chainKey = 3;</code>
     * @param \Localstorage\SessionStructure\Chain\ChainKey $var
     * @return $this
     */
    public function setChainKey($var)
    {
        GPBUtil::checkMessage($var, \Localstorage\SessionStructure\Chain\ChainKey::class);
        $this->chainKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .localstorage.SessionStructure.Chain.MessageKey messageKeys = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageKeys()
    {
        return $this->messageKeys;
    }

    /**
     * Generated from protobuf field <code>repeated .localstorage.SessionStructure.Chain.MessageKey messageKeys = 4;</code>
     * @param \Localstorage\SessionStructure\Chain\MessageKey[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Localstorage\SessionStructure\Chain\MessageKey::class);
        $this->messageKeys = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Chain::class, \Localstorage\SessionStructure_Chain::class);

