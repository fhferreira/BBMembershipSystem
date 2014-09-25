
<div class="col-xs-12 col-md-8 col-md-offset-2">

<div class="page-header">
    <h1>Fill in your profile</h1>
    <p>Enter as much or as little you want to share with others</p>
</div>

{{ Form::model($profileData, array('route' => ['account.update', $userId], 'method'=>'PUT', 'files'=>true)) }}

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('twitter', 'has-error has-feedback') }}">
            {{ Form::label('twitter', 'Twitter') }}
            <div class="input-group">
                <div class="input-group-addon">https://twitter.com/</div>
                {{ Form::text('twitter', null, ['class'=>'form-control']) }}
            </div>
            {{ Notification::getErrorDetail('twitter') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('facebook', 'has-error has-feedback') }}">
            {{ Form::label('facebook', 'Facebook') }}
            <div class="input-group">
                <div class="input-group-addon">https://www.facebook.com/</div>
                {{ Form::text('facebook', null, ['class'=>'form-control']) }}
            </div>
            {{ Notification::getErrorDetail('facebook') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('google_plus', 'has-error has-feedback') }}">
            {{ Form::label('google_plus', 'Google+') }}
            <div class="input-group">
                <div class="input-group-addon">https://plus.google.com/</div>
                {{ Form::text('google_plus', null, ['class'=>'form-control']) }}
            </div>
            {{ Notification::getErrorDetail('google_plus') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('github', 'has-error has-feedback') }}">
            {{ Form::label('github', 'GitHub') }}
            <div class="input-group">
                <div class="input-group-addon">https://github.com/</div>
                {{ Form::text('github', null, ['class'=>'form-control']) }}
            </div>
            {{ Notification::getErrorDetail('github') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('website', 'has-error has-feedback') }}">
            {{ Form::label('website', 'Website') }}
            {{ Form::text('website', null, ['class'=>'form-control']) }}
            {{ Notification::getErrorDetail('website') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group {{ Notification::hasErrorDetail('website', 'has-error has-feedback') }}">
            {{ Form::label('tagline', 'Website') }}
            {{ Form::text('website', null, ['class'=>'form-control']) }}
            {{ Notification::getErrorDetail('website') }}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-md-8">
        {{ Form::submit('Save', array('class'=>'btn btn-primary')) }}
        <p></p>
    </div>
</div>

{{ Form::close() }}

</div>