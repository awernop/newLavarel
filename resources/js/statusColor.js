const statuses = document.querySelectorAll('.statusColor');

document.addEventListener('DOMContentLoaded', function() {
    for (let i = 0; i < statuses.length; i++) {

        const status = statuses[i].innerText;

        if (status === "Новое") {
            statuses[i].classList.add('bg-gray-300');
        } else if (status === "Подтверждено") {
            statuses[i].classList.add('bg-green-300');
        } else {
            statuses[i].classList.add('bg-red-300')
        }
    }
})
