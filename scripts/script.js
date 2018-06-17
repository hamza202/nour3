$(document).ready(function() {
    var date1 = $('#date1');
    var date2 = $('#date2');
    date1.datepicker({
        beforeShow: function () {
            setTimeout(appendsomething, 10);
        },
        onChangeMonthYear: function () {
            setTimeout(appendsomething, 10);
        },
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            var date = $(this).datepicker("getDate");

            date2.datepicker("setDate", date);
            date2.datepicker( "show" );

        }
    });
    var appendsomething = function () {
        $(".ui-datepicker-title").append("<div class='something'>Departure Date</div>");
    }
    date2.datepicker({

        onChangeMonthYear: function () {
            setTimeout(appendsomething1, 10);
        },
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            var date = $(this).datepicker("getDate");
            var formattedDate = $.datepicker.formatDate('mm/dd/yy', date);

            date1.val(date1.val() + " - " + formattedDate);
        }
    });
    var appendsomething1 = function () {
        $(".ui-datepicker-title").append("<div class='something'>Date of arrival</div>");
    }
});

$(function () {
    pageLoadScript();
});


function pageLoadScript() {

    _stepEffect = $('#stepEffect').val();
    _style = 'style7_borderTop_circle';
    _stepTransition = $('#stepTransition').is(':checked');
    _showButtons = $('#showButtons').is(':checked');
    _showStepNum = $('#showStepNum').is(':checked');


    tsf1 = $('.tsf-wizard-1').tsfWizard({
        stepEffect: _stepEffect,
        stepStyle: _style,
        // navPosition: 'left',
        validation: true,
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        height: 'auto',
    });


}
// Also see: https://www.quirksmode.org/dom/inputfile.html

var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
    customInput(inputs[i])
}

function customInput(el) {
    const fileInput = el.querySelector('[type="file"]')
    const label = el.querySelector('[data-js-label]')

    fileInput.onchange =
        fileInput.onmouseout = function () {
            if (!fileInput.value) return

            var value = fileInput.value.replace(/^.*[\\\/]/, '')
            el.className += ' -chosen'
            label.innerText = value
        }
}
