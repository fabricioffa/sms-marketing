
const progressBar = document.querySelector(".progress-bar");
const labelsContainer = progressBar && document.querySelector(".labels-container");
const fieldsetsNodeList = progressBar && document.querySelectorAll(".login fieldset");
const nextBtnsNodeList = progressBar && document.querySelectorAll("[type=button]");

const progressBarLabels =
    labelsContainer && Array.from(labelsContainer.children);
const fieldsets = fieldsetsNodeList && Array.from(fieldsetsNodeList);
const nextBtns = nextBtnsNodeList && Array.from(nextBtnsNodeList);

const switchLabel = (direction) => {
    const currentLabel = progressBarLabels.find(
        (label) => label.style.display === "block" || label.style.display === ""
    );

    if (direction === 1) {
        currentLabel.style.display = "none";
        currentLabel.nextElementSibling.style.display = "block";
        return;
    }

    currentLabel.style.display = "none";
    currentLabel.previousElementSibling.style.display = "block";
    return;
};

const resizeProgressBar = (change) => {
    const currentWidth = Number(progressBar.style.width.slice(0, -1));

    progressBar.style.width = `${currentWidth + change}%`;
    progressBar.setAttribute("aria-valuenow", `${currentWidth + change}%`);
};

progressBarLabels?.slice(1).forEach((label) => (label.style.display = "none"));

nextBtns?.forEach((btn) =>
    btn.addEventListener("click", (e) => {
        switchLabel(1);
        resizeProgressBar(50);

        e.target.parentNode.parentNode.removeAttribute('aria-current');
        e.target.parentNode.parentNode.nextElementSibling.setAttribute('aria-current', 'step');
    })
);


