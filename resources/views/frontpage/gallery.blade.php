@include('layouts.header')
 

   <!--header start-->
   @include('layouts.navbar')
   <!-- Header End -->


   <style>
    #section-360{
        position: relative;
        overflow: hidden;
        z-index: 1
    }
    /* plan your trip form */
    #section-360 .shape {
        position: absolute;
        z-index: -1
    }
    
    #section-360 .shape-1 {
        top: 10%;
        left: 45%
    }
    
    #section-360 .shape-1 img {
        -webkit-animation: moveleftbounce 5s linear infinite;
        animation: moveleftbounce 5s linear infinite
    }
    
    #section-360 .shape-2 {
        bottom: 20%;
        left: 10%
    }
    
    #section-360 .shape-2 img {
        -webkit-animation: movebounce 5s linear infinite;
        animation: movebounce 5s linear infinite
    }
       #section-360 .card{
        border: none;
    
       }
       #section-360 .card p{
        color: var(--primary-color);
    
       }
       #section-360 .my-card .card{
     
          -webkit-transition: all .2s ease-in-out;
           transition: all .2s ease-in-out;
       }
       #section-360 .my-card .card:hover{
        box-shadow: var(--box-shadow);
        border-radius: 10px;
        padding: 0;
        background: #518117;
        color: var(--white-color);
        background: -moz-linear-gradient(45deg, #518117 0%, #161614 100%);
        background: -webkit-linear-gradient(45deg, #518117 0%,#161614 100%);
        background: linear-gradient(45deg, #518117 0%,#161614 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#05abe0', endColorstr='#8200f4',GradientType=1 );
    
       }
       #section-360 .my-card .card:hover p{
    
        color: var(--white-color);
    
    
       }
    
       #section-360 .card iframe{
        border: none;
        border-radius: 5px;
    
       }
       #section-360 .my-card{
          box-shadow: var(--box-shadow);
          padding: 20px 10px 10px 10px;
          border-radius: 5px;
          margin-bottom: 5px;
       }
    </style>
    

       <section id="section-360" class="pt-100 ">
          <div class="container">
            <div class="section-title title-style">
                <h2>360 View</h2>
            </div>
            <div class="row my-card">
             <div class="col-lg-3 box" >
                <div class="card">
                   <embed  src="https://www.google.com/maps/embed?pb=!1m0!4v1498285923986!6m8!1m7!1sF%3A-UFFg6oH-gE0%2FWDwyo77FGKI%2FAAAAAAAAANA%2Fi2Vlf2y3Aqobxm9PBPZRZhfEUytQWEweQCLIB!2m2!1d22.5458267!2d88.34257749999999!3f175.77!4f5.590000000000003!5f0.4000000000000002"
                    width="100%" height="250" frameborder="0" style="border:0" allowfullscreen>
                   <p class="text-center ">Victoria Memorial</p> 
                </div>
             </div>
             <div class="col-lg-3 box " >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498285284313!6m8!1m7!1sxMuabPfYtNMBfi66YmilWg!2m2!1d24.18565430377322!2d88.26877859761356!3f354.23!4f-6.950000000000003!5f0.4000000000000002"
                    width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Hazarduari Palace</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498285685906!6m8!1m7!1sUyjTvR0xxNVV2OeyOx5DAg!2m2!1d24.18743753445352!2d88.26868529458807!3f253.49!4f-2.3799999999999955!5f0.5970117501821992" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Bachhawali Tope (Cannon) – Hazarduari Palace</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498285759703!6m8!1m7!1sQwT0ijYDidQSKYgE9UOSXw!2m2!1d24.18735243478147!2d88.26912619483664!3f80.23!4f12.620000000000005!5f0.5970117501821992" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Ghari Ghar – Hazarduari Palace</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498286201117!6m8!1m7!1sG9m-IXjrvy5L8ptcz5LmkQ!2m2!1d23.06821462112124!2d87.32181449979578!3f57.75724703820854!4f8.028486153191182!5f2.6248426354407948" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Rasmancha Temple, Bisnupur</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498286308261!6m8!1m7!1scwaIrqGWUjTG3Bw6-f2ZUg!2m2!1d23.07097730290112!2d87.32415999920624!3f308.35!4f13.040000000000006!5f0.4000000000000002" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Shyamrai Temple, Bishnupur	</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498286341069!6m8!1m7!1sEJgabD5wy_T29rJOuRCTQw!2m2!1d23.07182679966943!2d87.3266459006528!3f138.71!4f7.469999999999999!5f0.5970117501821992" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Jorbangla Temple, Bishnupur</p>
                </div>
             </div>
             <div class="col-lg-3 box" >
                <div class="card">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498286477151!6m8!1m7!1sinKFPQ6iBFzS4ai-3Ty-dg!2m2!1d23.07258107261266!2d87.32628290895815!3f135.8!4f6.390000000000001!5f0.4000000000000002" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p class="text-center ">Radhashyam Temple, Bishnupur</p>
                </div>
             </div>
           
          
          </div>
       
            
          </div>
             <div class="shape shape-1"><img src="assets/img/shape1.png" alt="Background Shape"></div>
          <!-- <div class="shape shape-2"><img src="assets/img/shape-8.png" alt="Background Shape"></div>
          <div class="shape shape-3"><img src="assets/img/shape3.png" alt="Background Shape"></div>
          <div class="shape shape-4"><img src="assets/img/shape4.png" alt="Background Shape"></div> -->
       </section>

    <!-- footer start-->
    @include('layouts.footer')

    <!-- footer end -->