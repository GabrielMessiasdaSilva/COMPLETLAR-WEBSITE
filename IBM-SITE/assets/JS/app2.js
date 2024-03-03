document.addEventListener('DOMContentLoaded', function () {
    const allHoverImages = document.querySelectorAll('.hover-container div img');
    const imgContainer = document.querySelector('.img-container img');

    allHoverImages[0].parentElement.classList.add('active');

    allHoverImages.forEach((image) => {
        image.addEventListener('mouseover', () => {
            imgContainer.src = image.src;
            resetActiveImg();
            image.parentElement.classList.add('active');
        });
    });

    function resetActiveImg() {
        allHoverImages.forEach((img) => {
            img.parentElement.classList.remove('active');
        });
    }
});

