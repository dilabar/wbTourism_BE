@extends('layouts.myapp')
<style>
    .sati_banner img {
        width: 100%;
        height: auto;
        padding: 0;
    }
</style>
@section('content')
    <section class="pt-80">
        {{-- <div class="sati_banner">
        <img src="{{asset('assets/img/satipeeth/shakti_sati_piths.jpg')}}">
    </div>
    <div class="container">
        <div class="section-title title-style">
            <h2>SHAKTI / <span style="color:#518117;">S</span><span style="color:#067C67">A</span><span
                style="color: #0E538D;">T</span><span style="color: #4D4788;">I</span> <span
                style="color:#874784 ;">P</span><span style="color: #D12150;">I</span><span style="color: #F48C18;">TH</span></h2>

        </div>
        <div class="col-md-8 offset-2">
        </div>
    </div> --}}
        <div class="page-title-area ptb-100">
            <div class="container">
                <div class="page-title-content">
                    <h1>SHAKTI / SATIPEETH</h1>
                </div>
            </div>
            <div class="bg-image">
                <img src="{{ asset('assets/img/satipeeth/shakti_sati_piths.jpg') }}">
            </div>

        </div>
        <div class="container mt-30 ">
            <div class="row align-items-center">
                <h3>BAHULA TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/bahula_temple1.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>
                        An awe-inspiring power of the Universe - "Bahula shakti peetha" is one of the historic places in
                        India, where the divine power is worshipped as a Devi Shakti by Hindu devotees and daily offered
                        with sweets and fruits in the morning. According to the Hindu mythology, it is whispered that Devi
                        Sati’s “Left Arm” fell here. The main idols of this legendary divine place are Devi as “Bahula”
                        (lavish) and Lord Shiva as “Bhiruk” (sarvasiddhidayak), worshipped here. The holy place is dedicated
                        to Maa Durga and Lord Shiva.
                    </p>
                    <h4>Temple timing</h4>
                    <p> From 6 am to 10 pm daily.
                    </p>
                    <h4>How to Reach:</h4>
                    <p> Bahula Devi Temple is located in Ketugram village, around 8 kms from Katwa Station, Burdwan
                        district. The Temple is near the banks of Ajay River and from Kolkata the Temple is about 190 kms,
                        from Burdwan district, it is about 56 kms. The Temple is connected by bus route also.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>BAKRESWAR TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/the_bakreshwar_mandir.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>
                        Bakreswar or Bakreshwar is a popular pilgrimage destination. Located in Birbhum, Bakreswar is known
                        as one of the 51 Sakthi Peethas of India. Bakreswar is famous for its Bakreswar temple which is
                        dedicated to lord Bakranath (Shiva) and goddess Kali. The temple is believed to be erected at the
                        spot where the forehead and brows of Goddess Sathi fell. The main temple of Bakreswar is surrounded
                        by many small shrines which are dedicated to lord Shiva. There is a Temple Tank and Sacred Tree.
                        Bakreswar is also known for its eight hot springs which has varying temperatures. The hottest of
                        these springs is called Agnikund and it has a temperature of about 93.33° C. It is believed that the
                        water of these springs have healing properties. They all discharge in to a rivulet, which joins
                        Pamphra river. A big mela is held every year on the day of Shiva-Ratri.
                    </p>
                    <h4>How to Reach:</h4>
                    <p>Bakreswar is situated around 24 kms South West of Suri (the district headquarter of Birbhum) and
                        about 7 kms from Dubrajpur Rail station.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>KANKHALESHWARI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/kankaleswari_kali1.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>
                        Kankalitala is a Temple town in Bolpur subdivision of Birbhum district. One of the fifty-one Shakti
                        Pithas of the country is the Kankhalitala Temple which is located about 8 kms northeast of
                        Shantiniketan town in Bolpur. Kankhalitala Temple is located in Kankhalitala town on the banks of
                        River Kopai on the Bolpur-Labpur Road.

                        According to Hindu Mythology, Lord Shiva's consort – Goddess Parvati had died in the arms of Lord
                        Shiva who in a fit of rage danced all over the Indian subcontinent during which time Lord Vishnu, in
                        order to stop Lord Shiva had destroyed Goddess Parvatis body by dismembering it into 51 pieces – of
                        which, her waist (kankhal – from which the name of Temple is derived) is said to have fallen in the
                        area which is at present the Kankalitala town. Goddess Parvati is the residing deity of the
                        Kankalitala Temple. Such is the prominence of this Temple that it forms a part of the most important
                        Hindu-pilgrimage circuit of India. Tourists visiting the Shantiniketan Visva Bharati also visit this
                        Temple which is just around 9 kms away to pay homage to Goddess Parvati.
                    </p>
                    <h4>How to Reach:</h4>
                    <p>The nearest rail station is Bolpur railway station. Bolpur is connected to Kolkata and Howrah
                        Junction by daily trains.
                        Kankalitala Temple is situated about 9 kms from Bolpur. It is located on Bolpur- Labhpur road, on
                        the banks of river Kopai in Birbhum district.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>MAA JAHURA KALI MANDIR</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/jahura-kali-temple.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>Maa Johura Temple is situated on the outskirts of Malda Town, West Bengal, India. It is surrounded by
                        lush green fields on one side and Mango Orchards on the other side, and is very near to Bangladesh
                        border. The original temple is stated to have been built in 1500 A.D, however, there is another view
                        that the original temple was built by Raja Ballal Sen in 1159-1179 A.D. who was the third ruler of
                        Sena Dynasty of the then Bengal. It is a renowned temple of Adishakti in Malda and the deity is
                        represented by three faces of Goddess Kali. It is said that the three faces represent the three
                        goddesses Maha Kali, Maha Laxmi and Maha Saraswati. The unique feature of this temple is that it
                        opens only on Tuesdays and Saturdays when thousands of people come to offer their prayers, rest of
                        the days the temple remains closed.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>NALATESWARI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/nalateswari_mata_mandir.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>The goddess of this place is known as Maa Nalateswari who is also praised as Maa or
                        “Bhagobidhata-Nalateswari” or Devi Parvati or Kalika. The orientation of this name came from pre
                        historic story that narrates how the throat of Sati or “Nala” which one of the 51 parts of sati fell
                        here as known by tradition on the other hand some people do believe that “Lalat” or forehead that
                        fell here. So the name “Nalateswari” comes from “Nala” or throat of Maa sati. Within this natural
                        beauty, the eastern side of the plateau provided secret formation of Nalateswari Temple.

                        Thousands of pilgrimage visits this place as a lot of peace and serenity resides in the minds of the
                        worshippers. Nalhati which is the average elevations, situated in the tropics, comprising a climate
                        of hot dry summers while cool wet winters, happens to be the birth place of Rishi Bankim Chatterjee,
                        is a beautiful conglomeration of nature, history and religion. Here, within deep forest, under the
                        mysterious old Banyan tree where the “Nala” of maa Sati had dropped on this earth. .
                    </p>
                    <h4>How to Reach:</h4>
                    <p> It is situated near Nalhati Railway Station on the Howrah-Sahebganj loop line, and is connected by
                        the Panagarh-Moregram Road. Nalateswari Temple is located on a small & beautiful hill.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>RATNAVALI TEMPLE (ANANDAMAYEE TEMPLE)</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/ratnavali_temple.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>Locally known as Anandamayee Temple, Ratnavali, on the banks of Ratnakar River at
                        Khanakul-Krishnanagar, district Hooghly, West Bengal, India. The dakshina skandha (right shoulder)
                        of the Goddess fell here. Shakti is known as Kumari and Bhairava as Shiva Khanakul is about 90 kms
                        from Kolkata. Locally, the Temple is known as Anandamayee Temple.

                        An awe-inspiring power of the Universe - “Ratnavali shakti peetha” is one of the historic places in
                        India, where the divine power is worshipped as a Devi Shakti -“Kumari” by Hindu devotees and daily
                        offered with sweets, fruits and anna-bhog.

                        According to the Hindu legends, it is whispered that Devi Sati’s “Right Shoulder” fell here. The
                        main idols of this legendary divine place are Devi as “Kumari” and Lord Shiva as “Bhairav” (remover
                        of terror), worshipped here. The holy place is dedicated to Maa Durga and Lord Shiva.
                    </p>
                    <h4>How to Reach:</h4>
                    <p>village near Khanakul (Hooghly district) is about 90 Kms from Kolkata.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>NANDIKESHWARI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/img/satipeeth/nandikeshwari_temple.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>History</h4>
                    <p>Sainthia is famous for the well-known Temple of Goddess Nandikeshwari. One of the 51 Shakti Peethas,
                        the Temple attracts a vast array of Visitors and devotees from all over the region. The Temple rests
                        on an elevated platform and contains many additional smaller shrines to many gods and goddesses of
                        the Hindu pantheon. Statuettes of the Mahavidyaas are carved on the walls overlooking the main
                        Temple. Puja is offered daily to the Goddess. The name of Goddess is derived from 'Nandi', the
                        mascot and follower of Lord Shiva, and 'Ishwari' (Goddess), meaning 'one who is worshiped by Nandi,
                        the divine bull'. Wife to Lord Shiva, the Goddess is one of the many aspects of Goddess Sati or
                        Parvati. Usually, a circular journey for pilgrimage is undertaken by Visitors and devotees from
                        Kolkata and other major cities in the Birbhum District, starting from Shantiniketan, through Tara
                        Pith and Nandikeshwari and finally to Fullara Mahapith of Labhpur. Daily 'Prasad' is offered to the
                        devotees in the Temple. Annual festival is held during the autumn season.</p>
                    <h4>Description</h4>
                    <p>Sainthia is a town and a municipality in Suri Sadar subdivision of Birbhum district. The town is
                        famous for Nandikeshwari Temple, one of the Shakti Peethas in India.

                        Construction of the Sainthia railway station was done as part of building the entire line. This
                        large project brought people from different corners of this country to assemble and settle here.
                        With the effort of the inhabitants of this urban locality, Sainthia has been turned into a
                        commercial hub of the district. Now it is growing rapidly through all the development and service
                        avenues to be a model municipality by taking good care of its inhabitants and the nature surrounding
                        it.
                    </p>
                    <h4>How to Reach:</h4>
                    <p> Nandikeshwari Temple (Shaktipeeth) is only about 1.5 Kms from Sainthia railway station. The place is
                        well connected with Howrah Station and Sealdah Station.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>SARBAMANGALA MANDIR</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image  mb-30">
                        <img src="{{ asset('assets/img/satipeeth/sarbamangala-mandir.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>History</h4>
                    <p>The idol of Mata Sarbamangala is very old (approx. 2500 years) from time immemorial, people felt the
                        existence of it in old literatures and holy books. This is an idol of Mata Durga with eighteen hands
                        and bestowed on Lion "MAHISHA MARDINI" and is the first NABARATNA Temple in the undivided Bengal.
                        The structure of the Temple manifests the unique blending of art and architecture of Terracotta
                        style and popular architecture of the then Bengal. The historians have graciously depicted the
                        historical importance and the archaic value of the Temple. The Sarbamangala Temple is historically
                        important tourist place in Burdwan District.</p>
                    <h4>Description</h4>
                    <p>
                        From this point of view the age of creation of this deity is more than two thousand five hundred
                        years ago. The name of weapons are - Lotus, Conch, Axe, Arrow, Hammer, Bow, Sword, Shield, Thunder,
                        Wheel, Bell, Snake, Kamandalu, Bead, Rod, Pierce and Sakti i.e. advent of the DEITY was taken from
                        the idea of CHANDI and therefore the time of appearance of this DEITY SARBAMANGALA is before two
                        thousand five hundred years. From the CHANDIMANGAL KAVYA of Mukunda Chakroborty and from the poem of
                        Bharat Chandra Roy it is found that the DEITY SARBAMANGALA is not only devi of Burdwan, SHE is the
                        Mother of Garh. In the year 1740-1744, the DEITY, was installed in a beautiful Temple adorned with
                        NAVARATNA DEUL on the roof of the Temple. The architecture was originally taken from PAL style.
                        Before installation in this Temple, the DEITY was fixed somewhere at Burdwan town on the bank of
                        river BANKA or DAMODAR in Western part of Burdwan. During the attack of KALAPAHAR, perhaps, the
                        priests of the DEITY SARBAMANGALA was taken from its original Temple and merged in one pond at BAHIR
                        SARBAMANGALA MOUZA to save the DEITY and there after lime manufacturers got the DEITY along with the
                        ingredients of lime. When the ingredients of lime were burnt they found that all snails, oysters and
                        cockle were burnt to white ashes but the stone was as it was. The place where from the DEITY
                        SARBAMANGALA was collected by the lime manufacturers is called now BAHIR SARBAMANGALA PARA.
                    </p>
                    <h4>How to Reach:</h4>
                    <p>Burdwan is well connected by trains from Howrah and Sealdah. It is around 4 kms away from Burdwan
                        station.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>SIDDHESHWARI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image  mb-30">
                        <img src="{{ asset('assets/img/satipeeth/siddheswari_kali_temple.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>In the year 688 A.D, Siddheswari Kali Mandir was established by Rishi Amburish. First time the
                        Goddess was worshipped through the ritual of earthen-pot (ghat). The ghat sticks to a stone
                        winnowing tray. This auspicious image is made of a single Neem log. This image represents the
                        Bamakali Idol. The Goddess is worshipped during the new moon in the month of Kartik.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>TRISROTA MAA BHRAMARI SHAKTI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image mb-30">
                        <img src="{{ asset('assets/img/satipeeth/trisrota_jalpaiguri.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>Trisrota Shaktipeeth placed on the banks of Tista River in Shalbari village of Falakata in Jalpaiguri
                        district in West Bengal. Here, Goddess Bhramari as Shakti, possessing 12 petals, builds the
                        antibodies to guard devotees from all the diseases. According to Hindu Scripture Sati’s Left Leg
                        fell here. Bhairav is worshipped as Amber and Shakti as Bhramari.
                    </p>
                    <h4>How to Reach:</h4>
                    <p>New Jalpaiguri is the nearest railway station.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>KIRITESWARI TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image  mb-30">
                        <img src="{{ asset('assets/img/satipeeth/kiriteswari_temple.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>The kireetkona village is just five kilometers from Dahapara rail station, where the Kiriteswari
                        Mandir is situated. It is the oldest temple in the Murshidabad district. It is one of 51 Sakti
                        Peetha (Sati Peetha) and it is where Sati's 'kirit' or crown fell at Kireetkona village, 3 km from
                        Lalbag Court Road station under district Murshidabad, She is also named as "Mukuteshwari" ( as her
                        mukut or crown fell).

                        The original Mandir was destroyed in 1405. The present temple was made in the 19th century by
                        Darpanarayan. The town is sanctified by the river Bhagirathi and Maa Kiriteswari, the Holy Goddess.
                        It is a famous Hindu temple in West Bengal.

                        The main temple of the town is that of Maa Kiriteshwari’s temple. The unique feature of the temple
                        is the absence of any image or deity. The red coloured stone which is supposed to be the symbolic
                        representation of the Goddess is covered by a red veil the year through. The veil is changed and she
                        is given a holy bath only on Ashtami of each Durga Puja. The head dress of the Hindu Goddess,
                        Kiriteswari, has been worshipped through the ages.

                        The head dress is preserved at Rani Bhabani's Guptamath at present, situated opposite to the temple.
                        In the new temple, there is no image. There is a high alter on which a small alter is seen. The face
                        of Maa is indexed here. Yogendranarayan Roy, by Darpanarayan the late king of Lalgola had renovated
                        and had taken care of the temple constructed. To ruins, the original temple had turned. On the right
                        side, beneath given the shot of the ruined one.

                        Bhagwan Roy received the land where the temple was situated from Akbar, the great. The old temple,
                        built by Bhagwan Roy was southern entranced and the new one, built by Darpanarayan Roy , a successor
                        of Bhagwan Roy, was eastern entranced. The temple remains opened from 6 am to 3 pm and again from 5
                        pm to 10pm daily. All information was stated by the temple’s head priest- Sri Dilip Bhattacharya,
                        who is the 3rd generation running in the priest family to serve the Holy mother. Festivals are held
                        at Durga Puja, Kali Puja and on Amavasya (new moon). The special ritual is held on the Ratanti
                        Amavasya (Magh- no moon night) with whole night yagna and other special rituals. And daily, Maa is
                        offered with ‘anna-bhog’ (rice) on the noon. Besides this, various types of seasonal fruit is
                        offered to the goddess. On every Tuesday of the month of Poush (mid-Dec to Mid Jan), a beautiful
                        rural fair is held since the time of Darpanarayan.

                        Here the ‘Sakti’ (goddess) is ‘Vimala’ and ‘Bhairav’ (Lord Shiva) is ‘Sanwart’.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>VIBHASH SHAKTI PEETH</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image  mb-30">
                        <img src="{{ asset('assets/img/satipeeth/bargabhima_east_midnapore.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>Around 1150 years back, the Maharaja of the Mayur dynasty took the Endeavour to build this temple of
                        Bargabhima temple. Located by the River Roopnarayana at Tamluk village, this shrine at Purba (East)
                        Medinipur is also known as Bhimakali Mandir. Though, the locals often talk about the making of the
                        shrine centuries back. Per Purana, this place was sanctified when the left ankle of Devi Sati fell
                        here. The name of this temple has been mentioned several times in old Bengali literature. A cultural
                        mix of Hindu, Buddhist and Oriya is predominant at the Bargabhima Temple since many years. Tamluk,
                        previously known as Tamralipta is one of the most significant Vaishnav Shrine. It is believed that
                        the place has been sanctified with the presence of the lotus feet of Lord Krishna. Per sayings in
                        the Kashidas Mahabharata and Jaimini Mahabharata, Sri Krishna Himself came to Tamluk and released
                        the Horse for the Ashwameda Yagna. Alongside the presence of the Shakti Peeth of Vibhas has also
                        made the place pious for the Shaktas and the Shaivas as well. The temple has a wide arena forming a
                        large courtyard. Inside the sanctum, the idol of Kali ma is consecrated beside the huge Shiva Linga
                        made of black touchstone and is surrounded by a circular partition made of white marble. Goddess
                        Kali is the main deity worshipped here and this manifestation of the Holy Mother resembles that of
                        Mahisasurmardini, diminishing the demons. The deity has four hands holding a Trishul and a human
                        skull. In her lower hands, she is holding the heads of the demons after slaying them. The
                        architecture of the shakti-peeth resembles Kalinga temple tombs as well as quintessential Bangla
                        aatchhala styled Natmandir. Pilgrims will find solace after spending some time in the lap of
                        tranquil nature here. The old temple was destroyed during the Islamic invasion. The present temple
                        is the edifice built on the remains of the ancient one.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <h3>FULLORA TEMPLE</h3>
                <div class="col-md-4 col-sm-12">
                    <div class="image  mb-30">
                        <img src="{{ asset('assets/img/satipeeth/maa_phullara_or_fullara.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h4>Description</h4>
                    <p>Attahas temple, also referred to as 'Fullora Attahas', is revered as one of the 51 'Shakti Peethas'
                        located in the country of India. The temple of Attahas attracts innumerable visitors every year,
                        particularly in the month of December.

                        Attahas is a Sanskrit term which is derived from the words 'Atta' and 'Hasa' or laughter, which
                        implies loud laughter. The temple is a significant Shakti Peetha and therefore an important place of
                        worship of the 'Shakta' sect. A famous mythological legend states that the lips of Sati, (the
                        daughter of Daksha) had dropped at this very spot where this temple has been constructed. The energy
                        or 'Shakti' of this shrine is known as 'Phullara' and Kalabhairava is known as 'Vishvesh'.
                    </p>
                    <h4>How To Reach</h4>
                    <p>This temple is situated in the Katwa subdivision, Bardhaman district, West Bengal and at a distance
                        of nearly 5 km from Nirol bus stand. It is located in the Nirol gram panchayat.
                        It can be reached by rail Labhpur station, on the Ahmedpur Katwa Railway line.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
