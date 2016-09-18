@include('header')

@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cumulative Sale
            <small>(RD)(All the time) </small>
        </h1>

    </section>

    <section class="content">
        @include('flash::message')


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sales Table</h3>
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
                        <th>Sales(unit)</th>
                        <th>Value</th>
                        <th>profit</th>
                        <th>Free Issue</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($sales as $sale)

                        <?php $ProductName=App\Product::getProductName($sale->productId) ?>
                        <tr class="danger">

                            <td> {{$sale->productId}} </td>
                            <td> {{$ProductName}} </td>
                            <td> {{$sale->quantity}} </td>
                            <td> {{$sale->total}} </td>
                            <td> {{$sale->propit}} </td>
                            <td> {{$sale->freeIssue}} </td>

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
