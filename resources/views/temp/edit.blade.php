@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Product
            <small>Manage your product prices</small>
        </h1>

    </section>

    <section class="content">


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">


                <h1>Write New Article</h1>

                <hr/>
                {!! Form::open(['method' => 'PATCH','action'=>['ProductController@update',$product->id]]) !!}



                <div class="from-group">
                    {!! Form::label('title','ProductID:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('productId',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Name:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('name',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Weight:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('weight',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Case Makeup:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('caseMakeup',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Unit Price W/S:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('unitPrice_ws',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Case Price W/S:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('casePrice_ws',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Unit price T/F:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('unitPrice_tf',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Case Price T/F:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('casePrice_tf',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Price Consumer:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::number('priceConsumer',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Category:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('category',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">
                    {!! Form::label('title','Free Issue Rate:',['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('freeIssueRate',null,['class' => 'form-control']) !!}

                </div>

                <div class="from-group">

                </div>

                <div class="form-group">
                    {!! Form::submit('Add Product',['class' =>'btn btn-danger form-control']) !!}

                </div>

                {!!  Form::close()  !!}

                <div class="box-footer">
                    Footer
                </div>
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)

                            <li>{{ $error  }}</li>

                        @endforeach
                    </ul>
                @endif
            </div>

        </div>

    </section>
</div>

@include('footer')
