
@include('header')

@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Shop
            <small>Manage your Shops </small>
        </h1>

    </section>

    <section class="content">
        @include('flash::message')

        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#fa-icons" data-toggle="tab">Region</a></li>
                        <li><a href="#glyphicons" data-toggle="tab">Search</a></li>


                    </ul>
                    <div class="tab-content">
                        <!-- Font Awesome icons -->
                        <div class="tab-pane active" id="fa-icons" >


                            <?php $Areas=App\Stock::getArea() ?>

                            @foreach($Areas as $Area)
                                    <h4 class="page-header">{{$Area->AreaName}}</h4>
                               <?php $TerritoryIds=App\Stock::getTerritory($Area->AreaId) ?>
                                    <div class="row">

                                    @foreach($TerritoryIds as $TID)

                                        <div class="col-md-5">
                                        <div class="box box-default collapsed-box box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">
                                                    <p><B><?php echo $TID->TeretoryName ?></B> </p>

                                                </h3>
                                                <div class="box-tools pull-right">
                                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>

                                            <div class="box-body">
                                                <?php $Route=App\Shop::getRoute( $TID->TeretoryId )  ?>
                                                @foreach($Route as $Routes)
                                               <li><h4><a href="/shop/{{$Routes->RouteId}}">{{$Routes->RouteName}}</a>&nbsp;&nbsp;&nbsp;<a href="\shop\sales\{{$Routes->RouteId}}"> &nbsp;<i style="color:indianred;" class="fa fa-plus-square"></i> Add </a>&nbsp;&nbsp;&nbsp;<a href="\shop\{{$Routes->RouteId}}"> &nbsp;<i style="color:indianred;" class="fa fa-eye"></i> view </a></li></h4>

                                                @endforeach

                                            </div>
                                        </div>
                                      </div>
                                        @endforeach
                                    </div>



                            @endforeach




                        </div><!-- /#fa-icons -->
                        <!-- glyphicons-->
                        <div class="tab-pane" id="glyphicons">

                            <ul class="bs-glyphicons">


                                <li>
                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                    <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                                </li>
                                <li>
                                    <span class="glyphicon glyphicon-zoom-out"></span>
                                    <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                                </li>
                            </ul>
                        </div><!-- /#ion-icons -->


                    </div><!-- /.tab-content -->
                </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
        </div><!-- /.row -->



    </section>
</div>

@include('footer')
