function bentuk_konteks_1(i) {

    document.getElementById("bentuk_konteks_soal_1_termasuk").className = "btn btn-success mt-1";
    document.getElementById("bentuk_konteks_soal_1_tidak").className = "btn btn-danger mt-1";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_konteks_2(i) {

    document.getElementById("bentuk_konteks_soal_2_termasuk").className = "btn btn-success mt-1";
    document.getElementById("bentuk_konteks_soal_2_tidak").className = "btn btn-danger mt-1";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_konteks_3(i) {

    document.getElementById("bentuk_konteks_soal_3_termasuk").className = "btn btn-danger mt-1";
    document.getElementById("bentuk_konteks_soal_3_tidak").className = "btn btn-success mt-1";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_konteks_4(i) {

    document.getElementById("bentuk_konteks_soal_4_termasuk").className = "btn btn-danger mt-1";
    document.getElementById("bentuk_konteks_soal_4_tidak").className = "btn btn-success mt-1";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}
