



// The function actually applying the offset
function offsetAnchor() {
    if(location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - ((window.innerHeight)*0.22));
    }
}

// This will capture hash changes while on the page
window.addEventListener("hashchange", offsetAnchor);

//function delayedOffset(){
//window.setTimeout(offsetAnchor, 500);
//}