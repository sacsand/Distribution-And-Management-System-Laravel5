@include('header')

@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Primary Target
            <small>  </small>
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


            <div class="box-body">

                <table id="shop_table" class="table table-bordered table-hover" >

                    <thead>
                    <tr class="active">null</tr>
                    </thead>

                    <tbody>
                    @foreach ($targets as $target)

                        <?php $ProductName=App\Product::getProductName($target->productId) ?>
                        <?php $MonthlySale=App\Sales::getCumulativeSales_Monthly_OneProduct($territory,$target->productId) ?>
                        <tr class="
                         <?php if($MonthlySale==0)
                                  echo 'danger';
                                  else
                                  echo 'info';?>">

                            <td> {{$target->productId}} </td>
                            <td> {{$ProductName}} </td>
                            <td> {{$target->target}} </td>
                            <td> {{$target->updated_at}} </td>
                            <td> {{$MonthlySale}} </td>

                        </tr>


                    @endforeach

                    </tbody>



                </table><!-- table -->

                <div class="box-footer">
                    Footer
                </div>

            </div>

        </div>



    </section>
</div>

@include('footer')
