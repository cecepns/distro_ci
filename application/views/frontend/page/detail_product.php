<!-- WRAPPER UNTUK MAIN CONTENT -->
<div class="main-content">
    <div class="container">

        <!-- END WRAPPER HERO BANNER -->

        <!-- WRAPPER UNTUK ITEM PRODUK -->
        <div class="list-product">

            <!-- WRAPPER HEADER POPULER PRODUK -->
            <div class="wrapper-header">
                <h1>Detail Product</h1>
                <svg width="49" height="9" viewBox="0 0 49 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="6" y1="1" x2="31" y2="0.999998" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                    <line x1="39" y1="1" x2="48" y2="1" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                    <line x1="1" y1="8" x2="37" y2="8" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </div>
            <!-- END WRAPPER HEADER PRODUK -->

            <!-- WRAPPER LIST PRODUK -->
            <div class="wrapper-list-product chart">

                <!-- LIST PRODUK -->
                <div class="item-product chart">
                    <div class="image">
                        <img src="<?php echo base_url('uploads/product/'.$product->img_product); ?>"   alt="product-image">
                    </div>
                    <div class="description-product">
                        <h3 class="title-product">
                            <?php echo $product->name_product ?>
                        </h3>
                        <span class="description">
                            <?php echo $product->desc_product ?>
                        </span>
                        <input  type="hidden" id="valuePrice" value="<?php echo $product->price ?>">
                        <input  type="hidden" id="finalPrice" value="<?php echo $product->price ?>">
                        <input  type="hidden" id="productName" value="<?php echo $product->name_product ?>">

                        <h3 class="title-product" id="priceProduct">

                        </h3>

                        <div class="wrapper-order">
                            <div class="minus" id="countdownOrder">
                                <svg width="14" height="2" viewBox="0 0 14 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H13" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="total-order" id="counter">
                                8
                            </div>
                            <div class="plus" id="counterOrder">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1V13" stroke="#3A3A3A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 7H13" stroke="#3A3A3A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <button id="orderNow" class="mt-3 btn btn-product">Beli Sekarang</button>
                </div>
                <!-- END LIST PRODUK -->

            </div>
            <!-- END WRAPPER LIST PRODUK -->
        </div>
        <!-- END WRAPPER ITEM PRODUK -->
    </div>
</div>
<!-- END WRAPPER UNTUK MAIN CONTENT -->

<script>
    let priceProduct = 0;
    let totalCount = 1;
    let productName = '';

    $(document).ready(function() {
        $('#counter').html(totalCount);

        priceProduct = $("#valuePrice").val();
        productName = $("#productName").val();
        $('#priceProduct').html('Rp ' + priceProduct);
    });

    $('#countdownOrder').click(function() {
        
        if(totalCount > 1) {
            totalCount -= 1;

            let currentPrice = $("#valuePrice").val();
            let finalPrice = $("#finalPrice").val();
            let input = currentPrice.replace(/[\D\s\._\-]+/g, "");
            let inputFinal = finalPrice.replace(/[\D\s\._\-]+/g, "");
            input = input ? parseInt(input, 10 ) : 0;
            inputFinal = inputFinal ? parseInt(inputFinal, 10 ) : 0;

            priceProduct =  inputFinal - input;
            $("#finalPrice").val(priceProduct);
            $('#priceProduct').html('Rp ' + priceProduct.toLocaleString( "id-ID" ));

            $('#counter').html(totalCount);
        }
    });

    $('#counterOrder').click(function() {
        totalCount += 1;
        
        let currentPrice = $("#valuePrice").val();
        let finalPrice = $("#finalPrice").val();
        let input = currentPrice.replace(/[\D\s\._\-]+/g, "");
        let inputFinal = finalPrice.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10 ) : 0;
        inputFinal = inputFinal ? parseInt(inputFinal, 10 ) : 0;
        
        priceProduct = input + inputFinal;
        $("#finalPrice").val(priceProduct);
        $('#priceProduct').html('Rp ' + priceProduct.toLocaleString( "id-ID" ));
        
        $('#counter').html(totalCount);
    });

    $('#orderNow').click(function() {
        window.open(`https://web.whatsapp.com/send/?phone=6282214094779&text=Halo%20saya ingin order: *${productName}*%0Adengan jumlah: %20*${totalCount}*%0ATotal harga:%20*${priceProduct}*`);
    })
</script>