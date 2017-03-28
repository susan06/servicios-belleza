$(function () {
    toastr.options = {
        "closeButton":       true,
        "debug":             false,
        "progressBar":       true,
        "preventDuplicates": true,
        "positionClass":     "toast-top-right",
        "onclick":           null,
        "showDuration":      "400",
        "hideDuration":      "1000",
        "timeOut":           "7000",
        "extendedTimeOut":   "1000",
        "showEasing":        "swing",
        "hideEasing":        "linear",
        "showMethod":        "fadeIn",
        "hideMethod":        "fadeOut"
    };

    $(document).on('click', '.generate_crc32', function () {
        $_that = $(this);

        if (!$($_that.data('convert')).val()) {
            $($_that.data('convert')).focus();
        } else {
            $hashids = new Hashids($($_that.data('convert')).val(), 6);
            $($_that.data('convertTo')).val($hashids.encode(100, 100));
        }

        return false;
    });

    $(document).on('submit', '.frm_submit', function () {
        $_that = $(this);

        $('.btn_submit').text($_that.data('verified') || 'Verificando Información').attr({disabled: true});
    });

    if ($.fn.dataTable) {
        $.extend(true, $.fn.dataTable.defaults, {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
        });
    }

    var KEY        = null,
        KEY_DEL    = 8,
        KEY_TAB    = 9,
        KEY_ENTER  = 13,
        KEY_ESC    = 27,
        KEY_LEFT   = 37,
        KEY_RIGHT  = 39,
        KEY_DELETE = 46,
        KEY_F1     = 112,
        KEY_F12    = 123;

    (function (a) {
        a.fn.validate = function (b) {
            a(this).on({
                keypress: function (a) {
                    var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                    (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                }
            })
        }
    })(jQuery);

    (function (a) {
        a.fn.validates = function (b) {
            a(document).on('keypress', this, function (a) {
                var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
            });
        }
    })(jQuery);

    $.fn.hasAttr = function (name) {
        return this.attr(name) !== undefined;
    };

    $.fn.scrollBottom = function (scroll) {
        if (typeof scroll === 'number') {
            window.scrollTo(0, $(document).height() - $(window).height() - scroll);
            return $(document).height() - $(window).height() - scroll;
        } else {
            return $(document).height() - $(window).height() - $(window).scrollTop();
        }
    };
});

function pretty(time) {
    var date = new Date((time || "").replace(/-/g,"/").replace(/[TZ]/g," ")),
        diff = (((new Date()).getTime() - date.getTime()) / 1000),
        day_diff = Math.floor(diff / 86400),
        out = "hace unos segundos";

    switch(true) {
        case diff < 60:
            out = "justo ahora";
            break;
        case diff < 120:
            out = "hace " + "1 minuto";
            break;
        case diff < 3600:
            out = "hace " + Math.floor( diff / 60 ) + " minutos";
            break;
        case diff < 7200:
            out = "hace " + "1 hora";
            break;
        case diff < 86400:
            out = "hace " + Math.floor( diff / 3600 ) + " horas";
            break;
        case day_diff == 1:
            out = "Ayer";
            break;
        case day_diff < 7:
            out = "hace " + day_diff + " días";
            break;
        case day_diff < 31:
            out = "hace " + Math.ceil( day_diff / 7 ) + " semanas";
            break;
        case day_diff < 366:
            out = "hace " + Math.floor( day_diff / 30 ) + " meses";
            break;
        case day_diff > 365:
            out = "hace " + Math.floor( day_diff / 365 ) + " años";
            break;
    };

    return out;
}

$.number = function (number, decimals, dec_point, thousands_sep) {
    thousands_sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
    dec_point     = (typeof dec_point === 'undefined') ? '.' : dec_point;
    decimals      = !isFinite(+decimals) ? 0 : Math.abs(decimals);
    var u_dec = ('\\u' + ('0000' + (dec_point.charCodeAt(0).toString(16))).slice(-4));
    number = (number + '')
        .replace(new RegExp(u_dec, 'g'), '.')
        .replace(new RegExp('[^0-9+\-Ee.]', 'g'), '');
    var n          = !isFinite(+number) ? 0 : +number,
        s          = '',
        toFixedFix = function (n, decimals) {
            var k = Math.pow(10, decimals);
            return '' + Math.round(n * k) / k;
        };
    s = (decimals ? toFixedFix(n, decimals) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, thousands_sep);
    }
    if ((s[1] || '').length < decimals) {
        s[1] = s[1] || '';
        s[1] += new Array(decimals - s[1].length + 1).join('0');
    }
    return s.join(dec_point);
}