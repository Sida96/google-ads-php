<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/keyword_plan_campaign_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V4\Services;

class KeywordPlanCampaignService
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
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad1030a38676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f6b6579776f72645f706c616e5f6e6574776f726b2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73227f0a164b6579776f7264506c616e4e6574776f726b456e756d22650a124b6579776f7264506c616e4e6574776f726b120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112110a0d474f4f474c455f5345415243481002121e0a1a474f4f474c455f5345415243485f414e445f504152544e455253100342ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d7342174b6579776f7264506c616e4e6574776f726b50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330ada0a0a3d676f6f676c652f6164732f676f6f676c656164732f76342f7265736f75726365732f6b6579776f72645f706c616e5f63616d706169676e2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22e6050a134b6579776f7264506c616e43616d706169676e124b0a0d7265736f757263655f6e616d651801200128094234e04105fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e43616d706169676e125d0a0c6b6579776f72645f706c616e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654229fa41260a24676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e122c0a02696418032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103122a0a046e616d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512680a126c616e67756167655f636f6e7374616e747318052003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422efa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f4c616e6775616765436f6e7374616e7412660a146b6579776f72645f706c616e5f6e6574776f726b18062001280e32482e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e4b6579776f7264506c616e4e6574776f726b456e756d2e4b6579776f7264506c616e4e6574776f726b12330a0e6370635f6269645f6d6963726f7318072001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565124c0a0b67656f5f7461726765747318082003280b32372e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365732e4b6579776f7264506c616e47656f5461726765743a74ea41710a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e43616d706169676e1241637573746f6d6572732f7b637573746f6d65727d2f6b6579776f7264506c616e43616d706169676e732f7b6b6579776f72645f706c616e5f63616d706169676e7d2282010a144b6579776f7264506c616e47656f546172676574126a0a1367656f5f7461726765745f636f6e7374616e7418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565422ffa412c0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f47656f546172676574436f6e7374616e744285020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f757263657342184b6579776f7264506c616e43616d706169676e50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56342e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56345c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a5265736f7572636573620670726f746f330af40e0a44676f6f676c652f6164732f676f6f676c656164732f76342f73657276696365732f6b6579776f72645f706c616e5f63616d706169676e5f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f226c0a1d4765744b6579776f7264506c616e43616d706169676e52657175657374124b0a0d7265736f757263655f6e616d651801200128094234e04102fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f4b6579776f7264506c616e43616d706169676e22c6010a214d75746174654b6579776f7264506c616e43616d706169676e735265717565737412180a0b637573746f6d65725f69641801200128094203e0410212570a0a6f7065726174696f6e7318022003280b323e2e676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365732e4b6579776f7264506c616e43616d706169676e4f7065726174696f6e4203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c791804200128082282020a1c4b6579776f7264506c616e43616d706169676e4f7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12480a0663726561746518012001280b32362e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365732e4b6579776f7264506c616e43616d706169676e480012480a0675706461746518022001280b32362e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365732e4b6579776f7264506c616e43616d706169676e480012100a0672656d6f76651803200128094800420b0a096f7065726174696f6e22ab010a224d75746174654b6579776f7264506c616e43616d706169676e73526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c652e7270632e53746174757312520a07726573756c747318022003280b32412e676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365732e4d75746174654b6579776f7264506c616e43616d706169676e526573756c7422380a1f4d75746174654b6579776f7264506c616e43616d706169676e526573756c7412150a0d7265736f757263655f6e616d6518012001280932a6040a1a4b6579776f7264506c616e43616d706169676e5365727669636512e1010a164765744b6579776f7264506c616e43616d706169676e123f2e676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365732e4765744b6579776f7264506c616e43616d706169676e526571756573741a362e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365732e4b6579776f7264506c616e43616d706169676e224e82d3e493023812362f76342f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f6b6579776f7264506c616e43616d706169676e732f2a7dda410d7265736f757263655f6e616d651286020a1a4d75746174654b6579776f7264506c616e43616d706169676e7312432e676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365732e4d75746174654b6579776f7264506c616e43616d706169676e73526571756573741a442e676f6f676c652e6164732e676f6f676c656164732e76342e73657276696365732e4d75746174654b6579776f7264506c616e43616d706169676e73526573706f6e7365225d82d3e493023e22392f76342f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f6b6579776f7264506c616e43616d706169676e733a6d75746174653a012ada4116637573746f6d65725f69642c6f7065726174696f6e731a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4286020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e7365727669636573421f4b6579776f7264506c616e43616d706169676e5365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56342e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56345c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

