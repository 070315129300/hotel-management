<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dreamer Hotel &mdash;People Resort</title>
    <link rel="website icon" type="png" href="img/logo-4.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Syne:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="room.html">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/book.css">
    <script src="https://kit.fontawesome.com/c6614d5790.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>

    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item"><a href="#home" class="navigation__link">Home</a></li>
            <li class="navigation__item"><a href="#about" class="navigation__link">About us</a></li>
            <li class="navigation__item"><a href="#service" class="navigation__link">Service</a></li>
            <li class="navigation__item"><a href="#room" class="navigation__link">Rooms</a></li>
            <li class="navigation__item"><a href="#team" class="navigation__link">Team</a></li>
        </ul>
    </nav>
</div>
<header class="header">
    <div class="header__logo-box">
        <img src="img/logo-5.png" alt="LOGO" class="header__logo">
    </div>

    <div class="header__text-box">
        <h1 class="header__primary">DREAMER HOTEL </h1>
        <p class="header__paragraph">A very good place for chilling and resting.</p>

        <div class="header__button">
            <a href="room.html" class="header__button-primary">Our rooms</a>
            <a href="book.html" class="header__button-secondary">Book a room</a>
        </div>
    </div>
</header>

<section class="our-work">
    <div class="work">
        <div class="work__layer">
            <div class="work__details">
                <h3 class="work__heading">1234</h3>
                <p class="work__paragraph">Rooms</p>
            </div>
            <div class="work__details">
                <h3 class="work__heading">1234</h3>
                <p class="work__paragraph">Staff</p>
            </div>
            <div class="work__details">
                <h3 class="work__heading">1234</h3>
                <p class="work__paragraph">Guests</p>
            </div>
            <div class="work__details">
                <h3 class="work__heading">1234</h3>
                <p class="work__paragraph">Reviews</p>
            </div>
        </div>

    </div>
</section>

<section class="booking">
    <h2 class="book__heading">Booking Form</h2>
    <form action="#" class="book">

        <div class="book__name-box">
            <div class="book__name">
                <label for="name" class="book__label-firstname">Name</label>
                <input type="text" class="book__input-firstname" placeholder="First" id="name" required>
            </div>

            <div class="book__name">
                <label for="name" class="book__label-firstname">&nbsp;</label>
                <input type="text" class="book__input-lastname" placeholder="Last" id="name" required>
            </div>
        </div>

        <div class="book__contact-box">
            <div class="book__contact">
                <label for="phone" class="book__label-phone">Phone</label>
                <input type="tel" class="book__input-phone" id="phone" required>
            </div>

            <div class="book__contact">
                <label for="mail" class="book__label-mail">Email</label>
                <input type="email" class="book__input-mail" id="mail" placeholder="tobi@gmail.com" required>
            </div>
        </div>

        <div class="book__date-box">
            <div class="book__arrival">
                <label for="date" class="book__label-date">Arrival Date</label>
                <input type="date" class="book__input" id="date" required>
            </div>

            <div class="book__arrival">
                <label for="time" class="book__label-date">Arrival Time</label>
                <input type="time" class="book__input" id="time" required>
            </div>

            <div class="book__arrival">
                <label for="depart" class="book__label-date">Departure Time</label>
                <input type="date" class="book__input" id="time" required>
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
                <select name="rooms" class="book__adult" id="room" required>
                    <option value="1">Super Deluxe</option>
                    <option value="2">Executive Suite</option>
                    <option value="3">Junior Suite</option>
                </select>
            </div>
        </div>
        <div class="book__message-box">
            <label for="msg" class="book__label-message">Special requests</label>
            <textarea name="message"   id="msg" class="book__message"></textarea>
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

<footer class="footer-section">
    <div class="footer">
        <img  src="img/logo-1.png" class="footer__logo">

        <div class="social">
            <a href="tel:+2348160219474" class="social__link"><i class="fa-solid fa-phone"></i></a>
            <a href="mailto:salmanshakur7@gmail.com" class="social__link"><i class="fa-regular fa-envelope"></i></a>
            <a href="#" class="social__link"><i class="fa-brands fa-facebook" class="social__icon"></i></a>
            <a href="#" class="social__link"><i class="fa-brands fa-instagram" class="social__icon"></i></a>
            <a href="#" class="social__link"><i class="fa-brands fa-twitter" class="social__icon"></i></a>

        </div>
        <div class="footer__box">
            <ul class="footer__nav">
                <li class="footer__list"><a href="#home" class="footer__link">Home</a></li>
                <li class="footer__list"><a href="#about" class="footer__link">About us</a></li>
                <li class="footer__list"><a href="#service" class="footer__link">Service</a></li>
                <li class="footer__list"><a href="#room" class="footer__link">Rooms</a></li>
                <li class="footer__list"><a href="#photo" class="footer__link">Gallery</a></li>
                <li class="footer__list"><a href="#review" class="footer__link">Reviews</a></li>
                <li class="footer__list"><a href="#team" class="footer__link">Team</a></li>


            </ul>

            <div class="footer__copyright">
                <p> &copy; 2022 by Dreamer Hotel. All right reserved.</p>
                <p> This site is designed and developed by SHAKUR.</p>

            </div>
        </div>

    </div>

</footer>
</body>
</html>
