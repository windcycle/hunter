const bperiod = document.getElementById("bperiod");

const token_form = document.querySelector('input[name=token]');
const id = document.querySelector('input[name=id]');
const bexam = document.getElementById("bexam");
let token = 0,
    period = 0,
    exam = '',
    numbers_of_exam = 0;

const start = new Cleave('#start', {
    time: true,
    timePattern: ['h', 'm']
});

const finish = new Cleave('#finish', {
    time: true,
    timePattern: ['h', 'm']
});

function setToken(data) {
    token = data;
    token_form.value = data;
}

function setPeriod(data) {
    period = data;
}

function setExam(data) {
    opsi = '<option></option>';
    data.forEach((value, index) => {
        opsi += '<option data-jsoal="' + value.jsoal + '" value="' + value.id + '">' + value.exam + '</option>';
    });
    exam = opsi;
}

setToken(token_form.value);

bperiod.onchange = () => {
    setPeriod(bperiod.value);
    loadExam();
}

bexam.onchange = () => {
    numbers_of_exam = 0;
    jsoal = $("#bexam").select2().find(":selected").data("jsoal");
    if (jsoal > 0) {
        iJSoal.value = jsoal;
        numbers_of_exam = jsoal;
    }
}

bSave.addEventListener("click", () => {
    if (numbersToExam.value < numbers_of_exam) {
        xform.submit();
    } else {
        warningNumberExam.classList.remove('d-none');
    }
})

function loadExam() {
    $('#bexam').val([]).trigger('change');

    url = (id.value == 0) ? '../../app/exam_schedule/get_json/' : '../../../app/exam_schedule/get_json/';

    $.ajax({
        url: url,
        method: 'post',
        data: {
            token: token,
            filter: {
                'period': period
            }
        },
        dataType: 'json',
        success: function(response) {
            setToken(response.token);
            setExam(response.exam);
            bexam.innerHTML = exam;
        }
    })
}