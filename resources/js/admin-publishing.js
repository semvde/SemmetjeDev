window.addEventListener('DOMContentLoaded', init);

let openSourceToggle;
let openSourceField;
let publicToggle;
let publicField;

function init() {
    openSourceToggle = document.querySelector('#setter-open_source');
    openSourceField = document.querySelector('#open_source');

    publicToggle = document.querySelector('#setter-public');
    publicField = document.querySelector('#public');

    publicToggle.addEventListener('change', () => {
        publicField.value = (publicToggle.checked) ? '1' : '0';
    });

    openSourceToggle?.addEventListener('change', () => {
        openSourceField.value = (openSourceToggle.checked) ? '1' : '0';
    });
}
