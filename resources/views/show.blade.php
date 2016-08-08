@extends('layouts.app')

@section('title','Print')

@section('content')

<div class="container">
    <div class="print-page">
        <div class="print-head">
            <div class="row">
                <div class="col-xs-2">
                    <div class="logo">
                        <img src="{{ asset('img/logo.jpg') }}" width="100%">
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="title">
                        <h3>Opal Fashion Wear</h3>
                        <p>http://www.facebook.com/opalfw<br>
                        Website: www.opalfw.com<br>
                        Mobile : 01856996955</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="print-body">
            <div class="heading">
                INVOICE
            </div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="value">
                        <b>Name : </b>{!! $order->name !!}
                    </div>
                    <div class="value">
                        <b>Phone : </b>{!! $order->phone !!}
                    </div>
                    <div class="value">
                        <b>Address : </b>{!! $order->address !!}
                    </div>
                </div>
                <div class="col-xs-3 text-right">
                    <div class="value">
                        <b>Order ID : </b>{!! $order->id !!}
                    </div>
                    <div class="value">
                        <b>Date : </b><script type="text/javascript">
                            <!--
                            var currentTime = new Date()
                            var month = currentTime.getMonth() + 1
                            var day = currentTime.getDate()
                            var year = currentTime.getFullYear()
                            document.write(day + "/" + month + "/" + year)
                            //-->
                        </script>
                    </div>
                    <div class="value">
                        <b>Order By : </b>{!! $order->order_by !!}
                    </div>
                </div>
            </div>
            <div class="box">
                <table class="table table-bordered ">
                    <tr>
                        <th class="id">NO</th>
                        <th class="item">Product Code</th>
                        <th class="price">Price</th>
                    </tr>
                    <tr>
                        <td>01.</td>
                        <td>{!! $order->product_id !!}</td>
                        <td>Tk {!! $order->amount !!}</td>
                    </tr>
                </table>
                <div class="col-xs-4">
                    <div class="sign">
                        Authorized By
                    </div>
                </div>
                <div class="col-xs-4">

                </div>
                <div class="col-xs-2 text-right" style="margin: 20px 0px;">
                    Total :
                </div>
                <div class="col-xs-2 amount">
                    <b>Tk {!! $order->amount !!}</b>
                </div>
            </div>
        </div>
        <div class="print-footer">

        </div>
    </div>
</div>

<hr>
<p class="text-center">Office Copy</p>

<div class="container">
    <div class="print-page">
        <div class="print-head">
            <div class="row">
                <div class="col-xs-2">
                    <div class="logo">
                        <img src="{{ asset('img/logo.jpg') }}" width="100%">
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="title">
                        <h3>Opal Fashion Wear</h3>
                        <p>http://www.facebook.com/opalfw<br>
                            Website: www.opalfw.com<br>
                            Mobile : 01856996955</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="print-body">
            <div class="heading">
                INVOICE
            </div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="value">
                        <b>Name : </b>{!! $order->name !!}
                    </div>
                    <div class="value">
                        <b>Phone : </b>{!! $order->phone !!}
                    </div>
                    <div class="value">
                        <b>Address : </b>{!! $order->address !!}
                    </div>
                </div>
                <div class="col-xs-3 text-right">
                    <div class="value">
                        <b>Order ID : </b>{!! $order->id !!}
                        <!--<script type="text/javascript">

                                var date = new Date();
                                var components = [
                                    date.getYear(),
                                    date.getMonth(),
                                    date.getDate(),
                                    date.getHours(),
                                    date.getMinutes(),
                                    date.getSeconds()
                                ];

                                var id = components.join(" ")
                                document.write(id)
                        </script>-->
                    </div>
                    <div class="value">
                        <b>Date : </b>
                        <script type="text/javascript">
                            <!--
                            var currentTime = new Date()
                            var month = currentTime.getMonth() + 1
                            var day = currentTime.getDate()
                            var year = currentTime.getFullYear()
                            document.write(day + "/" + month + "/" + year)
                            //-->
                        </script>
                    </div>
                    <div class="value">
                        <b>Order By : </b>{!! $order->order_by !!}
                    </div>
                </div>
            </div>
            <div class="box">
                <table class="table table-bordered ">
                    <tr>
                        <th class="id">NO</th>
                        <th class="item">Product Code</th>
                        <th class="price">Price</th>
                    </tr>
                    <tr>
                        <td>01.</td>
                        <td>{!! $order->product_id !!}</td>
                        <td>Tk {!! $order->amount !!}</td>
                    </tr>
                </table>
                <div class="col-xs-4">
                    <div class="sign">
                        Authorized By
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="sign">
                        Received By
                    </div>
                </div>
                <div class="col-xs-2 text-right" style="margin: 20px 0px;">
                    Total :
                </div>
                <div class="col-xs-2 amount">
                    <b>Tk {!! $order->amount !!}</b>
                </div>
            </div>
        </div>
        <div class="print-footer">

        </div>
    </div>
</div>

<center><a href="#" class="btn btn-success btn-block hide-print" onclick="printfile()">Print</a></center>

<script>
    function printfile() {
        window.print();
    }
</script>


@endsection
