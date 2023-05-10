document.addEventListener('DOMContentLoaded', function () {
    let i = 1;

    let string = '';
    let value = null;

    for (i; i <= 100; i++) {
        if (i % 3 === 0 && i % 5 !== 0) {
            value = 'Switch';
        } else if (i % 3 !== 0 && i % 5 === 0) {
            value = 'Telecom';
        }  else if (i % 3 === 0 && i % 5 === 0) {
            value = 'Switch Telecom';
        } else {
            value = i;
        }

        if (i !== 100) {
            string = string + value + ', ';
        } else {
            string = string + value;
        }
    }

    document.getElementById('question1').innerHTML = string;
}, false);