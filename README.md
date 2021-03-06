# libsignal-php

This is a php port of [libsignal-protocol-java](https://github.com/WhisperSystems/libaxolotl-android) originally written by [Moxie Marlinspike](https://github.com/moxie0)

Overview from original author's:

 > This is a ratcheting forward secrecy protocol that works in synchronous and asynchronous messaging environments. The protocol overview is available [here](https://github.com/trevp/axolotl/wiki), and the details of the wire format are available [here](https://github.com/trevp/axolotl/wiki).
 
Read rest of of details [here](https://github.com/signalapp/libsignal-protocol-java/blob/master/README.md).

# Overview

This is a ratcheting forward secrecy protocol that works in synchronous and asynchronous messaging 
environments.  The protocol overview is available [here](https://github.com/trevp/axolotl/wiki),
and the details of the wire format are available [here](https://github.com/WhisperSystems/TextSecure/wiki/ProtocolV2).

## PreKeys

This protocol uses a concept called 'PreKeys'.  A PreKey is an ECPublicKey and an associated unique 
ID which are stored together by a server.  PreKeys can also be signed.

At install time, clients generate a single signed PreKey, as well as a large list of unsigned
PreKeys, and transmit all of them to the server.

## Sessions

The axolotl protocol is session-oriented.  Clients establish a "session," which is then used for
all subsequent encrypt/decrypt operations.  There is no need to ever tear down a session once one
has been established.

Sessions are established in one of three ways:

1. PreKeyBundles. A client that wishes to send a message to a recipient can establish a session by
   retrieving a PreKeyBundle for that recipient from the server.
1. PreKeyWhisperMessages.  A client can receive a PreKeyWhisperMessage from a recipient and use it
   to establish a session.
1. KeyExchangeMessages.  Two clients can exchange KeyExchange messages to establish a session.

## State

An established session encapsulates a lot of state between two clients.  That state is maintained
in durable records which need to be kept for the life of the session.

State is kept in the following places:

1. Identity State.  Clients will need to maintain the state of their own identity key pair, as well
   as identity keys received from other clients.
1. PreKey State. Clients will need to maintain the state of their generated PreKeys.
1. Signed PreKey States. Clients will need to maintain the state of their signed PreKeys.
1. Session State.  Clients will need to maintain the state of the sessions they have established.


## Install time

At install time, a libaxolotl client needs to generate its identity keys, registration id, and
prekeys.
```php
    $axolotl = new KeyHelper();
    $identityKeyPair = $axolotl->generateIdentityKeyPair();
    $registrationId  = $axolotl->generateRegistrationId();
    $preKeys         = $axolotl->generatePreKeys(startId, 100);
    $lastResortKey   = $axolotl->generateLastResortKey();
    $signedPreKey    = $axolotl->generateSignedPreKey(identityKeyPair, 5);

    // Store $identityKeyPair somewhere durable and safe.
    // Store $registrationId somewhere durable and safe.

    // Store preKeys in PreKeyStore.
    // Store signed prekey in SignedPreKeyStore.
```

## Building a session

A libaxolotl client needs to implement four interfaces: IdentityKeyStore, PreKeyStore, 
SignedPreKeyStore, and SessionStore.  These will manage loading and storing of identity, 
prekeys, signed prekeys, and session state.

Once those are implemented, building a session is fairly straightforward:
```php
    $sessionStore      = new MySessionStore();
    $preKeyStore       = new MyPreKeyStore();
    $signedPreKeyStore = new MySignedPreKeyStore();
    $identityStore     = new MyIdentityKeyStore();

    // Instantiate a SessionBuilder for a remote recipientId + deviceId tuple.
    $sessionBuilder = new SessionBuilder($sessionStore, $preKeyStore, $signedPreKeyStore,
                                                       $identityStore, $recipientId, $deviceId);

    // Build a session with a PreKey retrieved from the server.
    $sessionBuilder->process($retrievedPreKey);

    $essionCipher = new SessionCipher($sessionStore, $recipientId, $deviceId);
    $message      = $sessionCipher->encrypt("Hello world!");
```

# Legal things
## Cryptography Notice

This distribution includes cryptographic software. The country in which you currently reside may have restrictions on the import, possession, use, and/or re-export to another country, of encryption software.
BEFORE using any encryption software, please check your country's laws, regulations and policies concerning the import, possession, or use, and re-export of encryption software, to see if this is permitted.
See <http://www.wassenaar.org/> for more information.

The U.S. Government Department of Commerce, Bureau of Industry and Security (BIS), has classified this software as Export Commodity Control Number (ECCN) 5D002.C.1, which includes information security software using or performing cryptographic functions with asymmetric algorithms.
The form and manner of this distribution makes it eligible for export under the License Exception ENC Technology Software Unrestricted (TSU) exception (see the BIS Export Administration Regulations, Section 740.13) for both object code and source code.

