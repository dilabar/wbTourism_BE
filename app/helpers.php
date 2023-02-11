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
            "name" => "Dighali-II",
            "place" => "Digha",
            "img" => "dighali.jpg",
            "vdo" => "Dighali 2, New Digha High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/55427e05a14371a61bce8dd927a513d6cef3aecf3588b062af7050ca818d09d63a14401a4545b8312184e9efc0209dc54d030985578018761c8a6fc321a5b08a6uy62BeJuWdv9cE1nqkSIOeQ9WGfMkvBTHQ1Uojhv1w%3D"
        ],
        [
            "id" => 16,
            "name" => "Gangasagar",
            "place" => "Gangasagar",
            "img" => "ganga.png",
            "vdo" => "Gangasagar High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/efb659f70826091fbf2358ba374207d24c62bc80cce28e665907a68fc69698b0f378d54fe2c66f4f1e6fc13ed4b665cc05037695a2c88089a20f7b5ea9184d4edICbRofuDQvCTrb4klqWZQQrTSy1nQidebWsRSAOmBM%3D"
        ],
        [
            "id" => 17,
            "name" => "Mangaldhara",
            "place" => "Barrackpore",
            "img" => "m.jpg",
            "vdo" => "Mangaldhara, Barrackpore High.mp4",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/449466b324b2d8fb6ce6f9c63f31fabc330a0a4c9be9369232773a6207e9d779e228b785ead7df0544f8c010546f38d449072249b921908c654c8f0c474df930%2BKDILTSB5rs35c7PsAi30lP%2BZxHV5bF6H4AgbnPeReo%3D"
        ],
        [
            "id" => 18,
            "name" => "Matla",
            "place" => "Sundarban",
            "img" => "matla.jpg",
            "vdo" => "",
            'book' => "https://wbtdcl.wbtourismgov.in/property-details/dd5fc1da39aaf9462a45f355f2e1701bacd345777c08190e6eaf5d85929aee64bdcf7612811653f42b15f223493e798b468f4226119fe07c144eb3a838e283ecOKarUp6Lf1DZL4eT7w%2FdsBfLhHBvZmBkQkS6E%2BO%2BAgs%3D"
        ],
        [
            "id" => 19,
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
            "url" => "/error/page_not_found",
            'title' => "Bankura"
        ],
        [
            "id" => 2,
            "url" => "/error/page_not_found",
            'title' => "Birbhum"
        ],
        [
            "id" => 3,
            "url" => "/error/page_not_found",
            'title' => "Purba Bardhaman"
        ],
        [
            "id" => 4,
            "url" => "/error/page_not_found",
            'title' => "Paschim Bardhaman"
        ],
        [
            "id" => 5,
            "url" => "/error/page_not_found",
            'title' => "Cooch Behar"
        ],
        [
            "id" => 6,
            "url" => "/error/page_not_found",
            'title' => "Dakshin Dinajpur"
        ],
        [
            "id" => 7,
            "url" => "/place/details?template_id=1&id=63d54ce734d3802cfd04682b",
            'title' => "Darjeeling"
        ],
        [
            "id" => 8,
            "url" => "/error/page_not_found",
            'title' => "Hooghly"
        ],
        [
            "id" => 9,
            "url" => "/place/details?template_id=1&id=63d7f695e4bbd858c2063396",
            'title' => "Howrah"
        ],
        [
            "id" => 10,
            "url" => "/place/details?template_id=1&id=63d7fc45e4bbd858c206339f",
            'title' => "Jalpaiguri"
        ],
        [
            "id" => 11,
            "url" => "/error/page_not_found",
            'title' => "Jhargram"
        ],
        [
            "id" => 12,
            "url" => "/place/details?template_id=1&id=63d8043fe4bbd858c20633c0",
            'title' => "Kalimpong"
        ],
        [
            "id" => 13,
            "url" => "/place/details?template_id=1&id=63d8002ee4bbd858c20633a8",
            'title' => "Kolkata"
        ],
        [
            "id" => 14,
            "url" => "/error/page_not_found",
            'title' => "Malda"
        ],
        [
            "id" => 15,
            "url" => "/error/page_not_found",
            'title' => "Murshidabad"
        ],
        [
            "id" => 16,
            "url" => "/error/page_not_found",
            'title' => "Nadia"
        ],
        [
            "id" => 17,
            "url" => "/error/page_not_found",
            'title' => "North 24 Parganas"
        ],
        [
            "id" => 18,
            "url" => "/error/page_not_found",
            'title' => "Paschim Medinipur"
        ],
        [
            "id" => 19,
            "url" => "/place/details?template_id=1&id=638f91289e20437bfb0ce143",
            'title' => "Purba Medinipur"
        ],
        [
            "id" => 20,
            "url" => "/place/details?template_id=1&id=63da5916171e967049012c2d",
            'title' => "Purulia"
        ],
        [
            "id" => 21,
            "url" => "/place/details?template_id=1&id=638f90b09e20437bfb0ce140",
            'title' => "South 24 Parganas"
        ],
        [
            "id" => 22,
            "url" => "/error/page_not_found",
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
            "name" => "Sovabazar Rajbari", 
            "text" => "The present Sovabazar Rajbari, a Grade I heritage building built by Raja Naba Krishna Deb is situated at 33R/1A, Raja Naba Krishna Street. Its architecture represents an ensemble of Hindu, Moorish and colonial traditions. Raja Naba Krishna Deb was Lord Clive's 'Munshi' or tutor in Bengali, Persian, as well as the close confidant. During his lifetime this Rajbari played important role in the cultural and social life of Bengal. He was one of the first residents of Kolkata to celebrate Durga Puja in 1757 on a grand scale after the British defeated Siraj-ud-daulah at the battle of Plassey. Many renowned English men like Lord Clive and Warren Hastings were in the list of invitees during this festival, thus making it 'sarbojonin'.
    
    It was here that the first civic reception of Swami Vivekananda after his return from Chicago Parliament of Religions was organized in 1897 by Raja Binoy Krishna Deb Bahadur.", 
            "image_url" =>"https://www.wbtourism.gov.in/home/download/places_attraction/sovabazar_rajbari.jpg",
            "type"=>'',
            "imagealignment"=>'',
            "how_to_reach"=>''

        ], 
        [
            "name" => "House Of Gokul Mitra", 
            "text" => "At the junction of Rabindra Sarani and Madan Mohan Tala Street, this house dates back to 1730s. The house belonged to Gokul Mitra who acquired the Chandni Chawk Bazar in a lottery in 1784. It has a temple of Madan Mohan and a large 'thakur-dalan' with columns rising up to second storey. The story has it that the King of Bishnupur pawned the original idol of Madan Mohan to Gokul Mitra when he fell in hard times.", 
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/gokul_mitra_bari1.jpg",
            "type"=>'',
            "imagealignment"=>'',
            "how_to_reach"=>''

        ], 
        [
            "name" => "Jorasanko Thakurbari", 
            "text" => "Jorasanko Thakurbari on 6B, Dwarakanath Tagore Lane off Rabindra Sarani was the home to the Tagore's since the end of 18th Century. It's inhabitants occupied the most important positions in the different aspects of social and cultural life of the19th Century Bengal, the most renowned being Gurudev Rabindranath Tagore. Today the premise houses Rabindra Bharati University, inaugurated by Jawaharlal Nehru on Rabindranath Tagore's birth centenary on 8th May, 1962. In the Maharshi Bhaban, named after Maharshi Debendranath Tagore, Rabindranath Tagore was born and breathed his last. The building and the 'Bichitra' has turned into a museum named 'Rabindra Bharati Museum', which is a major repository of memorabilia, paintings etc. of the Tagore's.", 
            "how_to_reach" => "Nearest railway station is Howrah. Nearest Metro Railway station is Girish Park. Bus services are also available from many parts of Kolkata. Jorasanko is the nearest bus stoppage." ,
            "type"=>'',
            "imagealignment"=>'',
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/Jorasanko-Thakur-Bari.jpg"
        ], 
        [
            "name" => "Jorasanko Rajbari", 
            "text" => "The first of the prominent old Bengali residences as one move northward along Rabindra Sadan (or Chitpur Road, the oldest road of Kolkata) is the Jorasanko Rajbari of the family of Rajendra Narayan Roy. It has a nice colonnaded front with verandas, terraces fitted with delicate cast iron grills.", 
            "how_to_reach" => "Nearest railway station is Howrah. Nearest Metro Railway station is Girish Park.

    Bus services are also available from many parts of Kolkata. Jorasanko is the nearest bus stoppage.", 
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/jorasanko_rajbari_old_1.jpg" ,
            "type"=>'',
            "imagealignment"=>''
        ], 
        [
            "name" => "Kurmartuli", 
            "text" => "Kumartuli is the neighbourhood of artisans specializing in making clay idols of gods and goddesses. In makeshift shafts idols in various stages of completion can be seen-from bamboo straw structures to the finished idols. The area becomes a fascinating hive of activity especially before the Durga Puja. Watching the artisans engrossed in their intricate work itself has the ability to mesmerize any onlooker. Today, the idols made in Kumortuli adorn pandals across the world. The temple at Kumortuli is also the abode of the original idol of 'Devi Dhakeswari' brought from Dhaka during the partition.", 
            "how_to_reach" => "It's easiest to take a taxi (it will take around 30 minutes from central Kolkata) to Kumartuli. Otherwise, buses and trains go there. The nearest metro station is the Sovabazar Metro. Sovabazar Launch Ghat (alongside the Ganges River) is also close by. Taking a walk to the riverbank is worthwhile, can see old Gothic and Victorian style mansions. From there visitor can get a boat back to central Kolkata.", 
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/kumartuli1.jpg" ,
            "type"=>'',
            "imagealignment"=>''
        ], 
        [
            "name" => "Marble House", 
            "text" => "Rajendra Nath Mullick's Residence, turned into a museum situated on 46, Muktaram Babu Street is one of the most elegant palatial nineteenth century mansions in North Kolkata. Built by a French architect in 1835, the enormous facade of the palace has an imposing portico with stucco work and six fluted Corinthian columns, topped by an elaborately ornamented triangular pediment. The garden encircling the palace is dotted with marble fountains, statues of gods and goddesses from Greek and Hindu pantheon, notable among which is a stunning statue of Leda and Swan. The garden houses a zoo. It is learnt that 90 varieties of patterned marble had been used on the floors of the mansion and hence, Lord Minto called it a Marble Palace. Inside, the walls have ornate stucco mouldings and the museum is a treasure trove of curios, statues and paintings including oil paintings by Rubens and Joshua Reynolds.", 
            "how_to_reach" => "Girish Park and Mahatma Gandhi Road are nearby Metro Railway stations. Howrah and Sealdah are nearest railway stations.Ram Mandir is nearest bus stoppage to reach this place.", 
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/marble_palece.jpg" ,
            "type"=>'',
            "imagealignment"=>''
        ], 
        [
            "name" => "House Of Chhatubabu-Laltubabu", 
            "text" => "At 67E, Beadon street, this was the ancestral house of Ramdulal De (Deb Sarkar), the pioneer in Indo-US trade and the first modern Bengali millionaire. He was held in such high esteem by his Ameriacn counter parts that they named one of their ships 'Ramdulal De' which made several voyages from Salem (a port near Boston) to Kolkata. A fine portrait of George Washington was also presented to him. Presently only the elegant 'Nat Mandir' adorning some fine chandeliers stands in its original site. In 177o, Ramdulal De started organizing Durga Puja here. Later the house and the Puja came to be known as Chhatubabu-Latubabu's after his sons, fabled Chhatubabu (ashutosh) and Latubabu (Promotha Nath).", 
            "image_url" => "https://wbtourism.gov.in/home/download/places_attraction/marble_palece.jpg" ,
            "type"=>'',
            "imagealignment"=>'',
            "how_to_reach"=>''
        ] 
     ); 
      
 
