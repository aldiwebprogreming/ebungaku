
<!-- Hero Section Start -->

<!-- Hero Section End -->

<!-- form input daerah -->
<div class="section">
    <div class="container mt-3">
        <h4 class="text-center" style="margin-bottom: 40px;">Choose the Destination</h4>
        <div class="row">
           
                <!-- <div class="col-sm-4">
                    <div class="form-groub">
                        <label>Country / negara</label>
                        <input type="text" name="negara" class="form-control" value="Indonesia">
                    </div>
                </div> -->

                <div class="col-sm-6">
                    <div class="form-groub">
                        <label>Province / Provinsi</label>
                        <input type="text" name="provinsi" class="form-control" value="<?= $prov ?>">
                    </div>
                </div>

                 <div class="col-sm-6">
                    <div class="form-groub">
                        <label>Regency / Kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control" value="<?= $kab ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-groub">
                        <label>Sub-District / Kecamatan</label>
                        <input type="text" name="kabupaten" class="form-control" value="<?= $kec ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-groub">
                        <label>Urban Village / Kelurahan</label>
                        <input type="text" name="kabupaten" class="form-control" value="<?= $kel ?>">
                    </div>
                </div>

                <!-- <div class="col-sm-4">
                    <div class="form-groub">
                        <label>Postal Code / Kode Pos</label>
                        <input type="text" name="kabupaten" class="form-control">
                    </div>
                </div> -->
            
        </div>
    </div>
</div>




<!-- Start Product Area -->
<div class="porduct-area section-pb" id="divProduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center" style="margin-top: 50px;">
                    <h2><span>Ebunga</span> Product</h2>
                    <p>List of products that we provide, we will list the products that you might need to give something special to the special person for you</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="<?= base_url() ?>assets/img/buket.png" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>

                    </div>
            </div>

            <div class="col-sm-4">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="<?= base_url() ?>assets/img/buket.png" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="product-image">
                        <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}">
                            <img src="<?= base_url() ?>assets/img/buket.png" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="{{ url('product/cat-'.$subKategori -> slug.'/area-all') }}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
            </div>

        </div>

      
        

     

       
        


    </div>
</div>
<!-- Start Product End -->



<!-- testimonial-area start -->

<!-- testimonial-area end -->


<!-- Blog Area Start -->

<!-- Blog Area End -->
<script>
    $(doc)
</script>