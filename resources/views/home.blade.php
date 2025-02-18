<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="text-center">
                    <h2>Zento</h2>
                    <h3>Select your HomePage</h3>
                    <p>
                        Zento is a super modern blog, highly focused in Speed and Flexibility.
                    </p>
                    <p>
                        On every Layout you can add an Intro Text, Popular Categories or Post lists and enable/disable widgets in the sidebar as needed.
                    </p>
                    <p>
                        Select from all available demos:
                    </p>
                </div>
            </div>
        </div>

        <!-- Two Divs Side by Side -->
        <div class="row">
            <!-- Left Div -->
            <div class="col-12 col-md-6">
                <div class="p-4" style="background-color: yellow;">
                    <h4>Left Div</h4>
                    <p>This is the left side of the page with a yellow background.</p>
                    
                    <!-- Five Small Divs inside Left Div -->
                    <div class="row">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                <div class="p-3" style="background-color: lightgray; text-align: center;">
                                    <h5>Demo {{ $i }}</h5>
                                    <p>Some description for demo {{ $i }}.</p>
                                    <button class="btn btn-primary">View Demo</button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Right Div -->
            <div class="col-12 col-md-6">
                <div class="p-4" style="background-color: yellow;">
                    <h4>Right Div</h4>
                    <p>This is the right side of the page with a yellow background.</p>

                    <!-- Five Small Divs inside Right Div -->
                    <div class="row">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                <div class="p-3" style="background-color: lightgray; text-align: center;">
                                    <h5>Demo {{ $i }}</h5>
                                    <p>Some description for demo {{ $i }}.</p>
                                    <button class="btn btn-primary">View Demo</button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Speed Result Text -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3>Speed Result</h3>
            </div>
        </div>

        <!-- Centered Fixed Size Div Under Speed Result -->
        <div class="row justify-content-center mt-4">
            <div class="col-12 text-center">
                <div style="width: 616px; height: 200px; background-color: lightblue; margin: 0 auto;">
                    <p style="line-height: 200px;">Content inside fixed-size div (616x200)</p>
                </div>
            </div>
        </div>

        <!-- Two Small Divs (200x200) Under the Large Div -->
        <div class="row justify-content-center mt-4">
            <!-- Small Left Div -->
            <div class="col-12 col-md-6 col-lg-3">
                <div style="width: 200px; height: 200px; background-color: lightgreen; margin: 0 auto; text-align: center; line-height: 200px;">
                    <p>Small Div 1</p>
                </div>
            </div>
            <!-- Small Right Div -->
            <div class="col-12 col-md-6 col-lg-3">
                <div style="width: 200px; height: 200px; background-color: lightcoral; margin: 0 auto; text-align: center; line-height: 200px;">
                    <p>Small Div 2</p>
                </div>
            </div>
        </div>

        <!-- Koenig Blocks Article Under the Small Divs -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3>Koenig Blocks</h3>
                <p>Zento supports all Koenig blocks so you can show to your public a lot of quality content.</p>
            </div>
        </div>

        <!-- Rectangle Div Under the Koenig Blocks Article -->
        <div class="row justify-content-center mt-4">
            <div class="col-12 text-center">
                <div style="width: 900px; height: px; background-color: lightgoldenrodyellow; margin: 0 auto;">
                    <p style="line-height: 150px; color: #333;">This is a rectangle div under the Koenig Blocks article</p>

                    <!-- 5 Small Divs in One Row inside the Rectangle -->
                    <div class="row justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-12 col-md-2 mb-3 text-center">
                                <div style="width: 150px; height: 150px; background-color: lightgray; margin: 0 auto; text-align: center; line-height: 150px;">
                                    <p>Small Div {{ $i }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="row justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-12 col-md-2 mb-3 text-center">
                                <div style="width: 150px; height: 150px; background-color: lightgray; margin: 0 auto; text-align: center; line-height: 150px;">
                                    <p>Small Div {{ $i }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