$data = collect([]);
$id= new MongoObjectId('63da3fcc171e967049012c24');
$mdl = Item::where('_id',$id)->first();
$destination_array = array();
if (!empty($mdl->name)) {
  array_push($destination_array, $mdl->name);
  array_push($destination_array, 'attraction');
}
foreach ($data_array as $key => $item) {
    $b = collect();
    $tags_array = array();
    if (!empty($mdl->name)) {
        array_push($tags_array, $mdl->name);
        array_push($tags_array, $item['name']);
        array_push($tags_array, 'attraction');
      }
    if($item['image_url']){

        $model1 = new Item();
        $path =$item['image_url'];
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
            $model1->tags = $tags_array;
            // $thumbnail_image_is_save=$model1->save();
        //     $g->guide_image_obj_id=new MongoObjectId($model1->getKey()) ;
            // $model1->save();
    }
    $b->order=$key;
    $b->image_id=new MongoObjectId($model1->getKey());
    $b->name = $item['name'];
    $b->text = $item['text'];
    if($item['how_to_reach']){
         $b->how_to_reach = $item['how_to_reach'];
    }
    else{
        $b->how_to_reach = $item['how_to_reach'];
    }
    // $b->other = $item['other'];
    $b->type = 'textwithimage';
    $b->imagealignment = 'left';
    // $b->imagealignment = $tags_array;
    $data->push($b);
};


$mdl->attractions=$data->all();
// dd($mdl);
// $mdl->save();





