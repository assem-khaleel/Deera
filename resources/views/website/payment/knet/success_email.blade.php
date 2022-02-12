<style>
    .caption-sec {
        float: left;
        width: 100%;
        background-color: #b59778;
        margin-bottom: 25px;
    }

    .caption-sec h1 {
        font-size: 20px;
        color: #fff;
        font-weight: bold;
        margin: 0px;
        padding-top: 8px;
        padding-right: 20px;
        padding-bottom: 8px;
        padding-left: 20px;
    }

    .alert-success p {
        margin: 10px 0;
        float: left;
        width: 100%;
        font-size: 16px;
    }

    table {
        border: 1px solid #dfdfdf;
        border-bottom: none;
        margin: 20px 0 0 0;
    }

    table tr td {
        border-bottom: 1px solid #dfdfdf;
        padding: 10px;
    }
</style>


<section class="inner-wrapper">

    <div class="caption-sec">
        <h1> Success Payment</h1>
    </div>

    <div class="inner-content">
        <div class="abut_wrap">
            <div class="cntact_sec">
                <div class="row">
                    <div class="col-md-12">


                        <section class="form_sec">

                            <div class="alert alert-success">

                                <p>Thank you for your payment. Your payment has been successfully completed.</p>

                            </div>



                            <style type="text/css">
                                #paymentDetailsTable {}

                                #paymentDetailsTable tr {
                                    border-bottom: 1px solid #ccc;
                                }

                                #paymentDetailsTable tr td:nth-child(0) {
                                    border-right: 1px solid #ccc;
                                }

                                #paymentDetailsTable {}
                            </style>

                            <table class="table tblchekout" id="paymentDetailsTable">
                                <tbody>

                                {{--
                                <tr id="ctl00_ctl26_trStatus">--}} {{--
										<td>User Id &nbsp;</td>--}} {{--
										<td>--}} {{--
											<span id="ctl00_ctl26_lblStatus">{{$request->UDF1}}</span>
										</td>--}} {{--
									</tr>--}} {{--
									<tr id="ctl00_ctl26_trStatus">--}} {{--
										<td>User email &nbsp;</td>--}} {{--
										<td>--}} {{--
											<span id="ctl00_ctl26_lblStatus">{{$request->UDF2}}</span>
										</td>--}} {{--
									</tr>--}} {{--

									<tr id="ctl00_ctl26_trStatus">--}} {{--
										<td>Phone &nbsp;</td>--}} {{--
										<td>--}} {{--
											<span id="ctl00_ctl26_lblStatus">{{$request->UDF3}}</span>
										</td>--}} {{--
									</tr>--}} {{--
									<tr id="ctl00_ctl26_trStatus">--}} {{--
										<td>User Name &nbsp;</td>--}} {{--
										<td>--}} {{--
											<span id="ctl00_ctl26_lblStatus">{{$request->UDF4}}</span>
										</td>--}} {{--
									</tr>--}}




                                <tr id="ctl00_ctl26_trStatus">
                                    <td>Payment Status &nbsp;</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblStatus">{{$request->Result}}</span>
                                    </td>
                                </tr>

                                <tr id="ctl00_ctl26_trTrack">
                                    <td>Track ID </td>
                                    <td>
                                        <span id="ctl00_ctl26_lblTrk">{{$request->TrackID}}</span>
                                    </td>
                                </tr>

                                <tr id="ctl00_ctl26_trPayment">
                                    <td>Payment ID</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblPay">{{$request->PaymentID}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>PayAmount</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblAMount">{{$oPayment->amount}}</span>
                                    </td>
                                </tr>
                                <tr id="ctl00_ctl26_trtransaction">
                                    <td>Transaction ID</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblTrans">{{$request->TranID}}</span>
                                    </td>
                                </tr>

                                <tr id="ctl00_ctl26_trrefernce">
                                    <td>Reference No</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblRefer">{{$request->Ref}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Order No</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblOrder">#{{$oPayment->order_id}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>
                                        <span id="ctl00_ctl26_lblDate">{{$request->PostDate}}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>



                        </section>



                    </div>
                </div>
            </div>
        </div>

    </div>


</section>