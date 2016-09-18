@include('header')

@include('sidebar')

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


            <div class="box-body">

                <table id="shop_table" class="table table-bordered table-hover" >

                    <thead>
                    <tr class="active">
                        <th>PID</th>
                        <th>Product name</th>
                        <th>current stock(unit)</th>
                        <th>last time updated</th>

                    </tr>
                    </thead>
{{$territory='T01A001'}}
                    <tbody>
                    @foreach ($stock as $stocks)

                       <?php $ProductName=App\Product::getProductName($stocks->productId) ?>
                        <tr class="danger">

                            <td> {{$stocks->productId}} </td>
                            <td> {{$ProductName}} </td>
                            <td> {{$stocks->quantity}} </td>
                            <td> {{$stocks->updated_at}} </td>

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
