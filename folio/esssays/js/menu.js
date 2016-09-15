$('#menu > li > ul' )
2
    .hide()
3
    .click(function(event) {
4
        event.stopPropagation();
5
    });