return $data;
}
function getMapCordinate(){
    $data_array =array(
        [
        "title"=>"Cooch Behar Palace",
        "coords"=>"491,183,10",
        "desc"=>"Once a princely State, Cooch Behar is known for its fine climate, natural freshness, and beauty. During the 11th and 12th Century AD, the Pala-Senas ruled Cooch Behar. The sculptures and coins of the Sultanate and the Mughal Periods, and the temples and mosques of the medieval and late medieval periods reveal that the ancient kingdom of Kamrup played a role in the development of the present Cooch Behar. The main attraction in Cooch Behar is the palace of the Koch king Maharaja Nripendra Narayan. Designed to resemble the classical European style of the Italian Renaissance, this magnificent palace was built by the Maharaja in 1887. Cooch Behar is also famous for large water bodies. Among them the Rasik Bill is famous for a huge population of migratory birds that assemble here every year. The Forest Department has built accommodation at this site to meet the demands of a growing number of tourists interested in ornithology.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/Cooch_Behar_Palace.jpg",
        "reference" =>""
        ],
        [ 
        "title"=>"Shanti Sutapa",
        "coords"=>"352,257,10",
        "desc"=>"Japanese Peace Pagoda is located on the slopes of the Jalapahar Hill the pagoda can be reached by foot or on taxi. The Shanti Stupa was established by Nipponzan Myohoji, a Japanese Buddhist order. It also showcases the four avatars of the Buddha.
        This stupa was constructed during 1972-1992.There is a buddha temple and a pillar. After the temple there is the beautiful stupa (Pagoda). The stupa is located at significant height and beautiful views of the surroundings and mount Kanchanjunga is visible from here. This is one of the best places to visit in Darjeeling.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/shanti_stupa.jpg",
        "reference" =>"/place/details?template_id=1&id=63d54ce734d3802cfd04682b"
        ],
        [
        "title"=>"Neora National Park" ,
        "coords"=>"399,260,10",
         "desc"=>"The famous Neora National Park is located in Kalimpong was established in the year 1986. Considered as one of the wealthiest biological zones, this park spreads over a region of about 88 Sq. km. and is situated near Lava at a dense forest in the foothill of majestic Himalayan Mountains.
         This park is bordered by the forests of Sikkim region on one side and by Bhutan on the other. The flora and fauna of this park makes it more beautiful. Natural forests which contain different varieties of trees enrich this place. Large numbers of orchids as well as bamboo groves remain as the special feature of the Neora National Park.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/neora_national_park.jpg",
        "reference" =>"/place/details?template_id=1&id=63d8043fe4bbd858c20633c0"
        ],
        [
        "title"=>"Gorumara National Park",
        "coords"=>"446,274,10",
        "desc"=>"Gorumara National Park is an important national park of North Bengal. It is situated just at the foot hills of Eastern Himalaya in Terai region, on the flood plains in Murti, Raidak. Jaldhaka a Tributary of Brahmaputra flows just beside the National Park. Gorumara has mixed vegetation of forest & grassland. It is famous for its good population of One Horned Indian Rhino. Ministry of Environment and Forest has declared Gorumara as the best among the protected areas in India for the year 2009. Gorumara was declared a reserve forest in 1895. In 1949 it was given a status of a wild life sanctuary. Later on Gorumara was declared as National Park in 1994. Gorumara National Park is spread over an area of approx 80 Square km. The forest area has come up as a tourist destination during the last decade. In recent years, there has been substantial increase in tourist arrival as well as infrastructure. Today the area around the forest has the largest concentration of tourist accommodation in Dooars. The number of jungle safari options has also increased over the years.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/gorumara.jpg",
        "reference" =>"/place/details?template_id=1&id=63d7fc45e4bbd858c206339f"
        ],
        [
        "title"=>"Toy Train" ,
        "coords"=>"354,321,10",
        "desc"=>"Darjeeling Himalayan Railway (DHR), popularly known as the 'Toy Train' is one of the main attractions of the region. The track on which the train runs is only 600 millimeters wide. The size of the train is commensurate giving it the name 'Toy Train'. Narrow Gauge trains are used in parts of India to travel to hill stations. The most magnificent train journeys through the narrow gauge are the gorgeous terrain. UNESCO has declared the DHR as a World Heritage Site.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/toy_train.jpg",
        "reference" =>"/place/details?template_id=1&id=63d54ce734d3802cfd04682b"
        
        ],
        [
        "title"=>"Kulik",  
        "coords"=>"575,376,10",
        "desc"=>"Raiganj Wildlife Sanctuary, popularly known as Kulik Bird Sanctuary is no less than heaven to the bird watchers. This haven of a huge variety of birds is located near Raiganj in the Uttar Dinajpur district of West Bengal. The sanctuary offers shelter to almost 164 species of birds and every year around 70,000 to 80,000 migratory birds visit the sanctuary. The sanctuary spanning an area of 1.30 sq km is often claimed as the second largest bird sanctuary across Asia. The Kulik Bird sanctuary has the shape of the English alphabet 'U' and is connected with River Kulik with an intricate network of artificial canals. Raiganj Bird Sanctuary with an area of 35 acres and a buffer area of 286.23 acres, an ideal habital for a wide array of colorful birds. The resident birds include flycatchers, kites, owl, woodpeckers, kingfishers, drongoes and many more. Apart from this, a number of migratory birds also fly here every year from the coastal areas and South Asian countries. The major migratory species include egrets, open-bill storks, black-crowned night heron, pond heron, Indian Shag, little cormorants and most importantly Asian Openbill. Apart from birds, the exotic collection of flora and the wildlife of the sanctuary is also fascinating.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/kulik.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Burhana Fakir's Mosque",  
        "coords"=>"654,381,10",
        "desc"=>"It is famous for its architecture, which also represents the culture of the Muslims, who once inhabited the land.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/burhana_fakirs.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Hazi Danes University",  
        "coords"=>"723,332,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/Hazi_Danesh_University.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Firoz Minar",  
        "coords"=>"775,364,10",
        "desc"=>"Located a kilometer away from the Dakhil Darwaza, the Feroze Minar, was built by Sultan Saifuddin Feroze Shah during 1485-89. This five-storied tower resembling the Qutub Minar which is 26 meter high and 19 meter in circumference.  Built-in the Tughlaqi style of architecture, the walls of Feroze Minar are covered with intricate terracotta carvings.
        Alternately known as Firoza Minar or 'Blue Tower' this tower 25.60 m high with spiral staircase having 73 steps was probably constructed by Saifuddin Firoz an Abyssinian commander of the royal forces who became the Sultan by avenging the killing of Sultan Jalaluddin Fath Shah, the last ruler of the Iliyas Shahi dynasty. From the foot of the door, the tower rises in three storeys of twelve sides, each storey demarcated by ornamental bands. The fourth and fifth storeys are circular with reduced diameter. The last storey originally an open arched room covered by a dome has been changed into an open flat roof by some restorer. This is considered as a victory tower as its builder is credited with many victories in battles. Scholars attribute it as a Bengali version of the Qutb Minar (1486 - 89 AD).",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/firoz_minar.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Dakhil Darwaza",  
        "coords"=>"790,403,10",
        "desc"=>"Dakhil Darwaza, an impressive gateway built in 1425 A.D., is an important Muslim monument. Salutes fired from it also gave it the name of Salami Darwaza. Made of small red bricks and terracotta work, this dominating structure is more than 21 m. high and 34.5 m. wide. It’s four corners are topped with five-storey high towers. Once the main gateway to a fort, it opens through the embankments surrounding it. In the south-east corner of the fort, a 20-m. high wall encloses the ruins of an old palace.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/dakhil-darwaza.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Hazar Duari",  
        "coords"=>"1007,354,10",
        "desc"=>"The palace with a thousand doors, is the chief tourist attraction of Murshidabad. Built in 1837 by Duncan McLeod for the Nawab Najim Humaun Jah, a descendant of Mir Zafar, it has a thousand doors (only 900 are real) and 114 rooms and 8 galleries. It is now a museum and has an exquisite collection of armour, splendid paintings, exhaustive portraits of the Nawabs, beautiful works of ivory from China and many other valuable works of art.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/hazarduari.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Hetampur Rajbari",  
        "coords"=>"1052,440,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/Hetampur_Royal_Palace.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Rabindra Bhaban",  
        "coords"=>"1134,449,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/rabindrabhaban.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Maithon Dam",  
        "coords"=>"1114,541,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/maithon_dam.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Iskcon Temple",  
        "coords"=>"1191,344,10",
        "desc"=>"Mayapur is located on the banks of the Ganges river, at the point of its confluence with the Jalangi, near Navadvip, 130 km north of Kolkata. The headquarters of ISKCON are situated in Mayapur and it is considered a holy place by a number of other traditions within Hinduism, but is of special significance to followers of Gaudiya Vaishnavism as the birthplace of Chaitanya Mahaprabhu, regarded as a special incarnation of Krishna in the mood of Radha. It is visited by over a million pilgrims annually.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/iskcon.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Ayodhya Hills",  
        "coords"=>"1206,618,10",
        "desc"=>"Ayodhya Hills is a hill located in the Purulia district. It is a part of the Dalma Hills and extended part of Eastern Ghats range. Highest peak of Ajodhya Hills is Gorgaburu. The nearest populated town is Bagmundi. It is a popular place for young mountaineers to learn the basic course in rock climbing. There are two routes available to reach Ajodhya Hills. One is via Jhalda and the other one is via Sirkabad. There is a Forest Rest House here. Gorgaburu (855 m), Mayuri etc. are of the some of the peaks of Ajodhya hills range. The area forms the lowest step of the Chota Nagpur Plateau. The general scenario is undulating land with scattered hills. The area around Bagmundi or Ajodhya Hill is an extended plateau.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/ayodha_hill.jpg",
        "reference" =>"/place/details?template_id=1&id=63da5916171e967049012c2d"
        ],
        [
        "title"=>"The Tomb of Sher Afghan",  
        "coords"=>"1230,423,10",
        "desc"=>"The Tomb of Sher Afghan which is the burial ground of this last Afghan jagirdar of the city of Burdwan, is located beside Pir Beharam close to the Rajbati. Also known as Ali Quli Khan Istaju, Sher Afghan was often called the 'Durgadhipati' of Burdwan and he lived in Burdwan as a 'Jagirdar' during the late Mughal period which was also considered to be an important administrative headquarter. Kutubuddin, the Subedar of Bengal was also the milk-brother of Jahangir, who succeeded the throne after Akbar. According to the legends, Jehangir was greatly infatuated by seventeen year old Mehrunnissa (meaning 'sun among women' in Persian), Sher Afghan's wife who he had married in the year 1594 and after becoming the Emperor, Jehangir was anxious to bring her over to his harem. To add to this, in the year 1607, Sher Afghan revolted against Jehangir and certain other Mughal rulers and to get control over the situation, Jahangir had deputed Kutubuddin as his Subedar to fight with Sher Afghan. Ultimately, both Kutubuddin and Sher Afghan were killed in a fatal duel in the year 1610 near the Burdwan Railway Station. The tombs of both these men lie side by side beside the burial ground at Pir Baharam. Meherunnisa, the widow of Sher Afghan was later sent to Delhi and she married Jahangir in the year 1611. She later changed her name to Noor Jahan and became a powerful and charismatic Mughal empress who ruled India for quite a long of time.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/tomb_of_sher_afghan.jpg",
        "reference" =>""
        ],
        [
        "title"=>"The Madanmohan Temple",  
        "coords"=>"1255,505,10",
        "desc"=>"The Madanmohan temple was built by the King Durjana Singh Dev in late 17th century. The architecture of the temple is in Ekaratna style, has a square flat roof with curved cornices and a pinnacle over the top. Madanmohan temple is one of those oldest temples in Bishnupur where the deity is still there and worshiped.
        The terracotta temple was constructed within the fort complex in 1694 AD. It was built in the 'Eka Ratna' style of temple architecture with a square flat roof, cornices that are curved and a pinnacle on the top. This temple is even more ornately carved and sculptured than the other famous terracotta temples in Bishnupur.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/madanmohan_temple.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Chau Dance",  
        "coords"=>"1243,669,10",
        "desc"=>"The culture in Purulia concentrates on the traditional folk dance 'Chau'. Popular among Santhals, Kumars, Mahatos, Kalindis and Sahish communities are the rare masked dancers of chau represents the essentially local culture. The use of beautiful masks and the exclusive style of dance, make-up and colourful costumes have made this dance popular all over the world. Many consider this form to be a kind of martial art because of the physical strength and agility involved in dancing. The Chau dance is an inseparable part of the rituals and the festivities of Purulia. Earlier the productions were primarily based on mythological stories from the Ramayana, the Puranas etc but presently contemporary issues like Santhal revolt, Kargil war etc are used as themes for the shows.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/chou_dance.jpg",
        "reference" =>"/place/details?template_id=1&id=63da5916171e967049012c2d"
        ],
        [
        "title"=>"Rashmancha",  
        "coords"=>"1288,557,10",
        "desc"=>"The Rashmancha pavilion used for housing the idols of Lord Krishna from other temples during the Rash festival was built in brick by King Veer Hambir in 1600 A.D. This is the oldest brick temple in Bishnupur and is shaped as an elongated pyramidal tower surrounded by hut-shaped turrets. The outermost gallery is elegantly surrounded by Bengal hut-type roofs. The floor is paved with bricks. The entire structure stands on high platform made up of laterite blocks. Good quality clay is locally available in plenty for making the bricks and terracotta plaques used in the construction of the temples and decorative images.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/rashmancha.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Belur Math", 
        "coords"=>"1339,476,10",
        "desc"=>"Belur Math or Belur Muth is the headquarters of the Ramakrishna Math and Mission, founded by Swami Vivekananda, a chief disciple of Ramakrishna Paramahamsa. It is located on the west bank of Hooghly River, Belur. It is a place of pilgrimage for people from all over the world professing different religious faiths. Even people not interested in religion come here for the peace it exudes.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/belur_math.jpg",
        "reference" =>"/place/details?template_id=1&id=63d7f695e4bbd858c2063396"
        ],
        [
        "title"=>"Hooghly Imambara", 
        "coords"=>"1366,387,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/imambara.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Netaji Subhas Chandra Bose International Airport",  
        "coords"=>"1399,340,10",
        "desc"=>"Netaji Subhas Chandra Bose International Airport is an international airport located in Kolkata, serving the Kolkata metropolitan area. It is located approximately 17 km from the city center. The airport was earlier known as Dum Dum Airport before being renamed after Netaji Subhas Chandra Bose, a prominent leader of Indian independence movement. Spread over an area of 2,460 acres (1,000 hectres), Kolkata airport is the largest in eastern India and one of only two international airports operating in West Bengal, the other being in Bagdogra. It is the fifth busiest airport in India in respect of aircraft movement after Delhi, Mumbai, Bangalore and Chennai. The Airport is a major centre for flights to North-East India, Bangladesh, Bhutan, China and Southeast Asia.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/airport.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Dakhineswar",  
        "coords"=>"1419,435,10",
        "desc"=>"Kalyaneshwar Temple is more-than-500-year-old Shiva temple situated in Bally, Howrah near Belurmath. It is very famous and visited by millions of monks and devotees around India every year. It is surrounded by Kali, Ganesh, Vishnu and Bajrangbali Temples. The structure is about 400 years old and is said to be have been started by the Pandavas and it was then continued by the Katoch Dynasty.

        According to legends, Ramakrishna Dev used to visit the temple frequently along with his followers offered puja to Shiva and founder members of Ramakrishna Mission including Swami Vivekananda, Swami Brahmananda and others. Ramkrishnadev “went into an ecstatic mood” during pay visit to this temple with his disciples.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/dakshneshwar-temple.jpg",
        "reference" =>"/place/details?template_id=1&id=63d7f695e4bbd858c2063396"
        ],
        [
        "title"=>"Victoria Memorial Hall",  
        "coords"=>"1470,354,10",
        "desc"=>"Today the Victoria Memorial Hall is a museum having an assortment of Victoria memorabilia, British Raj paintings and other displays. As night descends on Kolkata, the Victoria Memorial Hall is illuminated, giving it a fairy tale look. It is interesting to note that the Victoria Memorial was built without British government funds. The money required for the construction of the stately building, surrounded by beautiful gardens over 64 acres and costing more than 10 million was contributed by British Indian states and individuals who wanted favours with the British government. At the top of the Victoria Memorial is a sixteen foot tall bronze statue of victory, mounted on ball bearings. It rotates with wind.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/victoria.jpg",
        "reference" =>"/place/details?template_id=1&id=63d8002ee4bbd858c20633a8"
        ],
        [
        "title"=>"Garbeta",  
        "coords"=>"1443,534,10",
        "desc"=>"11 km away from Chandrakona on the banks of river Shilabati, the land of red soil and sal forest, Garbeta is associated with the history of Layek revolt. 6 km away from Garbeta railway station on the bank of river Shilabati, is the red laterite soiled field of Gangani. In the early 19th century, the Chuar Revolt against the British was held on this dry red field. According to history, the revolt was named as Layek revolt of Bagri or Paik revolt. Their leader, Sardar Achal Singh was hanged by the British. In summer days, the air becomes heated here. Hence, the name of the field is Gangani, i.e., heated. Today the Raikota fort of the Bagri Kings is in a dilapidated condition. There is also a temple of Sarbamangala at Garbeta. There are some ordinary hotels and lodges near Garbeta railway station. In the town, there is a PWD Bungalow for accommodation. Bungalow Booking : EE, PWD, Midnapur.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/garbeta.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Kanak Durga Temple",  
        "coords"=>"1490,563,10",
        "desc"=>"Visit Kanak Durga Temple gives a thrilling experience of natural beauty. It is about 14 km away from Jhargram town. The century-old temple is located in the forest beside a small charming river named Dulong. Several uncommon species of trees, birds and monkeys can see here. There’s a spot called Kendua on the way to Kanak Durga. Migratory birds visit the area in winter. A half an hour visit through the dense forest gives a charming experience.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/kanak_durga_temple.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Haldia Dock",  
        "coords"=>"1518,407,10",
        "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/haldia_dock.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Mahishadal Rajbari",  
        "coords"=>"1527,471,10",
        "desc"=>"Mahishadal is only 16 kms from Tamluk town where you can visit the Mahishadal Rajbari and the museum there, do boating in the attached park. Also give a visit to Geonkhali, a place 8 kms away from Mahishadal, a perfect picnic spot at the junction (Mohona) of three rivers.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/mahishadal.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Sundarbans", 
        "coords"=>"1555,300,10",
        "desc"=>"The Sundarbans is an estuarine mangrove forest turned into a tiger reserve. For a real wild holiday, there is little to beat the myriad charms of the Sunderbans. The wildlife in Sunderbans includes, other than the Royal Bengal Tiger, Barking Deer and Spotted Deer, Monkeys, Civet Cats, Monitor Lizards and Otters. You can also spot aquatic wildlife such as Olive Ridley Turtles, Estuarine Crocodiles, River Terrapins, Gangetic Dolphins, Black Finless Porpoises, Catfish, Mudskippers, Crabs, Shrimps and Lobsters in the Sunderbans. If you are looking for an unusual destination, look no further than the Sunderbans. Sunderbans is only accessible by waterways. Nearest station is Port Canning from where organized group trips start. The other route is through Basanti which is connected by bus service to Kolkata. From here one can take boats to Sajnekhali. One can also come via Port Canning and Gosaba or from Sonakhali to Sajnekhali.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/sundarbans.jpg",
        "reference" =>"/place/details?template_id=1&id=638f90b09e20437bfb0ce140"
        ],
        [
        "title"=>"Kapil Muni Temple",  
        "coords"=>"1579,378,10",
        "desc"=>"Kapil Muni Temple is situated at Sagar Island in West Bengal. It is believed that the deity was installed in 1437 by Swami Ramanand. The current structure is a recent one and it has a stone block, considered to be the representation of Sage Kapil. The idol of the saint holds a small pot of water in his left hand and a rosary in the right. Images of Bhagirath, Ram and Sita can also be seen here. The annual Ganga Sagar Mela is celebrated on Makar Sankranti Day here. Pilgrims take a holy dip in the Ganges, before going to the temple. Sagar Island is 130 km from Kolkata. The great sage, Kapila Muni referred to in the legend is represented by a block of stone which is anointed and worshipped. The original site of the temple has been washed away by the sea. But an attractive new temple has replaced the previous temple. There are the emblems of the Sea, Ganga Devi and Bhagiratha besides that of Kapila Muni.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/kapil_muni_temple.jpg",
        "reference" =>""
        ],
        [
        "title"=>"Digha",  
        "coords"=>"1629,474,10",
        "desc"=>"Digha is West Bengal's most popular sea resort and tourist spot located south west of Calcutta. It is 187 km from Calcutta and described as the 'Brighton of the East', it is best for a holiday. Digha has a low gradient with a shallow sand beach with gentle waves, that extends 7 kms in length.
        In Digha, the sea starts about a mile away from the start of the beach. The scenic beauty of this place is charming and luring. The beach is girdled with casuarina plantations along the coast enhancing the beauty of this place. These trees apart from beautifying the sands also aid in reducing the erosion on the dunes.",
        "img_url"=>"http://127.0.0.1:8000/assets/img/map_image/digha1.jpg",
        "reference" =>"/place/details?template_id=1&id=638f91289e20437bfb0ce143"
        ]
        );
    $data =collect([]);
    foreach($data_array as $map){
        $d=collect();
        $d->title=$map['title'];
        $d->cx=explode(',',$map['coords'])[0];
        $d->cy=explode(',',$map['coords'])[1];
        $d->r=explode(',',$map['coords'])[2];
        $d->desc=$map['desc'];
        $d->reference=$map['reference'];
        $d->img_url=$map['img_url'];
        $data->push($d);

        
    }
    return $data;
}
//homestay tabs
function getHomeStayTabData()
{
    $data_array = array(
        [
            "id" => 1,
            "homestay_name" => "Durga Homestay",
            "address" => "Chuikhim, PO- Bagrakote, Dist Darjeeling, WB- 734301",
            "contact_no" => "+91-94752-50513",
            "email" => "",
            "district_code"=>"309"
        ],
        [
            "id" => 2,
            "homestay_name" => "Tara Homestay",
            "address" => "Chiukhim, PO- Bagrakote, Dist Darjeeling, WB- 734501",
            "contact_no" => "+91-9679891699",
            "email"=>"",
            "district_code"=>"309"
        ],
        [
            "id" => 3,
            "homestay_name" => "Khim Khesang Homestay",
            "address" => "Bunkulung, Mirik (45 minuites drive from Mirik)",
            "contact_no" => "+91-9932224074",
            "email" => "aswinitamang@rediffmail.com",
            "district_code"=>"309"
        ],
        [
            "id" => 4,
            "homestay_name" => "Nil Kiran Homestay",
            "address" => "Chiukhim, PO- Bagrakote, Dist Darjeeling, WB- 734501",
            "contact_no" => "+91-8967395506",
            "email"=>"",
            "district_code"=>"309"
        ],
        [
            "id" => 5,
            "homestay_name" => "Thapa Thali Salamander Homestay",
            "address" => "Deose Dara, Mirik (15 mins walk from Krishnangar, Road link- just close to the homestay, then walk for 5 mins)",
            "contact_no" => "+91-919932224074",
            "email" => "aswinitamang@rediffmail.com",
            "district_code"=>"309",
            "district_code"=>"309"
        ],
        [
            "id" => 6,
            "homestay_name" => "RAI HOME STAY",
            "address" => "KHAPTAWALI GAON, SOURENI BUSTY - 1",
            "contact_no" => "+91-89278-22125",
            "email" => "banirarai123@gmail.com",
            "district_code"=>"309"
        ],
        [
            "id" => 7,
            "homestay_name" => "Hollong Tourist Lodge",
            "address" => "Madari Hat, Dist: Alipurduar",
            "contact_no" => "+91-9734116034",
            "email" => "jaldaparatouristlodge2015@gmail.com",
            "district_code"=>"664"
        ],
        [
            "id" => 8,
            "homestay_name" => "Aranya Tourism Property earlier Jaldapara Tourist Lodge",
            "address" => "Post Office: Madarihat, Pin: 735220, District: Jalpaiguri",
            "contact_no" => "+91-9733008795",
            "email" => "jaldaparatouristlodge2015@gmail.com",
            "district_code"=>"664"
        ],
        [
            "id" => 9,
            "homestay_name" => "Pathasathi Birpara Chowpathi Madarihat Alipurduar",
            "address" => "Birpara, Chowpathi, Madarihat, Birpara Block",
            "contact_no" => "+91-9547272059",
            "email" => "",
            "district_code"=>"664"
        ],
        [
            "id" => 10,
            "homestay_name" => "Bishnupur Tourism Property earlier Bishnupur Tourist Lodge",
            "address" => "Post Office: Bishnupur, Pin- 722122, District: Bankura",
            "contact_no" => "+91-9732100950",
            "email" => "bishnupurtl@gmail.com",
            "district_code"=>"305"
        ],
        [
            "id" => 11,
            "homestay_name" => "Pathasathi Salgara Barjora Bankura",
            "address" => "Salgara, Barjora, Bankura",
            "contact_no" => "+91-7797729869 / 7908034603",
            "email" => "",
            "district_code"=>"305"
        ],
        [
            "id" => 12,
            "homestay_name" => "Shantobitan Tourism Property earlier Shantiniketan Tourist Lodge",
            "address" => "Bolpur, Pin: 731204, District: Birbhum",
            "contact_no" => "+91-9732100920",
            "email" => "santiniketantl@gmail.com",
            "district_code"=>"307"
        ],
        [
            "id" => 13,
            "homestay_name" => "Rangabitan Tourism Property earlier Rangabitan Tourist Complex",
            "address" => "Village Ballavpur, Post Office: Santiniketan, Pin- 7321236, District: Birbhum",
            "contact_no" => "+91-8697984960",
            "email" => "rangabitantc@gmail.com",
            "district_code"=>"307"
        ],
        [
            "id" => 14,
            "homestay_name" => "HOME STAY WORLD",
            "address" => "Bolpur Nichupatty, Near Bank of India, P.O. - Bolpur, Dist- Birbhum , 731204",
            "contact_no" => "+91-74328-73009/ 91531-00059/ 93328-99001/ 75839-88012",
            "email" => "info@homestayworld.in",
            "district_code"=>"307"
        ],
        [
            "id" => 15,
            "homestay_name" => "Pathasathi Khayrabuni Illambazar-I Birbhum",
            "address" => "Khayrabuni, Illambazar-I, Birbhum",
            "contact_no" => "+91-9732222088",
            "email" => "",
            "district_code"=>"307"
        ],
        [
            "id" => 16,
            "homestay_name" => "Pathasathi Nalhati Birbhum",
            "address" => "Nalhati, Birbhum",
            "contact_no" => "+91-9800927972",
            "email" => "",
            "district_code"=>"307"
        ],
        [
            "id" => 17,
            "homestay_name" => "Pathasathi Khoyrakuri Md. Bazar Suri Birbhum",
            "address" => "Khoyrakuri, Md. Bazar, Suri, Birbhum",
            "contact_no" => "+91-9434558217",
            "email" => "",
            "district_code"=>"307"
        ],
        [
            "id" => 18,
            "homestay_name" => "Pathasathi Makrampur Bolpur Birbhum",
            "address" => "Makrampur, Bolpur, Birbhum",
            "contact_no" => "+91-9614585031",
            "email" => "",
            "district_code"=>"307"
        ],
        [
            "id" => 19,
            "homestay_name" => "Pathasathi Karjona Purba Bardhaman",
            "address" => "Karjona, Purba Bardhaman",
            "contact_no" => "+91-7407379458",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 20,
            "homestay_name" => "Pathasathi Kalna Purba Bardhaman",
            "address" => "Kalna, Purba Bardhaman",
            "contact_no" => "+91-8016019159",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 21,
            "homestay_name" => "Pathasathi Guskara Purba Bardhaman",
            "address" => "Guskara, Purba Bardhaman",
            "contact_no" => "+91-8637811752",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 22,
            "homestay_name" => "Pathasathi Budbud Purba Bardhaman",
            "address" => "Budbud, Purba Bardhaman",
            "contact_no" => "+91-9609930094 / 6295862084",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 23,
            "homestay_name" => "Pathasathi Shaktigarh Purba Bardhaman",
            "address" => "Shaktigarh, Purba Bardhaman",
            "contact_no" => "+91-8927996712",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 24,
            "homestay_name" => "Pathasathi Sagrai More Purba Bardhaman",
            "address" => "Sagrai More, Purba Bardhaman",
            "contact_no" => "+91-8637052998",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 25,
            "homestay_name" => "Pathasathi Samudragarh Purba Bardhaman",
            "address" => "Samudragarh, Purba Bardhaman",
            "contact_no" => "+91-8926044435",
            "email" => "",
            "district_code"=>"306"
        ],
        [
            "id" => 26,
            "homestay_name" => "Muktadhara Tourism Property earlier Maithon Tourist Lodge",
            "address" => "Post Office: Kalyaneswari,  Pin - 713369, District: Paschim Bardhaman",
            "contact_no" => "+91-9732100940",
            "email" => "lodgemaithantl@gmail.com",
            "district_code"=>"704"
        ],
        [
            "id" => 27,
            "homestay_name" => "Shoilpik Tourism Property earlier Pathik Motel",
            "address" => "Gandhi More, Post Office: Durgapur, Pin: 713216, District: Paschim Burdwan ",
            "contact_no" => "+91-9732100930",
            "email" => "pathikmotel@gmail.com",
            "district_code"=>"704"
        ],
        [
            "id" => 28,
            "homestay_name" => "Pathasathi Barakar Ins Bungalow Paschim Bardhaman",
            "address" => "Barakar Ins Bungalow, Paschim Bardhaman",
            "contact_no" => "+91-7001100567",
            "email" => "",
            "district_code"=>"704"
        ],
        [
            "id" => 29,
            "homestay_name" => "Pathasathi Jamaldah Coochbehar",
            "address" => "Jamaldah, Coochbehar",
            "contact_no" => "+91-9547145856",
            "email" => "",
            "district_code"=>"308"
        ],
        [
            "id" => 30,
            "homestay_name" => "Pathasathi Hilli Dakshin Dinajpur",
            "address" => "Hilli Dakshin, Dinajpur",
            "contact_no" => "+91-7797378850",
            "email" => "mahamilansangha11@gmail.com",
            "district_code"=>"310"
        ],
        [
            "id" => 31,
            "homestay_name" => "Pathasathi Tapan Dakshin Dinajpur",
            "address" => "Tapan, Dakshin Dinajpur",
            "contact_no" => "+91-9564862212",
            "email" => "",
            "district_code"=>"310"
        ],
        [
            "id" => 32,
            "homestay_name" => "Pathasathi Patiram Dakshin Dinajpur",
            "address" => "Patiram, Dakshin Dinajpur",
            "contact_no" => "+91-7908789531",
            "email" => "jashodaranisangha2009@gmail.com",
            "district_code"=>"310"
        ],
        [
            "id" => 33,
            "homestay_name" => "Nataraj Tourism Property earlier Tarakeswar Tourist Lodge",
            "address" => "Guest House Road, Mandir Para, Post Office: Tarakeswar, Pin-712410,  District: Hooghly",
            "contact_no" => "+91-9732509927",
            "email" => "tarakeswartouristlodge@gmail.com",
            "district_code"=>"312"
        ],
        [
            "id" => 34,
            "homestay_name" => "Pathasathi Kodalia Chinsurah Hooghly",
            "address" => "Pathasathi, Kodalia, Chinsurah, Hooghly",
            "contact_no" => "+91-8902218894 / 033-6502-3399 / 77",
            "email" => "",
            "district_code"=>"312"
        ],
        [
            "id" => 35,
            "homestay_name" => "Pathasathi Kamarpukur Hooghly",
            "address" => "Kamarpukur, Hooghly",
            "contact_no" => "+91-7797762144",
            "email" => "",
            "district_code"=>"312"
        ],
        [
            "id" => 36,
            "homestay_name" => "Pathasathi Methapukur Chinsurah-Mogra Hooghly",
            "address" => "Methapukur, Chinsurah-Mogra, Hooghly",
            "contact_no" => "+91-9830517430",
            "email" => "",
            "district_code"=>"312"
        ],
        [
            "id" => 37,
            "homestay_name" => "Pathasathi Bishnubati Tarekeswar Hooghly",
            "address" => "Bishnubati, Tarekeswar, Hooghly",
            "contact_no" => "+91-9635617261",
            "email" => "",
            "district_code"=>"312"
        ],
        [
            "id" => 38,
            "homestay_name" => "Roopmanjari Tourism Property earlier Rupnarayan Tourist Lodge",
            "address" => "Post Office: Dakshin Shibpur, Gadiara, Pin - 711314, District: Howrah",
            "contact_no" => "+91-9732510076",
            "email" => "rupnarayantouristl15@gmail.com",
            "district_code"=>"313"
        ],
        [
            "id" => 39,
            "homestay_name" => "Pathasathi Munsirhat Howrah",
            "address" => "Munsirhat, Howrah",
            "contact_no" => "+91-9735780518",
            "email" => "",
            "district_code"=>"313"
        ],
        [
            "id" => 40,
            "homestay_name" => "Teesta Sundori Tourism Property earlier Teesta Paryatak",
            "address" => "Suja Composite Complex, Near BDO Office, PIN - 735121, District: Jalpaiguri, Post Office: Deanguajhar ",
            "contact_no" => "+91-9733008794",
            "email" => "ratandebnath.wbtdc@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 41,
            "homestay_name" => "Bonolokkhi Tourism Property earlier Malbazar Tourist Lodge",
            "address" => "District: Jalpaiguri, Post Office: Malbazar, Pin: 735221",
            "contact_no" => "+91-9733008793",
            "email" => "malbazartl@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 42,
            "homestay_name" => "Tilottama Tourism Property earlier Tilabari Tourist Complex",
            "address" => "P.S: Meteli, (Near Garumara N.P), Post Office: Batabari, Pin: 735206, District: Jalpaiguri",
            "contact_no" => "+91-8697984959",
            "email" => "tilabaritouristcomplex@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 43,
            "homestay_name" => "Batabari Tourism Property earlier Batabari Tourist Complex",
            "address" => "Batabari, Post office: Batabari, Pin: 735206, District: Jalpaiguri",
            "contact_no" => "+91-8697984962",
            "email" => "batabaritc@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 44,
            "homestay_name" => "Moorti Tourism Property earlier Murti Tourist Lodge",
            "address" => "Dhupjhora, Post Office: Batabari, District: Jalpaiguri, Pin: 735206",
            "contact_no" => "+91-9874053292",
            "email" => "murtitouristresort2015@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 45,
            "homestay_name" => "Bhorer Alo Tourism Property earlier Bhorer Alo",
            "address" => "Gajoldoba, P.S: Milan Pally, Pin: 735133, District: Jalpaiguri",
            "contact_no" => "+91-7029435557",
            "email" => "bhoreralo.wbtdc@gmail.com",
            "district_code"=>"314"
        ],
        [
            "id" => 46,
            "homestay_name" => "Prakriti",
            "address" => "Jainti, PO:- Jainti, Dt:- Jalpaiguri, WB",
            "contact_no" => "+91-913564-204089, 91933326392, 91 93329724841",
            "email" => "",
            "district_code"=>"314"
        ],
        [
            "id" => 47,
            "homestay_name" => "Meto Maap",
            "address" => "Lhapchakha, PO:- Buxaduar, Dt:- Jalpaiguri, WB",
            "contact_no" => "",
            "email" => "",
            "district_code"=>"314"
        ],
        [
            "id" => 48,
            "homestay_name" => "Green View Homestay",
            "address" => "Jainti, PO:- Jainti, Dt:- Jalpaiguri, WB",
            "contact_no" => "+91-913564-203157, 917872844523, 919476221413, 919609783496",
            "email" => "",
            "district_code"=>"314"
        ],
        [
            "id" => 49,
            "homestay_name" => "Jhargram Rajbari Tourism project",
            "address" => "Old Jhargram, Post Office: Jhargram Rajbari, District: Jhargram, Pin: 721514",
            "contact_no" => "+91-7477424854",
            "email" => "jhargramtouristlodge@gmail.com",
            "district_code"=>"703"
        ],
        [
            "id" => 50,
            "homestay_name" => "Pathasathi Lodhasuli Jhargram",
            "address" => "Lodhasuli, Jhargram",
            "contact_no" => "+91-9474515811 / 8670912090",
            "email" => "",
            "district_code"=>"703"
        ],
        [
            "id" => 51,
            "homestay_name" => "Hill Top Tourism Property earlier Hill Top Tourist Lodge",
            "address" => "Post Office: Kalimpong, Pin: 734301 District: Kalimpong",
            "contact_no" => "+91-9836621300",
            "email" => "hilltoptouristlodge@gmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 52,
            "homestay_name" => "Morgan House Cottages",
            "address" => "Post Office: Kalimpong, District: Kalimpong, Pin: 734301",
            "contact_no" => "+91-9733008776",
            "email" => "morganhousetl@gmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 53,
            "homestay_name" => "Tashiding Tourism Property earlier Tashiding Tourist Lodge",
            "address" => "Post Office:  Kalimpong Pin: 734301 District: Kalimpong",
            "contact_no" => "+91-9733008776",
            "email" => "morganhousetl@gmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 54,
            "homestay_name" => "Morgan House Tourism Property earlier Morgan House Tourist Lodge",
            "address" => "Post Office: Kalimpong, Pin: 734301, District: Kalimpong",
            "contact_no" => "+91-9733008776",
            "email" => "morganhousetl@gmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 55,
            "homestay_name" => "The Chibbo Inn",
            "address" => "Rinkingpong Primary School , Chibbo Busty, Kalimpong",
            "contact_no" => "+91-96351-30221/ 94341-17680",
            "email" => "thechibboinn@hotmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 56,
            "homestay_name" => "Himalayan Eagle Resort Home Stay",
            "address" => "GANKUL HEALTH CENTER, LOWER CHIBBO BUSTY, KALIMPONG",
            "contact_no" => "+91-89720-30484/ 70763-34686",
            "email" => "khatisusanne@gmail.com",
            "district_code"=>"702"
        ],
        [
            "id" => 57,
            "homestay_name" => "Udayachal Tourism Property",
            "address" => "DG Block Sector-II, Salt Lake, Kolkata - 700091",
            "contact_no" => "+91-9874026899",
            "email" => "udayachaltl@gmail.com",
            "district_code"=>"315"
        ],
        [
            "id" => 58,
            "homestay_name" => "Kalighat Pilgrimage Facilitation Centre",
            "address" => "35A, Kalighat Temple Road, Kolkata - 700026",
            "contact_no" => "+91-9874026908",
            "email" => "kalighattouristlodgelodge@gmail.com",
            "district_code"=>"315"
        ],
        [
            "id" => 59,
            "homestay_name" => "Amrapali Tourism Property earlier Malda Tourist Lodge",
            "address" => "Post Office: Rathbari, Pin: 732101, District: Malda ",
            "contact_no" => "+91-9733008792",
            "email" => "tourismmalda@gmail.com",
            "district_code"=>"316"
        ],
        [
            "id" => 60,
            "homestay_name" => "Pathasathi Old Malda",
            "address" => "Old Malda",
            "contact_no" => "+91-9064162910",
            "email" => "pathasathimalda@gmail.com",
            "district_code"=>"316"
        ],
        [
            "id" => 61,
            "homestay_name" => "Bohor Tourism Property earlier Baharampur Tourist Lodge",
            "address" => "48, K.N. Road, Post Office: Baharampur, Pin: 742101, District: Murshidabad",
            "contact_no" => "+91-9732510031",
            "email" => "berhampore12@gmail.com",
            "district_code"=>"319"
        ],
        [
            "id" => 62,
            "homestay_name" => "Pathasathi Andi Sabaldaha Kandi Barwan Murshidabad",
            "address" => "Andi, Sabaldaha, Kandi, Barwan, Murshidabad",
            "contact_no" => "",
            "email" => "",
            "district_code"=>"319"
        ],
        [
            "id" => 63,
            "homestay_name" => "Pathasathi Jalangi Choapara Domkal Murshidabad",
            "address" => "Jalangi, Choapara, Domkal, Murshidabad",
            "contact_no" => "+91-9732238925",
            "email" => "",
            "district_code"=>"319"
        ],
        [
            "id" => 64,
            "homestay_name" => "Pathasathi Farakka Beniagram Murshidabad",
            "address" => "Farakka, Beniagram GP, Murshidabad",
            "contact_no" => "+91-8016196852",
            "email" => "",
            "district_code"=>"319"
        ],
        [
            "id" => 65,
            "homestay_name" => "Pathasathi Haringhata Nadia",
            "address" => "Haringhata, Nadia",
            "contact_no" => "+91-9733644370",
            "email" => "",
            "district_code"=>"320"
        ],
        [
            "id" => 66,
            "homestay_name" => "Pathasathi Santipur Nadia",
            "address" => "Santipur, Nadia",
            "contact_no" => "+91-9153124217 / 9679973940",
            "email" => "",
            "district_code"=>"320"
        ],
        [
            "id" => 67,
            "homestay_name" => "Pathasathi Krishnanagar-I Nadia",
            "address" => "Krishnanagar-I, Nadia",
            "contact_no" => "+91-9641893663",
            "email" => "",
            "district_code"=>"320"
        ],
        [
            "id" => 68,
            "homestay_name" => "Pathasathi Ghatigacha Ranaghat-II Nadia",
            "address" => "Ghatigacha, Ranaghat-II, Nadia",
            "contact_no" => "+91-7098530095",
            "email" => "",
            "district_code"=>"320"
        ],
        [
            "id" => 69,
            "homestay_name" => "Pathasathi Debagram Nadia",
            "address" => "Debagram, Nadia",
            "contact_no" => "+91-9153052764",
            "email" => "",
            "district_code"=>"320"
        ],
        [
            "id" => 70,
            "homestay_name" => "Mangaldhara Tourism Property earlier Malancha Tourist Lodge",
            "address" => "Barrackpore, Jaharkunj (Near Gandhi Ghat), District: North 24 Parganas, Pin: 700120",
            "contact_no" => "+91-9874026921",
            "email" => "malanchatouristoldge@gmail.com",
            "district_code"=>"303"
        ],
        [
            "id" => 71,
            "homestay_name" => "Pathasathi Berachampa North 24 Parganas",
            "address" => "Berachampa, North 24 Parganas",
            "contact_no" => "",
            "email" => "",
            "district_code"=>"303"
        ],
        [
            "id" => 72,
            "homestay_name" => "Pathasathi Bangaon North 24 Parganas",
            "address" => "Bangaon, North 24 Pargana",
            "contact_no" => "",
            "email" => "",
            "district_code"=>"303"
        ],
        [
            "id" => 73,
            "homestay_name" => "Pathasathi Swarupnagar Tentulia North 24 Parganas",
            "address" => "Swarupnagar, Tentulia, North 24 Parganas",
            "contact_no" => "+91-9647427373 / 9563714123",
            "email" => "",
            "district_code"=>"303"
        ],
        [
            "id" => 74,
            "homestay_name" => "Mrittika Tourism Property earlier Rani Shiromoni Paryatak Abas",
            "address" => "Dakbungalow Road, Post Office & District: Medinipur (West), Pin - 721101",
            "contact_no" => "+91-9732510074",
            "email" => "tourismcentrekolkata@gmail.com",
            "district_code"=>"318"
        ],
        [
            "id" => 75,
            "homestay_name" => "Pathasathi Debra Paschim Medinipur",
            "address" => "Debra, Paschim Medinipur",
            "contact_no" => "+91-9609182443",
            "email" => "",
            "district_code"=>"318"
        ],
        [
            "id" => 76,
            "homestay_name" => "Pathasathi Nimpura Kharagpur-I Paschim Medinipur",
            "address" => "Nimpura, Kharagpur-I, Paschim Medinipur",
            "contact_no" => "+91-8918793866",
            "email" => "",
            "district_code"=>"318"
        ],
        [
            "id" => 77,
            "homestay_name" => "Pathasathi Narayangarh Paschim Medinipur",
            "address" => "Narayangarh, Paschim Medinipur",
            "contact_no" => "+91-8145986311",
            "email" => "",
            "district_code"=>"318"
        ],
        [
            "id" => 78,
            "homestay_name" => "Dighali Tourism Property earlier Digha Tourist Lodge",
            "address" => "Old Digha (Near SBI),  Post Office: Digha, Pin- 721428, District: East Medinipur",
            "contact_no" => "+91-9732510134",
            "email" => "dighatouristlodge@gmail.com",
            "district_code"=>"317"
        ],
        [
            "id" => 79,
            "homestay_name" => "Digha Youth Hostel, New Digha",
            "address" => "Post Office- New Digha, Purba Medinipur, Pin-721463.",
            "contact_no" => "+91-03220266278",
            "email" => "",
            "district_code"=>"317"
        ],
        [
            "id" => 80,
            "homestay_name" => "Pathasathi Nandakumar Purba Medinipur",
            "address" => "Nandakumar, Purba Medinipur",
            "contact_no" => "+91-9564481640",
            "email" => "",
            "district_code"=>"317"
        ],
        [
            "id" => 81,
            "homestay_name" => "Pathasathi Mechada Purba Medinipur",
            "address" => "Mechada, Purba Medinipur",
            "contact_no" => "+91-9748033426 / 9007306062",
            "email" => "",
            "district_code"=>"317"
        ],
        [
            "id" => 82,
            "homestay_name" => "Pathasathi Chasmore Joypur Purulia",
            "address" => "Chasmore, Joypur, Purulia",
            "contact_no" => "+91-6297617054 / 9732418426 / 7318621470",
            "email" => "",
            "district_code"=>"321"
        ],
        [
            "id" => 83,
            "homestay_name" => "Pathasathi Raghunathpur-I Purulia",
            "address" => "Raghunathpur-I, Purulia",
            "contact_no" => "+91-7908343790",
            "email" => "joychandihillresort15@gmail.com",
            "district_code"=>"321"
        ],
        [
            "id" => 84,
            "homestay_name" => "Pathasathi Jhapra Purulia",
            "address" => "Jhapra, Purulia",
            "contact_no" => "+91-9064731244",
            "email" => "manorama.pariseba@gmail.com",
            "district_code"=>"321"
        ],
        [
            "id" => 85,
            "homestay_name" => "Pathasathi Hura Purulia",
            "address" => "Hura, Purulia",
            "contact_no" => "+91-9382578713",
            "email" => "manorama.pariseba@gmail.com",
            "district_code"=>"321"
        ],
        [
            "id" => 86,
            "homestay_name" => "Pathasathi Sarbari More Purulia",
            "address" => "Sarbari More, Purulia",
            "contact_no" => "+91-9434077070",
            "email" => "charulataresorts@gmail.com",
            "district_code"=>"321"
        ],
        [
            "id" => 87,
            "homestay_name" => "Balutot Tourism Property earlier Bakkhali Tourist Lodge",
            "address" => "National Highway 117, Laxmipur Prabartak, District: South 24 Parganas, Pin: 743357, Post Office: Laxmipur Prabartak",
            "contact_no" => "+91-9732510150",
            "email" => "bkhltl123@rediffmail.com",
            "district_code"=>"304"
        ],
        [
            "id" => 88,
            "homestay_name" => "Sagorika Tourism Property earlier Diamond Harbour Tourist Centre Sagarika",
            "address" => "Rabindra Nagar, Ward no 10, Post Office: Diamond Harbour, Pin: 743331, District: South 24 Parganas ",
            "contact_no" => "+91-9732510035",
            "email" => "dhtc.sagarika@gmail.com",
            "district_code"=>"304"
        ],
        [
            "id" => 89,
            "homestay_name" => "Matla Tourism Property earlier Sajnekhali Tourist Lodge",
            "address" => "Sunderbans, Post Office: Pakhiralaya, Police Station: Sunderban Coastal, Pin - 743379",
            "contact_no" => "+91-9732509925",
            "email" => "sajnekhaliwbt22@gmail.com",
            "district_code"=>"304"
        ],
        [
            "id" => 90,
            "homestay_name" => "Aronnok Home Stay",
            "address" => "Samabay More, Tridivnagar, Jharkhali, Basanti, 24 Pgs(S)",
            "contact_no" => "+91-78658-57711",
            "email" => "aranyakhomestay@gmail.com",
            "district_code"=>"304"
        ],
        [
            "id" => 91,
            "homestay_name" => "Mangrove Wild Home Stay",
            "address" => "Samabay More, Tridivnagar, Jharkhali, Basanti, 24 Pgs(S)",
            "contact_no" => "+91-97488-31356",
            "email" => "wildadventure3@gmail.com",
            "district_code"=>"304"
        ],
        [
            "id" => 92,
            "homestay_name" => "Sarkar Home Stay",
            "address" => "Samabay More, Tridivnagar, Jharkhali, Basanti, 24 Pgs(S)",
            "contact_no" => "+91-97756-21037",
            "email" => "",
            "district_code"=>"304"
        ],
        [
            "id" => 93,
            "homestay_name" => "Dinantey Tourism Property earlier Raigunj Tourist Lodge",
            "address" => "Post Office - Madhupur,
            District - Uttar Dinajpur",
            "contact_no" => "+91-9733008791",
            "email" => "tourismcentrekolkata@gmail.com",
            "district_code"=>"311"
        ],
        [
            "id" => 94,
            "homestay_name" => "Pathasathi Itahar Uttar Dinajpur",
            "address" => "Itahar, Uttar Dinajpur",
            "contact_no" => "+91-9614389367",
            "email" => "",
            "district_code"=>"311"
        ],
        [
            "id" => 95,
            "homestay_name" => "Pathasathi Dalkhola Uttar Dinajpur",
            "address" => "Dalkhola, Uttar Dinajpur",
            "contact_no" => "+91-9775902738",
            "email" => "",
            "district_code"=>"311"
        ],
        [
            "id" => 96,
            "homestay_name" => "Pathasathi Islampur Uttar Dinajpur",
            "address" => "Islampur, Uttar Dinajpur",
            "contact_no" => "+91-8972066385",
            "email" => "",
            "district_code"=>"311"
        ],
    );
    $data = collect([]);
    foreach ($data_array as $item) {
        $b = collect();
        $b->id = $item['id'];
        $b->homestay_name = $item['homestay_name'];
        $b->address = $item['address'];
        $b->contact_no = $item['contact_no'];
        $b->email = $item['email'];
        $b->district_code = $item['district_code'];
        $data->push($b);
    };
    return $data;
}

