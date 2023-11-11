function closeForm() {
    // Add logic to close or hide your form, for example:
    document.querySelector('.container').style.display = 'none';
}

const selectBtns = document.querySelectorAll(".select-btn");

selectBtns.forEach(selectBtn => {
    selectBtn.addEventListener("click", () => {
        selectBtn.classList.toggle("open");

        // Toggle the visibility of the corresponding list items
        const listItems = selectBtn.nextElementSibling;
        listItems.style.display = listItems.style.display === "block" ? "none" : "block";
    });
});

const items = document.querySelectorAll(".item");

items.forEach(item => {
    item.addEventListener("click", () => {
        // Uncheck all items first
        items.forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove("checked");
            }
        });

        item.classList.toggle("checked");

        let checkedItem = document.querySelector(".checked"),
            btnText = item.closest(".selcontainer").querySelector(".btn-text");

        if (checkedItem) {
            btnText.innerText = checkedItem.querySelector(".item-text").innerText;
        } else {
            btnText.innerText = "";
        }

        // Close the dropdown after selecting an item
        const selectBtn = item.closest(".selcontainer").querySelector(".select-btn");
        selectBtn.classList.remove("open");
        
        // Hide the list items
        const listItems = selectBtn.nextElementSibling;
        listItems.style.display = "none";
    });
});
