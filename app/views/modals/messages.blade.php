<div class="container" style="display: none;" id="notice-box">
  <div class="alert alert-success clearfix" id="notice-box-alert"></div>
</div>

<?php if($errors->count() > 0 ) : ?>
  <div class="container">
    @foreach($errors->all() as $message)
      <div class="alert alert-danger">{{ $message }}</div>
    @endforeach
   </div>
<?php endif; ?>

<?php if(Session::has('message')) : ?>
  <div class="container">
      <div class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</div>
   </div>
<?php endif; ?>