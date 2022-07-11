$(function() {

    /** ------------------- ------------------- -------------------
    * MASKS
    --------- --------- --------- */
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});


    /** ------------------- ------------------- -------------------
    * FUNCTIONS
    --------- --------- --------- */
    function toUpper(text) {
        return text.toUpperCase();
    }

    function toLower(text) {
        return text.toLowerCase();
    }

    function toCapitazed(str) {
        return str.replace(/(?:^|\s)\w/g, function(match) {
            return match.toUpperCase();
        });
    }

    function toInverse(str) {
        return str.replace(/[a-z]/gi, char => /[a-z]/.test(char) ? char.toUpperCase() : char.toLowerCase());
    }


    /** ------------------- ------------------- -------------------
    * EVENTS
    --------- --------- --------- */


    // characters counts
    $(document).on('input', '#text', function() {
        var text = $(this).val();
        var words = text.match(/\S+/g);
        var result = {
            textChars: text.length,
            textCharsNoSpaces: text.replace(/\s+/g, '').length,
            textWords: words ? words.length : 0,
            textLines: text.split(/\r*\n/).length
        }
        $('.textChars').text(result.textChars);
        $('.textCharsNoSpaces').text(result.textCharsNoSpaces);
        $('.textWords').text(result.textWords);
        $('.textLines').text(result.textLines);
    });

    // lowercase
    $(document).on("click", "[data-lower]", function(e) {
        $("#text").val(toLower($("#text").val()));
    });

    // uppercase
    $(document).on("click", "[data-upper]", function(e) {
        $("#text").val(toUpper($("#text").val()));
    });

    // capitalized
    $(document).on("click", "[data-cap]", function(e) {
        $("#text").val(toCapitazed(toLower($("#text").val())));
    });

    // titlecase
    $(document).on("click", "[data-title]", function(e) {
        var ignored_words = [""], min_size = 1;
        var ignored_words = $("#ignored_words").val().split(",");
        var words = $("#text").val().match(/\S+\s*/g);
        $.each(words, function (i, word) {
            if ($.trim(ignored_words).indexOf($.trim(word)) == -1 && $.trim(word).length > min_size) {
                if (words[i].charAt(0) == '“' || words[i].charAt(0) == '"' || words[i].charAt(0) == "'") {
                    words[i] = words[i].charAt(0) + words[i].charAt(1).toUpperCase() + words[i].slice(2);
                } else {
                    words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
                }
            }
        });
        $("#text").val(words.join(""));
    });

    // textalt
    $(document).on("click", "[data-textalt]", function(e) {
        var text = toLower($("#text").val()).split('');
        for (var i = 0; i < text.length; i = i + 2) {
            text[i] = toUpper(text[i]);
        }
        text = text.join('');
        $("#text").val(text);
    });

    // capitalized
    $(document).on("click", "[data-inverse]", function(e) {
        $("#text").val(toInverse($("#text").val()));
    });

    // selected
    $(document).on("click", "[data-select]", function(e) {
        $("#text").select().focus();
    });


    /** ------------------- ------------------- -------------------
    * AJAX FORM PROCESSOR
    --------- --------- --------- */


    $("form:not('.ajax_off')").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var load = $("#preloader");
        var flashClass = "ajax_response";
        var flash = $("." + flashClass);

        form.ajaxSubmit({
            url: form.attr("action"),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                load.fadeIn(200).css("display", "flex");
            },
            success: function (response) {
                // redirect|reload
                if (response.redirect) {
                    window.location.replace(response.redirect);
                } else if (response.reload) {
                    window.location.reload(true);
                } else {
                    load.fadeOut(200);
                }
                // message
                if (response.message) {
                    if (flash.length) {
                        flash.html(response.message).fadeIn(100).effect("bounce", 300);
                    } else {
                        form.prepend("<div class='" + flashClass + "'>" + response.message + "</div>")
                            .find("." + flashClass).effect("bounce", 300);
                    }
                    $('html, body').animate({
                        scrollTop: $('#content').offset().top
                    }, 'slow');
                } else {
                    flash.fadeOut(100);
                }
                // responses
                if(response.cpf) { // response for cpf generator
                    if($('#numbers').is(":checked")) {
                        $('#cpf').unmask().val(response.cpf).select();
                    } else {
                        $('#cpf').unmask().val(response.cpf).mask('00.000.000-00').select();
                    }
                }
                if(response.cnpj) { // response for cnpj generator
                    if($('#numbers').is(":checked")) {
                        $('#cnpj').unmask().val(response.cnpj).select();
                    }else {
                        $('#cnpj').unmask().val(response.cnpj).mask('00.000.000/0000-00').select();
                    }
                }
            }
        });
    });

});