    @include('header')

    @include('sidebar')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Product
                <small>Manage your product Detail</small>
            </h1>

        </section>

        <section class="content">
            @include('flash::message')
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Product Table</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">


                                    <table id="shop_table" class="table table-bordered table-hover" >

                                        <thead>
                                        <tr class="info">
                                            <th>Index</th>
                                            <th>PID</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Weight</th>
                                            <th>Case Make Up</th>
                                            <th>Unit Price WS</th>
                                            <th>CasePrice WS</th>
                                            <th>Unit Price TF</th>
                                            <th>Unit Price TFPrice Consumer</th>
                                            <th>Price Consumer</th>
                                            <th>Free Issue Rate</th>
                                            <th>LastUpdate</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($product as $products)
                                             <tr class="danger">
                                                 <td> {{$products->id}} </td>
                                                 <td> {{$products->productId}} </td>
                                                 <td> {{$products->name}} </td>
                                                 <td> {{$products->category}} </td>
                                                 <td> {{$products->weight}} </td>
                                                 <td> {{$products->caseMakeup}} </td>
                                                 <td> {{$products->unitPrice_ws}} </td>
                                                 <td> {{$products->casePrice_ws}} </td>
                                                 <td> {{$products->unitPrice_tf}} </td>
                                                 <td> {{$products->casePrice_tf}} </td>
                                                 <td> {{$products->priceConsumer}} </td>
                                                 <td> {{$products->freeIssueRate}} </td>
                                                 <td> {{$products->updated_at}} </td>

                                                 <td><a href="/product/{{$products->id}}/edit"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                 <td><a href="/product/{{$products->id}}"><button class="btn btn-danger btn-xs">Delete</button></a></td>

                                             </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Index</th>
                                            <th>PID</th>
                                            <th>Product Name</th>
                                            <th>Weight</th>
                                            <th>Case Makeup</th>
                                            <th>Unit Price WS</th>
                                            <th>Case Price WS</th>
                                            <th>Unit Price TF</th>
                                            <th>Case Price TF</th>
                                            <th>Price Consumer</th>
                                            <th>Category</th>
                                            <th>Free Issue Rate</th>



                                        </tr>
                                        </tfoot>


                                    </table><!-- table -->


                <div class="box-footer">
                    Footer
                </div>

            </div>

          </div>



        </section>
    </div>

    @include('footer')
