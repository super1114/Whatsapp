<?php
namespace Libsignal\kdf;

use Libsignal\util\ByteUtil;

class DerivedMessageSecrets{

    const SIZE = 80;
    const CIPHER_KEY_LENGTH = 32;
    const MAC_KEY_LENGTH = 32;
    const IV_LENGTH = 16;

    protected $cipherKey;    // SecretKeySpec
    protected $macKey;    // SecretKeySpec
    protected $iv;    // IvParameterSpec

    public function __construct($okm) // [byte[] okm]
    {
        $keys = ByteUtil::split($okm, self::CIPHER_KEY_LENGTH, self::MAC_KEY_LENGTH, self::IV_LENGTH);
        $this->cipherKey = $keys[0]; //AES
        $this->macKey = $keys[1]; //sha256
        $this->iv = $keys[2];
    }

    public function getCipherKey()
    {
        return $this->cipherKey;
    }

    public function getMacKey()
    {
        return $this->macKey;
    }

    public function getIv()
    {
        return $this->iv;
    }

}