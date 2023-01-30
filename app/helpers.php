<?php

use App\Books;
use App\Item;
use MongoDB\BSON\ObjectId as MongoObjectId;
use MongoDB\BSON\Binary as MongoBinary;

function getImage($img_id)
{
    $encode_image = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'Image')->where('_id', $img_id)->first();
    if ($encode_image) {
        $type = $encode_image->mimType;
        $img = 'data:' . $type . ';base64,' . base64_encode($encode_image->img_data);
        return $img;
    }
}
function getMostpupular()
{
    $data = array(
        [
            "id" => 1,
            "name" => "Aranya",
            "place" => "Jaldapara",
            "img" => "a.jpg",
            "vdo" => "ARANYA.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/9c60e3dae5c0ef6f56f0ffdfc6e3934d8b01ad196fc95db4da0049adba042fabb840fe4cdcb11f20db9db3d92605aeaedada0beeae6c16b02b4c35f559b974daKZXiqtU24RtJ54nes3OFH9Akse8swKMG8SnHk%2B4t0gQ%3D"
        ],
        [
            "id" => 2,
            "name" => "Bhorer Alo",
            "place" => "Gajoldoba",
            "img" => "b.jpg",
            "vdo" => "BHORER ALO.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/a76387408cafdcaaed827d7f6e50d39cf93b607d41e1f2e7ecd19b353f495921b652bff345fe9fadf805a7579a5afd5788130bc90f843d41348128da80518e072cqjZeV3HrFbAiKnAuxjd6sMD1srcGRXLql57BBXfVA%3D"
        ],
        [
            "id" => 3,
            "name" => "Jhargram",
            "place" => "Jhargram",
            "img" => "j.jpg",
            "vdo" => "JHARGRAM.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/2ac4e56a9223fdb51dede61eef530e38c81a6e601939bb14d3851dd40a2f3227b9524eb32e29ea7e7b9d7743c1ce933749d8db6956ae50ea0f6a59a4ae040372DtYpA2kHJzBTg7Y3dyZesCZ118bcGP%2B%2Bh3oZszLLoBA%3D"
        ],
        [
            "id" => 4,
            "name" => "Morgan",
            "place" => "Kalimpong",
            "img" => "morr.jpg",
            "vdo" => "MORGAN.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/0c6f4fc20611c7d2aae0c23cabb6588f6590d6ea708d033016644d5a6ccd0f0e5de842e544ce39017fa8c2def655b25c4d99c1fa191ac23df77b576e7b6dae2dUN65roBebfXCxmJyAwt9uViPpebUv50u0z7IjlpNzns%3D"
        ],
        [
            "id" => 5,
            "name" => "Motijhil",
            "place" => "Mursidabad",
            "img" => "Moti.jpg",
            "vdo" => "MOTIJHIL.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/0cb3197b562d2fe2830acaadc33f7fdad811dafc2059585d0b310f75bb38fcada3a450d408e05fffbfe54b8036937eb396116ac9b917e13f04e10a6338a0e50cENb62KtXyCRvzkjXXBv4QWdPDMeEAo12RWrkJztUlSE%3D"
        ],
        [
            "id" => 6,
            "name" => "Meghbalika",
            "place" => "Darjeeling",
            "img" => "megh.jpg",
            "vdo" => "Meghbalika.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/home#viewdiv"
        ],
        [
            "id" => 7,
            "name" => "Muktadhara",
            "place" => "Maithon",
            "img" => "muktadhara.jpg",
            "vdo" => "Muktadhara.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/31430baf97b449a6abbef537632dad0f6d7057cc1d9917edc308e4b8e0529acd200b35d7ed1cb3fa21676fc668a308b663bd5970c35b8d8314ab585794eccb1bV4jM36Tdcp1FzNiW46Tscvr5EpeHcwkfzwfEMa0mpFY%3D"
        ],
        [
            "id" => 8,
            "name" => "Rangabitan",
            "place" => "Bolpur",
            "img" => "r.jpg",
            "vdo" => "Rangabitan.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/e349caf44b6c744c08b51149cd83ed21eb5f3d3bfe874916f1db1b1b87eda148ce43759e047782c5a0c941caba2a8027482bf82000a3a36086f9d80ce7c4ac3bui0Sl9ZqFh9%2FdA35tOPr%2BMdad3EjI67d%2B7YRCZtWJBc%3D"
        ],
        [
            "id" => 9,
            "name" => "Murti Revised",
            "place" => "Murti",
            "img" => "Murti.jpg",
            "vdo" => "MURTI.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/3357b300f43df409a74b136e129d46e80485d2d14ce0f5bee13ec1442b964e068f92d36244c06c0d00afdee970e812d19c87e07cbc51c198a91a1a00d23532818Xq2bNE2fycDIO7Z0z%2BWxsGYjNmingosl8DXWq3P9vQ%3D"
        ],
        [
            "id" => 10,
            "name" => "Bishnupur",
            "place" => "Bankura",
            "img" => "bishnupur.jpg",
            "vdo" => "BISHNUPUR.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/e994aa0d10af3673194878af145ebdbea691677de2e060a6aa8e26f0bdd96f0ff5ec4ee28df8f156dfe48fc79a8de56615ba20f50c429a3a11ec21ded3c01eb13yR%2BGeijawudeKOj59O9q4cjRCIiIHSgs%2B66m13P21o%3D"
        ],
        [
            "id" => 11,
            "name" => "Tilottama",
            "place" => "Gorumara",
            "img" => "til.jpg",
            "vdo" => "TILOTTAMA.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/991791084392a617f09379c56e81b6440bc2953297cf386daaac4101a720d03bd12f60fa90bc77398eacd78e2f86fbe6720b03c7c98a28a0c1ad97af2ad987f3il%2F8zb08Cxv3Y8EG%2FjlF6xq%2FBbjLj7IMiIQ6fAWDE7M%3D"
        ],
        [
            "id" => 12,
            "name" => "Shantobitan",
            "place" => "Bolpur",
            "img" => "shanto.jpg",
            "vdo" => "Shantobitan Final_Mobile_.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/a0ac54cb0ee7ab541339f0c977643d825749975daa1d07b14dcde1a303977baaeeb64ce59fcd5c36cd82d5f3e9fa402ab4532aee08701995587f07f28bcc3b9f7Ej8aFCjBtkeVIdlfvLKqYY4uL8nt4kv%2FX%2F%2FCO7mnfA%3D"
        ],

        [
            "id" => 13,
            "name" => "Balutot",
            "place" => "Bakhhali",
            "img" => "balu.jpg",
            "vdo" => "Balutot, Bakkhali High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/deb095dd98b688ed2be2105d4b0f79bd496d4b84b8fe761319a8de941c264850f931505da6a390061244aefd7f8a60559c563acf4abca62aeb435314ff774f1b1LH7BehuRd6bfgWLkqn6R%2FlqDKdEPbqm2nzIQpUwpvU%3D"
        ],
        [
            "id" => 14,
            "name" => "Dighali-I",
            "place" => "Digha",
            "img" => "dighali.jpg",
            "vdo" => "Dighali 1, Digha High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/e6ea5ed079ed24fde8903988b656e4db305d91606649288f962ff6fa862b8b9f85ec08e03cfb9fd6b3bb5c8c4f60345d7c4c1112a5859dc9b2d73506a64aa682%2F73pcCfLH713lMkA2KpFqJbMvyp%2FydASwOc9sFcmYBY%3D"
        ],
        [
            "id" => 15,
            "name" => "Gangasagar",
            "place" => "Gangasagar",
            "img" => "ganga.png",
            "vdo" => "Gangasagar High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/efb659f70826091fbf2358ba374207d24c62bc80cce28e665907a68fc69698b0f378d54fe2c66f4f1e6fc13ed4b665cc05037695a2c88089a20f7b5ea9184d4edICbRofuDQvCTrb4klqWZQQrTSy1nQidebWsRSAOmBM%3D"
        ],
        [
            "id" => 16,
            "name" => "Mangaldhara",
            "place" => "Barrackpore",
            "img" => "m.jpg",
            "vdo" => "Mangaldhara, Barrackpore High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/449466b324b2d8fb6ce6f9c63f31fabc330a0a4c9be9369232773a6207e9d779e228b785ead7df0544f8c010546f38d449072249b921908c654c8f0c474df930%2BKDILTSB5rs35c7PsAi30lP%2BZxHV5bF6H4AgbnPeReo%3D"
        ],
        [
            "id" => 17,
            "name" => "Matla",
            "place" => "Sundarban",
            "img" => "matla.jpg",
            "vdo" => "",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/dd5fc1da39aaf9462a45f355f2e1701bacd345777c08190e6eaf5d85929aee64bdcf7612811653f42b15f223493e798b468f4226119fe07c144eb3a838e283ecOKarUp6Lf1DZL4eT7w%2FdsBfLhHBvZmBkQkS6E%2BO%2BAgs%3D"
        ],
        [
            "id" => 18,
            "name" => "Darjeeling",
            "place" => "Darjeeling",
            "img" => "dar.jpg",
            "vdo" => "meghbalika",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/80fc98bc7faf80445ddb960f61d79499dd9e5b91f659f9cd33ca359a8314891de332e8858c458214b5c5ae604410191fbbcbe902782dd2b49a2c57f838001c05QGYha4Z7l6JEf6G8Elui3L5MfhHgtFx1L0bgxj2cTqs%3D"
        ],


    );

    $data_c = collect([]);
    foreach ($data as $item) {
        $b = collect();
        $b->id = $item['id'];
        $b->name = $item['name'];
        $b->place = $item['place'];
        $b->img = $item['img'];
        $b->vdo = $item['vdo'];
        $b->book = $item['book'];
        $data_c->push($b);
    }
    return $data_c;
}

