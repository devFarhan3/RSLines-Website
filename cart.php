<?php include 'header.php'; ?>


<!--Body Content-->
<div id="page-content">
    <!-- collection slider -->


    <div class="carts_sec py-5">
        <div class="container">
            <h2>Shopping Cart</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                    <form action="#" method="post" class="cart style2">
                        <table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <!-- <th class="text-center">Price</th> -->
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="assets/Rs-img/carts.png" alt="PRODUCTS" class="img-fluid"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">Black Embroidary </a>
                                        </div>

                                        <div class="cart__meta-text">
                                            Color: Brown<br>Dimension: 40x60 cm<br>
                                        </div>
                                    </td>
                                    <!-- <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money">$735.00</span>
                                </td> -->
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">$735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="assets/Rs-img/carts.png" alt="PRODUCTS" class="img-fluid"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">Black Embroidary </a>
                                        </div>
                                    </td>
                                    <!-- <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money">$735.00</span> -->
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">$735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="12" class="text-left"><a href="#" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <!-- <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td> -->
                                </tr>
                            </tfoot>
                        </table>




                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">

                    <div class="solid-border">
                        <div class="row">
                            <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Summary</strong></span>

                        </div>

                        <div class="row pt-3">
                            <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">AED.250.00</span></span>
                        </div>

                        <div class="row pt-3">
                            <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">Free</span></span>
                        </div>

                        <div class="row pt-3">
                            <span class="col-12 col-sm-6 cart__subtotal-title">Discount Code</span>


                        </div>
                        <form class="pt-3 apply_btn">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-8  pr-0">
                                    <input type="text" class="form-control" placeholder="Enter coupon">
                                </div>
                                <div class="col-4 mt-1">
                                    <button type="submit" class="btn btn-primary mb-2">Apply</button>
                                </div>
                            </div>
                        </form>

                        <div class="total">
                            <div class="row pt-3">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Total</span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right">
                                    <h2><b>AED.250.00</b></h2>
                                </span>
                            </div>
                            <div class="buttonSet text-center pt-3">


                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <a href="#" class="btn btn-secondary btn--small">
                                            Continue Shopping
                                        </a>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <a href="#" class="btn btn-secondary btn--small">Proceed to Checkout</a>
                                    </div>

                                    <div class="col-4 mx-auto pt-4">
                                        <a href="#"><img src="assets/Rs-img/visa.png" alt="visa" class="img-fluid mr-2"></a>
                                        <a href="#"><img src="assets/Rs-img/master.png" alt="master" class="img-fluid"></a>
                                    </div>
                                   
                                </div>


                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>

     <!-- Need_Help  STARTS -->
     <div class="Need_Help">
        <div class="container">

            <div class="row ">

                <div class="col-lg-2 col-md-2 col-sm-12 offset-1 ">
                    <h1 class="text-white">Need <br> Help? </h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12  text-white ">
                    <h3 class="text-white">How to Buy</h3>
                    <p class="text-white">Interested? Find the store guide.</p>

                    <p class="loc">PRODUCT LOCATOR &nbsp; &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>


                    </p>


                </div>

                <div class="col-lg-3 col-md-3 col-sm-12  text-white ">
                    <h3 class="text-white">Wholesale</h3>
                    <p class="text-white">Already a member? Login </p>

                    <p class="loc"> CUSTOMER SERVICES &nbsp; &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>


                    </p>


                </div>

                <div class="col-lg-3 col-md-3 col-sm-12  text-white ">
                    <h3 class="text-white">How to Buy</h3>
                    <p class="text-white">Haven’t found you’re looking for? Contact us.</p>

                    <p class="loc"> CONTACT FOR B2B &nbsp; &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>


                    </p>


                </div>


            </div>
        </div>
    </div>
    <!-- Need_Help  ENDS -->


</div>


<!--End Body Content-->



<?php include 'footer.php'; ?>