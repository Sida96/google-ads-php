<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/customer_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Services;

class CustomerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa5030a2f676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f6163636573735f726f6c652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d7322640a0e416363657373526f6c65456e756d22520a0a416363657373526f6c65120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112090a0541444d494e1002120c0a085354414e444152441003120d0a09524541445f4f4e4c59100442e4010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73420f416363657373526f6c6550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330ae4050a5a676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f637573746f6d65725f7061795f7065725f636f6e76657273696f6e5f656c69676962696c6974795f6661696c7572655f726561736f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d7322d1020a34437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e456e756d2298020a30437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001121a0a164e4f545f454e4f5547485f434f4e56455253494f4e531002121b0a17434f4e56455253494f4e5f4c41475f544f4f5f48494748100312230a1f4841535f43414d504149474e5f574954485f5348415245445f425544474554100412200a1c4841535f55504c4f41445f434c49434b535f434f4e56455253494f4e100512200a1c415645524147455f4441494c595f5350454e445f544f4f5f48494748100612190a15414e414c595349535f4e4f545f434f4d504c455445100712090a054f544845521008428a020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d734235437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330afe100a30676f6f676c652f6164732f676f6f676c656164732f76322f7265736f75726365732f637573746f6d65722e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f2294090a08437573746f6d657212400a0d7265736f757263655f6e616d651801200128094229e04105fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d6572122c0a02696418032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410312360a1064657363726970746976655f6e616d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512380a0d63757272656e63795f636f646518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410512340a0974696d655f7a6f6e6518062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e04105123b0a15747261636b696e675f75726c5f74656d706c61746518072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512360a1066696e616c5f75726c5f737566666978180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512380a146175746f5f74616767696e675f656e61626c656418082001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565123b0a126861735f706172746e6572735f626164676518092001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e0410312300a076d616e61676572180c2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e0410312350a0c746573745f6163636f756e74180d2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e0410312570a1663616c6c5f7265706f7274696e675f73657474696e67180a2001280b32372e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e43616c6c5265706f7274696e6753657474696e6712660a1b636f6e76657273696f6e5f747261636b696e675f73657474696e67180e2001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e436f6e76657273696f6e547261636b696e6753657474696e674203e0410312570a1372656d61726b6574696e675f73657474696e67180f2001280b32352e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e52656d61726b6574696e6753657474696e674203e0410312c2010a2e7061795f7065725f636f6e76657273696f6e5f656c69676962696c6974795f6661696c7572655f726561736f6e7318102003280e3284012e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e456e756d2e437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e4203e041033a3cea41390a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65721214637573746f6d6572732f7b637573746f6d65727d2287020a1443616c6c5265706f7274696e6753657474696e67123a0a1663616c6c5f7265706f7274696e675f656e61626c656418012001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512450a2163616c6c5f636f6e76657273696f6e5f7265706f7274696e675f656e61626c656418022001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565126c0a1663616c6c5f636f6e76657273696f6e5f616374696f6e18092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422efa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6e76657273696f6e416374696f6e22ad010a19436f6e76657273696f6e547261636b696e6753657474696e6712400a16636f6e76657273696f6e5f747261636b696e675f696418012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103124e0a2463726f73735f6163636f756e745f636f6e76657273696f6e5f747261636b696e675f696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410322570a1252656d61726b6574696e6753657474696e6712410a16676f6f676c655f676c6f62616c5f736974655f74616718012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410342fa010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f7572636573420d437573746f6d657250726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56322e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56325c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a5265736f7572636573620670726f746f330adb120a37676f6f676c652f6164732f676f6f676c656164732f76322f73657276696365732f637573746f6d65725f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365731a30676f6f676c652f6164732f676f6f676c656164732f76322f7265736f75726365732f637573746f6d65722e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f22560a12476574437573746f6d65725265717565737412400a0d7265736f757263655f6e616d651801200128094229e04102fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65722295010a154d7574617465437573746f6d65725265717565737412180a0b637573746f6d65725f69641801200128094203e04102124b0a096f7065726174696f6e18042001280b32332e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e437573746f6d65724f7065726174696f6e4203e0410212150a0d76616c69646174655f6f6e6c791805200128082286020a1b437265617465437573746f6d6572436c69656e745265717565737412180a0b637573746f6d65725f69641801200128094203e0410212490a0f637573746f6d65725f636c69656e7418022001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e437573746f6d65724203e0410212330a0d656d61696c5f6164647265737318032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565124d0a0b6163636573735f726f6c6518042001280e32382e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e416363657373526f6c65456e756d2e416363657373526f6c652281010a11437573746f6d65724f7065726174696f6e123b0a0675706461746518012001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e437573746f6d6572122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22350a1c437265617465437573746f6d6572436c69656e74526573706f6e736512150a0d7265736f757263655f6e616d6518022001280922600a164d7574617465437573746f6d6572526573706f6e736512460a06726573756c7418022001280b32362e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e4d7574617465437573746f6d6572526573756c74222d0a144d7574617465437573746f6d6572526573756c7412150a0d7265736f757263655f6e616d6518012001280922200a1e4c69737441636365737369626c65437573746f6d6572735265717565737422390a1f4c69737441636365737369626c65437573746f6d657273526573706f6e736512160a0e7265736f757263655f6e616d657318012003280932ee060a0f437573746f6d65725365727669636512a9010a0b476574437573746f6d657212342e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e476574437573746f6d6572526571756573741a2b2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e437573746f6d6572223782d3e4930221121f2f76322f7b7265736f757263655f6e616d653d637573746f6d6572732f2a7dda410d7265736f757263655f6e616d6512cc010a0e4d7574617465437573746f6d657212372e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e4d7574617465437573746f6d6572526571756573741a382e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e4d7574617465437573746f6d6572526573706f6e7365224782d3e493022922242f76322f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a6d75746174653a012ada4115637573746f6d65725f69642c6f7065726174696f6e12cd010a174c69737441636365737369626c65437573746f6d65727312402e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e4c69737441636365737369626c65437573746f6d657273526571756573741a412e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e4c69737441636365737369626c65437573746f6d657273526573706f6e7365222d82d3e493022712252f76322f637573746f6d6572733a6c69737441636365737369626c65437573746f6d65727312f2010a14437265617465437573746f6d6572436c69656e74123d2e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e437265617465437573746f6d6572436c69656e74526571756573741a3e2e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365732e437265617465437573746f6d6572436c69656e74526573706f6e7365225b82d3e493023722322f76322f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a637265617465437573746f6d6572436c69656e743a012ada411b637573746f6d65725f69642c637573746f6d65725f636c69656e741a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d42fb010a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e73657276696365734214437573746f6d65725365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56322e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56325c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

