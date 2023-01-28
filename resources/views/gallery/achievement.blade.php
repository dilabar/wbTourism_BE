@extends('layouts.myapp')
<style>
    .achievement_gallery img{width: 100%;height: 240px;border: solid 1px #fff;box-shadow: -5px 5px 5px -1px rgb(0 0 0 / 30%);-webkit-box-shadow: -5px 5px 5px -1px rgb(0 0 0 / 30%); -moz-box-shadow: -5px 5px 5px -1px rgba(0,0,0,0.3);}
    .achievement_gallery h4{margin-top: 10px}
</style>
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2 class="text-capitalize">ACHIEVEMENT GALLERY
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="achievement_gallery">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://www.wbtourism.gov.in/home/download/gallery_photo/skoch_award_2021_tourism_department_government_of_west_bengal.jpg"/>
                            <h4>SKOCH GOLD Award 2021</h4>
                            <p>
                                <strong>Year :</strong> 2021<br>
                                <strong>For :</strong> Winner under the Tourism &amp; Culture Category for Transformational Performance During COVID
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://wbtourism.gov.in/home/download/gallery_photo/ttf_award.jpg" />
                            <h4 class="title">TTF Excellence Awards 2021</h4>
                            <p>
                                <strong>Year :</strong> 2021<br>
                                <strong>For :</strong> Winner of the Host State Support<br><br><br>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://wbtourism.gov.in/home/download/gallery_photo/best_national_park_category_of_the_outlook_travelle_awards.jpg" />
                            <h4 class="title">Outlook Traveller Awards 2018</h4>
                            <p>
                                <strong>Year :</strong> 2018<br>
                                <strong>For :</strong> winner in the Best National Park<br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</section>
@endsection