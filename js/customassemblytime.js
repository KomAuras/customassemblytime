$(document).ready(function () {

    (new MutationObserver(() => {
        $.getJSON('/customassemblytime/ajax', function (json) {
            $(".customassemblytime").html(json.data.status_text);
        });
    })).observe($(".wa-price.js-price").get(0), {childList: true, characterData: true, subtree: true});

});
