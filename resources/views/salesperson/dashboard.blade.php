@include('header')

@include('sidebar')
<?php $territory='T01A001'?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hi Sajith
            <small></small>
        </h1>

    </section>

<section class="content">
    <!-- Info boxes -->
    <?php $Sales=App\Sales::getSummerySales_Month($territory) ?>
    <?php $Value=App\Sales::getSummeryTotal_Month($territory) ?>
    <?php $Profit=App\Sales::getSummeryProfit_Month($territory) ?>
    <?php $FreeIssue=App\Sales::getSummeryFreeIssue_Month($territory) ?>




    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 0%</span>
                                <h5 class="description-header">UNIT {{ $Sales }}</h5>
                                <span class="description-text">TOTAL SALES</span>
                            </div><!-- /.description-block -->
                        </div><!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                <h5 class="description-header">RS {{ $Value }}</h5>
                                <span class="description-text">TOTAL VALUE</span>
                            </div><!-- /.description-block -->
                        </div><!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 0%</span>
                                <h5 class="description-header">RS {{ $Profit }} </h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div><!-- /.description-block -->
                        </div><!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block">
                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 0%</span>
                                <h5 class="description-header">{{ $FreeIssue }}</h5>
                                <span class="description-text">FREE ISSUE</span>
                            </div><!-- /.description-block -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-4">
            <!-- MAP & BOX PANE -->

            <!--hwre one row is deledt code in new folder---may later nedd -->

            <!-- TABLE: cumlative sale -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Target Completion <small></small> </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->


            </div><!-- /.box-body -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Target Completion <small></small> </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->



            </div><!-- /.box-body -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Stock Level <small></small> </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->

            </div>



        </div><!-- /.col -->
        <div class="col-md-4">
            dfd
        </div>

        <div class="col-md-4">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Sales According to Route</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">

                                <!-------chart---chart----chart-chart------------------------------------------------------------------>

                                <canvas id="chart-area"  height="200" ></canvas>

                            </div><!-- ./chart-responsive -->
                        </div><!-- /.col -->
                        <div class="col-md-4">



                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">

                    </ul>
                </div><!-- /.footer -->
            </div><!-- /.box -->


      </div><!-- /.col -->
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@include('footer')