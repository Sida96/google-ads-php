<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/conversion_action.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Resources;

class ConversionAction
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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2030a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f747261636b696e675f636f64655f706167655f666f726d61742e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322670a1a547261636b696e67436f646550616765466f726d6174456e756d22490a16547261636b696e67436f646550616765466f726d6174120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112080a0448544d4c100212070a03414d50100342f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421b547261636b696e67436f646550616765466f726d617450726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a8c060a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f63617465676f72792e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322ad030a1c436f6e76657273696f6e416374696f6e43617465676f7279456e756d228c030a18436f6e76657273696f6e416374696f6e43617465676f7279120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0744454641554c541002120d0a09504147455f564945571003120c0a0850555243484153451004120a0a065349474e5550100512080a044c4541441006120c0a08444f574e4c4f41441007120f0a0b4144445f544f5f43415254100812120a0e424547494e5f434845434b4f5554100912120a0e5355425343524942455f50414944100a12130a0f50484f4e455f43414c4c5f4c454144100b12110a0d494d504f525445445f4c454144100c12140a105355424d49545f4c4541445f464f524d100d12140a10424f4f4b5f4150504f494e544d454e54100e12110a0d524551554553545f51554f5445100f12120a0e4745545f444952454354494f4e53101012120a0e4f5554424f554e445f434c49434b1011120b0a07434f4e544143541012120e0a0a454e474147454d454e541013120f0a0b53544f52455f56495349541014120e0a0a53544f52455f53414c45101542f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421d436f6e76657273696f6e416374696f6e43617465676f727950726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ade030a36676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f747261636b696e675f636f64655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73228f010a14547261636b696e67436f646554797065456e756d22770a10547261636b696e67436f646554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0757454250414745100212130a0f574542504147455f4f4e434c49434b100312110a0d434c49434b5f544f5f43414c4c100412100a0c574542534954455f43414c4c100542ea010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734215547261636b696e67436f64655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af3050a30676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f7461675f736e69707065742e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a36676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f747261636b696e675f636f64655f747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b3020a0a546167536e697070657412520a047479706518012001280e32442e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e547261636b696e67436f646554797065456e756d2e547261636b696e67436f64655479706512650a0b706167655f666f726d617418022001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e547261636b696e67436f646550616765466f726d6174456e756d2e547261636b696e67436f646550616765466f726d617412350a0f676c6f62616c5f736974655f74616718032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d6576656e745f736e697070657418042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542ea010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e420f546167536e697070657450726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f330aef030a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f636f756e74696e675f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732287010a20436f6e76657273696f6e416374696f6e436f756e74696e6754797065456e756d22630a1c436f6e76657273696f6e416374696f6e436f756e74696e6754797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112110a0d4f4e455f5045525f434c49434b100212120a0e4d414e595f5045525f434c49434b100342f6010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734221436f6e76657273696f6e416374696f6e436f756e74696e675479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a94050a35676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6174747269627574696f6e5f6d6f64656c2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322c6020a144174747269627574696f6e4d6f64656c456e756d22ad020a104174747269627574696f6e4d6f64656c120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a0845585445524e414c106412190a15474f4f474c455f4144535f4c4153545f434c49434b106512290a25474f4f474c455f5345415243485f4154545249425554494f4e5f46495253545f434c49434b106612240a20474f4f474c455f5345415243485f4154545249425554494f4e5f4c494e454152106712280a24474f4f474c455f5345415243485f4154545249425554494f4e5f54494d455f44454341591068122c0a28474f4f474c455f5345415243485f4154545249425554494f4e5f504f534954494f4e5f4241534544106912290a25474f4f474c455f5345415243485f4154545249425554494f4e5f444154415f44524956454e106a42ea010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7342154174747269627574696f6e4d6f64656c50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ad4030a3c676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73227a0a1a436f6e76657273696f6e416374696f6e537461747573456e756d225c0a16436f6e76657273696f6e416374696f6e537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f5645441003120a0a0648494444454e100442f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421b436f6e76657273696f6e416374696f6e53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ac7040a3a676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322f0010a18436f6e76657273696f6e416374696f6e54797065456e756d22d3010a14436f6e76657273696f6e416374696f6e54797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0741445f43414c4c100212110a0d434c49434b5f544f5f43414c4c100312180a14474f4f474c455f504c41595f444f574e4c4f41441004121f0a1b474f4f474c455f504c41595f494e5f4150505f5055524348415345100512100a0c55504c4f41445f43414c4c53100612110a0d55504c4f41445f434c49434b531007120b0a0757454250414745100812100a0c574542534954455f43414c4c100942ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734219436f6e76657273696f6e416374696f6e5479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ae8030a3c676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646174615f64726976656e5f6d6f64656c5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73228e010a194461746144726976656e4d6f64656c537461747573456e756d22710a154461746144726976656e4d6f64656c537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120d0a09415641494c41424c45100212090a055354414c451003120b0a0745585049524544100412130a0f4e455645525f47454e455241544544100542ef010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421a4461746144726976656e4d6f64656c53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ae8140a39676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f636f6e76657273696f6e5f616374696f6e2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a35676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6174747269627574696f6e5f6d6f64656c2e70726f746f1a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f63617465676f72792e70726f746f1a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f636f756e74696e675f747970652e70726f746f1a3c676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f7374617475732e70726f746f1a3a676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f616374696f6e5f747970652e70726f746f1a3c676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646174615f64726976656e5f6d6f64656c5f7374617475732e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f228c0e0a10436f6e76657273696f6e416374696f6e12480a0d7265736f757263655f6e616d651801200128094231e04105fa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6e76657273696f6e416374696f6e122c0a02696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103122a0a046e616d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512600a0673746174757318042001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e416374696f6e537461747573456e756d2e436f6e76657273696f6e416374696f6e537461747573125f0a047479706518052001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e416374696f6e54797065456e756d2e436f6e76657273696f6e416374696f6e547970654203e0410512660a0863617465676f727918062001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e416374696f6e43617465676f7279456e756d2e436f6e76657273696f6e416374696f6e43617465676f727912390a0e6f776e65725f637573746f6d657218072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312410a1d696e636c7564655f696e5f636f6e76657273696f6e735f6d657472696318082001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512470a22636c69636b5f7468726f7567685f6c6f6f6b6261636b5f77696e646f775f6461797318092001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512460a21766965775f7468726f7567685f6c6f6f6b6261636b5f77696e646f775f64617973180a2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512590a0e76616c75655f73657474696e6773180b2001280b32412e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e436f6e76657273696f6e416374696f6e2e56616c756553657474696e677312730a0d636f756e74696e675f74797065180c2001280e325c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e416374696f6e436f756e74696e6754797065456e756d2e436f6e76657273696f6e416374696f6e436f756e74696e675479706512700a1a6174747269627574696f6e5f6d6f64656c5f73657474696e6773180d2001280b324c2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e436f6e76657273696f6e416374696f6e2e4174747269627574696f6e4d6f64656c53657474696e677312450a0c7461675f736e697070657473180e2003280b322a2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e546167536e69707065744203e0410312400a1b70686f6e655f63616c6c5f6475726174696f6e5f7365636f6e6473180f2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122c0a066170705f696418102001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651af2010a184174747269627574696f6e4d6f64656c53657474696e6773125f0a116174747269627574696f6e5f6d6f64656c18012001280e32442e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4174747269627574696f6e4d6f64656c456e756d2e4174747269627574696f6e4d6f64656c12750a18646174615f64726976656e5f6d6f64656c5f73746174757318022001280e324e2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4461746144726976656e4d6f64656c537461747573456e756d2e4461746144726976656e4d6f64656c5374617475734203e041031abf010a0d56616c756553657474696e677312330a0d64656661756c745f76616c756518012001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565123b0a1564656661756c745f63757272656e63795f636f646518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123c0a18616c776179735f7573655f64656661756c745f76616c756518032001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75653a6aea41670a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6e76657273696f6e416374696f6e123a637573746f6d6572732f7b637573746f6d65727d2f636f6e76657273696f6e416374696f6e732f7b636f6e76657273696f6e5f616374696f6e7d4282020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365734215436f6e76657273696f6e416374696f6e50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

