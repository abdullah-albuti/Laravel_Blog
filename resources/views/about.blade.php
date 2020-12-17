@extends('layouts.app')

@section('title','about')
@section('content')
{{--    <div class="row text-center">--}}
{{--        <div class="col-sm-4">--}}
{{--            <div class="thumbnail">--}}
{{--                <img src="https://www.w3schools.com/bootstrap/sanfran.jpg" alt="Paris">--}}
{{--                <p><strong>Paris</strong></p>--}}
{{--                <p>Fri. 27 November 2015</p>--}}
{{--                <button class="btn">Buy Tickets</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            <div class="thumbnail">--}}
{{--                <img src="https://www.w3schools.com/bootstrap/newyork.jpg" alt="New York">--}}
{{--                <p><strong>New York</strong></p>--}}
{{--                <p>Sat. 28 November 2015</p>--}}
{{--                <button class="btn">Buy Tickets</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            <div class="thumbnail">--}}
{{--                <img src="https://www.w3schools.com/bootstrap/paris.jpg" alt="San Francisco">--}}
{{--                <p><strong>San Francisco</strong></p>--}}
{{--                <p>Sun. 29 November 2015</p>--}}
{{--                <button class="btn">Buy Tickets</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="text-center">--}}
{{--            <h2>Pricing</h2>--}}
{{--            <h4>Choose a payment plan that works for you</h4>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="panel panel-default text-center">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <h1>Basic</h1>--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <p><strong>20</strong> Lorem</p>--}}
{{--                        <p><strong>15</strong> Ipsum</p>--}}
{{--                        <p><strong>5</strong> Dolor</p>--}}
{{--                        <p><strong>2</strong> Sit</p>--}}
{{--                        <p><strong>Endless</strong> Amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel-footer">--}}
{{--                        <h3>$19</h3>--}}
{{--                        <h4>per month</h4>--}}
{{--                        <button class="btn btn-lg">Sign Up</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="panel panel-default text-center">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <h1>Pro</h1>--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <p><strong>50</strong> Lorem</p>--}}
{{--                        <p><strong>25</strong> Ipsum</p>--}}
{{--                        <p><strong>10</strong> Dolor</p>--}}
{{--                        <p><strong>5</strong> Sit</p>--}}
{{--                        <p><strong>Endless</strong> Amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel-footer">--}}
{{--                        <h3>$29</h3>--}}
{{--                        <h4>per month</h4>--}}
{{--                        <button class="btn btn-lg">Sign Up</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="panel panel-default text-center">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <h1>Premium</h1>--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <p><strong>100</strong> Lorem</p>--}}
{{--                        <p><strong>50</strong> Ipsum</p>--}}
{{--                        <p><strong>25</strong> Dolor</p>--}}
{{--                        <p><strong>10</strong> Sit</p>--}}
{{--                        <p><strong>Endless</strong> Amet</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel-footer">--}}
{{--                        <h3>$49</h3>--}}
{{--                        <h4>per month</h4>--}}
{{--                        <button class="btn btn-lg">Sign Up</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <br><br>
    <div class="container">
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>We love our fans!</em></p>
        <div class="row test">
            <div class="col-md-4">
                <p>Fan? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
