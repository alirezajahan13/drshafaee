<?php

/*

Template Name: Appointment Template

*/

get_header();

?>


<div class="appointmentPageBack">
    <div class="appointmentPage mainView">
        <div class="generalHeading centeredText highMargined mediumWeight">
            <h1>دریافت نوبت</h1>
            <span>دکتر یوسف شفائی خانقاه</span>
        </div>
        <div class="appointmentPageSection">
            <div class="appointmentPageForm darkBorder highRadius mediumPadding">
                <?php echo do_shortcode('[contact-form-7 id="82" title="فرم دریافت نوبت"]') ?>
            </div>
            <!-- <div class="appointmentPageLeft">
                <div class="siteMessage informMessage">روزهای کاری : روز های زوج (ساعت 16 الی 21)</div>
                <div class="siteMessage informMessage">بعد از ارسال درخواست طی 24 ساعت آینده با شما تماس خواهیم گرفت.</div>
                <div class="siteMessage informMessage">زمان انتخابی دقیق با شما هماهنگ میشود.</div>
                <div class="siteMessage informMessage">اطلاعات به صورت دقیق وارد شود.</div>
            </div> -->
        </div>
    </div>
</div>




<?php get_footer();