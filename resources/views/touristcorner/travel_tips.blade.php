@extends('layouts.myapp')
<style>
    .travel_tip{padding: 40px;background: #89d5e77a;}
    .travel_tip p.heading{text-align: left;color: #282828;font-size: 20px;text-transform: none;padding-top: 0px;}
    .travel_tip p.heading2 {color: #333 !important;line-height: 24px;margin: 20px auto;font-weight:bold;}
    .travel_tip .list1 ul li {color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 15px;text-align: left;}
    .travel_tip .link a{color:#0d14fd;}
</style>
@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2>Travel <span style="color:#518117;">T</span><span style="color: #0E538D;">i</span><span
                    style="color: #D12150;">p</span><span style="color: #F48C18;">s</span></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="travel_tip">
                        <p class="heading">Travel Kit (Basic travel kit to carry along while travelling in West Bengal)
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Essentials:</p>
                                    <div class="list1">
                                        <ul>
                                            <li>Passport</li>
                                            <li>Airline Tickets</li>
                                            <li>500 USD Cash</li>
                                            <li>200 USD in Traveller's Checks</li>
                                            <li>Electricity Convertor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Security:</p>
                                    <div class="list1">
                                        <ul>
                                            <li>Flashlights</li>
                                            <li>Knives (Swiss/multi-purpose, other sharp knife)</li>
                                            <li>Cable lock (useful in trains to lock suitcase to train, prevents walking
                                                away...)</li>
                                            <li>Small locks (always keep all bags locked)</li>
                                            <li>Money belt and/or passport pouch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Miscellaneous:</p>
                                    <div class="list1">
                                        <ul>
                                            <li>Little camera, big camera, holders</li>
                                            <li>Reading material</li>
                                            <li>Notepads</li>
                                            <li>Immersion heater for heating water</li>
                                            <li>Small needle and thread kit</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Food</p>
                                    <div class="list1">
                                        <ul>
                                            <li>High protein snacks (peanut butter, nuts)</li>
                                            <li>Dried soups/dehydrated food</li>
                                            <li>Herbal teas</li>
                                            <li>Energy bars</li>
                                            <li>Comfort food<br>
                                                <br>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="heading2">Travel Aids</p>
                                    <div class="list1">
                                        <ul>
                                            <li>Blow up pilllow</li>
                                            <li>Sleeping bag pouch (for dirty hotel beds)</li>
                                            <li>Backpack for day trips, walking around</li>
                                            <li>Map of India</li>
                                            <li>Small calculator (for money conversion)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Clothing</p>
                                    <div class="list1">
                                        <ul>
                                            <li>Requisite clothes</li>
                                            <li>Windbreaker</li>
                                            <li>Sweatshirt</li>
                                            <li>Rain poncho</li>
                                            <li>Hats (with decent size brims)</li>
                                            <li>Small umbrella</li>
                                            <li>Sunglasses</li>
                                            <li>Flip-flops</li>
                                            <li>Cheap sneakers</li>
                                            <li>Hiking sneakers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list_devide">
                                    <p class="heading2">Medicine-Health-Hygiene:</p>
                                    <div class="list1">
                                        <ul>
                                            <li>First Aid kit</li>
                                            <li>General Medicine</li>
                                            <li>Sunscreen</li>
                                            <li>Tissues: Small packages</li>
                                            <li>Disinfectant liquid (in hand-soap dispenser, very useful)</li>
                                            <li>Bandaids</li>
                                            <li>Mosquito repellant</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Drugs (Narcotics law)</h3>
                        <p>There a number of substances banned in India under the Narcotic Drugs and Psychotropic
                            Substances Act (1985).Please view the list which uses the International Nonproprietary Name
                            (INN) of the drugs but in some cases mentions drugs by their chemical name. Widely known
                            drugs such as ganja, cocaine, heroin etc. are mentioned by those names. </p>
                        <p class="link"><a href="http://www.nhp.gov.in/Complete-list-of-344-drugs-banned-by-the-Ministry-of-Health-Family-welfare_pg"
                                target="_blank">Click here to view the list of banned substances in India</a></p>
                        <h3>Food (Guidelines on types of local food available on tourist places)</h3>
                        <p>Bengali food consists of a lot of fish, lentils and rice. Breakfast could be milk and rice
                            flakes eaten with "gur" or "luchi" (fluffy wheat pancake) with "alu dum" (potato mish-mash).
                            Lunch and dinner are elaborate affairs. The first course is rice and "daal" (lentil curry)
                            with vegetables, pickled mangos and fresh salad. It is followed by rice and meat and yet
                            another course of rice and fish. Great fish eaters, the true blue Bengali is the one who can
                            crunch fish bones without letting them stick in the throat! The "hilsa" fish is a speciality
                            when cooked in mustard sauce. <br><br>

                            Bengalis love sweets. A vast array of milk based "mithai" (sweetmeats) originated in Bengal.
                            The light and spongy Rosogulla, the mouth-watering Sandesh are available all over India, but
                            nowhere do they taste as they do in Kolkata. Sweet shops in other parts of the country just
                            have to call themselves "Bengali Sweet House" and their reputation is established. If in
                            Kolkata do try the delectable Mishti Doi (rich, sweet yoghurt).</p>

                        <h3>Tipping and Etiquette</h3>
                        <h3>Tipping</h3>
                        <p>Visitors are not to be expected to tip taxi drivers. However, hotel, airport and train
                            station porters should be tipped approximately Rs20/bag. If a service charge is not
                            included, tip guides and drivers approximately Rs200 per day or 10 percent where
                            appropriate. In restaurants, if the service was good, tip anything between approx 5-10% of
                            the bill. Depending on the category of the hotel, and the bill amount. Its not mandatory,
                            you may not leave a tip if you don't want to.</p>

                        <h3>Etiquette</h3>
                        <p>Kolkata is not a highly conservative city. But while travelling in certain places like North
                            Kolkata, it is better to dress conservatively. One should not try to attract a lot of
                            attention towards himself / herself due to his/her dressing style. When entering temples,
                            mosques or buildings of religious importance always check what dress attire is required. In
                            most cases you will be required to cover your head, take off your shoes and be dressed
                            conservatively. It is always a good idea to enquire first at your hotel or with your guide
                            about the dress codes (if any) of the places you will be visiting before you set out. Please
                            keep your mobiles in silent mode when you are visiting such places. Also public display of
                            affection is not recommended. Hugging and kissing in public places is a strict no no.</p>
                        <div class="currencyL">
                            <h3>Smoking (Rules regarding smoking in public places)</h3>
                            <p>Smoking is banned in shopping malls, cinema halls, public / private work place, hotels,
                                banquet halls, discotheques, canteen, coffee house, pubs, bars, airport lounge, railway
                                stations. People can smoke on roads or in their homes but not in any other place</p>

                            <h3>Visa</h3>
                            <p class="link">For Visa <a href="http://incredibleindia.org/index.php/india-essentials-travel-tip/travel-tips/getting-your-visa"target="_blank"><b>Click Here</b></a></p>
                            <p class="link"><a href="http://www.kolkatapolice.gov.in/GuidelineForForeigner.aspx" target="_blank">Guidelines for Foreigners Visiting Kolkata</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
