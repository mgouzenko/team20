
@section('body')

<?php 
	
	$user = Sentry::getUser();
	$messages = Message::where('from_user','=',$user->id)->orderBy('updated_at','desc')->get();
?>	

	<?php foreach($messages as $message):?>
	<div class="bs-callout bs-callout-info text-info">
		<?php $msg_user = User::find($message->to_user); ?>
    	<h4>To: {{$msg_user->first_name}} , {{$msg_user->last_name}}	</h4>
    	<p>{{$message->text}}</p>
  	</div>
	 
<?php endforeach; ?>

@stop