@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Product
            <small>Manage your product prices</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/product/"><i class="fa fa-home"></i> Home</a></li>

        </ol>

    </section>

    <section class="content">


        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Product Form</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

            <article>
                <h1>Add New Product</h1>
            </article>
                <hr/>
            {!! Form::open(['url'=>'product','class' => 'form-horizontal','id' =>'register-form']) !!}



                <div class="form-group">
                    {!! Form::label('inputEmail3','ProductID:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::text('productId',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('inputEmail3','Name:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('inputEmail3','Weight:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('weight',null,['class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">

                    {!! Form::label('title','Case Makeup:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('caseMakeup',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Unit Price W/S:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('unitPrice_ws',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Case Price W/S:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('casePrice_ws',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Unit price T/F:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('unitPrice_tf',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Case Price T/F:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('casePrice_tf',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Price Consumer:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::number('priceConsumer',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Category:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('category', $categories,null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('title','Free Issue Rate:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::text('freeIssueRate',null,['class' => 'form-control']) !!}
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-12">
                {!! Form::submit('Add Product',['class' =>'btn btn-danger form-control']) !!}
                    </div>
                </div>

            {!!  Form::close()  !!}

                       <div class="box-footer">
                            Product Form
                       </div>
          @include('errors.validateError')
</div>

        </div>

    </section>
</div>

@include('footer')
