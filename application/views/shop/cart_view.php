<?php $this->load->view("_partials/header.php") ?>

<body>

    <?php $this->load->view("_partials/navbar.php") ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $subtotal = 0;
                            foreach($cart as $crt):
                                $total = $crt->harga * $crt->quantity;
                                $subtotal = $subtotal + $total;?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="<?php echo base_url();?>assets/img/product/<?php echo $crt->gambar;?>.jpg" alt=""> <!-- Belum Aktif -->
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo $crt->name;?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$<?php echo $crt->harga;?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $crt->quantity;?></h5>
                                </td>
                                <td>
                                    <h5>$<?php echo $total;?></h5>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#upModal<?php echo $crt->cart_id?>"><span class="ti-pencil"></span></button>
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#delModal<?php echo $crt->cart_id?>"><span class="ti-trash"></span></button>
                                </td>
                            </tr>
                            <!-- Modal Update -->
                                <div id="upModal<?php echo $crt->cart_id?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Update</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('shop/updateCart')?>" method="post" id="<?php echo $crt->cart_id?>update_qty">
                                            <input type="hidden" name="id_cart" value="<?php echo $crt->cart_id;?>">
                                            <input type="hidden" name="id_user" value="<?php echo $crt->user_id;?>">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="sst<?php echo $crt->cart_id?>" value="<?php echo $crt->quantity?>" title="Quantity:" class="input-text qty">
                                            <button onclick="var result = document.getElementById('sst<?php echo $crt->cart_id?>'); var sst = result.value; var max = <?php echo $crt->stok;?>; if( !isNaN( sst ) &amp;&amp; sst < max) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                            <button onclick="var result = document.getElementById('sst<?php echo $crt->cart_id?>'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" form="<?php echo $crt->cart_id?>update_qty">Update</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                                </div>
                                <!-- Modal Delete -->
                                <div id="delModal<?php echo $crt->cart_id?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Delete</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Apakah anda yakin menghapus <?php echo $crt->name?> dari keranjang?</h5>
                                        <form action="<?php echo base_url('shop/deleteCart')?>" method="post" id="<?php echo $crt->cart_id?>delete_crt">
                                            <input type="hidden" name="id_cart" value="<?php echo $crt->cart_id;?>">
                                            <input type="hidden" name="id_user" value="<?php echo $crt->user_id;?>">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-default" form="<?php echo $crt->cart_id?>delete_crt">Delete</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            <?php endforeach;?>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>$<?php echo $subtotal?></h5>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td rowspan="2">
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href=<?php echo base_url('shop/category') ?>>Continue Shopping</a> <!-- href ke kategori page 1 -->
                                        <a class="primary-btn" href=<?php if(count($cart) > 0){echo base_url('shop/checkout')."/". $this->session->userid;}else{echo '#';} ?>>Proceed to checkout</a> <!-- href ke Checkout -->
                                    </div>
                                </td>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>
</body>

</html>