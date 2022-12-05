@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif
@if ($message = Session::get('error'))

<div class="alert alert-danger">

  <p>{{ $message }}</p>

</div>

@endif
@if(count($errors) > 0)
<div class="alert alert-danger alert-block">
  <ul>
  @foreach($errors->all() as $error)
  <li><strong> {{ $error }}</strong></li>
  @endforeach
  </ul>
</div>
@endif