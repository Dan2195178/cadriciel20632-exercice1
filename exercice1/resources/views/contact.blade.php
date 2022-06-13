@extends('master')
@section('title','Contact')
@section('content')
 <!-- Call to action-->
 <section class="page-section bg-dark text-white">

     <div class="row gx-4 gx-lg-5 justify-content-center">
         <div class="col-lg-8 col-xl-6 text-center">
             <h2 class="mt-0">Let's Get In Touch!</h2>
             <hr class="divider" />
             <p class="text-muted mb-0">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
         </div>
     </div>

 </section>
 <!-- Contact-->
 <section class="page-section" id="contact">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
             <div class="col-lg-6">
                 <!-- * * * * * * * * * * * * * * *-->
                 <!-- * * SB Forms Contact Form * *-->
                 <!-- * * * * * * * * * * * * * * *-->
                 <!-- This form is pre-integrated with SB Forms.-->
                 <!-- To make this form functional, sign up at-->
                 <!-- https://startbootstrap.com/solution/contact-forms-->
                 <!-- to get an API token!-->
                 @if(isset($data))
                    <p><strong>Name:</strong> {{ $data->name }} </p>
                    <p><strong>Email:</strong>{{ $data->email }} </p>
                    <p><strong>Phone: </strong>{{ $data->phone }} </p>
                    <p><strong>Message: </strong>{{ $data->Message }} </p>
                @endif

                 <form method="post">
                     @csrf
                     <!-- Name input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                         <label for="name">Full name</label>
                         <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                     </div>
                     <!-- Email address input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                         <label for="email">Email address</label>
                         <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                         <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                     </div>
                     <!-- Phone number input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                         <label for="phone">Phone number</label>
                         <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                     </div>
                     <!-- Message input-->
                     <div class="form-floating mb-3">
                         <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                         <label for="message">Message</label>
                         <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                     </div>
                     <!-- Submit success message-->
                     <!---->
                     <!-- This is what your users will see when the form-->
                     <!-- has successfully submitted-->
                     <div class="d-none" id="submitSuccessMessage">
                         <div class="text-center mb-3">
                             <div class="fw-bolder">Form submission successful!</div>
                             To activate this form, sign up at
                             <br />
                             <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                         </div>
                     </div>
                     <!-- Submit error message-->
                     <!---->
                     <!-- This is what your users will see when there is-->
                     <!-- an error submitting the form-->
                     <div class="d-none" id="submitErrorMessage">
                         <div class="text-center text-danger mb-3">Error sending message!</div>
                     </div>
                     <!-- Submit Button-->
                     <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                 </form>
             </div>
         </div>
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-4 text-center mb-5 mb-lg-0">
                 <i class="bi-phone fs-2 mb-3 text-muted"></i>
                 <div>+1 (555) 123-4567</div>
             </div>
         </div>
     </div>
 </section>
 @endsection