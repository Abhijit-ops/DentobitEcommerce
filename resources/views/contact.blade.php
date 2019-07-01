@extends('layouts.main')

@section('contents')



    <!-- contact-section - start
		================================================== -->
    <section id="contact-section" class="contact-section sec-ptb-60 clearfix">


        <div class="contact-form text-center">
            <div class="container">

                <div class="section-title text-center">
                    <h2>Send a Message</h2>
                    <p>Your email address will not be published.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <form action="{{route('contact.store')}}" method="post">
                                @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-item">
                                        <input id="name" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                        <label for="name" class="form-item-btn">
                                            <i class="far fa-user"></i>
                                        </label>
                                        @error('name')
                                        <p class="color-gplus-red text-left">name is requried</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-item">
                                        <input id="email" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                                        <label for="email" class="form-item-btn">
                                            <i class="far fa-envelope"></i>
                                        </label>
                                        @error('email')
                                        <p class="color-gplus-red text-left">Email is requried</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-item">
                                <input id="subject" type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                                <label for="subject" class="form-item-btn">
                                    <i class="far fa-file-alt"></i>
                                </label>
                            </div>

                            <div class="form-textarea clearfix">
                                <textarea id="comment-textarea" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                <p class="color-gplus-red text-left">Message is requried</p>
                                @enderror

                                <div class="textarea-footer ul-li-right clearfix">
                                    <ul class="clearfix">

                                        <li><button type="submit" class="submit-btn">submit now</button></li>
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- contact-section - end
    ================================================== -->

@endsection