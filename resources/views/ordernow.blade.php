@extends('master')
@section('content')
    <div class="custom-product content">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-10">
                <table class="table table-striped" style="border:1px solid grey">
                    <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>Tk. {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Tk. 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Tk. 50</td>
                    </tr>
                    <tr>
                        <td>Total amount</td>
                        <td>Tk. {{$total+50}}</td>
                    </tr>
                    </tbody>
                </table>
                <br><br>
                <div>
                    <form method="POST" action="/orderplace">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row mb-3">
                            <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Payment method</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" value="cash" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Online payment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" value="cash">
                                    <label class="form-check-label" for="gridRadios2">
                                        Cash on delivery
                                    </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="payment" value="cash">
                                    <label class="form-check-label" for="gridRadios3">
                                        Payment with EMI
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-outline-success">Confirm Order</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
