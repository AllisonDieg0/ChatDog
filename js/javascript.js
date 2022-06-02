function mudar(id) {
    document
        .getElementById(id)
        .className = "pointer active"
}
function receber_id(id) {
    id = document.getElementById('id').value
    mudar(id)
}