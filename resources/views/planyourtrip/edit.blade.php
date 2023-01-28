@extends('layouts.myapp')

@section('content')

<div class="page-title-area ptb-100">
    <div class="container">
      <div class="page-title-content">
        <h1>{{@count($details->days)}} days in {{@$details->place}}</h1>
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
                                <input type="radio" class="btn-check" name="acctype" id="acctype1" autocomplete="off" {{$old_details->accommodation_type =='single' ? 'checked':''}} value="single">
                                <label class="btn btn-outline-custom"  for="acctype1">Single</label>
                              
                                <input type="radio" class="btn-check" name="acctype" id="acctype2" autocomplete="off" {{$old_details->accommodation_type =='multiple' ? 'checked':''}} value="multiple">
                                <label class="btn btn-outline-custom" for="acctype2">Multiple</label>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-4">
                     <div class="mb-3">
                        <label for="transport">Transportation</label>
                         <select id ="transport" name="transport" class="nice-select wide" >
                             {{-- <option value="" selected>Select Transportation</option> --}}
                             <option value="1" {{$old_details->transport =='1' ? 'selected':''}} >By Rail</option>
                             <option value="2" {{$old_details->transport =='2' ? 'selected':''}}  >By Road</option>
                             <option value="3" {{$old_details->transport =='3' ? 'selected':''}} >By Air</option>
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
                             <option value="{{$sitem->id}}" {{$old_details->service ==$sitem->id ? 'selected':''}} >{{$sitem->name}}</option>
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
                                <option value="{{$mitem->name}}" {{$old_details->accommodation ==$mitem->id ? 'selected':''}}>{{$mitem->name}} ({{$mitem->place}})</option>
                            @endforeach
                        
                        </select>
                        {{-- <small id="accommodationHelp" class="form-text text-muted">** Accommodation **</small> --}}
                    </div>
                 </div>
                </div>
                <hr>
                <div class="mt-4">
                    @foreach ($details->days as $k => $day)
                   <div class="row">
                    <div class="col-md-3">
                        <div class="mt-4">
                            <label for="day" >Day {{$k+1}}</label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                           <label for="attraction">Attraction</label>
                            <select id ="attraction" name="days[{{$k}}][attraction][]" class="nice-select wide" multiple>
                                <option value="attraction 1" {{in_array('attraction 1',$day['attraction']) ? 'selected':''}}>attraction 1</option>
                                <option value="attraction 2" {{in_array('attraction 2',$day['attraction']) ? 'selected':''}}>attraction 2</option>
                                <option value="attraction 3" {{in_array('attraction 3',$day['attraction']) ? 'selected':''}}>attraction 3</option>
                                <option value="attraction 4" {{in_array('attraction 4',$day['attraction']) ? 'selected':''}}>attraction 4</option>
                                <option value="attraction 5"  {{in_array('attraction 5',$day['attraction']) ? 'selected':''}}>attraction 5</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-md-3 acm_dropdown" >
                        <div class="mb-3">
                           <label for="accommodation">Accommodation</label>
                            <select id ="accommodation" name="days[{{$k}}][accommodation]" class="nice-select wide " >
                                @foreach (getMostpupular() as $mitem)
                                <option value="{{$mitem->name}}" {{$day['accommodation'] ==$mitem->name ? 'selected':''}}>{{$mitem->name}}</option>
                                @endforeach
                            </select>
                        </div>
                     </div>

                     <div class="col-md-3">
                        <div class="mb-3">
                           <label for="guide">Tour Guide</label>
                            <select id ="guide" name="days[{{$k}}][guide]" class="nice-select wide " >
                                {{-- <option value="" selected>Select Tour Guide</option> --}}
                                @foreach (getGuide() as $gitem)
                                    <option value="{{$gitem->name}}" {{$day['guide'] ==$gitem->name ? 'selected':''}}>{{$gitem->name}}</option>
                                @endforeach
                            
                            </select>
                            {{-- <small id="guideHelp" class="form-text text-muted">** Accommodation **</small> --}}
                        </div>
                     </div>
                   </div>

                   @endforeach

                  
                     
                     
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
       @if ($old_details->accommodation_type =='single')
       $('.acm_dropdown').hide();
       @else
       $('.acm_dropdown').show();

       @endif
   
   
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