var allAnimations = [];
function loadLottieAnimation(elementId, path, isRepeat = false) {
    var animation = lottie.loadAnimation({
        container: document.getElementById(elementId), // the DOM element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: path,
        name: elementId
    });
    allAnimations.push(animation);
    // if (isRepeat) {
    //     $("#" + elementId).hover(
    //         function() {
    //             // Sự kiện mouse enter
    //             animation.playSegments([50, 100], true);
    //         },
    //         function() {
    //             // Sự kiện mouse leave nếu cần
    //             animation.goToAndStop(100, true);
    //         }
    //     );
    // }
}

function destroyLottieAnimation(elementId){
    const index = allAnimations.findIndex(animation => animation.name === elementId);
    if (index !== -1) {
        console.log(elementId +  " : "  + index);
        allAnimations[index].destroy();
        allAnimations.splice(index, 1);
    }
}
function findAnimationByName(name) {
    return allAnimations.find(animation => animation.name === name);
}
