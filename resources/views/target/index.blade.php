
    @include('header')

    @include('sidebar')
    {{ $count=0}}
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Target
                <small>Manage your target </small>
            </h1>

        </section>

        <section class="content">
            @include('flash::message')

            <div class="row">
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#fa-icons" data-toggle="tab">Region</a></li>
                            <li><a href="#glyphicons" data-toggle="tab">Options</a></li>


                        </ul>
                        <div class="tab-content">
                            <!-- Font Awesome icons -->
                            <div class="tab-pane active" id="fa-icons" >
                                <?php $Areas=App\Stock::getArea() ?>
                                @foreach($Areas as $Area)

                                <section id="new">
                                    <h4 class="page-header">{{$Area->AreaName}}</h4>
                                    <?php $TerritoryIds=App\Stock::getTerritory($Area->AreaId) ?>


                                    <div class="row fontawesome-icon-list">
                                        @foreach($TerritoryIds as $TID)
                                   <a href="\target\{{$TID->TeretoryId}}"> <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> {{$TID->TeretoryName}}</div></a>
                                        @endforeach

                                    </div>

                                </section>
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
