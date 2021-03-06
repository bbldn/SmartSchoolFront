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
    };

    $("#reportForm").submit(function (event) {
        let startDate = new Date(event.target['startDate'].value);
        let finishDate = new Date(event.target['finishDate'].value);
        let now = new Date();

        if (finishDate.getTime() > now.getTime()) {
            alert('Дата конца периода, должна быть меньше или равно текущей дате');
            event.target['finishDate'].value = now.toISOString().substr(0, 10);
            event.preventDefault();
            return;
        }

        if (finishDate.getTime() < startDate.getTime()) {
            alert('Дата начала периода, должна быть меньше даты конца периода');
            event.target['startDate'].value = null;
            event.target['finishDate'].value = null;
            event.preventDefault();
            return;
        }
    });


    $("#dateForm").submit(function (event) {
        let child_id = event.target['child_id'].value;
        let date = event.target['date'].value;
        let _token = event.target['_token'].value;

        $.ajax({
            url: '/get-access-by-date',
            method: 'POST',
            data: {_token, child_id, date}
        }).done((result) => {
            if (result['ok'] != true) {
                return;
            }

            let accessBody = $('#accessBody');
            accessBody.empty();
            $('#accessDataIndicator').text(date);

            for (let key in result['data']) {
                let tr = document.createElement('tr');

                let td = document.createElement('td');
                td.className = "p-1";
                td.innerText = result['data'][key]['number'];
                tr.appendChild(td);

                td = document.createElement('td');
                td.className = "p-1";
                td.innerText = result['data'][key]['time'];
                tr.appendChild(td);

                td = document.createElement('td');
                td.className = "p-1";
                td.innerText = result['data'][key]['direction_word'];
                tr.appendChild(td);

                accessBody.append(tr);
            }
        }).fail((jqXHR, textStatus) => {
            console.log(textStatus);
        });

        event.preventDefault();
    });


    $("#dropdownmenu-title").click(function (event) {
        let obj = $('#dropdownmenu-wrapper');
        if (obj.css('display') === 'none') {
            $('#dropdownmenu-wrapper').css('display', 'block');
        } else {
            $('#dropdownmenu-wrapper').css('display', 'none');
        }

    });

    var accordion = new Accordion($('#accordion'), false);

});
