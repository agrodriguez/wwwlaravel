		{!! form::hidden('user_id',1) !!}

		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			{!! Form::label('title','Name:') !!}

			{!! Form::text('title',null,['class'=>'form-control']) !!}
			<small class="text-danger">{{ $errors->first('title') }}</small>
		</div>

		<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
		    {!! Form::label('body', 'Body:') !!}
		    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('body') }}</small>
		</div>


		<div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
		    {!! Form::label('published_at', 'Publish On:') !!}
		    {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('published_at') }}</small>
		</div>


		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}			
		</div>
