<?php
session_start();
include('include/header.php'); // include header file from include folder
?>
<style>
    .slick-slider {
        display: none !important;
    }
</style>
<main class="wrapper  contact-page">
    <h1>How can we help you?</h1>
    <?php
    if (isset($_SESSION['old'])) {
        echo $_SESSION['old']['email'];
    }

    ?>

    <form action="include/mailer.php" method="POST" id="contact-from">
        <div class="flex-container">
            <div class="input-area">
                <div class="flex-container">
                    <div class="input-box w-50">
                        <label>Your Name <span class="text-danger">*</span></label><br>
                        <input class="btn w-100" name="name" id="name" type="text" placeholder="" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['name'] : '' ?>">
                        <span style="color: red;" id="name_err"><?php echo isset($_SESSION['nameErr']) ? $_SESSION['nameErr'] : '' ?></span>
                    </div>

                    <div class="input-box w-50">
                        <label>Your Email <span class="text-danger">*</span></label><br>
                        <input class="btn w-100" name="email" id="email" type="email" placeholder="" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['email'] : '' ?>">
                        <span style="color: red;" id="email_err"><?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : '' ?></span>
                    </div>
                </div>

                <div class="flex-container">
                    <div class="input-box w-50">
                        <label>Your Telephone Number <span class="text-danger">*</span></label><br>
                        <input class="btn w-100" name="phone" id="phone" type="number" placeholder="" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['phone'] : '' ?>">
                        <span style="color: red;" id="phone_err"><?php echo isset($_SESSION['phoneErr']) ? $_SESSION['phoneErr'] : '' ?></span>
                    </div>

                    <div class="input-box w-50">
                        <label>Subject <span class="text-danger">*</span></label><br>
                        <input class="btn w-100" name="subject" id="subject" type="text" placeholder="" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['subject'] : '' ?>">
                        <span style="color: red;" id="subject_err"><?php echo isset($_SESSION['subjectErr']) ? $_SESSION['subjectErr'] : '' ?></span>
                    </div>
                </div>

                <div class="flex-container">
                    <div class="input-box w-100">
                        <label>Message <span class="text-danger">*</span></label><br>
                        <textarea class="btn" style="width: 97% !important;" name="message" id="message" cols="30" rows="10"><?php echo isset($_SESSION['old']) ? $_SESSION['old']['message'] : '' ?></textarea>
                        <span style="color: red;" id="message_err"><?php echo isset($_SESSION['messageErr']) ? $_SESSION['messageErr'] : '' ?></span>
                    </div>
                </div>

                <div class="flex-container">
                    <div class="input-box w-100">
                        <input type="checkbox" class="btn">
                        <span>
                            Please tick this box if you wish to receive marketing information from us. Please see our privacy policy for more information on how we use your data.
                        </span>
                    </div>
                </div>

                <button type="submit" class="submit-btn" style="display: inline-block;">SEND ENQUIRY</button>
            </div>
            <div class="info-area">
                <span>Call us on:</span>
                <h1> <a href="tel: 01603 70 40 20" style="text-decoration: none;color:#000">01603 70 40 20</a></h1>

                <span>Email us on:</span>
                <h1><a href="mailto:sales@netmatters.com" style="text-decoration: none;color:#000">sales@netmatters.com</a></h1>

                <span>Call us at our Gorleston branch on:</span>
                <h1> <a href="tel: 01493 60 32 04" style="text-decoration: none;color:#000">01493 60 32 04</a></h1>

                <span>Business hours:</span>
                <h3>Monday - Friday 07:00-18:00</h3>

                <h3 id="open-support-hour" style="cursor: pointer;">Out of Hours IT Support <i id="hr-icon" class="fa fa-angle-down"></i> </h3>
                <div class="support-hour" style="display: none;">
                    <p>
                        Netmatters IT are offering
                        an Out of Hours service for Emergency and Critical tasks.
                        <br>
                        <br>
                        <b>
                            Monday - Friday 18:00 - 22:00 <br>
                            Saturday 08:00 - 16:00 <br>
                            Sunday 10:00 - 18:00
                        </b>
                        <br>
                        <br>
                        To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.
                    </p>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="grid-container">
        <div class="grid-item office-1">
            <div class="address-area">
                <i class="fa fa-home office-icon"></i>
                <br>
                <span class="address-text">Netmatters Office: Wymondham</span>
                <br>
                <span class="separator">|</span>
                <p class="address-text-details">Netmatters <br> 11 Penfold Drive <br> Wymondham <br> Norfolk <br> NR18 OWZ
                </p>
            </div>

            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.650652742747!2d1.134078215247206!3d52.57592863983608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1585561981150!5m2!1sen!2suk" style="width:100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="grid-item office-2">
            <div class="address-area">
                <i class="fa fa-road office-icon"></i>
                <br>
                <span class="address-text">Netmatters Office: Gorleston, Great Yarmouth</span>
                <br>
                <span class="separator">|</span>
                <p class="address-text-details">Netmatters - Great Yarmouth <br>
                    Suite F23 Beacon Innovation Centre, Beacon Park <br>
                    Gorleston, Great Yarmouth <br>
                    Norfolk
                    <br>
                    NR31 7RA
                </p>
            </div>
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.723310542056!2d1.7104906152463408!3d52.55652964127463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Gorleston!5e0!3m2!1sen!2suk!4v1585562290492!5m2!1sen!2suk" style="width:100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <!-- Contact form information validation -->    
    
<?php
if (isset($_SESSION['status'])) {


    if ($_SESSION['status'] == 'ok') {

        echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Mail send successfully!',
        icon: 'success',
        confirmButtonText: 'Close'
        })</script>";
        session_unset();
        session_destroy();
    }

    if ($_SESSION['status'] == 'error' && $_SESSION['validateErr'] == 'yes') {
        echo "<script>Swal.fire({
        title: 'Error!',
        text: 'Input field validation error!',
        icon: 'error',
        confirmButtonText: 'Close'
        })</script>";
        session_unset();
        session_destroy();
    }

    if ($_SESSION['status'] == 'error') {
        echo "<script>Swal.fire({
        title: 'Error!',
        text: 'Something went wrong!',
        icon: 'error',
        confirmButtonText: 'Close'
        })</script>";
        session_unset();
        session_destroy();
    }
}

include('include/footer.php'); //include footer files from include folder.
?>
<style>
    .swal2-container {
        zoom: 0.5 !important;
    }

    .swal2-popup {
        font-size: 1.2rem;
    }
</style>