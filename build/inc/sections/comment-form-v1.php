<!-- Comment Form -->
<div class="th-comment-form <?php echo $klass;?>" data-cue="slideInUp">
    <div class="form-title">
        <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
        <p class="form-text">Your email address will not be published. Required fields are marked</p>
    </div>
    <div class="row">
        <div class="col-md-6 form-group style-border">
            <input type="text" placeholder="Your Name" class="form-control">
            <i class="fal fa-user"></i>
        </div>
        <div class="col-md-6 form-group style-border">
            <input type="text" placeholder="Email Address" class="form-control">
            <i class="fal fa-envelope"></i>
        </div>
        <div class="col-12 form-group style-border">
            <textarea placeholder="Type Your Message" class="form-control"></textarea>
            <i class="fal fa-pencil"></i>
        </div>
        <div class="col-12 form-group">
            <input id="reviewcheck" name="reviewcheck" type="checkbox">
            <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
        </div>
        <div class="col-12 form-group mb-0">
            <button class="th-btn style3 btn-md">Submit Comment</button>
        </div>
    </div>
</div>