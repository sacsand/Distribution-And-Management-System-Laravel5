@include('header')

@include('sidebar')
{{ $count=0}}
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Shops
            <small>Manage your shops </small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="/shop/"><i class="fa fa-home"></i> Home</a></li>

        </ol>


    </section>

    <section class="content">
        @include('flash::message')


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Shop Table</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>


            <div class="box-body">

                <table id="shop_table" class="table table-bordered table-hover" >

                    <thead>
                    <tr class="danger">
                        <th>ShopId</th>
                        <th>Shop Name</th>
                        <th>Address</th>
                        <th>PhoneNo</th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($shops as $shop)

                        <tr  class="info">

                            <td> {{$shop->shopId}} </td>
                            <td> {{$shop->name}} </td>
                            <td> {{$shop->address}} </td>
                            <td> {{$shop->phone}} </td>

                            <td> <a href="\shop\{{$shop->id}}\edit"> <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> Edit</div></a></td>

                        </tr>
                        <?php $count++; ?>

                    @endforeach


                    </tbody>



                </table><!-- table -->
                {!!  Form::close()  !!}
                <div class="box-footer">
                    Total Shops <?php echo $count ?>
                </div>

            </div>

        </div>



    </section>
</div>

@include('footer')
