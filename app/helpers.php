<?php

use App\Item;

function getImage($img_id)
{
    $encode_image = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'Image')->where('_id',$img_id)->first();
    if($encode_image){
        $type = $encode_image->mimType;
        $img = 'data:' . $type . ';base64,' . base64_encode($encode_image->img_data);
        return $img;
    }
   
   
}
function getMostpupular(){
    $data = array(
        [
        "id"=>1,
        "name" => "Aranya,Jaldapara",
        "img" => "a.jpg",
        "vdo" => "ARANYA.mp4",
        'book'=>"https://wbtdcl.wbtourismgov.in/property-details/9c60e3dae5c0ef6f56f0ffdfc6e3934d8b01ad196fc95db4da0049adba042fabb840fe4cdcb11f20db9db3d92605aeaedada0beeae6c16b02b4c35f559b974daKZXiqtU24RtJ54nes3OFH9Akse8swKMG8SnHk%2B4t0gQ%3D"
        ],
        [
            "id"=>2,
            "name" => "Bhorer Alo,Gajoldoba",
            "img" => "b.jpg",
            "vdo" => "BHORER ALO.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/a76387408cafdcaaed827d7f6e50d39cf93b607d41e1f2e7ecd19b353f495921b652bff345fe9fadf805a7579a5afd5788130bc90f843d41348128da80518e072cqjZeV3HrFbAiKnAuxjd6sMD1srcGRXLql57BBXfVA%3D"
        ],
        [
            "id"=>3,
            "name" => "Jhargram,Jhargram",
            "img" => "j.jpg",
            "vdo" => "JHARGRAM .mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/2ac4e56a9223fdb51dede61eef530e38c81a6e601939bb14d3851dd40a2f3227b9524eb32e29ea7e7b9d7743c1ce933749d8db6956ae50ea0f6a59a4ae040372DtYpA2kHJzBTg7Y3dyZesCZ118bcGP%2B%2Bh3oZszLLoBA%3D"
        ],
        [
            "id"=>4,
            "name" => "Morgan,Kalimpong",
            "img" => "morr.jpg",
            "vdo" => "MORGAN.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/0c6f4fc20611c7d2aae0c23cabb6588f6590d6ea708d033016644d5a6ccd0f0e5de842e544ce39017fa8c2def655b25c4d99c1fa191ac23df77b576e7b6dae2dUN65roBebfXCxmJyAwt9uViPpebUv50u0z7IjlpNzns%3D"
        ],
        [
            "id"=>5,
            "name" => "Motijhil,Mursidabad",
            "img" => "Moti.jpg",
            "vdo" => "Motijhil_Murshidabad.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/0cb3197b562d2fe2830acaadc33f7fdad811dafc2059585d0b310f75bb38fcada3a450d408e05fffbfe54b8036937eb396116ac9b917e13f04e10a6338a0e50cENb62KtXyCRvzkjXXBv4QWdPDMeEAo12RWrkJztUlSE%3D"
        ],
        [
            "id"=>6,
            "name" => "Meghbalika,Darjeeling",
            "img" => "megh.jpg",
            "vdo" =>"Meghbalika Edit Preview.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/home#viewdiv"
        ],
        [
            "id"=>7,
            "name" => "Muktadhara,MAITHON",
            "img" => "muktadhara.jpg",
            "vdo" => "Muktadhara.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/31430baf97b449a6abbef537632dad0f6d7057cc1d9917edc308e4b8e0529acd200b35d7ed1cb3fa21676fc668a308b663bd5970c35b8d8314ab585794eccb1bV4jM36Tdcp1FzNiW46Tscvr5EpeHcwkfzwfEMa0mpFY%3D"
        ],
        [
            "id"=>8,
            "name" => "Rangabitan,BOLPUR",
            "img" => "r.jpg",
            "vdo" => "Rangabitan.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/e349caf44b6c744c08b51149cd83ed21eb5f3d3bfe874916f1db1b1b87eda148ce43759e047782c5a0c941caba2a8027482bf82000a3a36086f9d80ce7c4ac3bui0Sl9ZqFh9%2FdA35tOPr%2BMdad3EjI67d%2B7YRCZtWJBc%3D"
        ],
        [
            "id"=>9,
            "name" => "Murti Revised,MURTI",
            "img" => "Murti.jpg",
            "vdo" => "MURTI REVISED.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/3357b300f43df409a74b136e129d46e80485d2d14ce0f5bee13ec1442b964e068f92d36244c06c0d00afdee970e812d19c87e07cbc51c198a91a1a00d23532818Xq2bNE2fycDIO7Z0z%2BWxsGYjNmingosl8DXWq3P9vQ%3D"
        ],
        [
            "id"=>10,
            "name" => "Bishnupur,Bankura",
            "img" => "bishnupur.jpg",
            "vdo" => "BISHNUPUR .mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/e994aa0d10af3673194878af145ebdbea691677de2e060a6aa8e26f0bdd96f0ff5ec4ee28df8f156dfe48fc79a8de56615ba20f50c429a3a11ec21ded3c01eb13yR%2BGeijawudeKOj59O9q4cjRCIiIHSgs%2B66m13P21o%3D"
        ],
        [
            "id"=>11,
            "name" => "Tilottama,Gorumara",
            "img" => "til.jpg",
            "vdo" => "TILOTTAMA.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/991791084392a617f09379c56e81b6440bc2953297cf386daaac4101a720d03bd12f60fa90bc77398eacd78e2f86fbe6720b03c7c98a28a0c1ad97af2ad987f3il%2F8zb08Cxv3Y8EG%2FjlF6xq%2FBbjLj7IMiIQ6fAWDE7M%3D"
        ],
        [
            "id"=>12,
            "name" => "Shantobitan,Bolpur",
            "img" => "shanto.jpg",
            "vdo" => "Shantobitan Final_Mobile_.mp4",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/a0ac54cb0ee7ab541339f0c977643d825749975daa1d07b14dcde1a303977baaeeb64ce59fcd5c36cd82d5f3e9fa402ab4532aee08701995587f07f28bcc3b9f7Ej8aFCjBtkeVIdlfvLKqYY4uL8nt4kv%2FX%2F%2FCO7mnfA%3D"
        ],

        [
            "id"=>13,
            "name" => "Balutot,Bakhhali",
            "img" => "balu.jpg",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/deb095dd98b688ed2be2105d4b0f79bd496d4b84b8fe761319a8de941c264850f931505da6a390061244aefd7f8a60559c563acf4abca62aeb435314ff774f1b1LH7BehuRd6bfgWLkqn6R%2FlqDKdEPbqm2nzIQpUwpvU%3D"
        ],
        [
            "id"=>14,
            "name" => "Dighali-I,Digha",
            "img" => "dighali.jpg",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/e6ea5ed079ed24fde8903988b656e4db305d91606649288f962ff6fa862b8b9f85ec08e03cfb9fd6b3bb5c8c4f60345d7c4c1112a5859dc9b2d73506a64aa682%2F73pcCfLH713lMkA2KpFqJbMvyp%2FydASwOc9sFcmYBY%3D"
        ],
        [
            "id"=>15,
            "name" => "Gangasagar,Gangasagar",
            "img" => "ganga.png",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/efb659f70826091fbf2358ba374207d24c62bc80cce28e665907a68fc69698b0f378d54fe2c66f4f1e6fc13ed4b665cc05037695a2c88089a20f7b5ea9184d4edICbRofuDQvCTrb4klqWZQQrTSy1nQidebWsRSAOmBM%3D"
        ],
        [
            "id"=>16,
            "name" => "Mangaldhara,Barrackpore",
            "img" => "m.jpg",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/449466b324b2d8fb6ce6f9c63f31fabc330a0a4c9be9369232773a6207e9d779e228b785ead7df0544f8c010546f38d449072249b921908c654c8f0c474df930%2BKDILTSB5rs35c7PsAi30lP%2BZxHV5bF6H4AgbnPeReo%3D"
        ],
        [
            "id"=>17,
            "name" => "Matla,Sundarban",
            "img" => "matla.jpg",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/dd5fc1da39aaf9462a45f355f2e1701bacd345777c08190e6eaf5d85929aee64bdcf7612811653f42b15f223493e798b468f4226119fe07c144eb3a838e283ecOKarUp6Lf1DZL4eT7w%2FdsBfLhHBvZmBkQkS6E%2BO%2BAgs%3D"
        ],
        [
            "id"=>18,
            "name" => "Darjeeling,Darjeeling",
            "img" => "dar.jpg",
            "vdo" => "",
            'book'=>"https://wbtdcl.wbtourismgov.in/property-details/80fc98bc7faf80445ddb960f61d79499dd9e5b91f659f9cd33ca359a8314891de332e8858c458214b5c5ae604410191fbbcbe902782dd2b49a2c57f838001c05QGYha4Z7l6JEf6G8Elui3L5MfhHgtFx1L0bgxj2cTqs%3D"
        ]
      );
    //   create mode 100644 public/assets/video/ARANYA.mp4
    //   create mode 100644 public/assets/video/BHORER ALO.mp4
    //   create mode 100644 public/assets/video/BISHNUPUR .mp4
    //   create mode 100644 public/assets/video/JHARGRAM .mp4
    //   create mode 100644 public/assets/video/MORGAN.mp4
    //   create mode 100644 public/assets/video/MURTI REVISED.mp4
    //   create mode 100644 public/assets/video/Meghbalika Edit Preview.mp4
    //   create mode 100644 public/assets/video/Motijhil_Murshidabad.mp4
    //   create mode 100644 public/assets/video/Muktadhara.mp4
    //   create mode 100644 public/assets/video/Rangabitan.mp4
    //   create mode 100644 public/assets/video/Shantobitan Final_Mobile_.mp4
    //   create mode 100644 public/assets/video/TILOTTAMA.mp4
      $data_c= collect([]);
      foreach($data as $item){
        $b=collect();
        $b->id=$item['id'];
        $b->name=$item['name'];
        $b->img=$item['img'];
        $b->vdo=$item['vdo'];
        $b->book=$item['book'];
        $data_c->push($b);

      }
      return $data_c;
}