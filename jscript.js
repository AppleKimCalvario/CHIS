function closeForm() {
    // Add logic to close or hide your form, for example:
    document.querySelector('.container').style.display = 'none';
}

const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       

options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;

        optionMenu.classList.remove("active");
    });
});

const optionsMenu = document.querySelector(".medication-menu"),
       medicationBtn = optionsMenu.querySelector(".medication-btn"),
       option = optionsMenu.querySelectorAll(".option"),
       medbtn_text = optionsMenu.querySelector(".medbtn-text");

medicationBtn.addEventListener("click", () => optionsMenu.classList.toggle("active"));       

options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;

        optionsMenu.classList.remove("active");
    });
});

let selectedSymptoms = [];

    function toggleOptions() {
        const options = document.getElementById('symptomsOptions');
        options.style.display = options.style.display === 'none' ? 'block' : 'none';
    }

    function toggleSymptom(symptom) {
        const index = selectedSymptoms.indexOf(symptom);

        if (index !== -1) {
            selectedSymptoms.splice(index, 1);
        } else {
            selectedSymptoms.push(symptom);
        }

        updateSelectedCount();
    }

    function updateSelectedCount() {
        const countElement = document.getElementById('selectedCount');
        const textElement = document.getElementById('selectedText');

        countElement.textContent = selectedSymptoms.length;
        textElement.textContent = selectedSymptoms.length > 0 ? 'Symptoms experienced' : 'No symptoms selected';
    }