window.addEventListener('DOMContentLoaded', init);

let rowIndex;
let addButton;
let imagesContainer;

function init() {
    addButton = document.querySelector('#project-images-add');
    imagesContainer = document.querySelector('#project-images');

    rowIndex = imagesContainer.querySelectorAll('.project-image-row').length;

    addButton.addEventListener('click', () => {
        const row = createImageRow();
        imagesContainer.appendChild(row);
        rowIndex++;
    })

    imagesContainer.addEventListener('click', (e) => {
        const removeButton = e.target.closest('.project-image-remove');
        if (removeButton) {
            const row = removeButton.closest('.project-image-row');
            const rows = imagesContainer.querySelectorAll('.project-image-row');

            if (rows.length > 1 && row) {
                row.remove();
            }
        }
    })
}

function createImageRow() {
    const row = document.createElement('div');
    row.className = 'flex gap-3 relative bg-gray-100 border rounded p-3 project-image-row'
    row.style = 'corner-shape: squircle';

    row.innerHTML = `
        <div class="flex flex-col flex-1">
            <label for="project_images.${rowIndex}.image">Image</label>
            <input type="file" accept="image/*" name="project_images[${rowIndex}][image]"
                   id="project_images.${rowIndex}.image" required
                   class="input bg-white p-1.5">

        </div>
        <div class="flex flex-col flex-1">
            <label for="project_images.${rowIndex}.alt_text">ALT Text</label>
            <input type="text" name="project_images[${rowIndex}][alt_text]" id="project_images.${rowIndex}.alt_text"
                   class="input">
        </div>
        <button type="button" class="absolute top-0 right-0 p-1 project-image-remove">
            <i class="fa-solid fa-xmark"></i>
        </button>
    `;

    return row;
}
