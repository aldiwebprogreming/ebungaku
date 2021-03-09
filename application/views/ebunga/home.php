
<!-- Hero Section Start -->
<div class="hero-slider hero-slider-one">

    <!-- Single Slide Start -->
    <div class="single-slide" style="background-image: url('https://s3-id-jkt-1.kilatstorage.id/ebunga/slider/slider-two-01.jpg')">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="slider-text-info">
                        <h2>A <span>Different</span> </h2>
                        <h1>Online <span>Flower</span> Shop </h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>
                        <div class="hero-btn">
                            <a href="shop.html" class="slider-btn uppercase"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <!-- Single Slide End -->


    <!-- Single Slide Start -->
    <div class="single-slide" style="background-image: url('https://s3-id-jkt-1.kilatstorage.id/ebunga/slider/slider-two-02.jpg')">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="slider-text-info">
                        <h2>A <span>Different</span> </h2>
                        <h1>Online <span>Flower</span> Shop </h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>
                        <div class="hero-btn">
                            <a href="shop.html" class="slider-btn uppercase"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <!-- Single Slide End -->


    <!-- Single Slide Start -->
    <div class="single-slide" style="background-image: url('https://s3-id-jkt-1.kilatstorage.id/ebunga/slider/slider-two-02.jpg')">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="slider-text-info">
                        <h2>A <span>Different</span> </h2>
                        <h1>Online <span>Flower</span> Shop </h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>
                        <div class="hero-btn">
                            <a href="shop.html" class="slider-btn uppercase"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <!-- Single Slide End -->
</div>
<!-- Hero Section End -->

<!-- form input daerah -->
<div class="section mt-30 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="text-center">Tentukan tujuan pengantaran</h4>
                
                <form method="post" action="<?= base_url() ?>ebunga/product">
                    <div class="input-group mb-3">
                        <select class="form-control" name="kelurahan">
                            <option>Pilih nama kelurahan tujuan anda</option>
                            <?php  foreach ($kelurahan as $data) { ?>

                            <option><?= $data['nama'] ?></option>

                        <?php   } ?>
                            
                        </select>
                    </div>

                    <input type="submit" name="ok" class="btn btn-outline-primary" value="Cari">

                   

                </form>
            </div>
        </div>

    </div>
</div>




<!-- Start Product Area -->
<div class="porduct-area section-pb" id="divProduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <h2><span>Ebunga</span> Product</h2>
                    <p>List of products that we provide, we will list the products that you might need to give something special to the special person for you</p>
                </div>
            </div>
        </div>
        <div class="text-center pt-1 pb-1">
            <a href="javascript:void(0)" @click="switchProduct('Bunga')" class="btn btn-outline-primary btn-round active-btn" id="btnProdBunga" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/rose-outline.svg') }}" style="width: 30px;"> Bunga
            </a>
            <a href="javascript:void(0)" @click="switchProduct('PapanBunga')" id="btnProdPapanBunga" class="btn btn-outline-primary btn-round" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/easel-outline.svg') }}" style="width: 30px;"> Papan Bunga
            </a>
            <a href="javascript:void(0)" @click="switchProduct('Parcel')" class="btn btn-outline-primary btn-round"  id="btnProdCake" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/gift-outline.svg') }}" style="width: 30px;"> Parcel
            </a>
            <a href="javascript:void(0)" @click="switchProduct('Cake')" class="btn btn-outline-primary btn-round" id="btnProdCake" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/storefront-outline.svg') }}" style="width: 30px;"> Cake
            </a>
        </div>

      
        <div class="row product-two-row-4 divProduct" id="divKategoriBunga">
        

            <div class="col-lg-12">
                <!-- single-productfwrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}"></a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
           
        </div>

     
        <div class="row product-two-row-4 divProduct" id="divKategoriPapanBunga">
           

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}"></a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
           
        </div>

       
        <div class="row product-two-row-4 divProduct" id="divKategoriParcel">
         

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}"></a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            
        </div>

       
        <div class="row product-two-row-4 divProduct" id="divKategoriCake">
           

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}"></a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
           
        </div>


    </div>
</div>
<!-- Start Product End -->



<!-- testimonial-area start -->
<div class="testimonial-area testimonial-bg bg-gray overly-image section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-md-2 col-md-8 col-sm-12">
                <div class="testimonial-slider">
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>JONATHON JORDAN</h5>
                        </div>
                    </div>
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>Michelle Mitchell</h5>
                        </div>
                    </div>
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>Max Mitchell</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area end -->


<!-- Blog Area Start -->
<div class="blog-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <h2><span>Latest</span> Blog</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <!-- single-blog Start -->
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('ladun/futala/') }}/images/blog/blog-03.jpg" alt=""></a>
                        <div class="meta-tag">
                            <p><span>21</span> / Nov</p>
                        </div>
                    </div>

                    <div class="blog-content">
                        <h4><a href="#">Lorem Ipsum available but majority</a></h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some ledmid form There are many majority have suffered </p>
                        <div class="read-more">
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <!-- single-blog End -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- single-blog Start -->
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('ladun/futala/') }}/images/blog/blog-04.jpg" alt=""></a>
                        <div class="meta-tag">
                            <p><span>26</span> / Nov</p>
                        </div>
                    </div>

                    <div class="blog-content">
                        <h4><a href="#">Available but majority lorem Ipsum </a></h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some ledmid form There are many majority have suffered </p>
                        <div class="read-more">
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <!-- single-blog End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
<script>
    $(document).ready(function(){



    })
</script>