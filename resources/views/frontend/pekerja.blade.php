@extends('frontend.partials.main')
@section('title')
    Pekerja
@endsection


@section('content')
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">List Layout With Sidebar</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">  
        <div class="row">
             
        <div class="col-md-3 p0 padding-top-40">
            <div class="blog-asside-right pr0">
                <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Smart search</h3>
                    </div>
                    <div class="panel-body search-widget">
                        <form action="" class=" form-inline"> 
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Key word">
                                            <option value="0">ART</option>
                                            <option value="1">Baby Sitter</option>
                                        </select>                                      </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Select your province">
                                            @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Select your city">
                                            @foreach ($kotas as $kota)
                                            <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                            </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9  pr0 padding-top-40 properties-page">
            <div class="col-md-12 clear"> 
                <div class="col-xs-10 page-subheader sorting pl0">
                    <ul class="sort-by-list">
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                Property Date <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                Property Price <i class="fa fa-sort-numeric-desc"></i>						
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    <div class="items-per-page">
                        <label for="items_per_page"><b>Property per page :</b></label>
                        <div class="sel">
                            <select id="items_per_page" name="per_page">
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option selected="selected" value="12">12</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>
                        </div><!--/ .sel-->
                    </div><!--/ .items-per-page-->
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 clear"> 
                <div id="list-type" class="proerty-th">
                    <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div>


                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div>

                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 
                </div>
            </div>
            
            <div class="col-md-12"> 
                <div class="pull-right">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>  
        </div>              
    </div>
</div>
@endsection