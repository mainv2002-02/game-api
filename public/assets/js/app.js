function changePage(url) {
    $.ajax({
        url: url,
        success: function(data) {
            // Assuming the entire page content you wish to replace is within <div id="content">...</div>
            var nextPageContent = $(data).find('#content').html();

            // Optionally, animate the current content out
            $('#content').fadeOut('slow', function() {
                // Set the new content
                $('#content').html(nextPageContent);

                // Optionally, animate the new content in
                $('#content').fadeIn('slow');

                // Update the browser's URL to reflect the new page
                window.history.pushState({path:url}, '', url);
            });
        }
    });
}

function loadLottieAnimation(elementId, path) {
    lottie.loadAnimation({
        container: document.getElementById(elementId), // the DOM element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: path // the path to your Lottie file
    });
}
