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
        "title"=>"coochbihar",
        "coords"=>"491,183,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
       
        ],
        [ 
        "title"=>"santi",
        "coords"=>"352,257,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        
        ],
        [
        "title"=>"neora" ,
        "coords"=>"399,260,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
       
        ],
        [
        "title"=>"garumara",
        "coords"=>"446,274,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
       
        ],
        [
        "title"=>"toy train" ,
        "coords"=>"354,321,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"kulik",  
        "coords"=>"575,376,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"burhana",  
        "coords"=>"654,381,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"hazi danes",  
        "coords"=>"723,332,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"firoz minar",  
        "coords"=>"775,364,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"dakhil darwaja",  
        "coords"=>"790,403,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"hazar duari",  
        "coords"=>"1007,354,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"hetampur",  
        "coords"=>"1052,440,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"rabindra bhaban",  
        "coords"=>"1134,449,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"maithon dam",  
        "coords"=>"1114,541,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"iskon temple",  
        "coords"=>"1191,344,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"ajodya",  
        "coords"=>"1206,618,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"tomp of sher afgan",  
        "coords"=>"1230,423,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"madan mahan temple",  
        "coords"=>"1255,505,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"chhau dance",  
        "coords"=>"1243,669,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"rashmancha",  
        "coords"=>"1288,557,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"belur math", 
         "coords"=>"1339,476,10",
          "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"Hooghly Imambara", 
        "coords"=>"1366,387,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"Airport",  
        "coords"=>"1399,340,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"Dakhineswar",  
        "coords"=>"1419,435,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"Victoria memorial",  
        "coords"=>"1470,354,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"Garbeta",  
        "coords"=>"1443,534,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"kanak Durga",  
        "coords"=>"1490,563,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"Haldia Dock",  
        "coords"=>"1518,407,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"Mahishadal Rajbari",  
        "coords"=>"1527,471,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
         
        ],
        [
        "title"=>"sundar ban", 
        "coords"=>"1555,300,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
        ],
        [
        "title"=>"kapil muni",  
        "coords"=>"1579,378,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
          
        ],
        [
        "title"=>"digha",  
        "coords"=>"1629,474,10",
         "desc"=>"",
        "img_url"=>"http://127.0.0.1:8000/assets/img/destination/himalya.png"
        
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
        $d->img_url=$map['img_url'];
        $data->push($d);

        
    }
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

