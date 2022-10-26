@extends('layouts.app')


@section('content')

            <div class="orb-content">

                <div class="orb-grid orb-sm-reverse">
                    <div class="orb-g-35 orb-sm-100">
                        <div class="rb-object-frame">
                            <div class="orb-photo-frame orb-obj-1">
                                <img src="/html/img/us/alicia.jpg" alt="photo">
                            </div>
                            <h1 class="orb-page-title">Contact <br> Alicia & Alex</h1>
                            <div class="orb-deco"></div>
                        </div>
                    </div>
                    <div class="orb-g-65 orb-sm-100">
                        <div class="orb-form-frame">
                            <div class="orb-form-content">
                                <h2 class="orb-form-title">We are open for cooperation and <br>partnership, write to us</h2>
                                <form method="POST" id="form" action="/html/php/send.php">
                                    <div class="orb-grid orb-padding-grid">
                                        <div class="orb-g-50 orb-sm-100">
                                            <div class="orb-group-input">
                                                <input id="name" name="name" type="text" placeholder="Name" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                                            </div>
                                        </div>
                                        <div class="orb-g-50 orb-sm-100">
                                            <div class="orb-group-input">
                                                <input id="email" name="email" type="email" placeholder="E-mail" required />
                                            </div>
                                        </div>
                                        <div class="orb-g-100">
                                            <div class="orb-group-input">
                                                <textarea id="message" name="message" placeholder="Your message" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?]+$" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orb-form-bottom">

                                        <button class="orb-submit-btn">
                                            <span>Send message</span>
                                            <img src="/html/img/ui/arrow-1.svg" alt="arrow" class="orb-arrow">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
