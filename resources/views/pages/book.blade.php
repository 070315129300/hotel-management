@include('pages.style')

@include('pages.navbar')

<section class="booking">
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>

            {{session()->get('message')}}
        </div>
    @endif
    <h2 class="book__heading">Booking Form</h2>
    <form action="{{url('bookaroomguest')}}" method="post" enctype="multipart/form-data"  class="book">
@csrf
        <div class="book__name-box">
            <div class="book__name">
                <label for="name" class="book__label-firstname">First Name</label>
                <input type="text" name="firstname" class="book__input-firstname" placeholder="First" id="name" required>
            </div>

            <div class="book__name">
                <label for="name" class="book__label-firstname">Last Name</label>
                <input type="text" name="lastname" class="book__input-lastname" placeholder="Last" id="name" required>
            </div>
        </div>

        <div class="book__contact-box">
            <div class="book__contact">
                <label for="phone" class="book__label-phone">Phone</label>
                <input type="tel" name="phone" class="book__input-phone" id="phone" required>
            </div>

            <div class="book__contact">
                <label for="mail" class="book__label-mail">Email</label>
                <input type="email" name="email" class="book__input-mail" id="mail" placeholder="tobi@gmail.com" required>
            </div>
        </div>

        <div class="book__date-box">
            <div class="book__arrival">
                <label for="date" class="book__label-date">Arrival Date</label>
                <input type="date" name="arrivaldate" class="book__input" id="date" required>
            </div>

            <div class="book__arrival">
                <label for="time" class="book__label-date">Arrival Time</label>
                <input type="time" name="arrivaltime" class="book__input" id="time" required>
            </div>

            <div class="book__arrival">
                <label for="depart" class="book__label-date">Departure Date</label>
                <input type="date" name="departuredate" class="book__input" id="time" required>
            </div>
        </div>

        <div class="book__type-box">
            <div class="book__type">
                <label for="guest" class="book__label-guest">Guest</label>
                <select name="guest" class="book__adult" id="guest" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="book__type">
                <label for="room" class="book__label-guest">Room Type</label>
                <select name="roomtype" class="book__adult" id="room" required>
                    <option value="">please select</option>
                    <option value="superdeluxe">Super Deluxe</option>
                    <option value="executive">Executive Suite</option>
                    <option value="junior">Junior Suite</option>
                </select>
            </div>
        </div>
        <div class="book__message-box">
            <label for="msg" class="book__label-message">Special requests</label>
            <textarea name="message" name="specialrequest"  id="msg" class="book__message"></textarea>
        </div>

        <button type="submit" class="book__reserve">Reserve</button>
    </form>
</section>

<section class="newsletter">
    <div class="news">
        <div class="news__layer1">
            <div class="news__layer2">
                <div class="news__box">
                    <h2 class="news__heading">
                        Subscribe to Newsleter
                    </h2>

                    <form action="#" class="news__form">
                        <input type="text" class="news__input" placeholder="Enter your email">
                        <button class="news__button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
@include('pages.footer')
</html>
