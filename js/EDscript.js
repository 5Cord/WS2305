function timeUpdate() {
    let FilleButton = document.querySelector('.file'),
        FilleIpnut = document.querySelector('.TextFile');
    FilleButton.addEventListener('change', () => {
        FilleButton.files[0].name = FilleIpnut.innerHTML;
        FilleIpnut.value = FilleButton.files[0].name
    })
}

setInterval(timeUpdate(), 100);