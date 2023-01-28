@extends('layouts.myapp')

@section('content')
   <section id="tsp-section" class="pt-100">
      <div class="container">
        <div class="section-title title-style">
            <h2>Tourism Service Provider</h2>
        </div>
        <div class="row myc">
         <div class="col-lg-4">
            <a href="{{url('tourism-service-provider?id=inbound-tour')}}">
               <div class=" card p-3 mb-2" >
                  <span class="text-center">Inbound Tour Operator</span>
               </div>
            </a>
           
         </div>
      
         <div class="col-lg-4">
            <a href="{{url('tourism-service-provider?id=inbound-tour')}}">   
               <div class="card p-3 mb-2" >
               <span class="text-center" >Domestic Tour Operator</span>
            </div>
         </a>
         
         </div>
        
    
             <div class="col-lg-4">
               <a href="{{url('tourism-service-provider?id=inbound-tour')}}">
                   <div class="card p-3 mb-2" >
               <span class="text-center">MICE Tour Operator</span>
            </div>
         </a>
           
         </div>
       
      
          <div class="col-lg-4">
            <a href="{{url('tourism-service-provider?id=inbound-tour')}}"> 
               <div class="card p-3 mb-2" >
               <span class="text-center">Cruise Tour Operator</span>
            </div>
         </a>
           
         </div>
      
        
        
           <div class="col-lg-4">
            <a href="{{url('tourism-service-provider?id=inbound-tour')}}">
            <div class="card p-3 mb-2" >
               <span class="text-center">Adventure Tour Operator</span>
            </div>
         </a>
         </div>

       
         <div class="col-lg-4">
         <a href="{{url('tourism-service-provider?id=inbound-tour')}}">
            <div class="card p-3 mb-2" >
               <span class="text-center">Travel Agents</span>
            </div>
         </a>
       </div>
       <div class="col-lg-4">
         <a href="{{url('tourism-service-provider?id=inbound-tour')}}">
            <div class="card p-3 mb-2" >
               <span class="text-center">Tourist Transport Operator-TTO</span>
            </div>
         </a>
       </div>
  
     
        
      </div>
        
      </div>
   </section>
@endsection