@include('pages.style')

@include('pages.navbar')

<section class="section-about">
    <h2 class="about-page__heading">
        About us
    </h2>
    <div class="about-page">
        <p class="about-page__paragraph">
            Welcome to <strong>DREAMER HOTEL</strong>, a luxurious and historical hotel located in the heart of Ibadan. Our hotel has a
            long and rich history, having first opened its doors in 2022. Over the months, we have welcomed countless guests from all
            over the world, and we pride ourselves on providing the highest level of service and amenities to make their stays truly memorable.
            Our hotel features a variety of on-site dining options, a fitness center, and a heated outdoor pool.
            Our team is dedicated to making your stay with us as enjoyable and comfortable as possible. We pride ourselves on our attention to detail
            and our commitment to providing each and every guest with a personalized experience. In addition to our guest rooms, we also offer a variety of on-site dining options,
            a state-of-the-art fitness center, and a heated outdoor pool. Our hotel is also conveniently located near many popular attractions and landmarks, making it the perfect choice
            for business and leisure travelers alike. Thank you for considering the Dream Hotel for your next stay. We look forward to welcoming you and providing you with an unforgettable experience.
        </p>
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
