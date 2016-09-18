@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Incentive
            <small>update Incentive</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/incentive/"><i class="fa fa-home"></i> Home</a></li>

        </ol>
    </section>

    <section class="content">



        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Incentive update form</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">


                <h1>Update {{$incentive->productId}} details</h1>

                <hr/>
                {!! Form::model($incentive,['method' => 'PATCH','action'=>['IncentiveController@update',$incentive->id],'class' => 'form-horizontal','id' =>'register-form']) !!}



                <div class="form-group">

                    {!! Form::label('title','90%:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('p90orMore',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','100%:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('p100orMore',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','110%',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::number('p110orMore',null,['class' => 'form-control']) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::submit('Add',['class' =>'btn btn-danger form-control']) !!}
                    </div>
                </div>


                {!!  Form::close()  !!}

                <div class="box-footer">

                </div>

                @include('errors.validateError')
            </div>

        </div>

    </section>
</div>

@include('footer')
