@include('pages.style')
@include('pages.navbar')
@include('pages.ourwork')
<div class="container">


<section class="about-us" id="about">
    <div class="about">
        <div class="about__image">

        </div>

        <div class="about__text-box">
            <h2 class="about__heading">Our History</h2>
            <p class="about__paragraph">
                Welcome to <strong>DREAMER HOTEL</strong>, a luxurious and historical hotel located in the heart of Ibadan. Our hotel has a
                long and rich history, having first opened its doors in 2022. Over the months, we have welcomed countless guests from all
                over the world, and we pride ourselves on providing the highest level of service and amenities to make their stays truly memorable.
            </p>


            <a href="about.html" class="about__button">About us</a>
        </div>
    </div>
</section>
</div>

{{--OUR ROOMS--}}
<section class="our-rooms">
    <h2 class="room__secondary" id="room">Our Rooms</h2>
    <div class="room">
        <div class="room__box">
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

        <div class="room__box">
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

        <div class="room__box">
            <img src="img/room-3.jpg" class="room__image">
            <p class="room__pricing" >200k/Night</p>
            <div class="room__text">
                <h3 class="room__heading">Super Deluxe</h3>
                <p class="room__paragraph">Our super deluxe rooms are the perfect choice for guests looking for the best that our hotel has to offer.</p>

                <div class="room__buttons">

                    <!------<a href="#" class="room__btn-1">View Detail</a> -->
                    <a href="bookaroom" class="room__btn-2">Book now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="room__details">
        <a href="room">View Rooms Details</a>
    </div>
</section>

<div class="container">


<section class="our-gallery" id="photo">
    <div class="gallery">
        <div class="gallery__text">
            <h2 class="gallery__heading">Our Gallery</h2>
            <p class="gallery__paragraph">Our hotel boasts breathtaking views that will take your breath way. From the exterior, guests can see the
                modern architecture and lush gardens that surround the property.</p>
            <p class="gallery__paragraph">In the distance, you can see the natural beauty that surrounds the city, with rolling hills and lush forests providing
                a stunning contrast to the urban landscape.
            </p>
            <div class="gallery__btn-box">
                <a href="gallery" class="gallery__btn">Explore More</a>
            </div>

        </div>


        <div class="gallery__image-box2">
            <div class="gallery__image-box">
                <img src="img/about-3.jpg" class="gallery__image">
                <img src="img/about-4.jpg" class="gallery__image">
                <img src="img/about-2.jpg" class="gallery__image">
            </div>
            <div class="gallery__image-box">
                <img src="img/about-4.jpg" class="gallery__image">
                <img src="img/about-2.jpg" class="gallery__image">
                <img src="img/about-3.jpg" class="gallery__image">
            </div>
        </div>

    </div>
</section>
</div>
<section class="our-service" id="service">
    <h2 class="service__secondary">Our services</h2>

    <div class="service">
        <div class="service__box">
            <i class="fa-solid fa-hotel service__icon"></i>
            <h3 class="service__heading">Rooms & Appartment</h3>
            <p class="service__paragraph">We offer a variety of accomodation options to suit the needs and preferences of our guests.</p>
        </div>
        <div class="service__box">
            <i class="fa-solid fa-utensils service__icon"></i>
            <h3 class="service__heading">Food & Restaurant</h3>
            <p class="service__paragraph">Our hotel is home to a stunning restaurant, offering a range of delicious dining options for guests.</p>
        </div>
        <div class="service__box">
            <i class="fa-solid fa-spa service__icon"></i>
            <h3 class="service__heading">Spa & Fitness</h3>
            <p class="service__paragraph">Whether you're looking to unwind and energized, our spa and fitness center has something for everyone.</p>
        </div>
    </div>
    <div class="service">
        <div class="service__box">
            <i class="fa-sharp fa-solid fa-person-swimming service__icon"></i>
            <h3 class="service__heading">Sports & Games</h3>
            <p class="service__paragraph">For guests looking for something more leisurely, we have a range of indoor and outdoor games available.</p>
        </div>
        <div class="service__box">
            <i class="fa-solid fa-champagne-glasses service__icon"></i>
            <h3 class="service__heading">Events & Party</h3>
            <p class="service__paragraph">We have a range of event spaces available, including banquet roooms, meeting rooms and outdoor spaces.</p>
        </div>
        <div class="service__box">
            <i class="fa-solid fa-dumbbell service__icon"></i>
            <h3 class="service__heading">GYM & Yoga</h3>
            <p class="service__paragraph">Our gym features range cardio and strength training equipment, also range of a free weights and exercise mats.</p>
        </div>
    </div>
</section>
<section class="our-reviews" id="review">
    <h2 class="review__secondary">Clients Reviews</h2>
    <div class="review">
        <div class="review__slide">
            <p class="review__arrow">&larr;</p>
        </div>
        <div class="review__box">
            <p class="review__paragraph"> From the moment I arrived, the staff was friendly and welcoming, and the hotel itself was beautiful and well-maintained.
                My room was spacious and comfortable, and the amenities were top-notch.
            </p>
            <div class="review__user-box">
                <img src="img/profile.png" class="review__photo">
                <div class="review__user">
                    <h4 class="review__username">Mr Tobi</h4>

                </div>
            </div>
        </div>

        <div class="review__box">
            <p class="review__paragraph">The breakfast buffet in the morning was delicious, with a wide variety of options to choose from.
                The hotel also has a beautiful pool and fitness center, which I took advantage of during my stay.
            </p>
            <div class="review__user-box">
                <img src="img/profile.png" class="review__photo">
                <div class="review__user">
                    <h4 class="review__username">Mr Adeniran</h4>

                </div>
            </div>
        </div>

        <div class="review__box ">
            <p class="review__paragraph">The views from the hotel were stunning, and the outdoor activities offered on site,
                such as hiking and biking trails, added to our enjoyment. We also appreciated the convenient location close to the ski slopes.
            </p>
            <div class="review__user-box">
                <img src="img/profile.png" class="review__photo">
                <div class="review__user">
                    <h4 class="review__username">Mrs Oguns</h4>

                </div>
            </div>
        </div>

        <div class="review__slide">
            <p class="review__arrow">&rarr;</p>
        </div>
    </div>
</section>

<section class="our-team" id="team">
    <h2 class="team__secondary">Our Team</h2>
    <div class="team">
        <div class="team__box">
            <div class="team__photo team__photo--1 ">

            </div>

            <div class="team__social">
                <div class="team__social-icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>
            <div class="team__text">
                <h4 class="team__name">Adegbite Olivia</h4>
                <p class="team__role">Receptionist</p>
            </div>
        </div>

        <div class="team__box">
            <div class="team__photo team__photo--2">

            </div>

            <div class="team__social">
                <div class="team__social-icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>
            <div class="team__text">
                <h4 class="team__name">Queen Busola</h4>
                <p class="team__role">Hotel Ambassador</p>
            </div>
        </div>

        <div class="team__box">
            <div class="team__photo team__photo--3">

            </div>

            <div class="team__social">
                <div class="team__social-icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>
            <div class="team__text">
                <h4 class="team__name">Salman Shakur</h4>
                <p class="team__role">Engineering Manager</p>
            </div>
        </div>

        <div class="team__box">
            <div class="team__photo team__photo--4">

            </div>

            <div class="team__social">
                <div class="team__social-icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="team__social-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>
            <div class="team__text">
                <h4 class="team__name">Aronmwan David</h4>
                <p class="team__role">House-Keeping Manager</p>
            </div>
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
