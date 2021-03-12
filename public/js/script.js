const createdDiv = document.querySelector("#created");

setTimeout(() => {
    createdDiv.innerHTML = "";
}, 3000);

const created = () => {
    createdDiv.innerHTML = `<div class="alert alert-success" role="alert">Your post has been created!</div>`;
    setTimeout(() => {
        createdDiv.innerHTML = "";
    }, 5000);
}