@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<body>

    <header>
            <p>THE ULTIMATE LUXURY</p>
            <h1>New Details</h1>
            <div>
                <p>Home  &nbsp;&nbsp;| &nbsp;</p>
                <p class="golden-text">Blog</p>
            </div>
    </header>

    <section class="contact-info">
        <div class="contact-info__article-container">
            <article>
                <h2>01</h2>
                <div>
                    <img alt="phone" src="/Images/contactLocation.svg">
                    <div>
                        <h3>Hotel Address</h3>
                        <h4>19/A, Cirikon City hall <br> Tower New York, NYC</h4>
                    </div>
                </div>
            </article>
            <article>
                <h2>02</h2>
                <div>
                    <img alt="phone" src="/Images/contactPhone.svg">
                    <div>
                        <h3>Phone Number</h3>
                        <h4>+ 97656 8675 7864 7 <br> + 876 766 8675 765 6</h4>
                    </div>
                </div>
            </article>
            <article>
                <h2>03</h2>
                <div>
                    <img alt="phone" src="/Images/contactEmail.svg">
                    <div>
                        <h3>Email</h3>
                        <h4>info@webmail.com <br> jobs.webmail@mail.com</h4>
                    </div>
                </div>
            </article>
        </div>
        <div class="contact-info__image" style="background-image: url(https://miro.medium.com/v2/resize:fit:720/1*8fpapH_ntoddzczjnVTAZA.jpeg);"></div>
    </section>

    <section class="contact-form">
        <form>
            <input class="contact-form__name" name="name" placeholder="Your full name" type="text" required>
            <input class="contact-form__phone"name="phone" placeholder="Add phone number" type="number" required>
            <input class="contact-form__email"name="email" placeholder="Enter email afdress" type="email" required>
            <input class="contact-form__subject"name="subject" placeholder="Enter subject" type="text" required>
            <textarea class="contact-form__message" name="message" placeholder="Enter message" id=""></textarea>
            <input type="submit" value="SEND" class="button__filled ">
        </form>
    </section>
</body>
</html>