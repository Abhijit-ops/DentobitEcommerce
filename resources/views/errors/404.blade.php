@extends('layouts.main')

@section('contents')


    <section id="error-section" class="error-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="error-content text-center clearfix">

							<span class="icon">
								<i class="far fa-frown"></i>
							</span>
                        <h2>error <strong class="color-past">404</strong> not found</h2>
                        <p>
                            We're sorry but the page you are looking for dose not exist.
                            You could return to <a href="{{route('home')}}" class="color-past">Homepage</a>

                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
        <!-- breadcrumb-list - end -->
    @endsection