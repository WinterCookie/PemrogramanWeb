function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    const error_name = document.getElementById("error_name");
    const error_email = document.getElementById("error_email");
    const error_message = document.getElementById("error_message");

    error_name.textContent = "";
    error_email.textContent = "";
    error_message.textContent = "";

    const nameRegex = /^[A-Za-z\s]+$/;
    if (!name) {
        error_name.textContent = "Nama tidak boleh kosong";
        return false;
    } else if (!nameRegex.test(name)) {
        error_name.textContent = "Nama hanya boleh berisi huruf dan spasi";
        return false;
    }

    const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (!email) {
        error_email.textContent = "Email tidak boleh kosong";
        return false;
    } else if (!emailRegex.test(email)) {
        error_email.textContent = "Masukkan email yang valid";
        return false;
    }

    if (!message) {
        error_message.textContent = "Pesan tidak boleh kosong";
        return false;
    } else if (message.length < 10) {
        error_message.textContent = "Pesan harus memiliki minimal 10 karakter";
        return false;
    }

    return true;
}
