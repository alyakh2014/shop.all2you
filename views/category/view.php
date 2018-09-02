<section id="advertisement">
    <div class="container">
        <?=\yii\helpers\Html::img('@web/images/shop/1.jpg', ['alt'=>'Banner advertisement'])?>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории товаров</h2>
                    <ul class="catalog category-products">
                        <!--category-productsr-->
                        <?=\app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>
                    <!--/category-productsr-->

                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range">
                        <!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <?=\yii\helpers\Html::img('@web/images/home/shipping.jpg', ['alt'=>'Banner'])?>
                    </div>
                    <!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><?=$category->name?></h2>
                    <?if(!empty($products)):?>
                    <?$num = 0; foreach($products as $product):?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?=\yii\helpers\Html::img("@web/images/shop/$product->img");?>
                                    <img src="images/shop/product12.jpg" alt="" />
                                    <h2>$<?=$product->price;?></h2>
                                    <p><a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$product->id])?>"><?=$product->name?></a></p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                            <?if($product->new):?>
                                <?=\yii\helpers\Html::img("@web/images/home/new.png",['alt'=>"Новинка", 'class'=>'new'])?>
                            <?endif;?>
                            <?if($product->sale):?>
                                <?=\yii\helpers\Html::img("@web/images/home/sale.png",['alt'=>"Распродажа", 'class'=>'new'])?>
                            <?endif;?>
                        </div>
                    </div>
                    <?$num++;?>
                    <?if($num%3 == 0):?>
                    <div class="clearfix"></div>
                    <?endif;?>
                    <?endforeach;?>
                        <div class="clearfix"></div>
                        <?
                        echo yii\widgets\LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>

                    <?else:?>
                        В этой категории пока нет товаров
                    <?endif;?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>