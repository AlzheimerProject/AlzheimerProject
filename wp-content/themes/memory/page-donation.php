<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Memory
 */

get_header();
?>

	<main id="primary" class="donation-main site-main">

        <section id="donation-form">
            <div id="donation-form-header">
                <ul>
                    <li class="donation-link-left selected">ONE-TIME DONATION</li>
                    <li class="donation-link-right">MONTHLY DONATION</li>
                </ul>
            </div>

            <div id="donation-form-body">
                <!-- Amount of choice -->
                <div class="donation-form-body-title">
                    <h2>1</h2>
                    <p>Select the amount of your choice</p>
                </div>
                <div id="donation-form-amount">
                    <p>1€</p>
                    <p>5€</p>
                    <p>10€</p>
                    <p>20€</p>
                    <p>50€</p>
                    <p>100€</p>
                </div>
                <input type="text" placeholder="Other:">

                <!-- Donor information -->
                <div class="donation-form-body-title">
                    <h2>2</h2>
                    <p>Donor Information</p>
                </div>
                <input type="text" placeholder="First name*">
                <input type="text" placeholder="Last name*">
                <input type="text" placeholder="E-mail adress">

                <!-- Payment information -->
                <div class="donation-form-body-title">
                    <h2>3</h2>
                    <p>Payment Information</p>
                </div>
                <input type="text" placeholder="Cardholder’s name*">
                <input type="text" placeholder="Credit card number*">
                <p>Expiration date</p>
                <input type="month" placeholder="month">
                <input type="text" placeholder="CVV*">

                <button>Send</button>
            </div>
        </section>

        <section id="donation-head">
            <h2>Donation</h2>
        </section>

        <section id="donation-thanks">
            <h2>Thank you !</h2>
            <p>
                Thanks to your help, we can advance in research against the disease. We are very grateful to you and know that every donation matters to us.
                <br>
                <br>
                So thank you for joining us for this important cause that is the treatment of alzheimer's
            </p>
        </section>

	</main><!-- #main -->

<?php
//get_footer();
