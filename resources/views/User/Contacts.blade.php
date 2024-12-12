@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 bg-light rounded shadow mx-auto text-center mt-5 mb-5 pt-5">
                <h2>Stay Connected <span class="text-dark-green fw-bold">with Us!</span></h2>
                <p>
                    Join us in our mission - let's collaborate, share ideas, or simply start a conversation for a
                    sustainable
                    future.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto bg-light rounded shadow mb-5">
                <div class="row d-flex justify-content-center align-items-center mt-3 mb-5">
                    <div class="col-md-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.710862603621!2d67.02866647436524!3d24.87372294472859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f5535c9744b%3A0xd545924150287b71!2sHumaira%20Apartment!5e0!3m2!1sen!2s!4v1733905578801!5m2!1sen!2s"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-5">
                        <h4>Connect with us</h4>
                        <p class="mb-0"><i class="fa-solid fa-phone" style="color: #99774d;"></i> 0308-2491543</p>
                        <p><i class="fa-solid fa-envelope" style="color: #99774d;"></i> bilalmuhammadyousuf543@gmail.com</p>

                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100013114033412"
                            class="social-icon shadow"><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a target="_blank" href="" class="social-icon shadow"><i
                                class="fa-brands fa-instagram fa-xl"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/bilalmuhammadyousuf/"
                            class="social-icon shadow"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10 mx-auto rounded" id="contact-us-bg-img">
                <div class="row">
                    <div class="col-md-6 mx-auto rounded bg-light mt-5 mb-5 pt-3 pb-3">
                        <h3 class="text-center">Get in touch</h3>
                        <p class="text-center">Our friendly team would love to hear from you.</p>

                        <form action="{{ route('Create.Inquiry') }}" method="post" autocomplete="off">
                            @csrf
                            <input type="text" name="fname" class="form-control mt-2"
                                placeholder="Enter your first name">
                            <small class="text-danger">
                                @error('fname')
                                    {{ 'Please enter your first name' }}
                                @enderror
                            </small>

                            <input type="text" name="lname" class="form-control mt-2"
                                placeholder="Enter your last name">
                            <small class="text-danger">
                                @error('lname')
                                    {{ 'Please enter your last name' }}
                                @enderror
                            </small>

                            <input type="email" name="email" class="form-control mt-2"
                                placeholder="Enter your email address">
                            <small class="text-danger">
                                @error('email')
                                    {{ 'Please enter your email' }}
                                @enderror
                            </small>

                            <input type="text" name="phone" class="form-control mt-2"
                                placeholder="Enter your phone number">
                            <small class="text-danger">
                                @error('phone')
                                    {{ 'Please enter your contact number' }}
                                @enderror
                            </small>

                            <textarea name="message" rows="5" class="form-control mt-2" placeholder="Write your message here..."
                                style="resize: none;"></textarea>
                            <small class="text-danger">
                                @error('message')
                                    {{ 'Please enter your message' }}
                                @enderror
                            </small>

                            <button class="brand-golden-button d-block mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
                <h3>Frequently Asked</h3>
                <h3 class="text-dark-green fw-bold mx-2">Questions</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="accordion" id="accordionExample">
                    @foreach ($faqRecords as $record)
                        <div class="accordion-item mb-3 rounded">
                            <h2 class="accordion-header bg-light">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse${{ $record->id }}" aria-expanded="true"
                                    aria-controls="collapse${{ $record->id }}">
                                    {{ $record->question }}
                                </button>
                            </h2>
                            <div id="collapse${{ $record->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $record->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
