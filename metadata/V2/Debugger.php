<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace GPBMetadata\Google\Devtools\Clouddebugger\V2;

class Debugger
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae5160a2f676f6f676c652f646576746f6f6c732f636c6f756464656275676765722f76322f64656275676765722e70726f746f1220676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76321a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a2b676f6f676c652f646576746f6f6c732f636c6f756464656275676765722f76322f646174612e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f2294010a14536574427265616b706f696e745265717565737412180a0b64656275676765655f69641801200128094203e0410212450a0a627265616b706f696e7418022001280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e744203e04102121b0a0e636c69656e745f76657273696f6e1804200128094203e0410222590a15536574427265616b706f696e74526573706f6e736512400a0a627265616b706f696e7418012001280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e7422690a14476574427265616b706f696e745265717565737412180a0b64656275676765655f69641801200128094203e04102121a0a0d627265616b706f696e745f69641802200128094203e04102121b0a0e636c69656e745f76657273696f6e1804200128094203e0410222590a15476574427265616b706f696e74526573706f6e736512400a0a627265616b706f696e7418012001280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e74226c0a1744656c657465427265616b706f696e745265717565737412180a0b64656275676765655f69641801200128094203e04102121a0a0d627265616b706f696e745f69641802200128094203e04102121b0a0e636c69656e745f76657273696f6e1803200128094203e0410222f0020a164c697374427265616b706f696e74735265717565737412180a0b64656275676765655f69641801200128094203e0410212190a11696e636c7564655f616c6c5f757365727318022001280812180a10696e636c7564655f696e616374697665180320012808125e0a06616374696f6e18042001280b324e2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374427265616b706f696e7473526571756573742e427265616b706f696e74416374696f6e56616c756512190a0d73747269705f726573756c74731805200128084202180112120a0a776169745f746f6b656e180620012809121b0a0e636c69656e745f76657273696f6e1808200128094203e041021a5b0a15427265616b706f696e74416374696f6e56616c756512420a0576616c756518012001280e32332e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e742e416374696f6e22750a174c697374427265616b706f696e7473526573706f6e736512410a0b627265616b706f696e747318012003280b322c2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e427265616b706f696e7412170a0f6e6578745f776169745f746f6b656e18022001280922630a144c6973744465627567676565735265717565737412140a0770726f6a6563741802200128094203e0410212180a10696e636c7564655f696e616374697665180320012808121b0a0e636c69656e745f76657273696f6e1804200128094203e0410222560a154c697374446562756767656573526573706f6e7365123d0a0964656275676765657318012003280b322a2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e446562756767656532f2090a0944656275676765723212f2010a0d536574427265616b706f696e7412362e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e536574427265616b706f696e74526571756573741a372e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e536574427265616b706f696e74526573706f6e7365227082d3e493024222342f76322f64656275676765722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e74732f7365743a0a627265616b706f696e74da412564656275676765655f69642c627265616b706f696e742c636c69656e745f76657273696f6e12f5010a0d476574427265616b706f696e7412362e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e476574427265616b706f696e74526571756573741a372e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e476574427265616b706f696e74526573706f6e7365227382d3e493024212402f76322f64656275676765722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e74732f7b627265616b706f696e745f69647dda412864656275676765655f69642c627265616b706f696e745f69642c636c69656e745f76657273696f6e12da010a1044656c657465427265616b706f696e7412392e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e44656c657465427265616b706f696e74526571756573741a162e676f6f676c652e70726f746f6275662e456d707479227382d3e49302422a402f76322f64656275676765722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e74732f7b627265616b706f696e745f69647dda412864656275676765655f69642c627265616b706f696e745f69642c636c69656e745f76657273696f6e12dd010a0f4c697374427265616b706f696e747312382e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374427265616b706f696e7473526571756573741a392e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374427265616b706f696e7473526573706f6e7365225582d3e493023212302f76322f64656275676765722f6465627567676565732f7b64656275676765655f69647d2f627265616b706f696e7473da411a64656275676765655f69642c636c69656e745f76657273696f6e12b9010a0d4c69737444656275676765657312362e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374446562756767656573526571756573741a372e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e76322e4c697374446562756767656573526573706f6e7365223782d3e493021812162f76322f64656275676765722f646562756767656573da411670726f6a6563742c636c69656e745f76657273696f6e1a7fca411c636c6f756464656275676765722e676f6f676c65617069732e636f6dd2415d68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75645f646562756767657242bc010a24636f6d2e676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e7632420d446562756767657250726f746f50015a4d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f646576746f6f6c732f636c6f756464656275676765722f76323b636c6f75646465627567676572aa0218476f6f676c652e436c6f75642e44656275676765722e5632ca0218476f6f676c655c436c6f75645c44656275676765725c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

