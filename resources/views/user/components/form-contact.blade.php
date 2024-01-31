<form action="{{ route('contact.sendMessage') }}" method="post" class="wpcf7-form init" >
    @csrf
    <div class="form_wrap flex_box flex_wrap jus_between">
        <div class="col_6 mobile_col_12 relative form_group">
            <label for="your-name">HỌ VÀ TÊN</label>
                <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="name"
                    maxlength="40" value="" type="text" name="name" required>
        </div>
        <div class="col_6 mobile_col_12 relative form_group">
            <label for="phone">SỐ ĐIỆN THOẠI</label>
            <input size="40"
                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                id="phone" maxlength="10" value="" type="tel" name="phone" required>
        </div>

        <div class="col_12 relative form_group">
            <label for="message">NỘI DUNG TIN NHẮN</label>
            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="message" name="message"></textarea>
        </div>
        <div class="col_12 relative form_group submit_btn mb_text_center">
            <input class="wpcf7-form-control has-spinner wpcf7-submit btn_submit" type="submit"
                    value="LIÊN HỆ TƯ VẤN">
        </div>
    </div>
    <div class="wpcf7-response-output" aria-hidden="true"></div>
</form>

