window.addEventListener('DOMContentLoaded', init);

let rowIndex;
let addButton;
let technologiesContainer;

function init() {
    addButton = document.querySelector('#project-technologies-add');
    technologiesContainer = document.querySelector('#project-technologies');

    rowIndex = technologiesContainer.querySelectorAll('.project-technology-row').length;

    addButton.addEventListener('click', () => {
        const row = createTechRow();
        technologiesContainer.appendChild(row);
        rowIndex++;
    })

    technologiesContainer.addEventListener('click', (e) => {
        const removeButton = e.target.closest('.project-technology-remove');
        if (removeButton) {
            const row = removeButton.closest('.project-technology-row');
            const rows = technologiesContainer.querySelectorAll('.project-technology-row');

            if (rows.length > 1 && row) {
                row.remove();
            }
        }
    })
}

function createTechRow() {
    const row = document.createElement('div');
    row.className = 'flex gap-3 relative bg-gray-100 border rounded p-3 project-technology-row'
    row.style = 'corner-shape: squircle';

    row.innerHTML = `
        <div class="flex flex-col flex-1">
            <label for="project_technologies.${rowIndex}.name">Name</label>
            <input type="text" name="project_technologies[${rowIndex}][name]" id="project_technologies.${rowIndex}.name"
                   required
                   class="input">
        </div>
        <div class="flex flex-col flex-1">
            <label for="project_technologies.${rowIndex}.type">Type ('front', 'back', 'full', 'tool', 'data',
                'other')</label>
            <input type="text" name="project_technologies[${rowIndex}][type]" id="project_technologies.${rowIndex}.type"
                   required
                   class="input">
        </div>
        <button type="button" class="absolute top-0 right-0 p-1 project-technology-remove">
            <i class="fa-solid fa-xmark"></i>
        </button>
    `;

    return row;
}
