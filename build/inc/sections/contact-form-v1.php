<!--==============================
Contact Area  
==============================-->
<div class="contact-form-v1 <?php echo $klass;?>">
    <form action="mail.php" method="POST" class="contact-form ajax-contact">
        <div class="row">
            <div class="form-group style-border col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                <i class="far fa-user"></i>
            </div>
            <div class="form-group style-border col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                <i class="far fa-envelope"></i>
            </div>  
            <div class="form-group style-border col-md-6">
                <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
                <i class="far fa-phone"></i>
            </div>
                      
            <div class="form-group style-border col-md-6">
                <select name="subject" id="subject" class="form-select bg-white">
                    <option value="" disabled selected hidden>Select Subject</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Brand Marketing">Brand Marketing</option>
                    <option value="UI/UX Designing">UI/UX Designing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="form-group style-border col-12">
                <input type="number" class="form-control" name="number" id="number" placeholder="Company name">
                <i class="far fa-circle-info"></i>
            </div>
            <div class="form-group style-border col-12">
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="How can we help you? feel free to get in touch!*"></textarea>
            </div>
            <div class="form-btn col-12">
                <button class="th-btn style5">Submit Message</button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>