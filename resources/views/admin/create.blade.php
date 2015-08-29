@extends('admin.main')

@section('content')
    <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
        <!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>New Article<br><small>Create a new Wikee article!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Article</li>
        <li><a href="">Create</a></li>
    </ul>
    <!-- END Forms General Header -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="block-title">
                    <h2><strong>New Article</strong> </h2>
                </div>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->

                    {!! Form::open(array('class'=>'form-horizontal')) !!}
                        <div class="form-group">
                            <div class="col-md-2">
                            {!! Form::label('title', 'Title:', ['class' => 'pull-right']) !!}
                            </div>
                            <div class="col-md-9 pull-left">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                             </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                {!! Form::label('body', 'Body:',['class' => 'pull-right']) !!}
                            </div>
                            <div class="col-md-9 pull-left">
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                                <script>
                                    // Replace the <textarea id="body"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'body' );
                                </script>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                {!! Form::label('published_at', 'Publish Date:',['class' => 'pull-right']) !!}
                            </div>
                            <div class="col-md-3 pull-left">
                                {!! Form::input('date', 'published_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2">

                        {!! Form::submit('Publish', ['class' => 'btn btn-sm btn-primary form-control']) !!}

                        </div>

                    </div>


                    {!! Form::close() !!}

                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
    </div>
</div>
<!-- END Page Content -->


@stop
