$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;
        var links = this.el.find('.link');
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
    };

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this);
        $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        }
        ;
    };

    $("#reportForm").submit(function (event) {
        let startDate = new Date(event.target['startDate'].value);
        let finishDate = new Date(event.target['finishDate'].value);

        if (finishDate.getTime() >= startDate.getTime()) {
            return;
        }

        alert('Дата начала периода, должна быть меньше даты конца периода');
        event.target['startDate'].value = null;
        event.target['finishDate'].value = null;
        event.preventDefault();
    });

    var accordion = new Accordion($('#accordion'), false);
});
