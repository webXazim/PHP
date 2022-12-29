@extends('layouts.app')
<title>Custom Order</title>
<link rel="stylesheet" href="css/hire.css" type="text/css" />

@section('content')
    <div class="main-section">
        <section class="pt-5 pb-5">
            <div class="container-xl pt-5">
                <div class="d-flex justify-content-between">
                    <div class="link-tree pb-2">
                        >><a href="/" title="Portfolio">
                            Portfolio</a>
                        > <a href="/customorder">Custom Order
                        </a>
                    </div>
                    <div class="link-tree d-none d-md-block">
                        <a href="/pre-built" title="Fantastic Pre built website to get started quickly">Pre-built
                            Websites</a>
                        << </div>
                    </div>
                    <div>
                        <div class="form-text">
                            <h2>Share Your Project Idea.</h2>
                            <p>Before starting to build new website a lots of question comes out and having answers of those
                                question a developer can build something as their client expect.
                                So, I highly recommend to answer all of the questions below to ensure my clients
                                satisfaction.
                            </p>
                        </div>
                        @auth
                            {{-- @if (Auth::user()->hasVerifiedEmail()) --}}
                            <div class="card-body">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('customorder.store') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                <input type="text" name="name" class="form-control shadow-none"
                                                    placeholder="Name" value="{{ Auth::user()->name }}" readonly="readonly">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email:</strong>
                                                <input type="text" name="email" class="form-control shadow-none"
                                                    placeholder="Email" value="{{ Auth::user()->email }}" readonly="readonly">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#1. What is your business about?</strong>
                                                <textarea name="msg1" rows="2" class="form-control" maxlength="1500" required>{{ old('msg1') }}</textarea>
                                                @if ($errors->has('msg1'))
                                                    <span class="text-danger">{{ $errors->first('msg2') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#2. Why do you need a website?</strong>
                                                <textarea name="msg2" rows="2" class="form-control" maxlength="1500" required>{{ old('msg2') }}</textarea>
                                                @if ($errors->has('msg2'))
                                                    <span class="text-danger">{{ $errors->first('msg2') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#3. Who is your target audience?</strong>
                                                <textarea name="msg3" rows="2" class="form-control" maxlength="1500" required>{{ old('msg3') }}</textarea>
                                                @if ($errors->has('msg3'))
                                                    <span class="text-danger">{{ $errors->first('msg3') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#4. What do you want your visitors to do on the website?</strong>
                                                <textarea name="msg4" rows="2" class="form-control" maxlength="1500" required>{{ old('msg4') }}</textarea>
                                                @if ($errors->has('msg4'))
                                                    <span class="text-danger">{{ $errors->first('msg4') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#5. What are the top features that will contribute to the website's
                                                    success?</strong>
                                                <textarea name="msg5" rows="2" class="form-control" maxlength="1500" required>{{ old('msg5') }}</textarea>
                                                @if ($errors->has('msg5'))
                                                    <span class="text-danger">{{ $errors->first('msg5') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#6. What makes this website stand out from the competition?</strong>
                                                <textarea name="msg6" rows="2" class="form-control" maxlength="1500" required>{{ old('msg6') }}</textarea>
                                                @if ($errors->has('msg6'))
                                                    <span class="text-danger">{{ $errors->first('msg6') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#7. Who are your top competitors?</strong>
                                                <textarea name="msg7" rows="2" class="form-control" maxlength="1500" required>{{ old('msg7') }}</textarea>
                                                @if ($errors->has('msg7'))
                                                    <span class="text-danger">{{ $errors->first('msg7') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#8. What would you like to have on your website regarding branding and
                                                    style?</strong>
                                                <textarea name="msg8" rows="2" class="form-control" maxlength="1500" required>{{ old('msg8') }}</textarea>
                                                @if ($errors->has('msg8'))
                                                    <span class="text-danger">{{ $errors->first('msg8') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#9. What would you rather sidestep?</strong>
                                                <textarea name="msg9" rows="2" class="form-control" maxlength="1500" required>{{ old('msg9') }}</textarea>
                                                @if ($errors->has('msg9'))
                                                    <span class="text-danger">{{ $errors->first('msg9') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#10. Do you have a domain name and host?</strong>
                                                <textarea name="msg10" rows="2" class="form-control" maxlength="1500" required>{{ old('msg10') }}</textarea>
                                                @if ($errors->has('msg10'))
                                                    <span class="text-danger">{{ $errors->first('msg10') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#11. When are we launching the new site?</strong>
                                                <textarea name="msg11" rows="2" class="form-control" maxlength="1500" required>{{ old('msg11') }}</textarea>
                                                @if ($errors->has('msg11'))
                                                    <span class="text-danger">{{ $errors->first('msg11') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>#12. What is the budget for this project?</strong>
                                                <textarea name="msg12" rows="2" class="form-control" maxlength="1500" required>{{ old('msg12') }}</textarea>
                                                @if ($errors->has('msg12'))
                                                    <span class="text-danger">{{ $errors->first('msg12') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Write more if you want to share.</strong>
                                                <textarea name="msg13" rows="4" class="form-control" maxlength="3500" required>{{ old('msg13') }}</textarea>
                                                @if ($errors->has('msg13'))
                                                    <span class="text-danger">{{ $errors->first('msg13') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center pt-3">
                                        <button type="reset" class="btn-reset btn shadow-none mb-2">RESET!</button>
                                        <button class="btn shadow-none mb-2">SEND ME!</button>
                                    </div>
                                </form>
                            </div>
                            {{-- @else
                            <div>Please verify your email</div>
                            @endif --}}
                        @else
                            <p class="font-semibold">
                                <a href="/register" class="hover:underline">Register</a> or
                                <a href="/login" class="hover:underline">log in</a> for Ordering Custom website.
                            </p>
                        @endauth
                    </div>
                </div>
        </section>
    </div>
@endsection
