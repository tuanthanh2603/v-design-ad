<form action="{{ URL::to('/lien-he/sendMessage') }}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
    @csrf
    <div style="display: none;">
        <input type="hidden" name="status" value="1">
        <input type="hidden" name="date" value="{{ now()->setTimezone('Asia/Ho_Chi_Minh')->toDateTimeString() }}">
    </div>
    <div class="form_wrap flex_box flex_wrap jus_between">
        <div class="col_6 mobile_col_12 relative form_group">
            <p>
                <label for="your-name">HỌ VÀ TÊN</label>
                <span class="wpcf7-form-control-wrap" data-name="your-name">
                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                    id="your-name" aria-required="true" aria-invalid="false"
                    value="" type="text" name="name">
                </span>
            </p>
        </div>
        <div class="col_6 mobile_col_12 relative form_group">
            <p><label for="your-phone">SỐ ĐIỆN THOẠI</label>
                <span class="wpcf7-form-control-wrap" data-name="your-phone">
                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                        id="your-phone" aria-required="true" aria-invalid="false"
                        value="" type="tel" name="phone" required>
                </span>
            </p>
        </div>

        <div class="col_12 relative form_group">
            <p><label for="your-message">NỘI DUNG TIN NHẮN</label><span
                    class="wpcf7-form-control-wrap" data-name="your-message">
                    <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="your-message"
                        aria-invalid="false" name="message"></textarea>
                </span>
            </p>
        </div>
        <div class="col_12 relative form_group submit_btn mb_text_center">
            <p><input class="wpcf7-form-control has-spinner wpcf7-submit btn_submit"
                    type="submit" value="LIÊN HỆ TƯ VẤN"><span
                    class="wpcf7-spinner"></span>
            </p>
        </div>
    </div>
    <div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
