<div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                         <!-- @foreach($category as $key => $cate) -->
                           <h2>Tui Sach</h2>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                        @endforeach

                        </div><!--/category-products-->
                    
                        <div class="brands_products">
                       <!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                               
                                </ul>
                            </div>
                       <!--/brands_products-->
                   
                        
                        </div>
                        
             
                    
                    </div>