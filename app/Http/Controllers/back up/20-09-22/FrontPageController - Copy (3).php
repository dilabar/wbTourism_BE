<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Destination;
use MongoGrid;
class FrontPageController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
       
    }
    public function mongoid($v)
    {
    return new \MongoDB\BSON\ObjectId($v);
    }
    public function index(Request $request)
    {
        $banner_list = collect([
            (object) [
                'template_type' => 1,
                'title' => 'Victoria Memorial',
                'slogan' => 'Make Your Trip Fun & Noted',
                'short_description' => 'Travel has helped us to understand the meaning of life and it has helped us become
                                         better people. Each time we travel, we see the world with new eyes.',
                'image_path' => 'assets/img/banner/victoria.jpg'
            ],
            (object) [
                'template_type' => 2,
                'title' => 'Darjeeling',
                'slogan' => 'Make Your Trip Fun & Noted',
                'short_description' => 'Travel has helped us to understand the meaning of life and it has helped us become
                                         better people. Each time we travel, we see the world with new eyes.',
                'image_path' => 'assets/img/banner/himalayas.jpg'
            ],
            (object) [
                'template_type' => 2,
                'title' => 'Culture',
                'slogan' => 'Make Your Trip Fun & Noted',
                'short_description' => 'Travel has helped us to understand the meaning of life and it has helped us become
                                         better people. Each time we travel, we see the world with new eyes.',
                'image_path' => 'assets/img/banner/culture.JPG'
            ],
            (object) [
                'template_type' => 2,
                'title' => 'Wildlife',
                'slogan' => 'Make Your Trip Fun & Noted',
                'short_description' => 'Travel has helped us to understand the meaning of life and it has helped us become
                                         better people. Each time we travel, we see the world with new eyes.',
                'image_path' => 'assets/img/banner/wildlife.jpg'
            ]
        ]);
        $product_list = collect([
            (object) [
                'id' => 1,
                'title' => 'Sundarbans',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/sundarbans.png',
                'gradient' => '(90deg, #1673cd 45%, rgb(71 101 111 / 11%) 100%);'
            ],
            (object) [
                'id' => 2,
                'title' => 'Wildlife in Dooars',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/dooars.png',
                'gradient' => '(90deg, rgb(14 78 24) 45%, rgb(14 78 24 / 38%) 100%);'
            ],
            (object) [
                'id' => 3,
                'title' => 'Cultural Heritage',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/victoria.jpg',
                'gradient' => '(90deg, #1673cd 45%, rgb(71 101 111 / 11%) 100%);'
            ],
            (object) [
                'id' => 4,
                'title' => 'West Bengal Cuisine',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/kalighat.png',
                'gradient' => '(90deg, rgb(249 130 0) 45%, rgb(249 130 0 / 20%) 100%);'
            ],
            (object) [
                'id' => 5,
                'title' => 'River Tourism - Heritage On Ganges',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/howrah.png',
                'gradient' => '(90deg, #9c1fa1 45%, rgb(156 31 161/38%) 100%);'
            ],
            (object) [
                'id' => 6,
                'title' => 'Tea Tourism',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/teatourism.png',
                'gradient' => '(90deg, rgb(14 78 24) 45%, rgb(14 78 24 / 38%) 100%);'
            ],
            (object) [
                'id' => 7,
                'title' => 'Durga Puja',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/himalayas.png',
                'gradient' => '(90deg, rgb(10 82 106) 45%, rgb(249 130 0 / 20%) 100%)'
            ],
            (object) [
                'id' => 8,
                'title' => 'Coastal',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/coastal.png',
                'gradient' => '(90deg, #1673cd 45%, rgb(71 101 111 / 11%) 100%);'
            ],
            (object) [
                'id' => 9,
                'title' => 'Durga Puja',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/durga-puja.jpg',
                'gradient' => '(90deg, rgb(249 130 0) 45%, rgb(249 130 0 / 20%) 100%);'
            ],
            (object) [
                'id' => 10,
                'title' => 'Durga Puja',
                'short_description' => 'Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew
                                        dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase
                                        tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.',
                'image_path' => 'assets/img/top_product/rajbari.png',
                'gradient' => '(90deg, #662e27 45%, rgb(102 46 39/38%) 100%)'
            ],
        ]);
        //$product_list=collect([]);
        $event_list=collect([]);
        return view('frontpage/index',
        [
            'banner_list' => $banner_list,
            'product_list' => $product_list,
            'event_list' => $event_list,
        ]);
    }
}
