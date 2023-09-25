@extends('layout.main')
@section('contact')

     
<div class="back" id="back2">
    <div id="left2">
    <h1>Book Now</h1>
    <p>The best event photographer in Pakistan.<br>
    </div>
</div>

<div class="container" id="container2">


    <div class="passion" id="passion2">
    <div class="follow">
    <h1>Follow us</h1>
    
        <a href="#"> <i class="ri-facebook-circle-fill" style="color:blue;"></i>Facebook</a><br> 
       <a href="#"> <i class="ri-instagram-fill" style="color:rgb(233, 77, 56);"></i>Instagram</a><br>
       <a href="#"> <i class="ri-whatsapp-fill" style="color:rgb(85, 146, 16);"></i>Whatsapp</a>
    
    </div>

        <div class="form-container">
            <h2>Book Your Slot Now</h2><br>
            <form action="{{url('/')}}/booking" method="post">
                @csrf
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                    <span id="error">
                        @error('firstName')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                    <span id="error">
                        @error('lastName')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="number" id="phoneNumber" name="phoneNumber">
                    <span id="error">
                        @error('phoneNumber')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date">
                    <span id="error">
                        @error('date')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="appointmentTime">Appointment Time</label>
                    <input type="time" id="appointmentTime" name="appointmentTime">
                    <span id="error">
                        @error('appointmentTime')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                {{-- using booking form component --}}
                <x-bookingform $type="text" $name="text" $label="Ufone" />






                <div class="form-group">
                    
                    <input type="submit" value="Book Now">
                </div>
            </form>
        </div>
    </div>
</div>
   


</div>












@endsection