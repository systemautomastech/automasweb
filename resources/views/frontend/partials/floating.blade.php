<!-- Floating Icons -->
<style>
    .shadow-brand-lg {
        box-shadow: 4px 4px 60px #F35839;
    }

    /* Always floating animation */
    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-40px);
        }
    }

    .floating-message-btn {
        position: fixed;
        top: 50%;
        right: 25px;
        transform: translateY(-50%);
        width: 56px;
        height: 56px;
        background: #F35839;
        color: #ffe9e4;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 12px 32px rgba(243, 88, 57, 0.45);
        z-index: 1000;
        transition: all 0.3s ease;
        text-decoration: none;
        animation: floatIcon 2.5s ease-in-out infinite;
    }

    .floating-message-btn:hover {
        animation-play-state: paused;
    }

    /* Icon style */
    .floating-message-btn i {
        font-size: 26px;
        transition: 0.3s ease;
    }

    /* Hover effect */
    .floating-message-btn:hover {
        background: #e14a32;
        box-shadow: 0 18px 40px rgba(243, 88, 57, 0.55);
    }

    .floating-message-btn:hover i {
        color: #ffffff;
        transform: scale(1.15);
    }
</style>


<a href="#" id="scroll-top" class="scroll-top d-flex shadow-sm align-items-center justify-content-center"
    style="position: fixed; bottom: 20px; left: 20px; z-index: 999;">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!--<a href="#" id="message-icon">-->
<!--    <i class="bi bi-envelope-fill"></i>-->
<!--</a>-->


<!-- WhatsApp Icon (Hidden by default) -->
<a href="https://wa.me/+8801886660980" target="_blank" id="whatsapp-chat"
    style="position: fixed; top: 120px; right: 25px; background: #25D366; color: white; padding: 12px 16px; border-radius: 50%; z-index: 1000; text-align: center; display: none;">
    <i class="bi bi-whatsapp" style="font-size: 22px;"></i>
</a>

<!-- Call Icon (Hidden by default) -->
<a href="tel:09617-300600" id="mobile-call"
    style="position: fixed; top: 200px; right: 25px; background: #28a745; color: white; padding: 12px 16px; border-radius: 50%; z-index: 1000; text-align: center; display: none;">
    <i class="bi bi-telephone-fill" style="font-size: 20px;"></i>
</a>

<!--Message Icon (Always Visible) -->
<a href="#" id="message-icon" class="floating-message-btn">

    <i class="bi bi-envelope-fill"></i>

</a>


<script>
    const messageIcon = document.getElementById('message-icon');
    const whatsappIcon = document.getElementById('whatsapp-chat');
    const callIcon = document.getElementById('mobile-call');

    // Track visibility state
    let iconsVisible = false; // Hidden by default

    messageIcon.addEventListener('click', (e) => {
        e.preventDefault();

        if (!iconsVisible) {
            // Show WhatsApp and Call icons
            whatsappIcon.style.display = 'block';
            callIcon.style.display = 'block';
            iconsVisible = true;
        } else {
            // Hide WhatsApp and Call icons
            whatsappIcon.style.display = 'none';
            callIcon.style.display = 'none';
            iconsVisible = false;
        }
    });
</script>
<style>
    /*Facebook color*/
    .text-facebook {
        color: #1877F2;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .text-facebook:hover {
        color: #0f5bd8;
    }

    /*Instagram color*/
    .text-instagram {
        color: #E1306C;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .text-instagram:hover {
        color: #c3275c;
    }

    /*Twitter color*/

    .text-twitter {
        color: #1DA1F2;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .text-twitter:hover {
        color: #0d8ddb;
    }

    /*Linkedin*/

    .text-linkedin {
        color: #0A66C2;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .text-linkedin:hover {
        color: #084f99;
    }
</style>
<div class="container">
    <!-- Desktop Banner -->
    <img src="/assets/img/Payment Banner_Jul24_V1-02.png" alt="Automas Banner"
        class="img-fluid d-none d-md-block">

    <!-- Mobile Banner -->
    <img src="/assets/img/Payment Banner_Jul24_V1-02.png" alt="Automas Banner Mobile"
        class="img-fluid d-block d-md-none">
</div>