function LoadFest(){
    $data_array=array(
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4210.jpg",
                
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2911.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/301.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3110.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3210.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3310.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3410.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3510.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3610.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3710.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3810.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/3910.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/40.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4110.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2811.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4310.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4410.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4510.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4610.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4710.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/4810.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/498.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/50.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/5110.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/5210.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/5310.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/5410.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/555.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1521.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0239.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0327.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0428.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0526.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0622.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0719.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/0816.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/kolkata_christmas_festival_2018_40.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1026.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1133.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1232.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1326.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1425.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/00111.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1622.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/1716.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/kolkata_christmas_festival_2018_41.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/kolkata_christmas_festival_2018_42.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/204.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2118.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2216.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2315.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2413.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2511.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2611.jpg"
            ],
            [
                "image_url" => "https://www.wbtourism.gov.in/home/download/gallery_photo/2711.jpg"
            ]
         );

 
    // $data = collect([]);
//    $delete = Item::where('tags','Kolkata Christmas Festival -2018')->delete();
    foreach ($data_array as $key => $item) {
        $mdl = new Item();
        $b = collect();
        $name='Kolkata Christmas Festival 2018 at Allen Park, Park Street';
        $tags_array = array();
    
            array_push($tags_array, $name);
            array_push($tags_array, 'gallery');
            array_push($tags_array, 'Kolkata Christmas Festival -2018');
           
        
        if($item['image_url']){
    
            $model1 = new Item();
            $path =$item['image_url'];
            $url=str_replace('www.','',$path);
            // dd($url);
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
                $model1->image_type='gallery';
                $model1->is_active=1;
                $model1->is_approved=1;
                $model1->tags = $tags_array;
                // $thumbnail_image_is_save=$model1->save();
            //     $g->guide_image_obj_id=new MongoObjectId($model1->getKey()) ;
                $model1->save();
        }
        // $b->order=$key;
        $mdl->gallery_image_obj_id=new MongoObjectId($model1->getKey());
        $mdl->name = $name;
        $mdl->district = 303;
        $mdl->gallery_category_id='63da4dcf021414681706d96a';
        $mdl->gallery_category = 'Kolkata Christmas Festival -2018';
        $mdl->is_active=1;
        $mdl->is_approved=1;
        $mdl->type = 'gallery';
        
        
        // dd($mdl);
        $mdl->save();
    };
    
    


}