function getServiceProvider()
{
    $data_array = array(
        [
            "id" => 1,
            "name" => "WBTDCL",
            "is_active" => 1,
            "is_aproved" => 1
        ],
        [
            "id" => 2,
            "name" => "Others",
            "is_active" => 1,
            "is_aproved" => 1
        ],
    );
    $data = collect([]);
    foreach ($data_array as $item) {
        $b = collect();
        $b->id = $item['id'];
        $b->name = $item['name'];
        $data->push($b);
    };
    return $data;
}
function getGuide()
{
    $data_array = array(
        [
            "id" => 1,
            "name" => "Ram Singh",
            "is_active" => 1,
            "is_aproved" => 1
        ],
        [
            "id" => 2,
            "name" => "Shyam Singh",
            "is_active" => 1,
            "is_aproved" => 1
        ],
        [
            "id" => 3,
            "name" => "Laxman Singh",
            "is_active" => 1,
            "is_aproved" => 1
        ],
    );
    $data = collect([]);
    foreach ($data_array as $item) {
        $b = collect();
        $b->id = $item['id'];
        $b->name = $item['name'];
        $data->push($b);
    };
    return $data;
}

function getExplores()
{
    $data_array = array(
        [
            "id" => 1,
            "url" => "https://wbtourism.gov.in/destination/district/bankura",
            'title' => "Bankura"
        ],
        [
            "id" => 2,
            "url" => "https://wbtourism.gov.in/destination/district/birbhum",
            'title' => "Birbhum"
        ],
        [
            "id" => 3,
            "url" => "https://wbtourism.gov.in/destination/district/purba_bardhaman",
            'title' => "Purba Bardhaman"
        ],
        [
            "id" => 4,
            "url" => "https://wbtourism.gov.in/destination/district/paschim_bardhaman",
            'title' => "Paschim Bardhaman"
        ],
        [
            "id" => 5,
            "url" => "https://wbtourism.gov.in/destination/district/coochbehar",
            'title' => "Cooch Behar"
        ],
        [
            "id" => 6,
            "url" => "https://wbtourism.gov.in/destination/district/dakshin_dinajpur",
            'title' => "Dakshin Dinajpur"
        ],
        [
            "id" => 7,
            "url" => "https://wbtourism.gov.in/destination/district/darjeeling",
            'title' => "Darjeeling"
        ],
        [
            "id" => 8,
            "url" => "https://wbtourism.gov.in/destination/district/hooghly",
            'title' => "Hooghly"
        ],
        [
            "id" => 9,
            "url" => "https://wbtourism.gov.in/destination/district/Howrah",
            'title' => "Howrah"
        ],
        [
            "id" => 10,
            "url" => "https://wbtourism.gov.in/destination/district/jalpaiguri",
            'title' => "Jalpaiguri"
        ],
        [
            "id" => 11,
            "url" => "https://wbtourism.gov.in/destination/district/jhargram",
            'title' => "Jhargram"
        ],
        [
            "id" => 12,
            "url" => "https://wbtourism.gov.in/destination/district/kalimpong",
            'title' => "Kalimpong"
        ],
        [
            "id" => 13,
            "url" => "https://wbtourism.gov.in/destination/district/kolkata",
            'title' => "Kolkata"
        ],
        [
            "id" => 14,
            "url" => "https://wbtourism.gov.in/destination/district/malda",
            'title' => "Malda"
        ],
        [
            "id" => 15,
            "url" => "https://wbtourism.gov.in/destination/district/murshidabad",
            'title' => "Murshidabad"
        ],
        [
            "id" => 16,
            "url" => "https://wbtourism.gov.in/destination/district/nadia",
            'title' => "Nadia"
        ],
        [
            "id" => 17,
            "url" => "https://wbtourism.gov.in/destination/district/north_24_parganas",
            'title' => "North 24 Parganas"
        ],
        [
            "id" => 18,
            "url" => "https://wbtourism.gov.in/destination/district/paschim_medinipur",
            'title' => "Paschim Medinipur"
        ],
        [
            "id" => 19,
            "url" => "https://wbtourism.gov.in/destination/district/purba_medinipur",
            'title' => "Purba Medinipur"
        ],
        [
            "id" => 20,
            "url" => "https://wbtourism.gov.in/destination/district/purulia",
            'title' => "Purulia"
        ],
        [
            "id" => 21,
            "url" => "https://wbtourism.gov.in/destination/district/south_24_parganas",
            'title' => "South 24 Parganas"
        ],
        [
            "id" => 22,
            "url" => "https://wbtourism.gov.in/destination/district/uttar_dinajpur",
            'title' => "Uttar Dinajpur"
        ]

    );
    $data = collect([]);
    foreach ($data_array as $item) {
        $b = collect();
        $b->id = $item['id'];
        $b->url = $item['url'];
        $b->title = $item['title'];
        $data->push($b);
    };
    return $data;
}
function getAttraction(){
 

 $data_array = array(
   [
         "name" => "Water Rafting", 
         "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/kurseong_sml.jpg", 
         "text" => "White water rafting in Tista was introduced in Darjeeling hills more than a decade earlier and has gained tremendous popularity since then. Several private organisations along with DGHC tourism have set up rafting facilities. River Tista is graded at IV on an international scale. With a series of rapids with varying intensity and character, Tista extends a challenging invitation to the enthusiasts.", 
         "how_to_reach" => "", 
         "other" => "", 
         "type" => "textwithimage", 
         "imagealignment" => "left" 
      ], 
   [
            "name" => "Adventure Sports", 
            "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/rock_climbing.jpg", 
            "text" => "For adventure lovers, Kurseong is the right place, as it offers various treks and hikes, either be tea garden walk or hike through lush green Cryptomeria Japonica forest or village walks, it is all here. Recently new adventure sports have been added to Kurseong HOT AIR BALLOON & ROCK CLIMBING. In coming days Kurseong will be known for these sports. So, Kurseong is an ideal destination for travellers, where you can enjoy nature, adventure and culture the new destination of the millennium", 
            "how_to_reach" => "", 
            "other" => "", 
            "type" => "textwithimage", 
            "imagealignment" => "left" 
         ], 
   [
               "name" => "Trekking", 
               "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/kurseong_trekking3.jpg", 
               "text" => "It commands one of the most spectacular views. In the foreground is a great basin set in the midst of the hill. Nature here is at her pristine best, and the vista at the top is worth all the hardship endured on the way. It offers the morning sunrise to be seen clearly, and also Mt. Kanchenjunga Himalaya range, Nathu-la Pass, Jelep-la Pass, Bhutan Himalaya range can be seen directly. The background is dominated by a continuous barrier of snowy peaks and mountains. The most prominent of the chain of the mountains naturally is the mighty Mt. Kanchenjunga along with Kabru (7,338 meter), Janu (7,710 meter) and Pandim (6,691 meter) Kabru appears in the distance and does not present the same graceful outline.", 
               "how_to_reach" => "", 
               "other" => "", 
               "type" => "textwithimage", 
               "imagealignment" => "left" 
            ], 
   [
                  "name" => "Land Of The White Orchids", 
                  "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/white_orchid.jpg", 
                  "text" => "Kurseong is famous for the white orchids that adorn the hill-slopes in abundance, giving it the name of 'The land of the white orchids'. The white orchids are called 'Kurson Rip' by the Lepchas, the original inhabitants of the land.", 
                  "how_to_reach" => "", 
                  "other" => "", 
                  "type" => "textwithimage", 
                  "imagealignment" => "left" 
               ], 
   [
                     "name" => "Schools Of Kurseong", 
                     "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/Schools_of_kurseong.jpg", 
                     "text" => "Kurseong is famous as an education hub. The schools here are not only famous for the education they provide but also their construction and location make them a tourist attraction in their own right. The Dowhills Girls School provides a glimpse of the British era with its architecture and elegance. This school is well known for its beautiful location surrounded by pine trees and the quality of education it provides. Victoria Boy’s School was also created by the British and still maintains its Victorian looks and fame.", 
                     "how_to_reach" => "", 
                     "other" => "", 
                     "type" => "textwithimage", 
                     "imagealignment" => "left" 
                  ], 
   [
                        "name" => "Eagles Craig View Point", 
                        "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/eagles-craig-view-point.jpg", 
                        "text" => "The popular tourist spot of Eagle's Crag viewpoint is a short walk distance from Kurseong railway station seemingly perched on a cliff. One can have a sweeping view of the surrounding mountain, hill, hamlets and slopes from here. It has a cafeteria, a watch tower and a flower garden; this place also houses the water reservoir for the entire town of Kurseong. The place also has a concrete altar built in the park with a khukri on top called shahid smarak. The panoramic view from this point is breath taking, you will get a magnificent view of the Mt Kanchenjunga and its ranges, the plains of Siliguri, the hills of Nepal, rivers, tea gardens.", 
                        "how_to_reach" => "", 
                        "other" => "", 
                        "type" => "textwithimage", 
                        "imagealignment" => "left" 
                     ], 
   [
                           "name" => "Dow Hill Park", 
                           "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/dow_hill_park.jpg", 
                           "text" => "Earlier this was known as Deer Park since you could see lot of deers here. However with deforestation, such sights are now rare and hence the change in name.

In the adjacent forest there is a large fenced area where you can still see some deers. But venturing into the forest is not allowed, you can only look for the deers from outside the fence and often they can be seen moving around, but not in the park.

Dow Hill park is located on top of Dow Hill. The fenced park itself is quite small. There are hedge and other different kinds of plantations. There is a gazebo in the park where you can sit and relax. There is also a small children playground with swings and slides. The park is open from 10am to 4pm. Closed on Thursdays. A nominal entry fee needs to be paid to enter the park.

 From Kurseong Railway Station (at Pankhabari Road), the first route through the beautiful Montiviot Tea Garden - Baghgora Road -- Bara Shibkhola Forest and another route via NH110 through Pankhabari - Baghgora road will take nearly 19 minutes (5.2 Km) to reach the Dowhill park.", 
                           "how_to_reach" => "How to Reach:
By Road :", 
                           "other" => "", 
                           "type" => "textwithimage", 
                           "imagealignment" => "left" 
                        ], 
   [
                              "name" => "Dow Hill", 
                              "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/dow-hill.jpg", 
                              "text" => "From the main market a steep road climbs uphill towards the Dow Hill area. This is the original Hill Cart Road connecting Kurseong with Darjeeling. As the new version of the Hill cart road came up, this road was renamed as the 'Old Cart Road. From Kurseong you have to climb just a kilometre or so to enter the Dowhill eco park area. The forested area is maintained by the state forest department and there is a forest rangers training college here. The Deer park in the vicinity has large number of deer's which used to roam freely in the area before the human population growth needed their enclosure and protection. Near the Deer park is a water reservior from where you can have good view of the plains. In the same Dow Hill area you can also visit the forest museum maintained by the forest department.", 
                              "how_to_reach" => "How to Reach:", 
                              "other" => "From Kurseong Railway Station (at Pankhabari Road), the first route through the beautiful Montiviot Tea Garden - Baghgora Road -- Bara Shibkhola Forest and another route via NH110 through Pankhabari - Baghgora road will take nearly 19 minutes (5.2 Km) to reach the Dowhill.", 
                              "type" => "textwithimage", 
                              "imagealignment" => "left" 
                           ], 
   [
                                 "name" => "Giddapahar Durga Mata Mandir", 
                                 "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/giddapahar_durga_mata_mandir.jpg", 
                                 "text" => "Also named as Sri Sri Sati Devi Mandir, the temple is more than 100 years old and is located 2 km from Kurseong market on the Hill Cart Road to Siliguri. A big stone is inside the temple along with a huge banayan tree, devotees tie strings around the tree and ask for wish, which they believe is fulfilled, so the temple is also known as wishing temple This temple is one of the most visited Hindu temples in the Darjeeling hills. Every year around the month of March - April, the temple holds a fair on the occasion of Ram Navami. During this time hordes of devotees visit the temple and a festive atmosphere prevails in the temple and its nearby places.

 2 km from Kurseong market on the Hill Cart Road to Siliguri.", 
                                 "how_to_reach" => "How to Reach:", 
                                 "other" => "", 
                                 "type" => "textwithimage", 
                                 "imagealignment" => "left" 
                              ], 
   [
                                    "name" => "Forest Museum", 
                                    "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/forest-museum-kurseong.jpg", 
                                    "text" => "The Forest Museum is located on Dow Hill area and is a one of the attraction of the ecotourism. The museum is maintained by the Forest Department. The complex also holds the Forest School. It contains animal skins, bones and hides and wooden products. It also has models of different dams, forest houses etc. and it has a skeleton.


 From Kurseong Railway Station (at Pankhabari Road), the fastest route will take nearly 25 minutes (6.2 Km) via Baghghora Road, and another route via NH110 to Pankhabari road nearly 31 min (7.0 km) will take to reach Forest Museum, though congestion on NH110 causing approx.12-min delay. Both the ways are amidst the mesmerizing and absolutely stunning with gorgeous Scenic beauty of Dowhill Eco Park as backdrop.", 
                                    "how_to_reach" => "How to Reach:", 
                                    "other" => "", 
                                    "type" => "textwithimage", 
                                    "imagealignment" => "left" 
                                 ], 
   [
                                       "name" => "Salamander Lake", 
                                       "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/salamander_lake.jpg", 
                                       "text" => "Salamander Lake is situated at Kurseong. In the past, it used to be a favourite place for the British for boating and people from the neighbouring towns used to hang out here frequently. It is a beautiful green-tinged lake that shelters the rarest and most endangered species of salamanders a species under threat of extinction.", 
                                       "how_to_reach" => "How to Reach:", 
                                       "other" => "Salamander Lake is located at a distance of 14 km from the town of Kurseong.", 
                                       "type" => "textwithimage", 
                                       "imagealignment" => "left" 
                                    ], 
   [
                                          "name" => "Makaibari Tea Estate", 
                                          "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/makaibariteaestatejpg.jpg", 
                                          "text" => "Located in Kurseong subdivision, in Darjeeling district, Makaibari sustains seven villages and 1.587 people. Kodobari (Millet fields), Fulbari (Flower Garden) and Koilapani (Blackwater) and cheptey are in the Western side of the estate, while Makaibari (Cornfields), Thapathali (Thapa Village) and Chungey are situated in the Eastern side. The Makaibari Tea Estate is probably the most talked about and fabled tea garden in Darjeeling area. And there are reasons for that. This is one of the oldest tea gardens in Darjeeling and was the first to establish a factory in the year 1859.

 Makaibari is only 3 kms from Kurseong near Darjeeling. There are regular Taxis from New Jalpaiguri / Siliguri / Bagdogra Airport to Kurseong and then with a hire car to Makaibari Tea Estate. There are regular taxis from Kurseong to Makaibari.", 
                                          "how_to_reach" => "How to Reach:", 
                                          "other" => "", 
                                          "type" => "textwithimage", 
                                          "imagealignment" => "left" 
                                       ], 
   [
                                             "name" => "Chimney", 
                                             "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/chimney_kurseong.jpg", 
                                             "text" => "A walk or ride through the forest of Cryptomeria Japonica on the road, now called Aranya Sarani, leads to the vast open meadows at Chimney. The curious name of the place is reminiscent of the days, when there was a Bungalow here on the only road (Old Military Road) leading to Darjeeling. A long, dilapidated chimney, standing all alone, is the only remnants of the bungalow now. The views of mountains from here are breathtaking.", 
                                             "how_to_reach" => "How to Reach:", 
                                             "other" => "Chimney is 53 kms from New Jalpaiguri and 8 kms from Kurseong and to reach Kurseong hire any car from New Jalpaiguri or Siliguri and catch a local taxi from Kurseong to Chimney. Homestay also provides car pick-up and drop services from Chimney to Kurseong. There is also a bus from Tenzing Norgay Bus stop at Siliguri to Kurseong, from where a local taxi can be available.", 
                                             "type" => "textwithimage", 
                                             "imagealignment" => "left" 
                                          ], 
   [
                                                "name" => "Kettle Valley Picnic Spot", 
                                                "img" => "https://www.wbtourism.gov.in/home/download/places_attraction/kettle-valley-picnic-spot.jpg", 
                                                "text" => "Kettle Valley Picnic Spot is a popular picnic stop in the town of Kurseong and is visited by locals as well as tourists. This scenic location is enjoyed on a picnic or a day outing with family and friends. It is a beautiful spot on the banks of the river Rinchengtong and one can spot the Dilaram Tea Estate, which is also located close by. The landscape of the place is breathtaking and surrounding area is lush green with the clear water of the river flowing along side.", 
                                                "how_to_reach" => "How to Reach:", 
                                                "other" => "Nearest station is Kurseong for Toy Train. Shared Taxis, Private vehicles, toy train and limited bus service is available for local transport.
 Nearest airport is at Bagdogra with 63 km. Nearest railway station is Jalpaiguri with 60 km.", 
                                                "type" => "textwithimage", 
                                                "imagealignment" => "left" 
                                             ] 
   ); 
 
$data = collect([]);
$id= new MongoObjectId('63d53cb841bd3b3970040ce4');
$mdl = Item::where('_id',$id)->first();
$destination_array = array();
if (!empty($mdl->name)) {
  array_push($destination_array, $mdl->name);
  array_push($destination_array, 'attraction');
}
foreach ($data_array as $key => $item) {
    $b = collect();
    if($item['img']){
        $model1 = new Item();
        $path =$item['img'];
        $url=str_replace('www.','',$path);
        $temp = tempnam(sys_get_temp_dir(), 'TMP_');  
            file_put_contents($temp, file_get_contents($url));
            $content = file_get_contents($temp);
            $size = getimagesize($temp);
            $extension = image_type_to_extension($size[2]);

            $height = $size[1];
            $width = $size[0];
           
            $mimeType=$size['mime'];
            $binary_thumbnail = new MongoBinary($content, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->img_data=$binary_thumbnail;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='attraction';
            $model1->is_active=1;
            $model1->is_approved=1;
            $model1->tags = $destination_array;
            // $thumbnail_image_is_save=$model1->save();
        //     $g->guide_image_obj_id=new MongoObjectId($model1->getKey()) ;
        //     $g->save();
    }
    $b->order=$key;
    $b->image_id=new MongoObjectId($model1->getKey());
    $b->name = $item['name'];
    $b->text = $item['text'];
    $b->how_to_reach = $item['how_to_reach'];
    $b->other = $item['other'];
    $b->type = $item['type'];
    $b->imagealignment = $item['imagealignment'];
    $data->push($b);
};


$mdl->attractions=$data->all();
// $mdl->save();





return $data;
}
