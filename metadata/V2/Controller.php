<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/controller.proto

namespace GPBMetadata\Google\Devtools\Clouddebugger\V2;

class Controller
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abe0e0a31676f6f676c652f646576746f6f6c732f636c6f756464656275676765722f76322f636f6e74726f6c6c65722e70726f746f1220676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76321a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a2b676f6f676c652f646576746f6f6c732f636c6f756464656275676765722f76322f646174612e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f225c0a17526567697374657244656275676765655265717565737412410a08646562756767656518012001280b322a2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e44656275676765654203e0410222580a1852656769737465724465627567676565526573706f6e7365123c0a08646562756767656518012001280b322a2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e446562756767656522680a1c4c697374416374697665427265616b706f696e74735265717565737412180a0b64656275676765655f69641801200128094203e0410212120a0a776169745f746f6b656e180220012809121a0a12737563636573735f6f6e5f74696d656f75741803200128082291010a1d4c697374416374697665427265616b706f696e7473526573706f6e736512410a0b627265616b706f696e747318012003280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e7412170a0f6e6578745f776169745f746f6b656e18022001280912140a0c776169745f657870697265641803200128082280010a1d557064617465416374697665427265616b706f696e745265717565737412180a0b64656275676765655f69641801200128094203e0410212450a0a627265616b706f696e7418022001280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e744203e0410222200a1e557064617465416374697665427265616b706f696e74526573706f6e736532be060a0b436f6e74726f6c6c65723212c2010a105265676973746572446562756767656512392e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e52656769737465724465627567676565526571756573741a3a2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e52656769737465724465627567676565526573706f6e7365223782d3e493022622212f76322f636f6e74726f6c6c65722f6465627567676565732f72656769737465723a012ada4108646562756767656512e2010a154c697374416374697665427265616b706f696e7473123e2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374416374697665427265616b706f696e7473526571756573741a3f2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374416374697665427265616b706f696e7473526573706f6e7365224882d3e493023412322f76322f636f6e74726f6c6c65722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e7473da410b64656275676765655f69641283020a16557064617465416374697665427265616b706f696e74123f2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e557064617465416374697665427265616b706f696e74526571756573741a402e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e557064617465416374697665427265616b706f696e74526573706f6e7365226682d3e49302471a422f76322f636f6e74726f6c6c65722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e74732f7b627265616b706f696e742e69647d3a012ada411664656275676765655f69642c627265616b706f696e741a7fca411c636c6f756464656275676765722e676f6f676c65617069732e636f6dd2415d68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75645f646562756767657242be010a24636f6d2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e7632420f436f6e74726f6c6c657250726f746f50015a4d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f646576746f6f6c732f636c6f756464656275676765722f76323b636c6f75646465627567676572aa0218476f6f676c652e436c6f75642e44656275676765722e5632ca0218476f6f676c655c436c6f75645c44656275676765725c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

