<form action="{{ route('contact.submit') }}" method="POST" class="Contact-Form">
    @csrf

    <div>
        <label>Enter Your Name <span style="color: red">*</span></label>
        <input type="text" class="mt-1 name-field" name="name">
        <small class="error name-error"></small>
    </div>

    <div>
        <label>Enter Phone Number <span style="color:red">*</span></label>
        <input type="tel" class="phone-field" name="phone" maxlength="10">
        <small class="error phone-error"></small>
    </div>

    <div>
        <label>Email <span style="color: red">*</span></label>
        <input type="email" class="mt-1 email-field" name="email">
        <small class="error email-error"></small>
    </div>

    <div>
        <label>Business Name <span style="color: red">*</span></label>
        <input type="text" class="mt-1 business-field" name="business">
        <small class="error business-error"></small>
    </div>

    <div>
        <label>Message</label>
        <textarea name="message" class="mt-1 message-field"></textarea>
    </div>

    <div>
        <input type="hidden" name="gclid" id="gclid">
        <input type="hidden" name="utm_source" id="utm_source">
        <input type="hidden" name="utm_medium" id="utm_medium">
        <input type="hidden" name="utm_campaign" id="utm_campaign">
    </div>


    <div class="recaptcha-wrap">
        <div class="g-recaptcha" data-sitekey="6LeeB30sAAAAACQ1zmx1G4duNJa6BrCcuXpTgawh"></div>
        <small class="error captcha-error"></small>
    </div>

    <div class="btn-container">
    <button type="submit" id="submitBtn">
        <span class="btn-text">Submit</span>
        <span class="btn-loader" style="display:none;">
            Sending <span class="spinner-border spinner-border-sm text-light me-2"></span>
        </span>
    </button>
</div>

    <p>
        *This information may be transcribed, used, and stored by third parties in accordance with our <a href="{{ url('privacypolicy') }}">Privacy Policy</a>.
    </p>
</form>