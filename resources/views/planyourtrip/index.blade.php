@extends('layouts.myapp')

@section('content')

<div class="page-title-area ptb-100">
    <div class="container">
      <div class="page-title-content">
        <h1>{{@$details->days}} days in {{@$details->place}}</h1>
        <p class="text-light"> {{@$details->datefrom}} - {{@$details->dateto}} </p>
        {{-- <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="blog-details.html"><i class='bx bx-chevrons-right'></i>Destination Details</a></li>
      </ul>  --}}
      </div>
    </div>
    <div class="bg-image">
      <img src="{{$details->banner_image}}" alt="Demo Image">
    </div>
  </div>
<section  class="plantrip">
    <div class="container">
        <div class="formsection p-4 ">

            <form action="{{route('tripSave')}}" method="post">
             <input type="hidden" name="detail_id" value="{{$details->id}}">
             <input type="hidden" name="datefrom" value="{{@$details->datefrom}}">
             <input type="hidden" name="dateto" value="{{@$details->dateto}}">
             <input type="hidden" name="place_name" value="{{@$details->place}}">
                   
                {{-- <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4">
                        <label>
                          <input type="radio" name="product" class="card-input-element" checked />
                            <div class="card card-default card-input">
                              <div class="card-header">Suggest an itinerary with</div>
                              <div class="card-body" style="margin-bottom: 50px">
                                <ul class="nav-item">
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-plane-alt'></i></div>
                                        <span>Transportation</span>
                                    </li>
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bx-hotel' ></i></div>
                                        <span>Accommodation</span>
                                    </li>
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-binoculars'></i></div>
                                        <span>Things to do</span>
                                    </li>
                                </ul>
                              </div>
                            </div>
                        </label>
                    </div>
    
                    <div class="col-md-4 col-lg-4 col-sm-4">
                        <label>
                          <input type="radio" name="product" class="card-input-element" />
                            <div class="card card-default card-input">
                              <div class="card-header">Suggest an itinerary with</div>
                              <div class="card-body">
                                <ul class="nav-item">
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-plane-alt'></i></div>
                                        <span>Transportation</span>
                                    </li>
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-binoculars'></i></div>
                                        <span>Things to do</span>
                                    </li>
                                
                                </ul>
                                <div class="hr-divider"></div>
                                <label for="">I have Booked</label>
                                <ul class="nav-item">
                                  
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bx-hotel' ></i></div>
                                        <span>Accommodation</span>
                                    </li>
                                
                                </ul>
                              </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4">
                        <label>
                          <input type="radio" name="product" class="card-input-element" />
                            <div class="card card-default card-input">
                              <div class="card-header">Suggest an itinerary with</div>
                              <div class="card-body">
                                <ul class="nav-item">
                                   
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-binoculars'></i></div>
                                        <span>Things to do</span>
                                    </li>
                                
                                </ul>
                                <div class="hr-divider"></div>
                                <label for="">I have Booked</label>
                                <ul class="nav-item">
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bxs-plane-alt'></i></div>
                                        <span>Transportation</span>
                                    </li>
                                    <li class="nav-link d">
                                        <div class="icon"><i class='bx bx-hotel' ></i></div>
                                        <span>Accommodation</span>
                                    </li>
                                
                                </ul>
                              </div>
                            </div>
                        </label>
                    </div>
                   </div> --}}
                <div class="row"> 
                    <div class="col-md-2 offset-md-10">
                        <div class="ml-auto">
                            <label for="btn-grp">Accommodation Type</label>
                            <div id="btn-grp" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="acctype" id="acctype1" autocomplete="off" checked value="single">
                                <label class="btn btn-outline-custom"  for="acctype1">Single</label>
                              
                                <input type="radio" class="btn-check" name="acctype" id="acctype2" autocomplete="off" value="multiple">
                                <label class="btn btn-outline-custom" for="acctype2">Multiple</label>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-4">
                     <div class="mb-3">
                        <label for="transport">Transportation</label>
                         <select id ="transport" name="transport" class="nice-select wide" >
                             {{-- <option value="" selected>Select Transportation</option> --}}
                             <option value="1">By Rail</option>
                             <option value="2">By Road</option>
                             <option value="3">By Air</option>
                         </select>
                         {{-- <small id="transportHelp" class="form-text text-muted">** Transportaion **</small> --}}
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                       <label for="service">Service Provider</label>
                        <select id ="service" name="service" class="nice-select wide">
                            {{-- <option value="" selected>Select Service Provider</option> --}}
                            @foreach (getServiceProvider() as $sitem)
                             <option value="{{$sitem->id}}">{{$sitem->name}}</option>
                            @endforeach
                            
                        </select>
                        {{-- <small id="serviceHelp" class="form-text text-muted">** Accommodation **</small> --}}
                    </div>
                 </div>
                 <div class="col-md-4 ">
                    <div class="mb-3">
                       <label for="accommodation">Accommodation</label>
                        <select id ="accommodation" name="accommodation" class="nice-select wide"  >
                            {{-- <option value="" selected>Select Accommodation</option> --}}
                            {{-- <option value="1">WBTDCL</option>
                            <option value="2">Others</option> --}}
                            @foreach (getMostpupular() as $mitem)
                                <option value="{{$mitem->name}}">{{$mitem->name}} ({{$mitem->place}})</option>
                            @endforeach
                        
                        </select>
                        {{-- <small id="accommodationHelp" class="form-text text-muted">** Accommodation **</small> --}}
                    </div>
                 </div>
                </div>
                <hr>
                <div class="mt-4">
                    
                   @for ( $d =1;$d<=$details->days;$d++)
                   <div class="row">

                    <div class="col-md-3">
                        <div class="mt-4">
                        <label for="day" >Day {{$d}}</label>
                            {{-- <select id="day" class="form-select form-select-sm" aria-label=".form-select-sm days">
                                <option value="1" selected >Day 1</option>
                                <option value="2">Day 2</option>
                            
                            </select> --}}
                            {{-- <small id="accommodationHelp" class="form-text text-muted">** Accommodation **</small> --}}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                           <label for="attraction">Attraction</label>
                            <select id ="attraction" name="days[{{$d}}][attraction][]" class="nice-select wide" multiple>
                                {{-- <option data-display="Select Attraction"></option> --}}
                                <option value="attraction 1">attraction 1</option>
                                <option value="attraction 2">attraction 2</option>
                                <option value="attraction 3">attraction 3</option>
                                <option value="attraction 4">attraction 4</option>
                                <option value="attraction 5">attraction 5</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-md-3 acm_dropdown" >
                        <div class="mb-3">
                           <label for="accommodation">Accommodation</label>
                            <select id ="accommodation" name="days[{{$d}}][accommodation]" class="nice-select wide " >
                                {{-- <option value="" selected>Select Accommodation</option> --}}
                            
                                @foreach (getMostpupular() as $mitem)
                                <option value="{{$mitem->name}}">{{$mitem->name}}</option>
                                @endforeach
                            </select>
                        </div>
                     </div>

                     <div class="col-md-3">
                        <div class="mb-3">
                           <label for="guide">Tour Guide</label>
                            <select id ="guide" name="days[{{$d}}][guide]" class="nice-select wide " >
                                {{-- <option value="" selected>Select Tour Guide</option> --}}
                                @foreach (getGuide() as $gitem)
                                    <option value="{{$gitem->name}}">{{$gitem->name}}</option>
                                @endforeach
                            
                            </select>
                            {{-- <small id="guideHelp" class="form-text text-muted">** Accommodation **</small> --}}
                        </div>
                     </div>
                   </div>

                   @endfor

                  
                     
                     
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mt-4">
                            {{-- <button class="btn btn-success" type="submit" > Finalised you plan<button> --}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <button class="btn btn-success"><i class='bx bx-save'></i> Finalised you plan</button>
                        </div>
                    </div>
                </div>
              
             </form>
        </div>
      
    </div>

</section>
@endsection
@section('script')
<script>
    $(document).ready(function () {
    $('.acm_dropdown').hide();
   
    $('input[type=radio][name=acctype]').on('change', function() {
        switch ($(this).val()) {
            case 'single':
                $('.acm_dropdown').hide();
            break;
            case 'multiple':
            $('.acm_dropdown').show();

            break;
        }
    });
})
</script>
@endsection