@include('header')

@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Monthly Sales
            <small>(RD) </small>
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
                    <tr class="active">
                        <th>PID</th>
                        <th>Product name</th>
                        <th>Target</th>
                        <th>RD Sales(unit)</th>
                        <th>RD Completion</th>
                        <th>RD Percentage</th>
                        <th>Current Stock</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($completes as $complete)

                        <?php $ProductName=App\Product::getProductName($complete->productId); ?>
                        <?php $Target=App\Target::getCurrentTarget($complete->productId,$territory); ?>
                        <?php $Percentage=App\Sales::findPercentage($Target,$complete->quantity); ?>
                        <?php $Stock=App\Stock::getStock($complete->productId,$territory); ?>
                        <tr class="danger">

                            <td> {{$complete->productId}} </td>
                            <td> {{$ProductName}} </td>
                            <td> {{$Target}} </td>
                            <td> {{$complete->quantity}} </td>

                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-primary" style="width:<?php echo $Percentage ;?>%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-red">{{$Percentage}}% </span></td>
                            <td> {{$Stock}} </td>


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
