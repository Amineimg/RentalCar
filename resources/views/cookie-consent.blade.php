<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #cookieDrawer {
        position: fixed;
        bottom: -100%;
        left: 0;
        width: 100%;
        background-color: #f8f9fa;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        transition: bottom 0.3s ease-out;
        z-index: 1050;
        padding: 20px;
        box-sizing: border-box;
    }

    #cookieDrawer.show {
        bottom: 0;
    }

    #cookieDrawer .container {
        max-width: 1200px;
        margin: 0 auto;
    }
</style>

<div id="cookieDrawer">
    <div class="container text-center">
        <h5>{{ __('cookies.title') }}</h5>
        <p>{{ __('cookies.message') }}</p>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary mr-2" id="rejectCookies"><i class="fa fa-ban"></i> {{ __('cookies.reject') }}</button>
            <button type="button" class="btn btn-success" id="acceptCookies"><i class="fa fa-check"></i>  {{ __('cookies.accept') }}</button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    if (!getCookie('cookie_consent')) {
        $('#cookieDrawer').addClass('show');
    }

    $('#acceptCookies').click(function() {
        setCookie('cookie_consent', 'accepted', 365);
        $('#cookieDrawer').removeClass('show');
    });

    $('#rejectCookies').click(function() {
        setCookie('cookie_consent', 'rejected', 365);
        $('#cookieDrawer').removeClass('show');
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
});
</script>