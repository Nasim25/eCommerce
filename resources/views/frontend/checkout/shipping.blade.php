@extends('frontend.layout.frontend_layout')
@section('front_section')

<div class="page-heading">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <section class="col-main col-sm-9 wow bounceInUp animated animated" style="margin-left: 167px;">
                <ol class="one-page-checkout" id="checkoutSteps">
                    <li id="opc-billing" class="section allow active">
                        <div class="step-title">
                            <span class="number">1</span>
                            <h3 class="one_page_heading"> Billing Information</h3>
                        </div>
                        <div id="checkout-step-billing" class="step a-item">
                            <form id="co-billing-form" action="{{url('shipping-store')}}" method="post">@csrf
                                <fieldset class="group-select">
                                    <ul class="">

                                        <li id="billing-new-address-form">
                                            <fieldset>

                                                <ul>
                                                    <li class="fields">
                                                        <div class="customer-name">
                                                            <div class="input-box name-firstname">
                                                                <label for="billing:firstname">Full Name<span class="required">*</span></label>
                                                                <div class="input-box1">
                                                                    <input type="text" id="name" name="name" maxlength="255" class="input-text required-entry" required>
                                                                    @error('name')
                                                                    <span class="invalid-feedback" style="color:red;" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="input-box name-lastname">
                                                                <label for="billing:lastname">Email<span class="required">*</span></label>
                                                                <div class="input-box1">
                                                                    <input type="email" id="email" name="email" maxlength="255" class="input-text required-entry" required>
                                                                    @error('email')
                                                                    <span class="invalid-feedback" style="color:red;" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="fields">
                                                        <div class="input-box">
                                                            <label for="billing:telephone">Phone Number<em class="required">*</em></label>

                                                            <input type="text" name="phone" class="input-text  required-entry" id="phone" required>

                                                            @error('phone')
                                                            <span class="invalid-feedback" style="color:red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror

                                                        </div>
                                                        <div class="input-box">
                                                            <label for="billing:fax">Alternate Mobile</label>

                                                            <input type="text" name="alternet_phone" class="input-text " id="alternet_phone">

                                                        </div>
                                                    </li>

                                                    <li class="fields">
                                                        <div class="input-box">
                                                            <label for="billing:city">Districts<em class="required">*</em></label>

                                                            <select id="districts" name="districts" class="validate-select required-entry" required>
                                                                <option value="">Please select</option>
                                                                <option value="Barisal">Barisal</option>
                                                                <option value="Bhola">Bhola</option>
                                                                <option value="Jhalokati">Jhalokati</option>
                                                                <option value="Patuakhali">Patuakhali</option>
                                                                <option value="Pirojpur">Pirojpur</option>
                                                                <option value="Bandarban">Bandarban</option>
                                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                                <option value="Chandpur">Chandpur</option>
                                                                <option value="Chittagong">Chittagong</option>
                                                                <option value="Comilla">Comilla</option>
                                                                <option value="Cox's Bazar">Cox's Bazar</option>
                                                                <option value="Feni">Feni</option>
                                                                <option value="Khagrachhari">Khagrachhari</option>
                                                                <option value="Lakshmipur">Lakshmipur</option>
                                                                <option value="Noakhali">Noakhali</option>
                                                                <option value="Rangamati">Rangamati</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                                <option value="Faridpur">Faridpur</option>
                                                                <option value="Gazipur">Gazipur</option>
                                                                <option value="Gopalganj">Gopalganj</option>
                                                                <option value="Kishoreganj">Kishoreganj</option>
                                                                <option value="Madaripur">Madaripur</option>
                                                                <option value="Manikganj">Manikganj</option>
                                                                <option value="Munshiganj">Munshiganj</option>
                                                                <option value="Narayanganj">Narayanganj</option>
                                                                <option value="Narsingdi">Narsingdi</option>
                                                                <option value="Rajbari">Rajbari</option>
                                                                <option value="Shariatpur">Shariatpur</option>
                                                                <option value="Tangail">Tangail</option>
                                                                <option value="Bagerhat">Bagerhat</option>
                                                                <option value="Chuadanga">Chuadanga</option>
                                                                <option value="Jessore">Jessore</option>
                                                                <option value="Jhenaidah">Jhenaidah</option>
                                                                <option value="Khulna">Khulna</option>
                                                                <option value="Kushtia">Kushtia</option>
                                                                <option value="Magura">Magura</option>
                                                                <option value="Meherpur">Meherpur</option>
                                                                <option value="Narail">Narail</option>
                                                                <option value="Satkhira">Satkhira</option>
                                                                <option value="Jamalpur">Jamalpur</option>
                                                                <option value="Mymensingh">Mymensingh</option>
                                                                <option value="Netrokona">Netrokona</option>
                                                                <option value="Sherpur">Sherpur</option>
                                                                <option value="Bogra">Bogra</option>
                                                                <option value="Joypurhat">Joypurhat</option>
                                                                <option value="Naogaon">Naogaon</option>
                                                                <option value="Natore">Natore</option>
                                                                <option value="Chapainawabganj">Chapainawabganj</option>
                                                                <option value="Pabna">Pabna</option>
                                                                <option value="Rajshahi">Rajshahi</option>
                                                                <option value="Sirajganj">Sirajganj</option>
                                                                <option value="Dinajpur">Dinajpur</option>
                                                                <option value="Gaibandha">Gaibandha</option>
                                                                <option value="Kurigram">Kurigram</option>
                                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                                <option value="Nilphamari">Nilphamari</option>
                                                                <option value="Panchagarh">Panchagarh</option>
                                                                <option value="Rangpur">Rangpur</option>
                                                                <option value="Thakurgaon">Thakurgaon</option>
                                                                <option value="Habiganj">Habiganj</option>
                                                                <option value="Moulvibazar">Moulvibazar</option>
                                                                <option value="Sunamganj">Sunamganj</option>
                                                                <option value="Sylhet">Sylhet</option>
                                                            </select>
                                                            @error('districts')
                                                            <span class="invalid-feedback" style="color:red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="field">
                                                            <label for="billing:region_id">State/Province</label><br>
                                                            <div class="input-box">

                                                                <input type="text" name="state" class="input-text  required-entry" id="state">

                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="wide">
                                                        <label for="billing:street1">Full Address<em class="required">*</em></label><br>
                                                        <input type="text" name="address" id="address" class="input-text  required-entry" required>
                                                        @error('address')
                                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </li>

                                                </ul>
                                            </fieldset>
                                        </li>

                                    </ul>
                                    <div class="buttons-set" id="billing-buttons-container">
                                        <button type="submit" title="Continue" class="button continue"><span>Continue</span></button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </li>
                </ol>
                <br>
            </section>
        </div>
    </div>
</div>
@endsection

@section('fontend_js')

@endsection