<div class="message-wraper">
	<ul class="messages">
		@foreach($message as $mess)
			<li class="message clearfix">
				<div class="{{ ($mess->from == Auth::id())? 'sent': 'received' }}">
					<p>{{ $mess->message }}</p>
					<p class="date">{{ date('d M y,h:i a',strtotime($mess->create_at)) }}</p>
				</div>
			</li>
		@endforeach
	</ul>
</div>

<div class="input-text">
	<input type="text" name="message" id='chat' class="submit">
</div>