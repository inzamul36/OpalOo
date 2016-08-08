@extends('layouts.app')

@section('title','Edit Order')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-6">
            <h1>Edit Order</h1>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-12">

            {{ Form::model($order, array('method' => 'PATCH', 'route' => array('order.update', $order->id))) }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Full Name') !!}
                            {!! Form::text('name', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Full Name')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('Phone Number') !!}
                                    {!! Form::text('phone', null,
                                        array('required',
                                              'class'=>'form-control',
                                              'placeholder'=>'Phone Number')) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('Delivery Date') !!}
                                    {!! Form::text('delivery_date', null,
                                        array('required',
                                              'class'=>'form-control',
                                              'placeholder'=>'Delivery Date')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Address') !!}
                            {!! Form::textarea('address', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Full Address')) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('Product ID') !!}
                            {!! Form::textarea('product_id', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Product ID')) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('Amount') !!}
                                    {!! Form::text('amount', null,
                                        array('required',
                                              'class'=>'form-control',
                                              'placeholder'=>'Amount')) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('Payment Option:') !!}
                                    {!! Form::select('pay_option',
                                    array('Cash on delivery' => 'Cash on delivery',
                                    'Cash on delivery SAP' => 'Cash on delivery SAP', 'Prepaid' => 'Prepaid'), null , ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('Product Status:') !!}<br>
                                    {!! Form::radio('status', 'Ready', null) !!} Pakage Ready<br>
                                    {!! Form::radio('status', 'Send') !!} Pakage Send<br>
                                    {!! Form::radio('status', 'Delivered') !!} Pakage Delivered
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ url('/') }}" class="btn btn-danger btn-block"> Back</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::hidden('order_by', Auth::user()->name) }}
                            {!! Form::submit('Submit', array('class'=>'form-control btn-success')) !!}
                         </div>
                     </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

</div>
@endsection
