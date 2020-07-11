@extends('frontend.layout.frontend_layout')
@section('front_section')
<div class="content">
    <div class="main-container col1-layout wow bounceInUp animated">

        <div class="main">
            <div class="cart wow bounceInUp animated">
                <div class="table-responsive shopping-cart-tbl  container">

                    
                    <fieldset>
                        <table id="shopping-cart-table" class="data-table cart-table table-striped">
                            <colgroup>
                                <col width="1">
                                <col>
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">

                            </colgroup>
                            <thead>
                                <tr class="first last">
                                    <th rowspan="1">&nbsp;</th>
                                    <th rowspan="1"><span class="nobr">Product Name</span></th>
                                    <th rowspan="1"></th>
                                    <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                                    <th rowspan="1" class="a-center">Qty</th>
                                    <th class="a-center" colspan="1">Total</th>
                                    <th rowspan="1" class="a-center">&nbsp;</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="first last">
                                    <td class="a-right last">
                                    </td>
                                    <td colspan="3" class="a-right last">
                                        <h4>Grand Total = </h4>
                                    </td>
                                    <td colspan="3" class="a-right last">
                                        <h4>Tk {{Cart::total()}}</h4>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    $data = Cart::content();
                                    $total = 0; 
                                ?>
                                @foreach($data as $cartData)
                                <tr class="first last odd">
                                    <td class="image hidden-table"><a href="product-detail.html" title="Women&#39;s Georgette Animal Print" class="product-image"><img src="{{asset($cartData->options->image)}}" width="75" alt="Women&#39;s Georgette Animal Print"></a></td>
                                    <td>
                                        <h2 class="product-name">
                                            <a href="product-detail.html">{{ $cartData->name }}</a>
                                        </h2>
                                    </td>
                                    <td class="a-center hidden-table">
                                        <a href="#" class="edit-bnt" title="Edit item parameters"></a>
                                    </td>

                                    <td class="a-right hidden-table">
                                        <span class="cart-price">
                                            <span class="price">Tk {{ $cartData->price}}</span>
                                        </span>
                                    </td>
                                    <td class="a-center movewishlist">
                                        <form action="{{url('cart-item-update')}}" method="post">@csrf
                                            <input type="hidden" name="rowId" value="{{$cartData->rowId}}">

                                            <input name="qty" value="{{$cartData->qty}}" size="4" title="Qty" class="input-text qty mtex-104 cl3 txt-center num-product form-control sss" maxlength="12">

                                            <input type="submit" value="update">
                                        </form>
                                    </td>
                                    <td class="a-right movewishlist">
                                        <span class="cart-price">
                                            <span class="price">Tk {{ $cartData->subtotal}}</span>
                                        </span>
                                    </td>
                                    <td class="a-center last">
                                        <a href="{{url('cart-item-delete/'.$cartData->rowId)}}" title="Remove item" class="button remove-item"><span><span>Remove item</span></span></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>

                    </fieldset>

                <form action="{{url('payment-store')}}" method="post">@csrf
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Payment Method</label>
                        <div class="col-sm-4">
                        
                        <select class="form-control" id='payment_method' name="payment_method" required>
                            <option value="">Select Payment Type</option>
                            <option value="hand_cash">Hand Cash</option>
                            <option value="bkash">Bkash</option>
                        </select>
                        </div>
                    </div>
                    <div id="hide_payment" class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <span>Bkash No is: 0171000000</span>
                        <input type="text" class="form-control" name="transaction_id">
                        
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-md">Submit</button>
                        </div>
                    </div>
                     

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('fontend_js')
    
@endsection