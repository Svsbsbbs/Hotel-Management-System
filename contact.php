<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL IN - CONTACT</title>
    <?php require('inc/links.php');?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark "></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat, quae totam accusantium 
            dicta expedita sint dolorem<br>explicabo atque error eius laboriosam mollitia? Corporis facere 
            nulla minus officiis, fuga maxime.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16690.57326314975!2d77.05294283507139!3d28.426473496468414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d219331939509%3A0x5b6a49ea246b0e1d!2sInternational%20Tech%20Park%2C%20Haryana%20122102!5e0!3m2!1sen!2sin!4v1727378876492!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/odURkT1AVf43tgx67" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>XYZ, Info Technology Park Sector 34,Gurugram, Haryana, 122001.
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel:+917777888921" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91 7777888921
                    </a>
                    <br>
                    <a href="tel:+917777888921" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91 7777888921
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: travel_in@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i> travel_in@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-whatsapp me-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 pop">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3 ">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php');?>
</body>
</html>