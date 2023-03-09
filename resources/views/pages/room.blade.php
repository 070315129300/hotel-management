@include('pages.style')

@include('pages.navbar')

<section class="our-rooms">
    <h2 class="room__secondary">Our Rooms</h2>
    <div class="room">
        <div class="room__box junior">
            <img src="img/room-1.jpg" class="room__image">
            <p class="room__pricing">100k/Night</p>
            <div class="room__text">
                <h3 class="room__heading">Junior Suite</h3>
                <p class="room__paragraph">Our Junior suites offer a touch of luxury for guests looking for a little extra space and comfort, come relax!</p>

                <div class="room__buttons">
                    <!------<a href="#" class="room__btn-1">View Detail</a> -->
                    <a href="bookaroom" class="room__btn-2">Book now</a>
                </div>
            </div>
        </div>
        <div class="room-details">
            <h3 class="room-details__heading">Junior Suite</h3>
            <p class="room-details__paragraph">Experience the ultimate in comfort and luxury in our Junior Suites. These spacious rooms feature a separate living area, a king-size bed, and a private balcony with stunning views of the city.

                Our Junior Suites are equipped with a range of modern amenities, including a flat-screen TV, a mini-bar, and a coffee machine. The en-suite bathroom includes
                a rain shower and a deep-soaking tub, as well as a selection of premium toiletries.
                In addition to the standard amenities, our Junior Suites also include access to our exclusive Executive Lounge, where you can enjoy a continental breakfast, evening hors d'oeuvres, and a variety of beverages throughout the day.

                Make your stay with us truly memorable by upgrading to one of our Junior Suites.</p>
        </div>
    </div>

    <div class="room">
        <div class="room__box executive">
            <img src="img/room-2.jpg" class="room__image">
            <p class="room__pricing">150k/Night</p>
            <div class="room__text">
                <h3 class="room__heading">Executive Suite</h3>
                <p class="room__paragraph">Our executive suites offer the ultimate in luxury and comfort for guests looking for a truly indulgent experience.</p>

                <div class="room__buttons">
                    <!------<a href="#" class="room__btn-1">View Detail</a> -->
                    <a href="bookaroom" class="room__btn-2">Book now</a>
                </div>
            </div>
        </div>

        <div class="room-details">
            <h3 class="room-details__heading">Executive Suite</h3>
            <p class="room-details__paragraph exe">Treat yourself to the ultimate in luxury and relaxation in one of our Executive Suites. These spacious and elegantly appointed rooms offer a separate living area, a king-size bed, and a private balcony with breathtaking views of the city.

                Our Executive Suites are equipped with a range of modern amenities, including a flat-screen TV, a mini-bar, and a coffee machine. The en-suite bathroom features a rain shower and a deep-soaking tub, as well as a selection of premium toiletries.

                In addition to the standard amenities, our Executive Suites also include access to our exclusive Executive Lounge, where you can enjoy a continental breakfast, evening hors d'oeuvres, and a variety of beverages throughout the day. You'll also have access to a private meeting room and a range of business services, making it the perfect choice for the business traveler.

                Experience the ultimate in luxury and comfort by upgrading to one of our Executive Suites.

                I hope this helps! Let me know if you have any other questions or if you'd like me to make any changes to the text.

            </p>
        </div>
    </div>

    <div class="room">
        <div class="room__box deluxe">
            <img src="img/room-3.jpg" class="room__image">
            <p class="room__pricing">200k/Night</p>
            <div class="room__text">
                <h3 class="room__heading">Super Deluxe</h3>
                <p class="room__paragraph">Our super deluxe rooms are the perfect choice for guests looking for the best that our hotel has to offer.</p>

                <div class="room__buttons">

                    <!------<a href="#" class="room__btn-1">View Detail</a> -->
                    <a href="bookaroom" class="room__btn-2">Book now</a>
                </div>
            </div>
        </div>
        <div class="room-details">
            <h3 class="room-details__heading">Super Deluxe</h3>
            <p class="room-details__paragraph del">
                Experience the epitome of luxury and comfort in our Super Deluxe Rooms. These spacious and elegantly appointed rooms offer a king-size bed, a separate sitting area, and a private balcony with breathtaking views of the city.

                Our Super Deluxe Rooms are equipped with a range of modern amenities, including a flat-screen TV, a mini-bar, and a coffee machine. The en-suite bathroom features a rain shower and a deep-soaking tub, as well as a selection of premium toiletries.

                In addition to the standard amenities, our Super Deluxe Rooms also include access to our exclusive Executive Lounge, where you can enjoy a continental breakfast, evening hors d'oeuvres, and a variety of beverages throughout the day. You'll also have access to a range of concierge services, making it the perfect choice for travelers who want to indulge in the ultimate luxury experience.

                Experience the height of luxury and comfort by staying in one of our Super Deluxe Rooms.

            </p>
        </div>
    </div>

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
