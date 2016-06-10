<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    @include('partials.head', ['title' => 'services'])
    <meta name="description" content="Document">
    <meta name="author" content="Jonathan Sarry">

</head>

<body>

@include('partials.nav')

<section id="form">
    <div class="form-panel">

        {!! Form::open() !!}

        <!--ServiceHeader Field
            Form::text('name : String', 'default : String', params : array) -->
        <div class="form-group">
            <div class="col-xs-12">
                {!! Form::label('serviceHeader', 'ServiceHeader: ') !!}
                {!! Form::text('serviceHeader',null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!--Service Item Field
            Form::text('name : String', 'default : String', params : array) -->
        <div class="form-group">
            <div class="col-xs-8">
                {!! Form::label('serviceItem', 'Service Item: ') !!}
                {!! Form::text('serviceItem',null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!--Service Price Field
            Form::text('name : String', 'default : String', params : array) -->
        <div class="form-group">
            <div class="col-xs-4">
                {!! Form::label('servicePrice', 'Service Price: ') !!}
                {!! Form::text('servicePrice',null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Save Field -->
        <div class="form-group">
            <div class="btn-group" style="padding: 10px;">
                {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</section>


</body>
</html>
