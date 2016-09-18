@include('header')

@include('sidebar')
{{ $count=0}}
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Target
            <small>Manage your Target </small>
        </h1>

    </section>

    <section class="content">
        @include('flash::message')


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Target Table</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            {!! Form::open(['url'=>'target']) !!}

            <div class="box-body">

                <table id="shop_table" class="table table-bordered table-hover" >

                    <thead>
                    <tr class="active">
                        <th>PID</th>
                        <th>Product name</th>
                        <th>Current Target</th>
                        <th>New Target</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($product as $products)
                        <?php $CurrentTarget=App\Target::getCurrentTarget($products->productId,"T01A001") ?>
                        <tr class="<?php if($CurrentTarget>0)
                            echo "info" ;
                        else
                            echo "danger"
                        ?>">

                            <td> {{$products->productId}} </td>
                            <td> {{$products->name}} </td>
                            <td> <?php if($CurrentTarget>0)
                                        echo $CurrentTarget ;
                                       else
                                        echo "target not set"
                                 ?>


                            </td>


                            <input type="hidden" name="members[<?php echo $count ?>][productId]" placeholder="last name" value="{{$products->productId}}" class='form-control' />
                            <input type="hidden" name="members[<?php echo $count ?>][territoryId]" placeholder="last name" value="T01A001" class='form-control' />
                            <td>  <input type="number" name="members[<?php echo $count ?>][target]" placeholder=""  class='form-control' /></td>


                        </tr>
                        <?php $count++; ?>

                    @endforeach

                    <tr>
                        <td colspan="4">

                            <div class="form-group">
                                {!! Form::submit('Add Target',['class' =>'btn btn-danger form-control']) !!}

                            </div>


                        </td>
                    </tr>
                    </tbody>



                </table><!-- table -->
                {!!  Form::close()  !!}
                <div class="box-footer">
                    Footer
                </div>

            </div>

        </div>



    </section>
</div>

@include('footer')
