@include('header')

@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Incentive
            <small>Manage your Incentive </small>
        </h1>

    </section>

    <section class="content">
        @include('flash::message')


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Incentive Table</h3>
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
                        <th>90%</th>
                        <th>100%</th>
                        <th>110%</th>
                        <th></th>


                    </tr>
                    </thead>

                    <tbody>
                    <tbody>
                    @foreach ($product as $products)

                    <?php  $incentive90=App\Incentive::getIncentive90($products->productId );
                           $incentive100=App\Incentive::getIncentive100($products->productId );
                           $incentive110=App\Incentive::getIncentive110($products->productId );
                           $incentiveId=App\Incentive::getIncentiveId($products->productId );

                    ?>

                        <tr class="<?php if($incentive90!=NULL)
                            echo "info" ;
                        else
                            echo "danger"
                        ?>">

                            <td> {{$products->productId}} </td>
                            <td> {{$products->name}} </td>

                            <td><?php echo $incentive90; ?> </td>
                            <td><?php echo $incentive100; ?> </td>
                            <td><?php echo $incentive110; ?> </td>

                            <td>

                            <a href="/incentive/<?php if($incentive90>0){echo $incentiveId."/edit";}else{ echo $products->productId;}?>"><button class="btn btn-primary btn-xs"><?php if($incentive90>0){echo "Edit";}else{ echo "Add";}?></button></a>

                            </td>

                        </tr>

                    @endforeach


                    </tbody>



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
