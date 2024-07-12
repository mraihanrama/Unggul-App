document.addEventListener('DOMContentLoaded', function() {
    const postBtn = document.getElementById('post-inspiration-btn');
    const modal = document.getElementById('post-modal');
    const closeBtn = document.querySelector('.close-btn');
    const submitBtn = document.getElementById('submit-btn');
    const inspirationText = document.getElementById('inspiration-text');

    postBtn.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

    submitBtn.addEventListener('click', function() {
        const text = inspirationText.value.trim();
        if (text === '') return;

        // Add logic to post the inspiration, e.g., sending to an API or adding to a list
        console.log('Inspiration posted:', text);

        // Clear the textarea and close the modal
        inspirationText.value = '';
        modal.style.display = 'none';
    });
});
