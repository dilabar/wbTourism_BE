@if ($message = Session::get('success'))

<div id="success-alert" class="alert alert-success alert-dismissible fade show">

    <p>{{ $message }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

</div>

@endif
@if ($message = Session::get('error'))

<div class="alert alert-danger alert-dismissible fade show">

  <p>{{ $message }}</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>

@endif
@if(count($errors) > 0)


<div  class="alert alert-danger alert-dismissible fade show" role="alert">
  <ul>
  @foreach($errors->all() as $error)

 
  <li><strong> {{ $error }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </li>
  @endforeach
  </ul>
</div>
@endif