@extends('layouts.app')

@section('Description', 'Page de contacte de la Table du sucré et salé')
@section('Title', 'Contactez-Nous')


@section('Content')
    <div class="contact">

        <div class="contact_info">
            <h1>Contactez-nous:</h1>
            <p>La Table du sucré et salé</p>
            <p>48 Rue de la Croix,</p>
            <p>6042 Lodelinsart</p>
            <p>
                <a href="tel:071576131">071 57 61 31</a>
            </p>
        </div>

        <div class="contact-form">
            <form action="/contactez-nous/envoyer" method="POST">
                <div class="names">
                    <div class="last_name">
                        <label for="contact_last_name">Nom:</label>
                        <input type="text" name="contact_last_name" required="required">
                    </div>
                    <div class="first_name">
                        <label for="contact_first_name">Prénom:</label>
                        <input type="text" name="contact_first_name" required="required">
                    </div>
                </div>
                <div class="contact_details">
                    <div class="mail">
                        <label for="contact-Email">Email:</label>
                        <input type="text" name="contact_Email" required="required">
                    </div>
                    <div class="tel">
                        <label for="contact-Tel">Téléphone:</label>
                        <input type="text" name="contact_Tel" required="required">
                    </div>
                </div>
                <div class="message">
                    <div class="message_details">
                        <label for="contact-Message">Message:</label>
                        <textarea rows="3" cols="20" name="contact_Message" required="required"></textarea>
                    </div>
                </div>
                <div class="send_button">
                    <button type="submit" value="contactSubmit" name="contactSubmit">Envoyé</button>
                </div>
            </form>
        </div>
    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d617.2365647069249!2d4.456457096578993!3d50.43566552807271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c228a59a562325%3A0xee45718117b413d0!2sla%20table%20du%20sucr%C3%A9%20et%20sal%C3%A9!5e0!3m2!1sfr!2sbe!4v1678463060944!5m2!1sfr!2sbe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
