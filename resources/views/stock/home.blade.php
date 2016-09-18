@include('header')

@include('sidebar')
{{ $count=0}}
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Stock
            <small>Manage your stock </small>
        </h1>

    </section>

    <section class="content">
        @include('flash::message')


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Stock Table</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            {!! Form::open(['url'=>'stock']) !!}

            <div class="box-body">

                <table id="shop_table" class="table table-bordered table-hover" >

                    <thead>
                    <tr class="active">
                        <th>PID</th>
                        <th>Product name</th>
                        <th>current stock(unit)</th>
                        <th>new stock(unit)</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($product as $products)
                        <?php  $cStock=App\Stock::getStock($products->productId,$territory)  ?>
                        <tr class="<?php if($cStock>0)
                            echo "info" ;
                        else
                            echo "danger"
                        ?>">

                            <td> {{$products->productId}} </td>
                            <td> {{$products->name}} </td>
                            <td> <?php echo $cStock ?> </td>


                            <input type="hidden" name="members[<?php echo $count ?>][productId]" placeholder="last name" value="{{$products->productId}}" class='form-control' />

                            <td>  <input type="number" name="members[<?php echo $count ?>][quantity]" placeholder=""  class='form-control' /></td>
                            <input type="hidden" name="members[<?php echo $count ?>][territory]" placeholder="last name" value="<?php echo $territory ?>" class='form-control' />

                        </tr>
                        <?php $count++; ?>

                    @endforeach
                    <input type="hidden" name="count" placeholder="last name" value="<?php echo $count;  ?>" class='form-control' />
                    <tr>
                        <td colspan="4">

                            <div class="form-group">
                                {!! Form::submit('Add Product',['class' =>'btn btn-danger form-control']) !!}

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
