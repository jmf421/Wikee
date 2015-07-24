@extends('admin.main')

@section('content')

        <!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Form General Elements<br><small>Clean and professional forms for your UI!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Article</li>
        <li><a href="">Create</a></li>
    </ul>
    <!-- END Forms General Header -->

    <div class="row">
        <div class="col-md-12">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                    </div>
                    <h2><strong>Create A New Article</strong> </h2>
                </div>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->

                    {!! Form::open(array('class'=>'form-horizontal form-bordered')) !!}
                        <div class="form-group">
                            <div class="col-md-1">
                            {!! Form::label('title', 'Title:', ['class' => 'pull-right']) !!}
                            </div>
                            <div class="col-md-8 pull-left">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                             </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1">
                                {!! Form::label('body', 'Body:',['class' => 'pull-right']) !!}
                            </div>
                            <div class="col-md-8 pull-left">
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>

                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-1">

                        {!! Form::submit('Add Article', ['class' => 'btn btn-sm btn-primary form-control']) !!}

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
